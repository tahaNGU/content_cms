@extends("site.layout.base")
@section('head')
    <link rel="stylesheet" href="{{asset('site/assets/css/pages/page-11.css')}}">
    <link rel="stylesheet" href="{{asset('site/assets/css/pages/page-11-01.css')}}">
@endsection

@section('content')
    <div class="page-profile">


        <!-- bread crumb -->
        <div class="container-fluid container-bread-crumb">
            <div class="container-custom">
                <div class="row">
                    <div class="col">
                        <h1 class="page-title">حساب کاربری</h1>

                        <ul class="bread-crumb">
                            <li><a href="#">صفحه اصلی</a></li>
                            <li><a href="#">حساب کاربری</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bread crumb -->

        <!-- --------------------------------------------------------------------------------------------------------------- -->

        <div class="container-fluid container-profile">
            <div class="container-custom">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-12">
                        <div class="col-side-bar-menu">
                            <div class="user-data-box">
                                <div class="image-box"><img src="{{asset('site/assets/image/user.png')}}" alt=""></div>

                                <div class="content-box">
                                    <div class="name-family">فرناز ارجمند</div>
                                    <div class="des">خوش آمدید</div>
                                </div>
                            </div>

                            <ul class="menu">
                                <li><a href="#" class="active"><i class="fi fi-rr-apps icon"></i> داشبورد</a></li>
                                <li><a href="#"><i class="fi fi-rr-heart icon"></i> لیست علاقمندی</a></li>
                                <li><a href="#"><i class="fi fi-rr-comment icon"></i> نظرات</a></li>
                                <li><a href="#"><i class="fi fi-rr-edit icon"></i>ویرایش رمز عبور</a></li>
                                <li><a href="{{route('user.logout')}}" class="sign-out"><i class="fi fi-rr-sign-out icon"></i> خروج</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-9 col-md-8 col-12">
                        <div class="section-content-box">
                            <div class="section-title">
                                <span class="title">اطلاعات کاربری</span>
                                <a href="#" class="btn-custom"><i class="fi fi-rr-edit icon"></i> ویرایش</a>
                            </div>

                            <div class="content-box content-box">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="title">نام و نام خانوادگی</div>
                                        <div class="value">فرناز ارجمند</div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="title">شماره تلفن همراه</div>
                                        <div class="value">۰۹۰۱۶۱۵۶۷۸۷</div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="title">محل سکونت</div>
                                        <div class="value">تهران</div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="title">تاریخ تولد</div>
                                        <div class="value">۱۳۷۷/۰۷/۱۲</div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="title">ایمیل</div>
                                        <div class="value">a.rad@yahoo.com</div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                        <div class="title">شماره ثابت</div>
                                        <div class="value">۰۲۱-۵۵۴۴۳۳۲۲</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <a href="#" class="link-box">
                                    <i class="fi fi-rr-comment icon"></i>
                                    <div class="title">نظرات داده شده</div>
                                    <div class="count">۷۷ نظر</div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-12">
                                <a href="#" class="link-box">
                                    <i class="fi fi-rr-heart icon"></i>
                                    <div class="title">علاقمندی ها</div>
                                    <div class="count">۷ علاقمندی</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

