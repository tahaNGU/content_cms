<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="javascript:void(0)"> <img alt="تصویر" src="{{asset("admin/assets/img/logo.png")}}" class="header-logo"> <span
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
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="user"></i><span>گروه دسترسی مدیران</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route('admin.permission.create')}}">گروه دسترسی جدید</a></li>
                    <li><a class="nav-link" href="{{route('admin.permission.index')}}">لیست گروه دسترسی</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="user"></i><span>مدیران</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route("admin.manager.create")}}">مدیر جدید</a></li>
                    <li><a class="nav-link" href="{{route("admin.manager.index")}}">لیست مدیران</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>بنر</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route("admin.banner.create")}}">بنر جدید</a></li>
                    <li><a class="nav-link" href="{{route("admin.banner.index")}}">لیست بنر ها</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>دسته بندی اخبار</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route("admin.news_cat.create")}}">دسته بندی اخبار جدید</a></li>
                    <li><a class="nav-link" href="{{route("admin.news_cat.index")}}">لیست دسته بندی اخبار</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>اخبار</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route("admin.news.create")}}">اخبار جدید</a></li>
                    <li><a class="nav-link" href="{{route("admin.news.index")}}">لیست اخبار</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="edit-2"></i><span>نظرات</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route("admin.comment.index")}}">لیست نظرات</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i data-feather="monitor"></i><span>اینستاگرام</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{route("admin.instagram.create")}}">اینستاگرام جدید</a></li>
                    <li><a class="nav-link" href="{{route("admin.instagram.index")}}">لیست اینستاگرام</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
