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
                                                                <option value="">-- نوع السيارة --</option>
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
                                                                <option value="">-- فئه السيارة --</option>
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
                                                            <input type="text" value="" id="car_model"
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
                                                            <input type="text" value="" id="color_in"
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
                                                            <input type="text" value="" id="color_out"
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
                                                            <input type="text" value="" id="hykl_no"
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
                                                            <input type="text" value="" id="car_no"
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
                                                                <option value="">-- التظليل --</option>
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
                                                                <option value="">-- التصفيح --</option>
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
                                                                <option value="">-- الجهة التابعة لها --</option>
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
                                                                       class="form-control" value=""
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
