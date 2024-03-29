<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Asnaf;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function index()
    {
        if(! Role::havePremission(['car_all']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->paginate(PAGINATION_COUNT);
        $name_page = "كل السيارات";
        return view('admin.car.index', compact('datas', 'name_page'));
    }
    
    public function indexStock()
    {
        if(! Role::havePremission(['car_stock']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->where('status',"1")->paginate(PAGINATION_COUNT);
        $name_page = "المخزن";
        return view('admin.car.index', compact('datas', 'name_page'));
    }

    public function indexSender()
    {
        if(! Role::havePremission(['car_sender']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->where('status',"2")->paginate(PAGINATION_COUNT);
        $name_page = "مسلم";
        return view('admin.car.index', compact('datas', 'name_page'));
    }

    public function indexRecever()
    {
        if(! Role::havePremission(['car_recever']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->where('status',"3")->paginate(PAGINATION_COUNT);
        $name_page = "مستلم";
        return view('admin.car.index', compact('datas', 'name_page'));
    }

    public function indexFix()
    {
        if(! Role::havePremission(['car_fix']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->where('status',"4")->paginate(PAGINATION_COUNT);
        $name_page = "صيانه";
        return view('admin.car.index', compact('datas', 'name_page'));
    }

    public function indexDone()
    {
        if(! Role::havePremission(['car_done']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->where('status',"5")->paginate(PAGINATION_COUNT);
        $name_page = "تم الانتهاء";
        return view('admin.car.index', compact('datas', 'name_page'));
    }

    public function indexCancel()
    {
        if(! Role::havePremission(['car_cancel']))
            return redirect()->route('admin.dashboard');

        $datas = Car::select()->where('status',"6")->paginate(PAGINATION_COUNT);
        $name_page = "الغاء";
        return view('admin.car.index', compact('datas', 'name_page'));
    }

    public function create()
    {
        if(! Role::havePremission(['car_all','car_stock','car_sender','car_recever',
        'car_fix','car_done','car_cancel']))
            return redirect()->route('admin.dashboard');
        
        $asnafs = Asnaf::select()->get();
        return view('admin.car.create', compact('asnafs'));
    }

    public function store(Request $request)
    {
        if(! Role::havePremission(['car_all','car_stock','car_sender','car_recever',
        'car_fix','car_done','car_cancel']))
            return redirect()->route('admin.dashboard');

        $request->validate([
            'car_model' => ['arabic_numbers'],
            'car_no' => ['arabic_numbers'],
            'f1_receiver_phone' => ['arabic_numbers'],
            'f1_receiver_id' => ['arabic_numbers'],
            'f1_3gla' => ['arabic_numbers'],
            'f1_3freta' => ['arabic_numbers'],
            'f1_tfaya' => ['arabic_numbers'],
            'f1_msls' => ['arabic_numbers'],
            'f1_radio' => ['arabic_numbers'],
            'f1_sefty' => ['arabic_numbers'],
            'f1_mostatel' => ['arabic_numbers'],
            'f1_tes' => ['arabic_numbers'],
            'f1_4nth' => ['arabic_numbers'],
            'f1_form_img' => ['arabic_numbers'],
            'f1_remot' => ['arabic_numbers'],
            'f1_front_back_lo7a' => ['arabic_numbers'],
            'f1_front_back_d3am' => ['arabic_numbers'],
            'f1_call_dev' => ['arabic_numbers'],
        ],[
            'car_model.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'car_no.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_receiver_phone.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_receiver_id.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_3gla.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_3freta.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_tfaya.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_msls.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_radio.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_sefty.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_mostatel.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_tes.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_4nth.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_form_img.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_remot.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_front_back_lo7a.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_front_back_d3am.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_call_dev.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
        ]);

        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 1]);

            $request->request->add(['admin_id' =>  Auth::user()->id ]);
            $car= Car::create($request->except(['_token']));

            if ($request->has('image')){
                $image = $request->file('image');
                $imageName = "car_".str_replace(' ', '_', $car->id) . ".". $image->extension();
                $image->move(public_path('cars'),$imageName);

                $car->update(['img' => "public/cars/".$imageName ]);
            }

            if(isset($request->btn))
                if($request->btn =="saveAndNew")
                    return redirect()->route('admin.stock.create')->with(['success'=>'تم الحفظ']);
        
            return redirect()->route('admin.stock.create')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.stock.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        if(! Role::havePremission(['car_all','car_stock','car_sender','car_recever',
        'car_fix','car_done','car_cancel']))
            return redirect()->route('admin.dashboard');
        $datas = Car::select()->find($id);
        $asnafs = Asnaf::select()->get();
        if(!$datas){
            return redirect()->route('admin.stock.edit')->with(['error'=>"غير موجود"]);
        }
        return view('admin.car.edit',compact('datas','asnafs'));
    }

    public function update($id, Request $request)
    {
        if(! Role::havePremission(['car_all','car_stock','car_sender','car_recever',
        'car_fix','car_done','car_cancel']))
            return redirect()->route('admin.dashboard');

        $request->validate([
            'car_model' => ['arabic_numbers'],
            'car_no' => ['arabic_numbers'],
            'f1_receiver_phone' => ['arabic_numbers'],
            'f1_receiver_id' => ['arabic_numbers'],
            'f1_3gla' => ['arabic_numbers'],
            'f1_3freta' => ['arabic_numbers'],
            'f1_tfaya' => ['arabic_numbers'],
            'f1_msls' => ['arabic_numbers'],
            'f1_radio' => ['arabic_numbers'],
            'f1_sefty' => ['arabic_numbers'],
            'f1_mostatel' => ['arabic_numbers'],
            'f1_tes' => ['arabic_numbers'],
            'f1_4nth' => ['arabic_numbers'],
            'f1_form_img' => ['arabic_numbers'],
            'f1_remot' => ['arabic_numbers'],
            'f1_front_back_lo7a' => ['arabic_numbers'],
            'f1_front_back_d3am' => ['arabic_numbers'],
            'f1_call_dev' => ['arabic_numbers'],
        ],[
            'car_model.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'car_no.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_receiver_phone.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_receiver_id.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_3gla.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_3freta.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_tfaya.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_msls.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_radio.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_sefty.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_mostatel.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_tes.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_4nth.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_form_img.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_remot.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_front_back_lo7a.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_front_back_d3am.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
            'f1_call_dev.arabic_numbers'=> 'الارقام يجب ان تكون باللغه العربية',
        ]);

        try {
            $data = Car::find($id);
            if (!$data) {
                return redirect()->route('admin.stock.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if ($request->has('image')){
                $image = $request->file('image');
                $imageName = "car_".str_replace(' ', '_', $id) . ".". $image->extension();
                $image->move(public_path('cars'),$imageName);
                $imgPath = "public/cars/".$imageName;
            }else{
                $imgPath = $data->img;
            }
            $request->request->add(['img' => $imgPath]);
            
            if (!$request->has('status'))
                $request->request->add(['status' => 1]);

            $data->update($request->except(['_token']));

            // if(isset($request->btn))
            //     if($request->btn =="saveAndPrint")
            //         redirect()->route('admin.stock.print', ['id' => $id])->with('_blank');
            //         // return redirect()->route('admin.stock.print');

            return redirect()->route('admin.stock.edit', ['id' => $id])->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.stock.edit', ['id' => $id])->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function print_form($id)
    {
        $datas = Car::select()->find($id);
        $asnafs = Asnaf::select()->get();
        if(!$datas){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.car.print_form',compact('datas','asnafs'));
    }

}
