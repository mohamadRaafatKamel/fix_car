<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        if(! Role::havePremission(['admin_view','admin_idt']))
            return redirect()->route('admin.dashboard');

        $admins = Admin::select()->paginate(PAGINATION_COUNT);
        return view('admin.admin.index', compact('admins'));
    }

    public function create()
    {
        if(! Role::havePremission(['admin_cr']))
            return redirect()->route('admin.dashboard');

        $roles = Role::select()->get();
        return view('admin.admin.create',compact('roles'));
    }

    public function store(Request $request)
    {
        if(! Role::havePremission(['admin_cr']))
            return redirect()->route('admin.dashboard');

        try {
            if (!$request->has('status'))
                $request->request->add(['status' => 1]);

            $pass = Hash::make($request->password);
            unset($request->password);
            $adm = Admin::create(array_merge($request->except(['_token']),['password'=>$pass,'remember_token'=>'']));
            if(isset($request->btn))
                if($request->btn =="saveAndNew")
                    return redirect()->route('admin.admin.create')->with(['success'=>'تم الحفظ']);

            return redirect()->route('admin.admin')->with(['success'=>'تم الحفظ']);
        }catch (\Exception $ex){
            return redirect()->route('admin.admin.create')->with(['error'=>'يوجد خطء']);
        }
    }

    public function edit($id)
    {
        if(! Role::havePremission(['admin_view','admin_idt']))
            return redirect()->route('admin.dashboard');

        $roles = Role::select()->get();
        $admins = Admin::select()->find($id);
        if(!$admins){
            return redirect()->route('admin.admin')->with(['error'=>"غير موجود"]);
        }
        return view('admin.admin.edit',compact('admins','roles'));
    }

    public function update($id, Request $request)
    {
        if(! Role::havePremission(['admin_idt']))
            return redirect()->route('admin.dashboard');

        try {

            $admins = Admin::find($id);
            if (!$admins) {
                return redirect()->route('admin.admin.edit', $id)->with(['error' => '  غير موجوده']);
            }
            if(isset($request->password)){
                $pass = Hash::make($request->password);
                unset($request->password);
                $admins->update(['password'=>$pass]);
            }

            if (!$request->has('status'))
                $request->request->add(['status' => 1]);

            if(isset($request->permission)){
                $admins->update(['permission'=>$request->permission]);
            }

            if(isset($request->name)){
                $admins->update(['name'=>$request->name]);
            }

            if(isset($request->email)){
                $admins->update(['email'=>$request->email]);
            }
            $admins->update($request->except(['_token']));
            return redirect()->route('admin.admin')->with(['success' => 'تم التحديث بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.admin')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }

    public function destroy($id)
    {
        if(! Role::havePremission(['admin_view','admin_cr','admin_idt']))
            return redirect()->route('admin.dashboard');
        try {
            $admins = Admin::find($id);
            if (!$admins) {
                return redirect()->route('admin.admin', $id)->with(['error' => '  غير موجوده']);
            }
            $admins->delete();

            return redirect()->route('admin.admin')->with(['success' => 'تم حذف  بنجاح']);

        } catch (\Exception $ex) {
            return redirect()->route('admin.admin')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }
    }
}
