@extends("site.layout.base")
@section('head')
    <link rel="stylesheet" href="{{asset('site/assets/css/pages/page-01-02.css')}}">

@endsection

@section('content')
    <div class="page-sign-in">
        <div class="container-sign-in">
            <div class="sign-in-box">
                <a href="{{$main_url}}" class="logo"><img src="{{asset('site/assets/image/logo.png')}}" alt=""/></a>

                <form action="{{route('auth.send_form')}}" method="post" class="form">
                    @csrf
                    <div class="title my-3">فراموشی رمز عبور</div>
                    <div class="des">برای ارسال کد تایید نام کاربری خود را وارد کنید</div>
                    <div class="input-box">
                        <input type="text" name="username" value="{{$username}}" class="form-input" placeholder="نام کاربری"/>
                        @error('username') <span class="text text-danger">{{$errors->first('username')}}</span> @enderror
                    </div>
                    <button type="submit" class="btn-custom">بازیابی رمز عبور</button>
                    <a href="{{$main_url}}" class="link-back"><i class="fi fi-rr-angle-right icon"></i> بازگشت به صفحه اصلی</a>
                </form>
            </div>
        </div>
    </div>
@endsection
