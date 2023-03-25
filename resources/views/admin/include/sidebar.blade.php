<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{ __('Home') }} </span></a>
            </li>
            <style>
                
            </style>
           

           @if(\App\Models\Role::havePremission(['car_all','car_stock','car_sender','car_recever',
                                                'car_fix','car_done','car_cancel']))
                <li class="nav-item">
                    <a href=""><i class="la la-undo"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> السيارات </span>
                    </a>
                    <ul class="menu-content">

                        {{-- @if(\App\Models\Role::havePremission(['stock_cr'])) --}}
                            <li
                            @if(View::hasSection('stock_cr')) class="active" @endif
                            ><a class="menu-item" href="{{route('admin.stock.create')}}" data-i18n="nav.dash.crypto">
                                    أضافه جديد </a>
                            </li>
                        {{-- @endif --}}

                        @if(\App\Models\Role::havePremission(['car_all']))
                        <li @if(isset($name_page)) @if($name_page == "كل السيارات") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.car')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                        </li>
                        @endif

                        @if(\App\Models\Role::havePremission(['car_stock']))
                        <li @if(isset($name_page)) @if($name_page == "المخزن") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.stock')}}"
                            data-i18n="nav.dash.ecommerce"> المخزن </a>
                        </li>
                        @endif

                        @if(\App\Models\Role::havePremission(['car_sender']))
                        <li @if(isset($name_page)) @if($name_page == "مسلم") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.sender')}}"
                            data-i18n="nav.dash.ecommerce"> مسلم </a>
                        </li>
                        @endif

                        @if(\App\Models\Role::havePremission(['car_recever']))
                        <li @if(isset($name_page)) @if($name_page == "مستلم") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.recever')}}"
                            data-i18n="nav.dash.ecommerce"> مستلم </a>
                        </li>
                        @endif

                        @if(\App\Models\Role::havePremission(['car_fix']))
                        <li @if(isset($name_page)) @if($name_page == "صيانه") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.fix')}}"
                            data-i18n="nav.dash.ecommerce"> صيانه </a>
                        </li>
                        @endif

                        @if(\App\Models\Role::havePremission(['car_done']))
                        <li @if(isset($name_page)) @if($name_page == "تم الانتهاء") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.done')}}"
                            data-i18n="nav.dash.ecommerce"> تم الانتهاء </a>
                        </li>
                        @endif

                        @if(\App\Models\Role::havePremission(['car_cancel']))
                        <li @if(isset($name_page)) @if($name_page == "الغاء") class="active" @endif  @endif>
                        <a class="menu-item" href="{{route('admin.cancel')}}"
                            data-i18n="nav.dash.ecommerce"> الغاء </a>
                        </li>
                        @endif
                        
                    </ul>
                </li>
            @endif 


            @if(\App\Models\Role::havePremission(['asnaf_view','asnaf_cr','asnaf_idt']))
                <li class="nav-item">
                    <a href=""><i class="la la-undo"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> نوع السيارة </span>
                    </a>
                    <ul class="menu-content">
                        @if(\App\Models\Role::havePremission(['asnaf_view','asnaf_idt']))
                        <li
                        @if(View::hasSection('asnaf_view')) class="active" @endif
                        ><a class="menu-item" href="{{route('admin.asnaf')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                        </li>
                        @endif
                        @if(\App\Models\Role::havePremission(['asnaf_cr']))
                            <li
                            @if(View::hasSection('asnaf_cr')) class="active" @endif
                            ><a class="menu-item" href="{{route('admin.asnaf.create')}}" data-i18n="nav.dash.crypto">
                                    أضافه جديد </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif 
            
            @if(\App\Models\Role::havePremission(['admin_view','admin_cr','admin_idt']))
            <li class="nav-item">
                <a href=""><i class="la la-user-secret"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{ __('Admin') }} </span>
                </a>
                <ul class="menu-content">
                    
                    @if(\App\Models\Role::havePremission(['admin_view','admin_idt']))
                    <li @if(View::hasSection('admin_view')) class="active" @endif
                    ><a class="menu-item" href="{{route('admin.admin')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    @endif
                    @if(\App\Models\Role::havePremission(['admin_cr']))
                    <li @if(View::hasSection('admin_cr')) class="active" @endif
                    ><a class="menu-item" href="{{route('admin.admin.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                    @endif
                   
                    {{-- Role --}}
                    @if(\App\Models\Role::havePremission(['role_view','role_cr','role_idt']))
                    <li class="nav-item">
                        <a href="">
                            <i class="la la-map-marker"></i>
                            <span class="menu-title" data-i18n="nav.dash.main"> {{ __('Permission') }} </span>
                        </a>
                        <ul class="menu-content">
                         @if(\App\Models\Role::havePremission(['role_view','role_idt']))
                            <li
                            @if(View::hasSection('role_view')) class="active" @endif
                            ><a class="menu-item" href="{{route('admin.role')}}"   class="active"
                                   data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                            </li>
                            @endif
                             @if(\App\Models\Role::havePremission(['role_cr']))
                            <li
                            @if(View::hasSection('role_cr')) class="active" @endif
                            ><a class="menu-item" href="{{route('admin.role.create')}}" data-i18n="nav.dash.crypto">
                                    أضافه جديد </a>
                            </li>
                            @endif
                        </ul>
                     </li>
                     @endif


                    
                </ul>
            </li>
            @endif

        </ul>
    </div>
</div>
