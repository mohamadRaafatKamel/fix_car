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
                                                            <label for="image"> اضف مرفق  </label>
                                                            <input type="file" id="image" class="form-control"
                                                                       accept="file/*" name="image">
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

                                                <h4 class="form-section"><i class="ft-home"></i>  بيانات الاستمارة  </h4>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_receiver_name"> اسم المستلم  </label>
                                                            <input type="text" value="" id="f1_receiver_name"
                                                                   class="form-control" 
                                                                   placeholder="اسم المستلم "
                                                                   name="f1_receiver_name">
                                                            @error('f1_receiver_name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_receiver_phone"> جوال المستفيد  </label>
                                                            <input type="text" value="" id="f1_receiver_phone"
                                                                   class="form-control" 
                                                                   placeholder="جوال المستفيد "
                                                                   name="f1_receiver_phone">
                                                            @error('f1_receiver_phone')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم هوية المستفيد  </label>
                                                            <input type="text" value="" id="f1_receiver_id"
                                                                   class="form-control" 
                                                                   placeholder="رقم هوية المستفيد "
                                                                   name="f1_receiver_id">
                                                            @error('f1_receiver_id')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الجهة  </label>
                                                            <input type="text" value="" id="f1_elgha"
                                                                   class="form-control" 
                                                                   placeholder="الجهة "
                                                                   name="f1_elgha">
                                                            @error('f1_elgha')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الصنف  </label>
                                                            <input type="text" value="" id="f1_item_name"
                                                                   class="form-control" 
                                                                   placeholder="اسم الصنف "
                                                                   name="f1_item_name">
                                                            @error('f1_item_name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_car_categ"> فئة السيارة  </label>
                                                            <input type="text" value="" id="f1_car_categ"
                                                                   class="form-control" 
                                                                   placeholder="فئة السيارة "
                                                                   name="f1_car_categ">
                                                            @error('f1_car_categ')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اليوم  </label>
                                                            <input type="text" value="" id="f1_day1"
                                                                   class="form-control" 
                                                                   placeholder="اليوم "
                                                                   name="f1_day1">
                                                            @error('f1_day1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div> --}}
                                                    
                                                    <div class="col-md-6" onload="initWork()">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التاريخ  </label>
                                                            <input type="text" 
                                                            value="1-1-1444"
                                                            name="f1_date1" class="form-control datepicker_hijri">
                                                            {{-- <div class=" text-center container mt-5 mb-5"> --}}
                                                                {{-- <div class="row mt-3 mb-3 text-center"> --}}
                                                                  {{-- <div class="col-6"> --}}
                                                                    {{-- <input type="text" id="datepicker"> --}}
                                                                  {{-- </div> --}}
                                                                {{-- </div> --}}
                                                            {{-- </div> --}}


                                                            {{-- <input type="datetime-local" value="" id="f1_date1"
                                                                   class="form-control" 
                                                                   placeholder="التاريخ "
                                                                   name="f1_date1"> --}}
                                                            @error('f1_date1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_day1"> اليوم  </label>
                                                            <input type="text" value="" id="f1_day1"
                                                                   class="form-control" 
                                                                   placeholder="اليوم "
                                                                   name="f1_day1">
                                                            @error('f1_day1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_date2"> التاريخ التسليم  </label>
                                                            {{-- <input type="datetime-local" value="" id="f1_date2"
                                                                   class="form-control" 
                                                                   placeholder="التاريخ التسليم "
                                                                   name="f1_date2"> --}}
                                                                   <input type="text"
                                                                   value="1-1-1444"
                                                                   name="f1_date2" class="form-control datepicker_hijri">
                                                            @error('f1_date2')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_day2"> يوم التسليم  </label>
                                                            <input type="text" value="" id="f1_day2"
                                                                   class="form-control" 
                                                                   placeholder="يوم التسليم "
                                                                   name="f1_day2">
                                                            @error('f1_day2')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التاريخ دخول السياره  </label>
                                                            {{-- <input type="datetime-local" value="" id="f1_enter_date3"
                                                                   class="form-control" 
                                                                   placeholder="التاريخ دخول السياره "
                                                                   name="f1_enter_date3"> --}}
                                                            <input type="text"
                                                                   value="1-1-1444"
                                                                   name="f1_enter_date3" class="form-control datepicker_hijri">
                                                            @error('f1_enter_date3')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_enter_day3"> يوم دخول السياره  </label>
                                                            <input type="text" value="" id="f1_enter_day3"
                                                                   class="form-control" 
                                                                   placeholder="يوم دخول السياره "
                                                                   name="f1_enter_day3">
                                                            @error('f1_enter_day3')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_3gla"> عجلة الاحتياط عدد  </label>
                                                            <input type="number" value="" id="f1_3gla"
                                                                   class="form-control" 
                                                                   placeholder="عجلة الاحتياط عدد "
                                                                   name="f1_3gla">
                                                            @error('f1_3gla')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_3freta"> عفريته و مفتاح عجل عدد  </label>
                                                            <input type="number" value="" id="f1_3freta"
                                                                   class="form-control" 
                                                                   placeholder="عفريته و مفتاح عجل عدد "
                                                                   name="f1_3freta">
                                                            @error('f1_3freta')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_tfaya"> طفاية حريق عدد  </label>
                                                            <input type="number" value="" id="f1_tfaya"
                                                                   class="form-control" 
                                                                   placeholder="طفاية حريق عدد "
                                                                   name="f1_tfaya">
                                                            @error('f1_tfaya')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_msls"> مثلث عدد  </label>
                                                            <input type="number" value="" id="f1_msls"
                                                                   class="form-control" 
                                                                   placeholder="مثلث عدد "
                                                                   name="f1_msls">
                                                            @error('f1_msls')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_radio"> جهاز راديو  مسجل عدد  </label>
                                                            <input type="number" value="" id="f1_radio"
                                                                   class="form-control" 
                                                                   placeholder="جهاز راديو  مسجل عدد "
                                                                   name="f1_radio">
                                                            @error('f1_radio')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_sefty"> سفتي عدد  </label>
                                                            <input type="number" value="" id="f1_sefty"
                                                                   class="form-control" 
                                                                   placeholder="سفتي عدد "
                                                                   name="f1_sefty">
                                                            @error('f1_sefty')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_mostatel"> جهاز اشاره مستطيل عدد  </label>
                                                            <input type="number" value="" id="f1_mostatel"
                                                                   class="form-control" 
                                                                   placeholder="جهاز اشاره مستطيل عدد "
                                                                   name="f1_mostatel">
                                                            @error('f1_mostatel')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_tes"> طيس عدد  </label>
                                                            <input type="number" value="" id="f1_tes"
                                                                   class="form-control" 
                                                                   placeholder="طيس عدد "
                                                                   name="f1_tes">
                                                            @error('f1_tes')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_4nth"> شنطه عده عدد  </label>
                                                            <input type="number" value="" id="f1_4nth"
                                                                   class="form-control" 
                                                                   placeholder="شنطه عده عدد "
                                                                   name="f1_4nth">
                                                            @error('f1_4nth')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_form_img"> صوره الاستماره عدد  </label>
                                                            <input type="number" value="" id="f1_form_img"
                                                                   class="form-control" 
                                                                   placeholder="صوره الاستماره عدد "
                                                                   name="f1_form_img">
                                                            @error('f1_form_img')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_remot"> ريموت عدد  </label>
                                                            <input type="number" value="" id="f1_remot"
                                                                   class="form-control" 
                                                                   placeholder="ريموت عدد "
                                                                   name="f1_remot">
                                                            @error('f1_remot')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_front_back_lo7a"> لوحه اماميه و لوحه خلفيه عدد  </label>
                                                            <input type="number" value="" id="f1_front_back_lo7a"
                                                                   class="form-control" 
                                                                   placeholder="لوحه اماميه و لوحه خلفيه عدد "
                                                                   name="f1_front_back_lo7a">
                                                            @error('f1_front_back_lo7a')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_front_back_d3am"> دعام خلفي امامي عدد  </label>
                                                            <input type="number" value="" id="f1_front_back_d3am"
                                                                   class="form-control" 
                                                                   placeholder="دعام خلفي امامي عدد "
                                                                   name="f1_front_back_d3am">
                                                            @error('f1_front_back_d3am')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_call_dev"> جهاز اتصال عدد </label>
                                                            <input type="number" value="" id="f1_call_dev"
                                                                   class="form-control" 
                                                                   placeholder="جهاز اتصال عدد "
                                                                   name="f1_call_dev">
                                                            @error('f1_call_dev')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_el3ward"> العوارض  </label>
                                                            <input type="text" value="" id="f1_el3ward"
                                                                   class="form-control" 
                                                                   placeholder="العوارض "
                                                                   name="f1_el3ward">
                                                            @error('f1_el3ward')
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
