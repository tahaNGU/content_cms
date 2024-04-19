@extends('site.layout.base')
@section('head')
    <link rel="stylesheet" href="{{asset('site/assets/css/pages/page-07-02.css')}}">
@endsection
@section('content')
    <div class="page-blog-post">
        <!-- bread crumb -->
        <div class="container-fluid container-bread-crumb"
             @if(@$news['pic_banner']) style="background-image: url({{asset("upload/thumb1/".$news["pic_banner"])}}" @endif>
            <div class="container-custom">
                <div class="row">
                    <div class="col">
                        <h1 class="page-title">{{$news->h1()}}</h1>

                        <ul class="bread-crumb">
                            <li><a href="#">صفحه اصلی</a></li>
                            <li><a href="#">اخبار</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--/ bread crumb -->

        <!-- --------------------------------------------------------------------------------------------------------------- -->

        <div class="container-fluid container-blog-post">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <div class="post-header">
                            <div class="post-data-box">
                                <div>
                                    <div class="category-date-box">
                                        <span class="date">{{$news->date_convert('validity_date')}}</span>
                                        <a href="{{$news->news_cat->url}}"
                                           class="category-link">{{$news->news_cat->title}}</a>
                                    </div>

                                    <a href="#" class="link-title"><h1 class="title">{{$news['short_note']}}</h1></a>
                                </div>

                                <div>
                                    <div class="print-share-box">
                                        <a href="{{route('news.print',['news'=>$news['seo_url']])}}" class="item"><i
                                                class="icon-print"></i> چاپ صفحه</a>
                                        <a href="#" class="item" data-bs-toggle="modal" data-bs-target="#modal-share"><i
                                                class="icon-share"></i> اشتراک گذاری</a>
                                    </div>

                                    <div class="next-prv-post-box">
                                        @if($news->nextNews())
                                            <div class="post-item">
                                                <a href="{{$news->nextNews()->url}}" class="icon-box"><i
                                                        class="fi fi-rr-angle-right icon"></i> خبر
                                                    بعدی</a>
                                            </div>
                                        @endif
                                        <div class="divider">&nbsp;</div>
                                        @if($news->prevNews())
                                            <div class="post-item">
                                                <a href="{{$news->prevNews()->url}}" class="icon-box prv"> خبر قبلی<i
                                                        class="fi fi-rr-angle-left icon"></i></a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <a href="javascript:void(0)" class="image-box">
                                @if($news['pic'])
                                    <img src="{{asset("upload/thumb1/".$news["pic"])}}"
                                         alt="{{$news["alt_image"]}}"/>
                                @else
                                    <img src="{{asset("site/img/no_image/no_image(568x546).jpg")}}"
                                         alt="{{$news["alt_image"]}}"/>
                                @endif
                            </a>
                        </div>
                        <div class="des-box">
                            {!! $news["note_more"] !!}
                        </div>
                        @if(is_array($news->keyword()))
                            <div class="tag-box">
                                <div class="title">کلمه کلیدی</div>
                                <ul>
                                    @foreach($news->keyword() as $value)
                                        <li><a href="{{route('news.index',['keyword'=>$value])}}">{{$value}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="comment-box">
                            <div class="section-title">
                                <span class="title">نظرات کاربران</span>

                                <div class="btn-new-comment-des-box">
                                    <span class="des">شما هم می توانید درمورد این مطلب نظر بدهید</span>
                                    @auth
                                        <button type="button" class="btn-custom" data-bs-toggle="modal"
                                                data-bs-target="#modal-comment">افزودن نظر جدید
                                        </button>
                                    @else
                                        <a href="{{route('auth.login')}}" class="btn-custom">افزودن نظر جدید
                                        </a>
                                    @endauth
                                </div>
                            </div>

                            <div class="comment-item">
                                <div class="comment-data">
                                    <div class="image-box"><img src="{{asset("site/assets/image/user-w.png")}}" alt="">
                                    </div>

                                    <div class="comment-inner">
                                        <div class="user-date">
                                            <span class="user">حانیه ارجمندی</span>
                                            <span class="date">۱۴۰۰/۰۳/۲۳</span>
                                        </div>
                                        <div class="des">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            بالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                        </div>
                                        <div class="like">
                                            <span class="like-des">آیا این دیدگاه برایتان مفید بود؟</span>
                                            <button type="button" class="btn-like">۱۰ <i
                                                    class="fi fi-rr-thumbs-up icon"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-data answer">
                                    <div class="user-date">
                                        <span class="user">پاسخ پشتیبان</span>
                                        <span class="date">۱۴۰۰/۰۳/۲۳</span>
                                    </div>
                                    <div class="des">ممنون از نظر شما دوست عزیز</div>
                                </div>
                            </div>

                            <div class="comment-item">
                                <div class="comment-data">
                                    <div class="image-box"><img src="{{asset("site/assets/image/user-w.png")}}" alt="">
                                    </div>

                                    <div class="comment-inner">
                                        <div class="user-date">
                                            <span class="user">حانیه ارجمندی</span>
                                            <span class="date">۱۴۰۰/۰۳/۲۳</span>
                                        </div>
                                        <div class="des">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                            بالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                        </div>
                                        <div class="like">
                                            <span class="like-des">آیا این دیدگاه برایتان مفید بود؟</span>
                                            <button type="button" class="btn-like">۱۰ <i
                                                    class="fi fi-rr-thumbs-up icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- share -->
    <div class="modal fade modal-share" id="modal-share" tabindex="-1" aria-labelledby="modal-share" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">اشتراک گذاری</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="social-share">
                        <div class="title">اشتراک گذاری در شبکه های اجتماعی</div>
                        <ul class="items">
                            @include("site.layout.partials.social_media",['title'=>$news["title"],'url'=>$news['url']])
                        </ul>
                    </div>

                    <form action="{{route('news.mail',['id'=>$news['id']])}}" method="post" class="form"
                          id="send_mail_share">
                        @csrf
                        <input type="hidden" name="module" value="news">
                        <input type="hidden" name="item_id" value="{{$news['id']}}">
                        <div class="title">ارسال به ایمیل</div>
                        <input type="text" name="email" class="form-input" placeholder="ایمیل را وارد نمایید"/>
                        <button type="submit" class="btn-custom">ارسال</button>
                        <div class="page-link">
                            <div class="title">آدرس صفحه</div>
                            <div class="link">{{$news["url"]}}</div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--/ share -->

    <!-- add comment -->
    <div class="modal fade modal-comment" id="modal-comment" tabindex="-1" aria-labelledby="modal-comment"
         aria-hidden="true">
        <form action="{{route('comment.store',['type'=>'news','module_id'=>$news['id']])}}" method="post" class="form">
            @csrf
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">ارسال نظر</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <div class="score-box">--}}
{{--                                    <div class="title">امتیاز شما</div>--}}
{{--                                    <div class="star-box">--}}
{{--                                        <i class="fi fi-rr-star-fill"></i>--}}
{{--                                        <i class="fi fi-rr-star-fill"></i>--}}
{{--                                        <i class="fi fi-rr-star-fill"></i>--}}
{{--                                        <i class="fi fi-rr-star-fill"></i>--}}
{{--                                        <i class="fi fi-rr-star-fill"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row">
                            <div class="col-12">
                                <div class="input-box">
                                    <label for="form-comment-message">نظر شما</label>
                                    <textarea name="note" id="form-comment-message"
                                              class="form-textarea" placeholder="دیدگاه خود را بنویسید"></textarea>
                                    @error("note")
                                    <span class="text text-danger">{{$errors->first('note')}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn-custom-cancel" data-bs-dismiss="modal">انصراف و بازگشت</button>
                        <button type="submit" class="btn-custom">ثبت نظر</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--/ add comment -->
    {{--    <a href="{{route('comment.create',['type'=>'news','module_id'=>'1'])}}">mamad kojaeai</a>--}}
@endsection

@section("footer")
    @error("note")
    <script type="text/javascript">

        var myModal = new bootstrap.Modal(document.getElementById("modal-comment"), {});
        document.onreadystatechange = function () {
            myModal.show();
        };
    </script>
    @enderror
@endsection

