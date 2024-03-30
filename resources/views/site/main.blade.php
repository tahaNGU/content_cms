@extends("site.layout.base")


@section('content')

    <!-- page slider -->
    <div class="container-fluid container-page-slider">
        <div class="page-slider-items" dir="rtl">
            <a href="" class="item">
                <div class="image-box"><img src="{{asset("site/assets/image/slider-01.jpg")}}" alt=""/></div>
                <h3 class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                    گرافیک است</h3></a>
            <a href="" class="item">
                <div class="image-box"><img src="{{asset("site/assets/image/slider-02.jpg")}}" alt=""/></div>
                <h3 class="title">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                    گرافیک است</h3></a>
        </div>

        <div class="slick-counter-button">
            <button class="slick-next-custom" type="button"><i class="fi fi-rr-angle-right icon"></i></button>
            <button class="slick-prev-custom" type="button"><i class="fi fi-rr-angle-left icon"></i></button>

            <div class="slick-counter"></div>
        </div>
    </div>
    <!--/ page slider -->


    <!-- category -->
    <div class="container-category">
        <a href="" class="category-item">
            <svg>
                <use xlink:href="#icon-category-panbeh"/>
            </svg>
            <span class="title">پنبه</span>
        </a>

        <a href="" class="category-item">
            <svg>
                <use xlink:href="#icon-category-band"/>
            </svg>
            <span class="title">باند</span>
        </a>

        <a href="" class="category-item">
            <svg>
                <use xlink:href="#icon-category-gaz"/>
            </svg>
            <span class="title">گاز</span>
        </a>
    </div>


    <svg height="0" width="0" class="display-none">
        <symbol id="icon-category-panbeh" viewBox="0 0 120 131.996">
            <g transform="translate(-784 -1059)">
                <path
                    d="M119.7,101.058a32.008,32.008,0,0,1-9.073-58.279,20.012,20.012,0,0,1,18.823-26.773q.983,0,1.954.094a26.012,26.012,0,0,1,48.172.194A26.018,26.018,0,0,1,209.45,42a25.9,25.9,0,0,1-2.756,11.66,28,28,0,0,1-15.93,48.143c-2.271,3.229-10.289,7.9-25.652,15.6-2.08,6.586-4.859,11.314-8.41,14.156a2,2,0,0,1-2.5,0c-3.551-2.841-6.33-7.569-8.41-14.156-16.6-8.322-24.622-13.1-26.091-16.351Zm10.442-81.039c-.23-.009-.46-.015-.692-.015a16.008,16.008,0,0,0-14.5,22.777,2,2,0,0,1-.855,2.606,28.008,28.008,0,0,0,7.521,52.007c4.4-2.91,11.3-4.652,20.745-5.324q6.692-9.517,11.551-15.349a2,2,0,0,1,3.073,0q4.862,5.834,11.551,15.349c9.939.708,17.069,2.6,21.432,5.8a24,24,0,0,0,14.595-40.7,26.092,26.092,0,0,1-2.73,3.211,2,2,0,0,1-2.829-2.829,22.1,22.1,0,0,0,3.42-4.415c.009-.017.019-.035.029-.052A22.006,22.006,0,0,0,183.449,20q-.721,0-1.434.046a21.911,21.911,0,0,0-14.122,6.4,2,2,0,0,1-2.829-2.828A25.949,25.949,0,0,1,175.62,17.2a22.011,22.011,0,0,0-39.668-1.4l-.1.2A21.9,21.9,0,0,0,133.45,26a2,2,0,0,1-4,0,26.11,26.11,0,0,1,.692-5.986Zm14.946,75.13a2,2,0,0,1-1.514.85c-9.007.563-15.47,2.091-19.353,4.477.047.041.095.083.145.125A40.184,40.184,0,0,0,129,103.8q6.41,3.946,19.346,10.415a2,2,0,0,1,1.021,1.214c1.621,5.4,3.667,9.353,6.084,11.868,2.417-2.515,4.463-6.464,6.084-11.868a2,2,0,0,1,1.021-1.214q12.927-6.464,19.346-10.415a40.182,40.182,0,0,0,4.631-3.2c.051-.042.1-.084.145-.125-3.883-2.386-10.346-3.914-19.353-4.477a2,2,0,0,1-1.514-.85q-5.906-8.437-10.361-13.986Q151,86.71,145.088,95.149ZM181.449,64a2,2,0,0,1-4,0,16,16,0,0,0-16-16,2,2,0,1,1,0-4,20,20,0,0,1,20,20Zm-40-8a2,2,0,0,1,0,4,16,16,0,0,0-16,16,2,2,0,1,1-4,0,20,20,0,0,1,20-20Z"
                    transform="translate(688.55 1058.995)"/>
            </g>
        </symbol>

        <symbol id="icon-category-band" viewBox="0 0 117.395 145.441">
            <g transform="translate(-339.077 -537.887)">
                <path
                    d="M406.993,542.482c2.3,1.113,4.644,2.164,6.907,3.354a36.877,36.877,0,0,1,10.081,7.4c2.515,2.712,4.308,5.674,3.86,9.57a8.726,8.726,0,0,0,.97,3.725c3.06,8.024,8.48,14.356,15.232,19.714.759.6,1.555,1.16,2.324,1.75a7.465,7.465,0,0,1,2.806,8.533c-.988,3.1-2.018,6.184-3.13,9.581,2.123.288,4.1.575,6.085.817.7.085,1.411.042,2.115.094,1.96.145,2.86,1.873,1.74,3.426-1.079,1.5-2.218,2.954-3.393,4.378a1.605,1.605,0,0,0-.269,1.947c2.049,4.571,2.279,3.776-1.472,7.228-1.1,1.015-1.75,2.01-1.393,3.553a15,15,0,0,1,.214,2.567c.1,1.807-.717,2.715-2.575,2.548-2.458-.221-4.9-.63-7.35-.979-.608-.087-1.2-.256-1.864-.4l-4.49,13.721c2.62.282,5.1.594,7.594.8,1.066.086,2.032.173,2.564,1.249s0,1.9-.641,2.694c-1.05,1.306-2.138,2.587-3.1,3.949a2.072,2.072,0,0,0-.305,1.583c1.492,5.03,1.806,3.712-1.8,7.594a3.008,3.008,0,0,0-.939,2.625c.148,1.193.181,2.4.219,3.6.052,1.6-.727,2.495-2.371,2.35-3.111-.274-6.21-.725-9.576-1.134-.218.664-.518,1.581-.818,2.5-.573,1.752-1.125,3.512-1.725,5.254a7.72,7.72,0,0,1-12.428,3.348c-6.9-5.642-12.431-12.292-15.575-20.61-.06-.159-.151-.308-.22-.448-.114-.021-.221-.078-.275-.047-5.079,2.873-10.662,2.929-16.3,2.287-11.193-1.275-21.588-4.838-30.7-11.549a32.97,32.97,0,0,1-6.068-6.15,8.683,8.683,0,0,1-1.273-8.573q14.946-45.444,29.76-90.93a9.166,9.166,0,0,1,5.885-6.07,28.794,28.794,0,0,1,13.3-1.178c3.066.329,6.1,1.017,9.148,1.54.385.065.776.1,1.163.144Zm14.283,26.495c-1.51.286-2.823.607-4.159.777a44.627,44.627,0,0,1-16.8-1.374c-3.677-.945-7.266-2.258-10.867-3.485a1.942,1.942,0,0,1-1.262-2.62,2.071,2.071,0,0,1,2.69-1.192c.339.1.662.252.991.383a59.371,59.371,0,0,0,20.536,4.359,19.159,19.159,0,0,0,8.655-1.342c2.681-1.234,3.472-3.344,1.838-5.793a20.547,20.547,0,0,0-4.391-4.828c-9.482-7.339-20.4-10.933-32.288-11.756a20.654,20.654,0,0,0-9.841,1.334c-2.815,1.23-3.5,3.248-1.866,5.85.872,1.386,2.162,2.521,3.126,3.862a3.735,3.735,0,0,1,.851,2.27c-.172,1.524-2.128,2.04-3.395.922-1.233-1.089-2.324-2.331-3.575-3.6l-.349,1.066q-13.779,42.1-27.571,84.2a4.305,4.305,0,0,0,.542,4.186,26.431,26.431,0,0,0,4.4,4.825c9.42,7.262,20.259,10.821,32.049,11.673a22.061,22.061,0,0,0,9.492-1.118,5.2,5.2,0,0,0,3.361-3.464q13.662-41.937,27.41-83.845Zm4.227.762-.6,1.817q-13.494,41.235-27.016,82.461a5.66,5.66,0,0,0-.008,3.745c2.8,8.43,8.168,15.1,15.116,20.679a3.4,3.4,0,0,0,5.427-1.659c.871-2.51,1.665-5.046,2.482-7.574a2.406,2.406,0,0,0,.049-.573c-4.8-2.228-7.806-4.528-10.145-7.712a3.758,3.758,0,0,1-.845-3.51c2.028-6.235,4.037-12.476,6.136-18.687a3.45,3.45,0,0,1,5.213-1.661,6.386,6.386,0,0,1,1.512,1.614,13.69,13.69,0,0,0,6.444,4.741l4.443-13.575-1.008-.468a23.781,23.781,0,0,1-9.076-7.079,4.335,4.335,0,0,1-.782-4.354c1.931-5.725,3.8-11.471,5.644-17.225.5-1.544,1.29-2.727,3.031-2.987,1.8-.269,2.987.651,3.967,2.057a13.56,13.56,0,0,0,6.546,4.884c1-3.042,1.97-6,2.935-8.972.723-2.224.272-3.263-1.618-4.826-2.879-2.381-5.789-4.751-8.442-7.36A44.787,44.787,0,0,1,425.5,569.739Zm24.719,41.213c-6.944-.947-13.209-2.8-17.877-8.275-1.752,5.353-3.406,10.525-5.159,15.664a2.141,2.141,0,0,0,.545,2.417,22.644,22.644,0,0,0,11.8,6.659c1.855.46,3.758.726,5.768,1.1-.081-.982-.091-1.67-.2-2.343a3.773,3.773,0,0,1,1.508-3.957c.884-.675,2.114-1.449,2.272-2.348.17-.967-.733-2.132-1.168-3.21-.017-.04-.033-.08-.052-.119a2.255,2.255,0,0,1,.291-2.638C448.685,613.018,449.359,612.08,450.222,610.952Zm-12.8,38.8c-6.862-.971-13.126-2.811-17.782-8.263-1.755,5.363-3.4,10.5-5.138,15.6a2.225,2.225,0,0,0,.566,2.524c3.695,4.074,8.522,5.973,13.77,7.066,1.217.254,2.463.37,3.986.591-.982-3.3-.266-5.86,2.283-7.784a1.668,1.668,0,0,0,.527-2.353c-1.281-2.45-1-4.608,1.106-6.449A6.317,6.317,0,0,0,437.425,649.753Z"/>
                <path
                    d="M390.229,600.687c1.853.606,3.531,1.149,5.2,1.705,3.392,1.125,4.561,3.353,3.492,6.641-.3.937-.6,1.876-.921,2.808a4.581,4.581,0,0,1-5.92,3.052c-.983-.259-1.941-.615-2.91-.929-.921-.3-1.842-.6-2.963-.969-.544,1.663-1.057,3.234-1.572,4.8-1.178,3.588-3.265,4.609-6.965,3.408-.884-.287-1.772-.564-2.649-.872-2.909-1.022-4.113-3.318-3.218-6.149.552-1.744,1.135-3.478,1.742-5.334-1.82-.6-3.5-1.133-5.166-1.693-3.384-1.137-4.552-3.371-3.494-6.662.315-.979.607-1.966.97-2.927a4.581,4.581,0,0,1,6.021-2.874c1.858.556,3.69,1.2,5.695,1.854.562-1.72,1.089-3.335,1.62-4.949,1.113-3.381,3.309-4.439,6.836-3.292,1.094.357,2.2.684,3.274,1.1a4.415,4.415,0,0,1,2.816,5.46C391.566,596.747,390.911,598.6,390.229,600.687Zm3.533,10.448c.414-1.264.709-2.336,1.118-3.363.336-.843.1-1.233-.78-1.5-2.2-.674-4.385-1.409-6.569-2.139-1.913-.64-2.377-1.509-1.8-3.344.452-1.43.929-2.852,1.4-4.277,1.065-3.254,1.054-3.219-2.362-4.308-.98-.313-1.322-.041-1.586.836-.654,2.173-1.382,4.325-2.107,6.477-.52,1.542-1.434,2-3.047,1.5-1.566-.48-3.117-1.011-4.675-1.521-3.39-1.109-3.359-1.1-4.409,2.22-.289.913-.08,1.312.856,1.6,2.33.71,4.643,1.477,6.945,2.271a2,2,0,0,1,1.438,2.753c-.474,1.557-1,3.1-1.509,4.644-1.075,3.287-1.065,3.255,2.314,4.35.936.3,1.331.148,1.6-.78.644-2.176,1.373-4.328,2.107-6.477.549-1.607,1.479-2.04,3.163-1.516,1.353.421,2.695.877,4.042,1.317Z"/>
                <path
                    d="M396.661,559.454c-2.076-1.147-4.212-2.2-6.2-3.48A8.906,8.906,0,0,1,388,553.459c-1.73-2.567-.81-5.5,2.192-6.259a18.6,18.6,0,0,1,6.371-.326,21.042,21.042,0,0,1,10.81,4.359,10.321,10.321,0,0,1,2.249,2.366c1.722,2.58.761,5.316-2.174,6.319-2.9.99-5.824.532-8.735-.141-.644-.149-1.263-.4-1.894-.611Zm-5.062-8.282c1.464,3.267,12.015,6.5,14.445,4.649C404.066,552.43,394.32,549.537,391.6,551.172Z"/>
                <path
                    d="M383.412,557.45a2.026,2.026,0,0,1,1.366,2.579,2.119,2.119,0,0,1-4.023-1.331A2.082,2.082,0,0,1,383.412,557.45Z"/>
                <path
                    d="M391.6,551.172c2.721-1.635,12.467,1.258,14.445,4.649C403.614,557.671,393.063,554.439,391.6,551.172Z"/>
            </g>
        </symbol>

        <symbol id="icon-category-gaz" viewBox="0 0 120 113.026">
            <g id="noun-document-1178990" transform="translate(-126.651 -66.652)">
                <path
                    d="M171.617,66.652,146.04,136.807s-8.04-3.651-18.027-7.8c-5.358,17.543,6.819,27.045,6.819,27.045s23.387,11.937,47.99,21.923c14.394,5.84,26.117-4.482,33.371-14.063a65.975,65.975,0,0,0,9.932-18.884l20.525-61.568ZM130.784,134.4c7.77,3.291,13.568,5.925,13.637,5.952l3.833,1.743s19.784,8.271,30.018,12.657c-2.021,8.79-.624,14.315,1.239,17.639-20.673-8.649-39.6-18.141-42.518-19.614a20.654,20.654,0,0,1-6.209-18.378Zm91.639,9.39a62.691,62.691,0,0,1-9.341,17.768c-4.371,5.771-11.018,12.533-18.9,13.949a10.888,10.888,0,0,1-6.528-.843c-11.2-5.22-4.107-22.268-4.107-22.268l-33.915-14.1,24.464-67.1,67.476,15.117Z"
                    transform="translate(0)"/>
            </g>
        </symbol>
    </svg>
    <!--/ category -->


    <!-- about -->
    <div class="container-fluid container-about">
        <div class="container-custom">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-video">
                    <img src="{{asset("site/assets/image/home-about.jpg")}}" class="video-poster"/>
                    <!--                <video preload="none">-->
                    <!--                    <source src="" type="video/mp4">-->
                    <!--                </video>-->
                    <span class="icon-play" data-bs-toggle="modal" data-bs-target="#modal-video"></span>
                </div>

                <div class="col-12 col-md-12 col-lg-6">
                    <div class="col-des">
                        <div class="title">درباره ما</div>

                        <div class="des">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
                            کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                            با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                            در زبان فارسی ایجاد کرد.
                        </div>

                        <div class="link-more-box">
                            <a href="" class="link-more">مشاهده بیشتر</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about -->


    <!-- product -->
    <div class="container-fluid container-product">
        <div class="container-custom">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="title center">محصولات ما</div>
                    </div>

                    <div class="product-items" dir="rtl">
                        <a href="" class="product-item">
                            <img src="{{asset("site/assets/image/product/product-01.png")}}" alt=""/>
                            <h3 class="title">گاز طبی ۵*۵ سانتیمتر کاوه<br/><br/></h3>
                            <div class="price-box">
                                <div class="price">۱۲۶,۰۰۰<span class="price-unit">تومان</span></div>
                            </div>
                        </a>

                        <a href="" class="product-item">
                            <img src="{{asset("site/assets/image/product/product-02.png")}}" alt=""/>
                            <h3 class="title">گاز طبی ۵*۵ سانتیمتر کاوه<br/><br/></h3>
                            <div class="price-box">
                                <div class="price">۱۲۶,۰۰۰<span class="price-unit">تومان</span></div>
                            </div>
                        </a>

                        <a href="" class="product-item">
                            <img src="{{asset("site/assets/image/product/product-03.png")}}" alt=""/>
                            <h3 class="title">گاز طبی ۵*۵ سانتیمتر کاوه<br/><br/></h3>
                            <div class="price-box">
                                <div class="price">۱۲۶,۰۰۰<span class="price-unit">تومان</span></div>
                            </div>
                        </a>

                        <a href="" class="product-item">
                            <img src="{{asset("site/assets/image/product/product-01.png")}}" alt=""/>
                            <h3 class="title">گاز طبی ۵*۵ سانتیمتر کاوه<br/><br/></h3>
                            <div class="price-box">
                                <div class="price">۱۲۶,۰۰۰<span class="price-unit">تومان</span></div>
                            </div>
                        </a>

                        <a href="" class="product-item">
                            <img src="{{asset("site/assets/image/product/product-02.png")}}" alt=""/>
                            <h3 class="title">گاز طبی ۵*۵ سانتیمتر کاوه<br/><br/></h3>
                            <div class="price-box">
                                <div class="price">۱۲۶,۰۰۰<span class="price-unit">تومان</span></div>
                            </div>
                        </a>

                        <a href="" class="product-item">
                            <img src="{{asset("site/assets/image/product/product-03.png")}}" alt=""/>
                            <h3 class="title">گاز طبی ۵*۵ سانتیمتر کاوه<br/><br/></h3>
                            <div class="price-box">
                                <div class="price">۱۲۶,۰۰۰<span class="price-unit">تومان</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ product -->


    <!-- banner -->
    <div class="container-fluid container-banner">
        <div class="container-custom">
            <div class="row">
                <div class="col">
                    <div class="des">بهترین ها را با گاز استریل کاوه تجربه کنید</div>
                </div>
            </div>
        </div>
    </div>
    <!--/ banner -->


    <!-- blog -->
    @if(isset($news[0]))
        <div class="container-fluid container-blog">
            <div class="container-custom">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <div class="title">بلاگ</div>
                            <a href="" class="link">مشاهده بیشتر</a>
                        </div>

                        <div class="blog-top-items" dir="rtl">
                            @foreach($news as $item)
                                <div class="blog-top-item">
                                    <a href="" class="image-box">
                                        @if(@$item['pic'])
                                        <img src="{{asset("upload/thumb2/".$item["pic"])}}" alt=""/>
                                        @else
                                        <img src="{{asset("site/img/no_image/no_image(372x358).jpg")}}" alt=""/>
                                        @endif
                                    </a>

                                    <div class="post-data-box">
                                        <div class="date-box">
                                            <span class="date">{{$item->date_convert('validity_date')}}</span>
                                        </div>

                                        @if(isset($item->news_cat->title))
                                        <div class="category-box">
                                            <a href="" class="category-link">{{$item->news_cat->title}}</a>
                                        </div>
                                        @endif

                                        <a href="" class="link-title"><span class="title">{{$item["title"]}}<br/><br/>
                                            </span></a>

                                        <div class="des-link-more-box">
                                            <div class="des">{{$item["note"]}}</div>

                                            <div class="link-more-box">
                                                <a href="" class="link-more">مشاهده بیشتر</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <!-- certificate -->
    <div class="container-fluid container-certificate">
        <div class="container-custom">
            <div class="row">
                <div class="col-12">
                    <div class="section-title section-title-white">
                        <div class="title center">گواهینامه ها و تندیس ها</div>
                        <a href="" class="link">مشاهده بیشتر</a>
                    </div>
                    <div class="certificate-items" dir="rtl">
                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-01.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-02.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-01.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-02.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-01.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-02.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-01.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>

                        <div class="certificate-item">
                            <div class="image-box"><img
                                    src="{{asset("site/assets/image/certificate/certificate-02.png")}}" alt=""/></div>
                            <div class="des">دریافت تقدیرنامه مسئول کنترل کیفیت نمونه استان مرکزی از اداره استاندارد و
                                تحقیقات صنعتی استان مرکزی در سالهای ۱۳۸۴ و ۱۳۹۴<br/><br/><br/><br/></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ certificate -->


    <!-- instagram -->
    <div class="container-fluid container-instagram">
        <div class="container-custom">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="title">ما را در اینستاگرام دنبال کنید</div>
                    </div>
                    <div class="section-title section-title-2">
                        <a href="" class="link">Kaveh.bgc <i class="fi fi-rr-instagram"></i></a>
                    </div>

                    <div class="instagram-items" dir="rtl">
                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-01.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-02.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-03.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-04.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-01.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-02.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-03.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-04.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-01.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-02.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-03.jpg")}}"
                                                              alt=""/></a>
                        </div>

                        <div class="slide-instagram-item">
                            <a href="" class="image-box"><img src="{{asset("site/assets/image/blog/blog-04.jpg")}}"
                                                              alt=""/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ instagram -->

@endsection
