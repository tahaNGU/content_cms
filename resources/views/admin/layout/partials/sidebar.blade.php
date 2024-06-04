<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0)"> <img alt="تصویر" src="{{asset("admin/assets/img/logo.png")}}"
                                               class="header-logo"> <span
                    class="logo-name">اجیس</span>
            </a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="تصویر" src="{{asset("admin/assets/img/userbig.png")}}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{auth()->user()->fullname}}</div>
                <div class="user-role">مدیر</div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">اصلی</li>
            @canany(permission_access("role"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="user"></i><span>گروه دسترسی مدیران</span></a>
                    <ul class="dropdown-menu">
                        @can("create_role")
                            <li><a class="nav-link" href="{{route('admin.role.create')}}">گروه دسترسی جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route('admin.role.index')}}">لیست گروه دسترسی</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("manager"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="user"></i><span>مدیران</span></a>
                    <ul class="dropdown-menu">
                        @can("create_manager")
                            <li><a class="nav-link" href="{{route("admin.manager.create")}}">مدیر جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.manager.index")}}">لیست مدیران</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("banner"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>بنر</span></a>
                    <ul class="dropdown-menu">
                        @can("create_banner")
                            <li><a class="nav-link" href="{{route("admin.banner.create")}}">بنر جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.banner.index")}}">لیست بنر ها</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("user"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>کاربران</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route("admin.user.index")}}">لیست کاربران</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("menu"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>منو</span></a>
                    <ul class="dropdown-menu">
                        @can("create_menu")
                            <li><a class="nav-link" href="{{route("admin.menu.create")}}">منو جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.menu.index")}}">لیست منو ها</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("page"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>صفحات</span></a>
                    <ul class="dropdown-menu">
                        @can("create_page")
                            <li><a class="nav-link" href="{{route("admin.page.create")}}">صفحه جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.page.index")}}">لیست صفحه ها</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("news_cat"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>دسته بندی اخبار</span></a>
                    <ul class="dropdown-menu">
                        @can("create_news_cat")
                            <li><a class="nav-link" href="{{route("admin.news_cat.create")}}">دسته بندی اخبار جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.news_cat.index")}}">لیست دسته بندی اخبار</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("news"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>اخبار</span></a>
                    <ul class="dropdown-menu">
                        @can("create_news")
                            <li><a class="nav-link" href="{{route("admin.news.create")}}">اخبار جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.news.index")}}">لیست اخبار</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("comment"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="edit-2"></i><span>نظرات</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{route("admin.comment.index")}}">لیست نظرات</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("instagram"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>اینستاگرام</span></a>
                    <ul class="dropdown-menu">
                        @can("create_instagram")
                            <li><a class="nav-link" href="{{route("admin.instagram.create")}}">اینستاگرام جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.instagram.index")}}">لیست اینستاگرام</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("product_cat"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i
                            data-feather="monitor"></i><span>دسته بندی محصولات</span></a>
                    <ul class="dropdown-menu">
                        @can("create_product_cat")
                            <li><a class="nav-link" href="{{route("admin.product_cat.create")}}">دسته بندی محصول جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.product_cat.index")}}">لیست دسته بندی محصولات</a></li>
                    </ul>
                </li>
            @endcanany
            @canany(permission_access("product"))
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span> محصولات</span></a>
                    <ul class="dropdown-menu">
                        @can("create_product")
                            <li><a class="nav-link" href="{{route("admin.product.create")}}">محصول جدید</a></li>
                        @endcan
                        <li><a class="nav-link" href="{{route("admin.product.index")}}">لیست محصولات</a></li>
                    </ul>
                </li>
            @endcanany
        </ul>
    </aside>
</div>
