@extends("site.layout.base")
@section('head')
    <link rel="stylesheet" href="{{asset('site/assets/css/pages/page-01-03.css')}}">

@endsection

@section('content')
    <div class="page-sign-up">
        <div class="container-sign-up">
            <div class="sign-up-box">
                <a href="#" class="logo"><img src="{{asset('site/assets/image/logo.png')}}" alt=""/></a>

                <form action="" method="post" class="form">
                    <div class="title">عضویت در سایت</div>
                    <div class="des">اگر قبلا ثبت نام نکرده اید اینجا ثبت نام کنید</div>

                    <div class="input-box">
                        <input type="text" name="name" class="form-input"
                               placeholder="نام"/>
                    </div>


                    <div class="input-box">
                        <input type="text" name="form-sign-up-name-family" class="form-input"
                               placeholder="نام خانوادگی"/>
                    </div>


                    <div class="input-box">
                        <input type="text" name="form-sign-up-mobile" class="form-input" placeholder="شماره همراه"/>
                    </div>

                    <div class="input-box">
                        <input type="password" name="form-sign-up-password" class="form-input" placeholder="رمز عبور"/>
                        <i class="fi fi-rr-eye btn-show-password"></i>
                    </div>

                    <div class="input-box input-check-box">
                        <label class="label-input-checkbox-by-style"><input type="checkbox"
                                                                            name="form-sign-in-newsletter"/>
                            دریافت خبرنامه</label>
                        <label class="label-input-checkbox-by-style"><input type="checkbox" name="form-sign-in-terms"/>
                            <a
                                href="#" target="_blank">قوانین و مقررات</a> سایت را می پذیرم</label>
                    </div>

                    <button name="form-sign-up-send" class="btn-custom">ثبت نام</button>

                    <a href="#" class="link-back"><i class="fi fi-rr-angle-right icon"></i> بازگشت به صفحه اصلی</a>
                </form>
            </div>
        </div>
    </div>
@endsection

