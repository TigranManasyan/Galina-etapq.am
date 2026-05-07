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
                    <li class="nav-item nav-item-submenu @if(Route::is('admin.groups.create')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="fa-solid fa-book"></i> <span>Էլ․ գրադարան </span></a>

                        <ul @if(Route::is('admin.library.create') || Route::is('admin.library.index')) style="display: block" @endif  class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="{{ route('admin.library.create') }}" class="nav-link @if(Route::is('admin.library.create')) active @endif">Ստեղծել</a></li>
                            <li class="nav-item"><a href="{{ route('admin.library.index') }}" class="nav-link @if(Route::is('admin.library.index')) active @endif">Ցանկ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu @if(Route::is('admin.article.create')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="fa-solid fa-newspaper"></i> <span>Նորություններ </span></a>

                        <ul @if(Route::is('admin.article.create') || Route::is('admin.article.index')) style="display: block" @endif  class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="{{ route('admin.article.create') }}" class="nav-link @if(Route::is('admin.article.create')) active @endif">Ստեղծել</a></li>
                            <li class="nav-item"><a href="{{ route('admin.article.index') }}" class="nav-link @if(Route::is('admin.article.index')) active @endif">Ցանկ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu @if(Route::is('admin.announcement.create')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="fa-solid fa-bullhorn"></i> <span>Հայտարարություններ </span></a>

                        <ul @if(Route::is('admin.announcement.create') || Route::is('admin.announcement.index')) style="display: block" @endif  class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="{{ route('admin.announcement.create') }}" class="nav-link @if(Route::is('admin.announcement.create')) active @endif">Ստեղծել</a></li>
                            <li class="nav-item"><a href="{{ route('admin.announcement.index') }}" class="nav-link @if(Route::is('admin.announcement.index')) active @endif">Ցանկ</a></li>
                        </ul>
                    </li>
                    <li class="nav-item nav-item-submenu @if(Route::is('admin.video.create')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="fa-solid fa-video"></i> <span>Տեսահոլովակներ </span></a>

                        <ul @if(Route::is('admin.video.create') || Route::is('admin.video.index')) style="display: block" @endif  class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="{{ route('admin.video.create') }}" class="nav-link @if(Route::is('admin.video.create')) active @endif">Ստեղծել</a></li>
                            <li class="nav-item"><a href="{{ route('admin.video.index') }}" class="nav-link @if(Route::is('admin.video.index')) active @endif">Ցանկ</a></li>
                        </ul>
                    </li>

                    <li class="nav-item nav-item-submenu @if(Route::is('admin.gallery.create')) nav-item-open @endif">
                        <a href="#" class="nav-link"><i class="fa-regular fa-image"></i> <span>Տեսադարան </span></a>

                        <ul @if(Route::is('admin.gallery.create') || Route::is('admin.gallery.index')) style="display: block" @endif  class="nav nav-group-sub" data-submenu-title="Layouts">
                            <li class="nav-item"><a href="{{ route('admin.gallery.create') }}" class="nav-link @if(Route::is('admin.gallery.create')) active @endif">Ստեղծել</a></li>
                            <li class="nav-item"><a href="{{ route('admin.gallery.index') }}" class="nav-link @if(Route::is('admin.gallery.index')) active @endif">Ցանկ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
