<div class="col-side-bar-menu">
    <div class="user-data-box">
        <div class="image-box"><img src="{{asset('site/assets/image/user.png')}}" alt=""></div>

        <div class="content-box">
            <div class="name-family">{{auth()->user()->fullname}}</div>
            <div class="des">خوش آمدید</div>
        </div>
    </div>

    <ul class="menu">
        <li><a href="{{route('user.panel')}}" class="active"><i class="fi fi-rr-apps icon"></i> داشبورد</a></li>
        <li><a href="#"><i class="fi fi-rr-heart icon"></i> لیست علاقمندی</a></li>
        <li><a href="{{route('user.comment')}}"><i class="fi fi-rr-comment icon"></i> نظرات</a></li>
        <li><a href="#" data-bs-toggle="modal" data-bs-target="#change-password"><i class="fi fi-rr-edit icon"></i>ویرایش رمز عبور</a></li>
        <li><a href="{{route('user.logout')}}" class="sign-out"><i class="fi fi-rr-sign-out icon"></i> خروج</a></li>
    </ul>
</div>
