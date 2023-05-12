@extends('layouts.admin')
@section('title','تعديل')
@section('stock_view','')
@section('stock','')
@section('content')
<?php 
if(! $permissoin = \App\Models\Role::havePremission(['stock_idt']))
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
                                <li class="breadcrumb-item"><a href="{{route('admin.stock')}}">  السيارة </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل
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
                                        @if ($permissoin)
                                        <form class="form" action="{{route('admin.stock.update',$datas -> id)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                        @endif
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> البيانات  </h4>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> نوع السيارة  </label>
                                                            <select class="select2 form-control" name="sanaf_id" id="sanaf_id" required $readonly>
                                                                <option  >-- نوع السيارة --</option>
                                                                @foreach($asnafs as $asnaf)
                                                                    <option value="{{ $asnaf->id }}"
                                                                        @if(isset($datas->sanaf_id))
                                                                            @if($datas->sanaf_id == $asnaf->id) selected @endif 
                                                                        @endif 
                                                                        @if(old('sanaf_id') == $asnaf->id) selected @endif >
                                                                        
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
                                                            <select class="select2 form-control" name="car_type" id="car_type" $readonly>
                                                                <option  >-- فئه السيارة --</option>
                                                                <option value="1" @if($datas->car_type == 1) selected @endif>VIP</option>
                                                                <option value="2" @if($datas->car_type == 2) selected @endif>رسمي</option>
                                                                <option value="3" @if($datas->car_type == 3) selected @endif>عادي</option>
                                                                <option value="4" @if($datas->car_type == 4) selected @endif>مدني</option>
                                                            </select>
                                                            @error('car_type')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> موديل  </label>
                                                            <input type="text"   id="car_model"
                                                                   class="form-control" $readonly
                                                                   placeholder="موديل "
                                                                   @if(isset($datas->car_model))
                                                                        value="{{ $datas->car_model }}"
                                                                    @else
                                                                        value="{{ old('car_model') }}"
                                                                    @endif
                                                                   name="car_model">
                                                            @error('car_model')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اللون  </label>
                                                            <input type="text"   id="color_in"
                                                                   class="form-control" $readonly
                                                                   placeholder="اللون "
                                                                   name="color_in"
                                                                   @if(isset($datas->color_in))
                                                                        value="{{ $datas->color_in }}"
                                                                    @else
                                                                        value="{{ old('color_in') }}"
                                                                    @endif>
                                                            @error('color_in')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اللون الداخلي  </label>
                                                            <input type="text"   id="color_out"
                                                                   class="form-control" $readonly
                                                                   placeholder="اللون الداخلي "
                                                                   name="color_out"
                                                                   @if(isset($datas->color_out))
                                                                        value="{{ $datas->color_out }}"
                                                                    @else
                                                                        value="{{ old('color_out') }}"
                                                                    @endif>
                                                            @error('color_out')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم الهيكل  </label>
                                                            <input type="text" id="hykl_no"
                                                                   class="form-control"  {{$readonly}}
                                                                   placeholder="رقم الهيكل "
                                                                   name="hykl_no"
                                                                   @if(isset($datas->hykl_no))
                                                                        value="{{ $datas->hykl_no }}"
                                                                    @else
                                                                        value="{{ old('hykl_no') }}"
                                                                    @endif>
                                                            @error('hykl_no')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم اللوحه  </label>
                                                            <input type="text" id="car_no"
                                                                   class="form-control" $readonly
                                                                   placeholder="رقم اللوحه "
                                                                   name="car_no"
                                                                   @if(isset($datas->car_no))
                                                                        value="{{ $datas->car_no }}"
                                                                    @else
                                                                        value="{{ old('car_no') }}"
                                                                    @endif>
                                                            @error('car_no')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التظليل  </label>
                                                            <select class="select2 form-control" name="eltazlel" id="eltazlel" $readonly>
                                                                <option  >-- التظليل --</option>
                                                                <option value="1" @if($datas->eltazlel == 1) selected @endif>مظلل</option>
                                                                <option value="2" @if($datas->eltazlel == 2) selected @endif>غير مظلل</option>
                                                            </select>
                                                            @error('eltazlel')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التصفيح  </label>
                                                            <select class="select2 form-control" name="eltasfe7" id="eltasfe7" $readonly>
                                                                <option  >-- التصفيح --</option>
                                                                <option value="1" @if($datas->eltasfe7 == 1) selected @endif>مصفح</option>
                                                                <option value="2" @if($datas->eltasfe7 == 2) selected @endif>غير مصفح</option>
                                                            </select>
                                                            @error('eltasfe7')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الجهة التابعة لها  </label>
                                                            <select class="select2 form-control" name="subsidiary" id="subsidiary" $readonly>
                                                                <option  >-- الجهة التابعة لها --</option>
                                                                <option value="1" @if($datas->subsidiary == 1) selected @endif>الحرس الملكي</option>
                                                                <option value="2" @if($datas->subsidiary == 2) selected @endif>الشؤون الخاصة</option>
                                                            </select>
                                                            @error('subsidiary')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label-control" for="image">اضف مرفق</label>
                                                            <input type="file" id="image" {{ $readonly }}
                                                                       class="form-control"  
                                                                       accept="image/*"
                                                                       name="image">
                                                                @error('image')
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="padding-top: 30px;">
                                                        {{-- @if($datas -> img != null)
                                                            <a href="../../../{{$datas -> img}}" download> تحميل </a>
                                                        @endif --}}

                                                        @if($datas -> img)
                                                            <?php $arr = explode( '.', $datas -> img ); ?>
                                                            <a href="/fix_car/{{$datas -> img}}"  download="Car File.{{$arr[count($arr)-1]}}"
                                                                class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تحميل</a>
                                                        @endif
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الحالة  </label>
                                                            <select class="select2 form-control" name="status" id="status" require>
                                                                <option value="1" @if($datas->status == 1) selected @endif>مخزن</option>
                                                                <option value="2" @if($datas->status == 2) selected @endif>مسلم</option>
                                                                <option value="3" @if($datas->status == 3) selected @endif>مستلم</option>
                                                                <option value="4" @if($datas->status == 4) selected @endif>صيانه</option>
                                                                <option value="5" @if($datas->status == 5) selected @endif>تم الانتهاء</option>
                                                                <option value="6" @if($datas->status == 6) selected @endif>الغاء</option>
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
                                                            <input type="text"   id="f1_receiver_name"
                                                                   class="form-control" 
                                                                   placeholder="اسم المستلم "
                                                                   @if(isset($datas->f1_receiver_name))
                                                                        value="{{ $datas->f1_receiver_name }}"
                                                                    @else
                                                                        value="{{ old('f1_receiver_name') }}"
                                                                    @endif
                                                                   name="f1_receiver_name">
                                                            @error('f1_receiver_name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_receiver_phone"> جوال المستفيد  </label>
                                                            <input type="text"   id="f1_receiver_phone"
                                                                   class="form-control" 
                                                                   placeholder="جوال المستفيد "
                                                                   @if(isset($datas->f1_receiver_phone))
                                                                        value="{{ $datas->f1_receiver_phone }}"
                                                                    @else
                                                                        value="{{ old('f1_receiver_phone') }}"
                                                                    @endif
                                                                   name="f1_receiver_phone">
                                                            @error('f1_receiver_phone')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> رقم هوية المستفيد  </label>
                                                            <input type="text"   id="f1_receiver_id"
                                                                   class="form-control" 
                                                                   placeholder="رقم هوية المستفيد "
                                                                   @if(isset($datas->f1_receiver_id))
                                                                        value="{{ $datas->f1_receiver_id }}"
                                                                    @else
                                                                        value="{{ old('f1_receiver_id') }}"
                                                                    @endif
                                                                   name="f1_receiver_id">
                                                            @error('f1_receiver_id')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الجهة  </label>
                                                            <input type="text"   id="f1_elgha"
                                                                   class="form-control" 
                                                                   placeholder="الجهة "
                                                                   @if(isset($datas->f1_elgha))
                                                                        value="{{ $datas->f1_elgha }}"
                                                                    @else
                                                                        value="{{ old('f1_elgha') }}"
                                                                    @endif
                                                                   name="f1_elgha">
                                                            @error('f1_elgha')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الصنف  </label>
                                                            <input type="text"   id="f1_item_name"
                                                                   class="form-control" 
                                                                   placeholder="اسم الصنف "
                                                                   @if(isset($datas->f1_item_name))
                                                                        value="{{ $datas->f1_item_name }}"
                                                                    @else
                                                                        value="{{ old('f1_item_name') }}"
                                                                    @endif
                                                                   name="f1_item_name">
                                                            @error('f1_item_name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_car_categ"> فئة السيارة  </label>
                                                            <input type="text"   id="f1_car_categ"
                                                                   class="form-control" 
                                                                   placeholder="فئة السيارة "
                                                                   @if(isset($datas->f1_car_categ))
                                                                        value="{{ $datas->f1_car_categ }}"
                                                                    @else
                                                                        value="{{ old('f1_car_categ') }}"
                                                                    @endif
                                                                   name="f1_car_categ">
                                                            @error('f1_car_categ')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    {{-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اليوم  </label>
                                                            <input type="text"   id="f1_day1"
                                                                   class="form-control" 
                                                                   placeholder="اليوم "
                                                                   name="f1_day1">
                                                            @error('f1_day1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div> --}}
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التاريخ  </label>
                                                            <input type="datetime-local"   id="f1_date1"
                                                                   class="form-control" 
                                                                   placeholder="التاريخ "
                                                                   @if(isset($datas->f1_date1))
                                                                        value="{{ $datas->f1_date1 }}"
                                                                    @else
                                                                        value="{{ old('f1_date1') }}"
                                                                    @endif
                                                                   name="f1_date1">
                                                            @error('f1_date1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_day1"> اليوم  </label>
                                                            <input type="text"   id="f1_day1"
                                                                   class="form-control" 
                                                                   placeholder="اليوم "
                                                                   @if(isset($datas->f1_day1))
                                                                        value="{{ $datas->f1_day1 }}"
                                                                    @else
                                                                        value="{{ old('f1_day1') }}"
                                                                    @endif
                                                                   name="f1_day1">
                                                            @error('f1_day1')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_date2"> التاريخ التسليم  </label>
                                                            <input type="datetime-local"   id="f1_date2"
                                                                   class="form-control" 
                                                                   placeholder="التاريخ التسليم "
                                                                   @if(isset($datas->f1_date2))
                                                                        value="{{ $datas->f1_date2 }}"
                                                                    @else
                                                                        value="{{ old('f1_date2') }}"
                                                                    @endif
                                                                   name="f1_date2">
                                                            @error('f1_date2')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_day2"> يوم التسليم  </label>
                                                            <input type="text"   id="f1_day2"
                                                                   class="form-control" 
                                                                   placeholder="يوم التسليم "
                                                                   @if(isset($datas->f1_day2))
                                                                        value="{{ $datas->f1_day2 }}"
                                                                    @else
                                                                        value="{{ old('f1_day2') }}"
                                                                    @endif
                                                                   name="f1_day2">
                                                            @error('f1_day2')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> التاريخ دخول السياره  </label>
                                                            <input type="datetime-local"   id="f1_enter_date3"
                                                                   class="form-control" 
                                                                   placeholder="التاريخ دخول السياره "
                                                                   @if(isset($datas->f1_enter_date3))
                                                                        value="{{ $datas->f1_enter_date3 }}"
                                                                    @else
                                                                        value="{{ old('f1_enter_date3') }}"
                                                                    @endif
                                                                   name="f1_enter_date3">
                                                            @error('f1_enter_date3')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_enter_day3"> يوم دخول السياره  </label>
                                                            <input type="text"   id="f1_enter_day3"
                                                                   class="form-control" 
                                                                   placeholder="يوم دخول السياره "
                                                                   @if(isset($datas->f1_df1_enter_day3ay1))
                                                                        value="{{ $datas->f1_enter_day3 }}"
                                                                    @else
                                                                        value="{{ old('f1_enter_day3') }}"
                                                                    @endif
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
                                                            <input type="number"   id="f1_3gla"
                                                                   class="form-control" 
                                                                   placeholder="عجلة الاحتياط عدد "
                                                                   @if(isset($datas->f1_3gla))
                                                                        value="{{ $datas->f1_3gla }}"
                                                                    @else
                                                                        value="{{ old('f1_3gla') }}"
                                                                    @endif
                                                                   name="f1_3gla">
                                                            @error('f1_3gla')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_3freta"> عفريته و مفتاح عجل عدد  </label>
                                                            <input type="number"   id="f1_3freta"
                                                                   class="form-control" 
                                                                   placeholder="عفريته و مفتاح عجل عدد "
                                                                   @if(isset($datas->f1_3freta))
                                                                        value="{{ $datas->f1_3freta }}"
                                                                    @else
                                                                        value="{{ old('f1_3freta') }}"
                                                                    @endif
                                                                   name="f1_3freta">
                                                            @error('f1_3freta')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_tfaya"> طفاية حريق عدد  </label>
                                                            <input type="number"   id="f1_tfaya"
                                                                   class="form-control" 
                                                                   placeholder="طفاية حريق عدد "
                                                                   @if(isset($datas->f1_tfaya))
                                                                        value="{{ $datas->f1_tfaya }}"
                                                                    @else
                                                                        value="{{ old('f1_tfaya') }}"
                                                                    @endif
                                                                   name="f1_tfaya">
                                                            @error('f1_tfaya')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_msls"> مثلث عدد  </label>
                                                            <input type="number"   id="f1_msls"
                                                                   class="form-control" 
                                                                   placeholder="مثلث عدد "
                                                                   @if(isset($datas->f1_msls))
                                                                        value="{{ $datas->f1_msls }}"
                                                                    @else
                                                                        value="{{ old('f1_msls') }}"
                                                                    @endif
                                                                   name="f1_msls">
                                                            @error('f1_msls')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_radio"> جهاز راديو  مسجل عدد  </label>
                                                            <input type="number"   id="f1_radio"
                                                                   class="form-control" 
                                                                   placeholder="جهاز راديو  مسجل عدد "
                                                                   @if(isset($datas->f1_radio))
                                                                        value="{{ $datas->f1_radio }}"
                                                                    @else
                                                                        value="{{ old('f1_radio') }}"
                                                                    @endif
                                                                   name="f1_radio">
                                                            @error('f1_radio')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_sefty"> سفتي عدد  </label>
                                                            <input type="number"   id="f1_sefty"
                                                                   class="form-control" 
                                                                   placeholder="سفتي عدد "
                                                                   @if(isset($datas->f1_sefty))
                                                                        value="{{ $datas->f1_sefty }}"
                                                                    @else
                                                                        value="{{ old('f1_sefty') }}"
                                                                    @endif
                                                                   name="f1_sefty">
                                                            @error('f1_sefty')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_mostatel"> جهاز اشاره مستطيل عدد  </label>
                                                            <input type="number"   id="f1_mostatel"
                                                                   class="form-control" 
                                                                   placeholder="جهاز اشاره مستطيل عدد "
                                                                   @if(isset($datas->f1_mostatel))
                                                                        value="{{ $datas->f1_mostatel }}"
                                                                    @else
                                                                        value="{{ old('f1_mostatel') }}"
                                                                    @endif
                                                                   name="f1_mostatel">
                                                            @error('f1_mostatel')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_tes"> طيس عدد  </label>
                                                            <input type="number"   id="f1_tes"
                                                                   class="form-control" 
                                                                   placeholder="طيس عدد "
                                                                   @if(isset($datas->f1_tes))
                                                                        value="{{ $datas->f1_tes }}"
                                                                    @else
                                                                        value="{{ old('f1_tes') }}"
                                                                    @endif
                                                                   name="f1_tes">
                                                            @error('f1_tes')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_4nth"> شنطه عده عدد  </label>
                                                            <input type="number"   id="f1_4nth"
                                                                   class="form-control" 
                                                                   placeholder="شنطه عده عدد "
                                                                   @if(isset($datas->f1_4nth))
                                                                        value="{{ $datas->f1_4nth }}"
                                                                    @else
                                                                        value="{{ old('f1_4nth') }}"
                                                                    @endif
                                                                   name="f1_4nth">
                                                            @error('f1_4nth')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_form_img"> صوره الاستماره عدد  </label>
                                                            <input type="number"   id="f1_form_img"
                                                                   class="form-control" 
                                                                   placeholder="صوره الاستماره عدد "
                                                                   @if(isset($datas->f1_form_img))
                                                                        value="{{ $datas->f1_form_img }}"
                                                                    @else
                                                                        value="{{ old('f1_form_img') }}"
                                                                    @endif
                                                                   name="f1_form_img">
                                                            @error('f1_form_img')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_remot"> ريموت عدد  </label>
                                                            <input type="number"   id="f1_remot"
                                                                   class="form-control" 
                                                                   placeholder="ريموت عدد "
                                                                   @if(isset($datas->f1_remot))
                                                                        value="{{ $datas->f1_remot }}"
                                                                    @else
                                                                        value="{{ old('f1_remot') }}"
                                                                    @endif
                                                                   name="f1_remot">
                                                            @error('f1_remot')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_front_back_lo7a"> لوحه اماميه و لوحه خلفيه عدد  </label>
                                                            <input type="number"   id="f1_front_back_lo7a"
                                                                   class="form-control" 
                                                                   placeholder="لوحه اماميه و لوحه خلفيه عدد "
                                                                   @if(isset($datas->f1_front_back_lo7a))
                                                                        value="{{ $datas->f1_front_back_lo7a }}"
                                                                    @else
                                                                        value="{{ old('f1_front_back_lo7a') }}"
                                                                    @endif
                                                                   name="f1_front_back_lo7a">
                                                            @error('f1_front_back_lo7a')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_front_back_d3am"> دعام خلفي امامي عدد  </label>
                                                            <input type="number"   id="f1_front_back_d3am"
                                                                   class="form-control" 
                                                                   placeholder="دعام خلفي امامي عدد "
                                                                   @if(isset($datas->f1_front_back_d3am))
                                                                        value="{{ $datas->f1_front_back_d3am }}"
                                                                    @else
                                                                        value="{{ old('f1_front_back_d3am') }}"
                                                                    @endif
                                                                   name="f1_front_back_d3am">
                                                            @error('f1_front_back_d3am')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_call_dev"> جهاز اتصال عدد </label>
                                                            <input type="number"   id="f1_call_dev"
                                                                   class="form-control" 
                                                                   placeholder="جهاز اتصال عدد "
                                                                   @if(isset($datas->f1_call_dev))
                                                                        value="{{ $datas->f1_call_dev }}"
                                                                    @else
                                                                        value="{{ old('f1_call_dev') }}"
                                                                    @endif
                                                                   name="f1_call_dev">
                                                            @error('f1_call_dev')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="f1_el3ward"> العوارض  </label>
                                                            <input type="text"   id="f1_el3ward"
                                                                   class="form-control" 
                                                                   placeholder="العوارض "
                                                                   @if(isset($datas->f1_el3ward))
                                                                        value="{{ $datas->f1_el3ward }}"
                                                                    @else
                                                                        value="{{ old('f1_el3ward') }}"
                                                                    @endif
                                                                   name="f1_el3ward">
                                                            @error('f1_el3ward')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
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
                                                    {{-- <button type="submit" class="btn btn-primary" name="btn" value="saveAndPrint">
                                                        حفظ و تحميل
                                                    </button> --}}
                                                    <a class="btn btn-primary" href="{{ route('admin.stock.print',$datas -> id) }}" target=”_blank”>تحميل</a>


                                                    {{-- <input type='button' class="btn btn-secondary buttons-print btn-primary mr-1" id='btn' value='Print' onclick='printDiv();'> --}}
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

{{-- @section('script')
<script>
function printDiv() 
{

    print();

//   var divToPrint=document.getElementById('DivIdToPrint');

//   var newWin=window.open('','Print-Window');

//   newWin.document.open();

// //   newWin.document.write('<html><head>'+
// //     '<title>Fix Car </title>'+
// //     '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">'+
// //     '<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">'+
// //     '</head><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

// newWin.document.write('<html><head>'+
//     '</head><body onload="window.print()">'+divToPrint.innerHTML+'</body></html>');

//   newWin.document.close();

//   setTimeout(function(){newWin.close();},100);

}

</script>
@endsection --}}
