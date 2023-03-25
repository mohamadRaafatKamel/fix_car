@extends('layouts.admin')
@section('title','ادمن')
@section('admin_view','')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">  ادمن </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">  ادمن
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> كل  ادمن </h4>
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
                                    <div class="card-body card-dashboard">
                                        @if(\App\Models\Role::havePremission(['admin_cr']))
                                            <a class="btn btn-primary mb-2" href="{{ route('admin.admin.create') }}"><i class="ft-plus"></i>&nbsp; {{ __('Create') }}</a>
                                        @endif
                                        <table
                                            class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                            <tr>
                                                <th>اسم </th>
                                                <th>ايميل </th>
                                                <th>صلاحيات </th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($admins)
                                                @foreach($admins as $admin)
                                                    <tr>
                                                        <td>{{$admin -> name}}</td>
                                                        <td>{{$admin -> email}}</td>
                                                        <td>{{\App\Models\Admin::getRoleNamebyId($admin->permission)}}</td>
                                                        <td>
                                                            @if ($admin->id != Auth::user()->id && $admin->id != 1)
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <a href="{{route('admin.admin.edit',['id'=> $admin->id ])}}"
                                                                    class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>

                                                                    {{-- @if(\App\Models\Role::havePremission(['admin_idt']))
                                                                        <a href="{{route('admin.admin.delete',$admin -> id)}}"
                                                                        class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>
                                                                    @endif --}}

                                                            </div>
                                                            @endif
                                                            
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
