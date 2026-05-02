<!-- Main sidebar -->
<div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        <span class="font-weight-semibold">Main sidebar</span>
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <div class="sidebar-content">
        <div class="card card-sidebar-mobile">
            <div class="card-header header-elements-inline">
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#"><img src="{{ asset('assets/logo.png') }}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold">{{  auth()->user()->email }}</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> &nbsp;Yerevan, Armenia
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="nav nav-sidebar" data-nav-type="accordion">
                    <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                    <li class="nav-item">
                        <a href="/admin" class="nav-link">
                            <i class="icon-home4"></i>
                            <span>Գլխավոր էջ</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.document.index') }}" class="nav-link"><i class="fa-solid fa-file"></i>Փաստաթղթեր</a>
                    </li>
{{--                    <li class="nav-item nav-item-submenu @if(Route::is('admin.groups.create')) nav-item-open @endif">--}}
{{--                        <a href="#" class="nav-link"><i class="icon-users4"></i> <span>Խմբեր </span></a>--}}

{{--                        <ul @if(Route::is('admin.groups.create') || Route::is('admin.groups.index')) style="display: block" @endif  class="nav nav-group-sub" data-submenu-title="Layouts">--}}
{{--                            <li class="nav-item"><a href="" class="nav-link @if(Route::is('admin.groups.create')) active @endif">Ստեղծել</a></li>--}}
{{--                            <li class="nav-item"><a href="" class="nav-link @if(Route::is('admin.groups.index')) active @endif">Ցանկ</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
