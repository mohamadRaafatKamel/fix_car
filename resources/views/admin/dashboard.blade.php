@extends('layouts.admin')

@section('content')
    <div class="app-content content" style="background: url({{asset('assets/admin/001.jpg')}});
                                        background-repeat:no-repeat;background-size:cover;">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">

                    {{-- <center>
                        <button id="btn-nft-enable" onclick="setnotificationtocken()" class="btn btn-danger btn-xs btn-flat">Notification</button>
                        <input type="text" id="tokk"/>
                    </center> --}}

                   
                </div>
                <!-- Candlestick Multi Level Control Chart -->
            </div>
        </div>
    </div>
@endsection
