<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Log;
use App\Models\Role;
use App\Models\Asnaf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsnafController extends Controller
{
    public function index()
    {
        if(! Role::havePremission(['asnaf_view','asnaf_idt']))
            return redirect()->route('admin.dashboard');

        $datas = Asnaf::select()->paginate(PAGINATION_COUNT);
        return view('admin.asnaf.index', compact('datas'));
    }

    public function create()
    {
        if(! Role::havePremission(['asnaf_cr']))
            return redirect()->route('admin.dashboard');

        return view('admin.asnaf.create');
    }

    public function store(Request $request)
    {
        if(! Role::havePremission(['asnaf_cr']))
            return redirect()->route('admin.dashboard');

        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 1]);

            $request->request->add(['admin_id' =>  Auth::user()->id ]);
            $spc= Asnaf::create($request->except(['_token']));

            if(isset($request->btn))
                if($request->btn =="saveAndNew")
                    return redirect()->route('admin.asnaf.create')->with(['success'=>'تم الحفظ']);
        
            return redirect()->route('admin.asnaf')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.asnaf.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        if(! Role::havePremission(['asnaf_view','asnaf_idt']))
            return redirect()->route('admin.dashboard');
        $datas = Asnaf::select()->find($id);
        if(!$datas){
            return redirect()->route('admin.asnaf')->with(['error'=>"غير موجود"]);
        }
        return view('admin.asnaf.edit',compact('datas'));
    }

    public function update($id, Request $request)
    {
        if(! Role::havePremission(['asnaf_idt']))
            return redirect()->route('admin.dashboard');

        try {
            $data = Asnaf::find($id);
            if (!$data) {
                return redirect()->route('admin.asnaf.edit', $id)->with(['error' => '  غير موجوده']);
            }

            if (!$request->has('status'))
                $request->request->add(['status' => 1]);

            $data->update($request->except(['_token']));

            return redirect()->route('admin.asnaf')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.asnaf')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    // public function destroy($id)
    // {

    //     try {
    //         $data = Unit::find($id);
    //         if (!$data) {
    //             return redirect()->route('admin.unit', $id)->with(['error' => '  غير موجوده']);
    //         }
    //         $data->delete();

    //         return redirect()->route('admin.unit')->with(['success' => 'تم حذف  بنجاح']);

    //     } catch (\Exception $ex) {
    //         return redirect()->route('admin.unit')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
    //     }
    // }
}
