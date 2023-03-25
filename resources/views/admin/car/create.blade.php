@extends('layouts.admin')
@section('title',' السيارة')
@section('stock_cr','')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.stock')}}">   السيارة </a>
                                </li>
                                <li class="breadcrumb-item active">إضافة  
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
                                    <h4 class="card-title" id="basic-layout-form"> إضافة   </h4>
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
                                        <form class="form" action="{{route('admin.stock.store')}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> البيانات   </h4>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> نوع السيارة  </label>
                                                            <select class="select2 form-control" name="sanaf_id" id="sanaf_id" required>
                                                                <option value="">-- نوع السيارة --</option>
                                                                @foreach($asnafs as $asnaf)
                                                                    <option value="{{ $asnaf->id }}">
                                                                        {{ $asnaf->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @error('sanaf_id')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> فئه السيارة  </label>
                                                            <select class="select2 form-control" name="car_type" id="car_type" >
                                                                <option value="">-- فئه السيارة --</option>
                                                                <option value="1">VIP</option>
                                                                <option value="2">رسمي</option>
                                                                <option value="3">عادي</option>
                                                                <option value="4">مدني</option>
                                                            </select>
                                                            @error('car_type')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> موديل  </label>
                                                            <input type="text" value="" id="car_model"
                                                                   class="form-control" 
                                                                   placeholder="موديل "
                                                                   name="car_model">
                                                            @error('car_model')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اللون  </label>
                                                            <input type="text" value="" id="color_in"
                                                                   class="form-control" 
                                                                   placeholder="اللون "
                                                                   name="color_in">
                                                            @error('color_in')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اللون الداخلي  </label>
                                                            <input type="text" value="" id="color_out"
                                                                   class="form-control" 
                                                                   placeholder="اللون الداخلي "
                                                                   name="color_out">
                                                            @error('color_out')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم الهيكل  </label>
                                                            <input type="text" value="" id="hykl_no"
                                                                   class="form-control" 
                                                                   placeholder="رقم الهيكل "
                                                                   name="hykl_no">
                                                            @error('hykl_no')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم اللوحه  </label>
                                                            <input type="text" value="" id="car_no"
                                                                   class="form-control" 
                                                                   placeholder="رقم اللوحه "
                                                                   name="car_no">
                                                            @error('car_no')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التظليل  </label>
                                                            <select class="select2 form-control" name="eltazlel" id="eltazlel">
                                                                <option value="">-- التظليل --</option>
                                                                <option value="1">مظلل</option>
                                                                <option value="2">غير مظلل</option>
                                                            </select>
                                                            @error('eltazlel')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التصفيح  </label>
                                                            <select class="select2 form-control" name="eltasfe7" id="eltasfe7">
                                                                <option value="">-- التصفيح --</option>
                                                                <option value="1">مصفح</option>
                                                                <option value="2">غير مصفح</option>
                                                            </select>
                                                            @error('eltasfe7')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الجهة التابعة لها  </label>
                                                            <select class="select2 form-control" name="subsidiary" id="subsidiary">
                                                                <option value="">-- الجهة التابعة لها --</option>
                                                                <option value="1">الحرس الملكي</option>
                                                                <option value="2">الشؤون الخاصة</option>
                                                            </select>
                                                            @error('subsidiary')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="image"> اضف صوره  </label>
                                                            <input type="file" id="image" class="form-control"
                                                                       accept="image/*" name="image">
                                                                @error('image')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الحالة  </label>
                                                            <select class="select2 form-control" name="status" id="status" require>
                                                                <option value="1">مخزن</option>
                                                                <option value="2">مسلم</option>
                                                                <option value="3">مستلم</option>
                                                                <option value="4">صيانه</option>
                                                                <option value="5">تم الانتهاء</option>
                                                                <option value="6">الغاء</option>
                                                            </select>
                                                            @error('status')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                
                                                <a href="{{ route('admin.stock') }}" class="btn btn-warning">
                                                     تراجع
                                                </a>
                                                
                                                <button type="submit" class="btn btn-primary" name="btn" value="saveAndNew">
                                                     حفظ و جديد
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                     حفظ
                                                </button>

                                                
                                            </div>
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
