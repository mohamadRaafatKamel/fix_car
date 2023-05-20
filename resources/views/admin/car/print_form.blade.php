@extends('layouts.print')
@section('title',' السيارة')
@section('car_view','')
@section('content')


<div id="DivIdToPrint" style="display:none0">
    <style>
        html body{background-color: #ffffff;}
        .table td {padding: 5px;}
        @media only print{
        body{visibility: hidden;}
        #DivIdToPrint{visibility: visible;}
        }
    </style>
    <div class="container">
        <table class="table table-bordered" style="margin-top: 200px">
            <tbody>
                <tr>
                    <td class="w-25">الاسم المستلم</td>
                    <td class="w-25">{{ $datas->f1_receiver_name }}</td>
                    <td class="w-25">اسم الصنف</td>
                    <td class="w-25">{{ $datas->f1_item_name }}</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>رقم اللوحه</td>
                    <td>{{ $datas->car_no }}</td>
                </tr>
                <tr>
                    <td>الجهة</td>
                    <td>{{ $datas->f1_elgha }}</td>
                    <td>فئة السياره</td>
                    <td>{{ $datas->f1_car_categ }}</td>
                </tr>
                <tr>
                    <td>الجوال المستفيد</td>
                    <td>{{ $datas->f1_receiver_phone }}</td>
                    <td>اليوم</td>
                    <td>{{ $datas->f1_day1 }}</td>
                </tr>
                <tr>
                    <td>رقم الهويه المستفيد</td>
                    <td>{{ $datas->f1_receiver_id }}</td>
                    <td>التاريخ</td>
                    <td>{{ $datas->f1_date1 }}</td>
                </tr>
            </tbody>
        </table>

        <div class="row">
            <div class="col-12">
                <div style="border: 1px solid; padding: 5px;">
                    <p> تم تسليم العربة علي امر: </p>
                    <div class="row">
                        <div class="col-6"> و ذلك يوم {{ $datas->f1_day2 }}</div>
                        <div class="col-6"> بتاريخ {{ $datas->f1_date2 }}</div>
                    
                    <?php
                        // use Carbon\Carbon;
                        // $dt = Carbon::now();
                        // $dt = Carbon::parse($datas->f1_date2);
                        // echo $dt->toHijri()->isoFormat('LLLL');
                        
                        // echo $datas->f1_date2->format('l j F Y H:i:s');
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-4">
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_3gla && $datas->f1_3gla > 0) checked @endif/>  عجلة الاحتياط عدد </div><div class="col-3">( @if($datas->f1_3gla)  {{$datas->f1_3gla}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_3freta && $datas->f1_3freta > 0) checked @endif/>عفريته و مفتاح عجل عدد</div><div class="col-3">( @if($datas->f1_3freta)  {{$datas->f1_3freta}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_tfaya && $datas->f1_tfaya > 0) checked @endif/>طفاية حريق عدد</div><div class="col-3">( @if($datas->f1_tfaya)  {{$datas->f1_tfaya}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_msls && $datas->f1_msls > 0) checked @endif/>مثلث عدد</div><div class="col-3">( @if($datas->f1_msls)  {{$datas->f1_msls}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_radio && $datas->f1_radio > 0) checked @endif/>جهاز راديو  مسجل عدد</div><div class="col-3">( @if($datas->f1_radio)  {{$datas->f1_radio}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_sefty && $datas->f1_sefty > 0) checked @endif/>سفتي عدد</div><div class="col-3">( @if($datas->f1_sefty)  {{$datas->f1_sefty}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_mostatel && $datas->f1_mostatel > 0) checked @endif/>جهاز اشاره مستطيل عدد</div><div class="col-3">( @if($datas->f1_mostatel)  {{$datas->f1_mostatel}} @else 0 @endif )</div></div>
            </div>
            <div class="col-4">
                <img style="width: 100%;" src="{{asset('assets/admin/print_car.jpeg')}}">
            </div>
            <div class="col-4">
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_tes && $datas->f1_tes > 0) checked @endif/>طيس عدد</div><div class="col-3">( @if($datas->f1_tes)  {{$datas->f1_tes}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_4nth && $datas->f1_4nth > 0) checked @endif/>شنطه عده عدد</div><div class="col-3">( @if($datas->f1_4nth)  {{$datas->f1_4nth}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_form_img && $datas->f1_form_img > 0) checked @endif/>صوره سند التسليم عدد</div><div class="col-3">( @if($datas->f1_form_img)  {{$datas->f1_form_img}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_remot && $datas->f1_remot > 0) checked @endif/>ريموت عدد</div><div class="col-3">( @if($datas->f1_remot)  {{$datas->f1_remot}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_front_back_lo7a && $datas->f1_front_back_lo7a > 0) checked @endif/>لوحه اماميه و لوحه خلفيه عدد</div><div class="col-3">( @if($datas->f1_front_back_lo7a)  {{$datas->f1_front_back_lo7a}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_front_back_d3am && $datas->f1_front_back_d3am > 0) checked @endif/>دعام خلفي امامي عدد</div><div class="col-3">( @if($datas->f1_front_back_d3am)  {{$datas->f1_front_back_d3am}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9"><input type="checkbox" @if($datas->f1_call_dev && $datas->f1_call_dev > 0) checked @endif/>جهاز اتصال عدد</div><div class="col-3">( @if($datas->f1_call_dev)  {{$datas->f1_call_dev}} @else 0 @endif )</div></div>
            </div>

            <p style="padding-right: 70px;">  العوارض : {{ $datas->f1_el3ward }}
        </div>

        <br/>
        <div class="row">
            <div class="col-12">
                <div>
                    <p style="padding-right: 40px;"> أقر انا الموقع أدناه بانني استلمت السيارة الموضح هويتها بعاليه بكامل موجوداتها  و عوارضها الفنية بعالية و أن: </p>
                    <p style="padding-right: 70px;">
                        ١- اتعهد بالمحافظة علي هذه السيارة. <br/>
                        ٢- اتعهد بعدم خروج العربة خارج حدود المدينة المتواجد بها الا بتصريح مسبق.<br/>
                        ٣- اتعهد بعدم تسليمها لشخص اخر.<br/>
                        ٤- اتعهد باصلاح العربية في حالة وجود اي عوارض جديدة. <br/>
                        ٥- اتعهد بدفع المخالفات المترتبة علي السيارة خلال استلامي لها. <br/>
                        ٦- اتعهد بالمحافظة علي النظافة.<br/>

                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-4" style="padding:0; padding-right: 15px;">
                <p style="text-align: center">المستلم</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div>الاسم:</div>
                    <br/><br/>
                    <div>التوقيع:</div>
                    <div>تاريخ:</div>
                </div>
            </div>
            <div class="col-4" style="padding:0;">
                <p style="text-align: center">المسلم</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div>الاسم:</div>
                    <br/><br/>
                    <div>التوقيع:</div>
                    <div>تاريخ:</div>
                </div>
            </div>
            <div class="col-4" style="padding:0; padding-left: 15px;">
                <p style="text-align: center">الحاسب خروج العربة</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div>الاسم:</div>
                    <br/><br/>
                    <div>التوقيع:</div>
                    <div>تاريخ:</div>
                </div>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-12">
                <p style="text-align: center">دخول العربة</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div class="row">
                        <div class="col-6"> تم اعادة العربة و ذلك يوم {{ $datas->f1_enter_day3 }}</div>
                        <div class="col-6"> بتاريخ {{ $datas->f1_enter_date3 }}</div>
                    </div>
                    <p> و علي مسؤوليتي حسب حالتها الاتية: </p>
                </div>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-4" style="padding:0; padding-right: 15px;">
                <p style="text-align: center">المستلم</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div>الاسم:</div>
                    <br/><br/>
                    <div>التوقيع:</div>
                    <div>تاريخ:</div>
                </div>
            </div>
            <div class="col-4" style="padding:0;">
                <p style="text-align: center">المسلم</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div>الاسم:</div>
                    <br/><br/>
                    <div>التوقيع:</div>
                    <div>تاريخ:</div>
                </div>
            </div>
            <div class="col-4" style="padding:0; padding-left: 15px;">
                <p style="text-align: center">الحاسب الدخول العربة</p> 
                <div style="border: 1px solid; padding: 5px;">
                    <div>الاسم:</div>
                    <br/><br/>
                    <div>التوقيع:</div>
                    <div>تاريخ:</div>
                </div>
            </div>
        </div>

    </div>
</div>
    
@endsection
@section('script')
<script>

window.onload = function(){
    window.print();
}
window.addEventListener("afterprint", (event) => {
  console.log("Aprint");
  window.close();
});
</script>
@endsection
