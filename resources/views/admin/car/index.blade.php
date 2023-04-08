@extends('layouts.admin')
@section('title',' السيارة')
@section('car_view','')
@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">  {{ $name_page }} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">   {{ $name_page }}
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
                                    <h4 class="card-title"> الكل </h4>
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
                                        @if(\App\Models\Role::havePremission(['car_cr']))
                                        <a class="btn btn-primary mb-2 mr15" href="{{ route('admin.stock.create') }}"><i class="ft-plus"></i>&nbsp; {{ __('Create') }}</a>
                                        @endif
                                        <div class="table-responsive">
                                        <table
                                            class="table table-striped table-bordered my-ordering-print ">
                                            <thead>
                                            <tr>
                                                <th>ID </th>
                                                <th>نوع السيارة </th>
                                                <th>فئه السيارة </th>
                                                <th> موديل </th>
                                                <th> اللون </th>
                                                <th> اللون الداخلي </th>
                                                <th> رقم الهيكل </th>
                                                <th> رقم اللوحه </th>
                                                <th> التظليل </th>
                                                <th> التصفيح </th>
                                                <th> الجهة التابعة لها </th>
                                                <th> المرفق</th>
                                                <th>الحالة</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($datas)
                                                @foreach($datas as $data)
                                                    <tr>
                                                        <td>{{$data -> id}}</td>
                                                        <td>{{\App\Models\Asnaf::getName($data -> sanaf_id)}}</td>
                                                        <td>{{$data -> getMyCarTypeName()}}</td>
                                                        <td>{{$data -> car_model}}</td>
                                                        <td>{{$data -> color_in}}</td>
                                                        <td>{{$data -> color_out}}</td>
                                                        <td>{{$data -> hykl_no}}</td>
                                                        <td>{{$data -> car_no}}</td>
                                                        <td>{{$data -> getMyEltazlel()}}</td>
                                                        <td>{{$data -> getMyEltasfe7()}}</td>
                                                        <td>{{$data -> getMySubsidiary() }}</td>
                                                        <td>
                                                            @if($data -> img)
                                                            <?php $arr = explode( '.', $data -> img ); ?>
                                                            <a href="/fix_car/{{$data -> img}}"  download="Car File.{{$arr[count($arr)-1]}}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تحميل</a>
                                                            @endif
                                                        </td>
                                                        <td>{{$data ->getActive()}}</td>
                                                        <td>
                                                            {{-- <div class="btn-group" role="group" aria-label="Basic example"> --}}
                                                                 {{-- @if(\App\Models\Role::havePremission(['car_idt'])) --}}
                                                                   <a href="{{route('admin.stock.edit',['id'=> $data->id ])}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
                                                                   {{-- @endif --}}
                                                            {{-- </div> --}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>ID </th>
                                                    <th>نوع السيارة </th>
                                                    <th>فئه السيارة </th>
                                                    <th> موديل </th>
                                                    <th> اللون </th>
                                                    <th> اللون الداخلي </th>
                                                    <th> رقم الهيكل </th>
                                                    <th> رقم اللوحه </th>
                                                    <th> التظليل </th>
                                                    <th> التصفيح </th>
                                                    <th> الجهة التابعة لها </th>
                                                    <th>الحالة</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>
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
