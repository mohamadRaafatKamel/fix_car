@extends('layouts.admin')
@section('title','تعديل')
@section('role_view','')
@section('content')
<?php 
if(! $permissoin = \App\Models\Role::havePremission(['role_idt']))
    $readonly="readonly";
else 
    $readonly="";
?>
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{ __('Home') }} </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.role')}}"> الصلاحيات </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل الصلاحيات
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">تعديل</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.include.alerts.success')
                                @include('admin.include.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="{{route('admin.role.update',$role -> id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> البيانات   </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الاسم </label>
                                                            <input type="text" value="{{ $role->name }}" id="name" {{ $readonly }}
                                                                   class="form-control"
                                                                   placeholder=" الاسم" required
                                                                   name="name">
                                                            @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <label><strong> السيارات </strong></label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_all" name="role_info[]"
                                                                   id="car_all" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_all']) and $myRoleInfo['car_all'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_all"
                                                                   class="card-title ml-1">عرض الكل  </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_stock" name="role_info[]"
                                                                   id="car_stock" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_stock']) and $myRoleInfo['car_stock'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_stock"
                                                                   class="card-title ml-1">المخزن </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_sender" name="role_info[]"
                                                                   id="car_sender" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_sender']) and $myRoleInfo['car_sender'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_sender"
                                                                   class="card-title ml-1">مسلم </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_recever" name="role_info[]"
                                                                   id="car_recever" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_recever']) and $myRoleInfo['car_recever'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_recever"
                                                                   class="card-title ml-1">مستلم</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_fix" name="role_info[]"
                                                                   id="car_fix" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_fix']) and $myRoleInfo['car_fix'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_fix"
                                                                   class="card-title ml-1">صيانه </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_done" name="role_info[]"
                                                                   id="car_done"  {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_done']) and $myRoleInfo['car_done'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_done"
                                                                   class="card-title ml-1">تم الانتهاء </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="car_cancel" name="role_info[]"
                                                                   id="car_cancel"  {{ $readonly }}
                                                                   @if(isset($myRoleInfo['car_cancel']) and $myRoleInfo['car_cancel'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="car_cancel"
                                                                   class="card-title ml-1">الغاء </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label><strong> نوع السيارة </strong></label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="asnaf_view" name="role_info[]"
                                                                   id="asnaf_view" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['asnaf_view']) and $myRoleInfo['asnaf_view'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="asnaf_view"
                                                                   class="card-title ml-1">عرض </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="asnaf_cr" name="role_info[]"
                                                                   id="asnaf_cr" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['asnaf_cr']) and $myRoleInfo['asnaf_cr'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="asnaf_cr"
                                                                   class="card-title ml-1">انشاء </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="asnaf_idt" name="role_info[]"
                                                                   id="asnaf_idt" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['asnaf_idt']) and $myRoleInfo['asnaf_idt'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="asnaf_idt"
                                                                   class="card-title ml-1">تعديل </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label><strong> {{ __('Admin') }} </strong></label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="admin_view" name="role_info[]"
                                                                   id="admin_view" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['admin_view']) and $myRoleInfo['admin_view'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="admin_view"
                                                                   class="card-title ml-1">{{ __('View') }} </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="admin_cr" name="role_info[]"
                                                                   id="admin_cr" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['admin_cr']) and $myRoleInfo['admin_cr'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="admin_cr"
                                                                   class="card-title ml-1">{{ __('Create') }} </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="admin_idt" name="role_info[]"
                                                                   id="admin_idt" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['admin_idt']) and $myRoleInfo['admin_idt'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="admin_idt"
                                                                   class="card-title ml-1">{{ __('Edit and Delete') }} </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label><strong> {{ __('Permission') }} </strong></label>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="role_view" name="role_info[]"
                                                                   id="role_view" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['role_view']) and $myRoleInfo['role_view'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="role_view"
                                                                   class="card-title ml-1">{{ __('View') }} </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="role_cr" name="role_info[]"
                                                                   id="role_cr" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['role_cr']) and $myRoleInfo['role_cr'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="role_cr"
                                                                   class="card-title ml-1">{{ __('Create') }} </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox"  value="role_idt" name="role_info[]"
                                                                   id="role_idt" {{ $readonly }}
                                                                   @if(isset($myRoleInfo['role_idt']) and $myRoleInfo['role_idt'] == 1)
                                                                   checked
                                                                   @endif
                                                                   class="switchery" data-color="success"/>
                                                            <label for="role_idt"
                                                                   class="card-title ml-1">{{ __('Edit') }} </label>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            @if ($permissoin)
                                                <div class="form-actions">
                                                    <button type="button" class="btn btn-warning mr-1"
                                                            onclick="history.back();">
                                                         تراجع
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                         تحديث
                                                    </button>
                                                </div>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@endsection
