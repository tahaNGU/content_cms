@if(isset($comment[0]))
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

<div class="container-fluid container-pagination">
    <div class="container-custom">
        <div class="row">
            <div class="col">

                <ul class="pagination">
                    <li><a href="#" class="btn-next-prev"><i class="icon fi fi-rr-angle-right"></i></a></li>
                    <li><a href="#">۱</a></li>
                    <li><a href="#" class="active">۲</a></li>
                    <li><span>...</span></li>
                    <li><a href="#">۷</a></li>
                    <li><a href="#">۸</a></li>
                    <li><a href="#" class="btn-next-prev"><i class="icon fi fi-rr-angle-left"></i></a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
@endif
