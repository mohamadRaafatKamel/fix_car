<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Fix Car | @yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('assets/front/images/Logo.png')}}">
{{--    <link rel="apple-touch-icon" href="{{asset('assets/admin/images/ico/apple-icon-120.png')}}">--}}
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/admin/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/tables/datatable/datatables.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/weather-icons/climacons.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/meteocons/style.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/morris.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/charts/chartist.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/selects/select2.min.css')}}">
    {{-- <link rel="stylesheet" type="text/css" --}}
          {{-- href="{{asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css')}}"> --}}
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/admin/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css-rtl/style-rtl.css')}}">
    <!-- END Custom CSS-->
{{--    @notify_css--}}
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
        .mr15 {
            margin-right: 15px;
        }
        span .menu-title{
            background-color: #064420;
        }
        body.vertical-layout.vertical-menu.menu-collapsed .main-menu .main-menu-content > span.menu-title, body.vertical-layout.vertical-menu.menu-collapsed .main-menu .main-menu-content a.menu-title{
            background-color: #064420;
        }
        .main-menu.menu-light .navigation > li.open > a{
            border-left-color: #064420;
        }
        html body a{
            color: #064420 ;
        }
        html body a:hover{
            color: #5ed590;
        }
        .btn-primary{
            border-color: #064420 !important;
            background-color: #064420 !important;
        }
        .btn-primary:hover, .btn-primary:focus{
            border-color: #5ed590 !important;
            background-color: #5ed590 !important;
        }
        .select2-container--classic .select2-results__options .select2-results__option[aria-selected=true], .select2-container--default .select2-results__options .select2-results__option[aria-selected=true]{
            background-color: #064420 !important;
        }
        .dropdown-item.active, .dropdown-item:active{
            background-color: #064420 !important;
        }
    </style>
</head>
<body class="vertical-layout vertical-menu 2-columns  @if(Request::is('admin/users/tickets/reply*')) chat-application @endif menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('admin.include.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.include.sidebar')

@yield('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.include.footer')

{{--@notify_js--}}
{{--@notify_render--}}

<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('assets/admin/vendors/js/tables/datatable/datatables.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
        type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>

<!-- BEGIN PAGE VENDOR JS-->

{{-- <script src="{{asset('assets/admin/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script> --}}
{{-- <script src="{{asset('assets/admin/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script> --}}

{{-- <script src="{{asset('assets/admin/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script> --}}
{{-- <script src="{{asset('assets/admin/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script> --}}
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('assets/admin/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('assets/admin/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/tables/datatables/datatable-api.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/admin/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('assets/admin/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/notify.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/admin/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

<!-- Firbase -->

{{-- <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-app.js"></script> --}}
{{-- <script src="https://www.gstatic.com/firebasejs/8.0.0/firebase-messaging.js"></script> --}}
{{-- <script src="{{asset('assets/admin/js/scripts/firebase.js')}}" type="text/javascript"></script> --}}
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

var currDate = '';
function initWork() {
    //Today
    // var todayElement = document.getElementById("today");
    // todayElement.innerHTML = HijriJS.today().toString();
    // get today's date in Hijri
    currDate = HijriJS.today().toString();
    console.log("currDate");
    console.log(currDate);
    // to remove H from yearH ex: 1440H, drop the last character to be 1440
    currDate = currDate.substring(0, currDate.length - 1);
    // reformat date from dd/mm/yyyy to dd-mm-yyyy
    currDate = currDate.split('/').join('-');
    // set the date input field to currDate so, datepicker sets it as the current date automatically
    $('#datepicker_hijri').val(currDate);
}

// $( function() {
//    $( "#datetimepicker" ).datetimepicker({
//      changeMonth: true, // show months menu
//      changeYear: true, // show years menu
//      dayNamesMin: [ "س", "ج", "خ", "ر", "ث", "ن", "ح" ], // arabic days names
//      dateFormat: "dd-mm-yy", // set format to dd-mm-yyyy
//      monthNames: [ "محرم", "صفر", "ربيع الأول", "ربيع الثاني", "جمادى الأول", "جمادى الثاني", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
//      yearRange: "c-0:c+15", // year range in Hijri from current year and +15 years
//      monthNamesShort: [ "محرم", "صفر", "ربيع ١", "ربيع ٢", "جمادى ١", "جمادى ٢", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
//       showAnim: 'bounce'
//      });

//     $('#datetimepicker_hijri').datepicker({
//         defaultDate: HijriJS.today().toString(),
//         disabledDates: [
//             moment("12/25/2013"),
//             new Date(2013, 11 - 1, 21),
//             "11/22/2013 00:53"
//         ]
//     });
// });

$( function() {
   $( "#datepicker_hijri" ).datepicker({
     changeMonth: true, // show months menu
     changeYear: true, // show years menu
     dayNamesMin: [ "س", "ج", "خ", "ر", "ث", "ن", "ح" ], // arabic days names
     dateFormat: "dd-mm-yy", // set format to dd-mm-yyyy
     monthNames: [ "محرم", "صفر", "ربيع الأول", "ربيع الثاني", "جمادى الأول", "جمادى الثاني", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
     yearRange: "c-0:c+15", // year range in Hijri from current year and +15 years
     monthNamesShort: [ "محرم", "صفر", "ربيع ١", "ربيع ٢", "جمادى ١", "جمادى ٢", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
      showAnim: 'bounce'
     });
});

// window.onload = function(){
//     initWork();
// }

</script>
@yield('script')
</body>
</html>
