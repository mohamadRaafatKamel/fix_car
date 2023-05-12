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
        <table class="table table-bordered">
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
                    </div>
                </div>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-4">
                <div class="row"><div class="col-9">عجلة الاحتياط عدد</div><div class="col-3">( @if($datas->f1_3gla)  {{$datas->f1_3gla}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">عفريته و مفتاح عجل عدد</div><div class="col-3">( @if($datas->f1_3freta)  {{$datas->f1_3freta}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">طفاية حريق عدد</div><div class="col-3">( @if($datas->f1_tfaya)  {{$datas->f1_tfaya}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">مثلث عدد</div><div class="col-3">( @if($datas->f1_msls)  {{$datas->f1_msls}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">جهاز راديو  مسجل عدد</div><div class="col-3">( @if($datas->f1_radio)  {{$datas->f1_radio}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">سفتي عدد</div><div class="col-3">( @if($datas->f1_sefty)  {{$datas->f1_sefty}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">جهاز اشاره مستطيل عدد</div><div class="col-3">( @if($datas->f1_mostatel)  {{$datas->f1_mostatel}} @else 0 @endif )</div></div>
            </div>
            <div class="col-4">
                <img style="width: 100%;" src="{{asset('assets/admin/print_car.jpeg')}}">
            </div>
            <div class="col-4">
                <div class="row"><div class="col-9">طيس عدد</div><div class="col-3">( @if($datas->f1_tes)  {{$datas->f1_tes}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">شنطه عده عدد</div><div class="col-3">( @if($datas->f1_4nth)  {{$datas->f1_4nth}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">صوره الاستماره عدد</div><div class="col-3">( @if($datas->f1_form_img)  {{$datas->f1_form_img}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">ريموت عدد</div><div class="col-3">( @if($datas->f1_remot)  {{$datas->f1_remot}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">لوحه اماميه و لوحه خلفيه عدد</div><div class="col-3">( @if($datas->f1_front_back_lo7a)  {{$datas->f1_front_back_lo7a}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">دعام خلفي امامي عدد</div><div class="col-3">( @if($datas->f1_front_back_d3am)  {{$datas->f1_front_back_d3am}} @else 0 @endif )</div></div>
                <div class="row"><div class="col-9">جهاز اتصال عدد</div><div class="col-3">( @if($datas->f1_call_dev)  {{$datas->f1_call_dev}} @else 0 @endif )</div></div>
            </div>

            <p style="padding-right: 70px;">  العوارض : {{ $datas->f1_el3ward }}
        </div>

        <br/>
        <div class="row">
            <div class="col-12">
                <div>
                    <p style="padding-right: 40px;"> أقر انا الموقع أدناه بانني استلمت السيارة الموضح هويتها بعاليه بكامل موجوداتها  و عوارضها الفنية بعالية و أن: </p>
                    <p style="padding-right: 70px;">
                        1- اتعهد بالمحافظة علي هذه السيارة. <br/>
                        2- اتعهد بعدم خروج العربة خارج حدود المدينة المتواجد بها الا بتصريح مسبق.<br/>
                        3- اتعهد بعدم تسليمها لشخص اخر.<br/>
                        4- اتعهد باصلاح العربية في حالة وجود اي عوارض جديدة. <br/>
                        5- اتعهد بدفع المخالفات المترتبة علي السيارة خلال استلامي لها. <br/>
                        6- اتعهد بالمحافظة علي النظافة.<br/>

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
                <p style="text-align: center">الحاسب خروج العربة</p> 
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
    // window.print();
}
window.addEventListener("afterprint", (event) => {
  console.log("After print");
//   window.close();
});
</script>
@endsection
