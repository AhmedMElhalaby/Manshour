@extends('Web.layouts.app')
@section('content')
    <section class="container-fluid services">
        <section class="container-fluid mt-5 navs">
            <div class="row">
                <div class="col-lg-12 pl-0 pr-0">
                    <div class="row">
                        <div class="col-lg-8 col-12 p-0">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">جميع الاقسام</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">السيارات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">العقارات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="four-sections" data-toggle="pill" href="#pills-four" role="tab" aria-controls="pills-four" aria-selected="false">الاجهزة</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="five-sections" data-toggle="pill" href="#pills-five" role="tab" aria-controls="pills-five" aria-selected="false">مواشي وحيوانات وطيور</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="six-sections" data-toggle="pill" href="#pills-six" role="tab" aria-controls="pills-six" aria-selected="false">اثاث</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="seven-sections" data-toggle="pill" href="#pills-seven" role="tab" aria-controls="pills-seven" aria-selected="false">مستلزمات شخصية</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-12"></div>
                        <div class="col-lg-2 col-12 p-0">
                            <div class="left-side">

                                <div class="dropdown">
                                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        جميع المناطق
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="navs-footer">
                                <hr>
                            </div>
                            <div class="col-lg-12 all-media p-0">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>
                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>

                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>

                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>

                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>

                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>

                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" type="submit">التفاصيل </button>
                                            </div>
                                            <h5 class="mt-0 mb-4 col-lg-9">يوضع هنا عنوان الاعلان فقط</h5>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 mt-4">
                                                <button class="btn my-2 my-sm-0 adds-name detail-btn" type="submit">اسم صاحب الاعلان </button>

                                            </div>
                                            <div class="col-lg-9">
                                                <p> يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر يوضع هنا وصف للاعلان ويكون مختصر </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <hr class="media-hr">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 text-center"><span class="add-to-fav color">اضافة الاعلان الى المفضلة <i class="far fa-heart"></i></span></div>
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-4">
                                                <div class="row">
                                                    <span class="col-lg-6 col-6 media-date">الدمام <i class="fas fa-map-marker-alt"></i></span>
                                                    <span class="col-lg-6 col-5 media-date">16:13 اليوم <i class="far fa-clock"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{asset('web/img/Rectangle.png')}}" alt="...">
                                </div>
                            </div>

                            <!-- End media section -->
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <hr class="navs-hr">
                            <ul class="nav nav-pills mb-3" id="pills-tab-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab-1" data-toggle="pill" href="#pills-home-1" role="tab" aria-controls="pills-home" aria-selected="true">جميع الموديلات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab-1" data-toggle="pill" href="#pills-profile-1" role="tab" aria-controls="pills-profile" aria-selected="false">تويوتا</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab-1" data-toggle="pill" href="#pills-contact-1" role="tab" aria-controls="pills-contact" aria-selected="false">فورد</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="four-sections-1" data-toggle="pill" href="#pills-four-1" role="tab" aria-controls="pills-four" aria-selected="false">شيفروليه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="five-sections-1" data-toggle="pill" href="#pills-five-1" role="tab" aria-controls="pills-five" aria-selected="false">قطع غيار وملحقات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="six-sections-1" data-toggle="pill" href="#pills-six-1" role="tab" aria-controls="pills-six" aria-selected="false">نيسان</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="seven-sections-1" data-toggle="pill" href="#pills-seven-1" role="tab" aria-controls="pills-seven" aria-selected="false">هونداي</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent-1">
                                <div class="tab-pane fade show active" id="pills-home-1" role="tabpanel" aria-labelledby="pills-home-tab"></div>
                                <div class="tab-pane fade" id="pills-profile-1" role="tabpanel" aria-labelledby="pills-profile-tab">



                                </div>
                                <div class="tab-pane fade" id="pills-contact-1" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                                <div class="tab-pane fade" id="pills-four-1" role="tabpanel" aria-labelledby="pills-four"> </div>
                                <div class="tab-pane fade" id="pills-five-1" role="tabpanel" aria-labelledby="pills-five">
                                    <hr class="navs-hr">

                                    <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab-2" data-toggle="pill" href="#pills-home-2" role="tab" aria-controls="pills-home" aria-selected="true">جميع قطع الغيار</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-profile-tab-2" data-toggle="pill" href="#pills-profile-2" role="tab" aria-controls="pills-profile" aria-selected="false">جنوط</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-contact-tab-2" data-toggle="pill" href="#pills-contact-2" role="tab" aria-controls="pills-contact" aria-selected="false">لوحة ميزة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="four-sections-2" data-toggle="pill" href="#pills-four-2" role="tab" aria-controls="pills-four" aria-selected="false">خدمات فحص السيارات</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="five-sections-2" data-toggle="pill" href="#pills-five-2" role="tab" aria-controls="pills-five" aria-selected="false">شاشة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="six-sections-2" data-toggle="pill" href="#pills-six-2" role="tab" aria-controls="pills-six" aria-selected="false">مسجل</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent-2">
                                        <div class="tab-pane fade show active" id="pills-home-2" role="tabpanel" aria-labelledby="pills-home-tab"></div>
                                        <div class="tab-pane fade" id="pills-profile-2" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
                                        <div class="tab-pane fade" id="pills-contact-2" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                                        <div class="tab-pane fade" id="pills-four-2" role="tabpanel" aria-labelledby="pills-four"> </div>
                                        <div class="tab-pane fade" id="pills-five-2" role="tabpanel" aria-labelledby="pills-five"> </div>
                                        <div class="tab-pane fade" id="pills-six-2" role="tabpanel" aria-labelledby="pills-six"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-six-1" role="tabpanel" aria-labelledby="pills-six"></div>
                                <div class="tab-pane fade" id="pills-seven-1" role="tabpanel" aria-labelledby="pills-seven"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four"></div>
                        <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-five"></div>
                        <div class="tab-pane fade" id="pills-six" role="tabpanel" aria-labelledby="pills-six"></div>
                        <div class="tab-pane fade" id="pills-seven" role="tabpanel" aria-labelledby="pills-seven"></div>
                    </div>

                </div>

            </div>


        </section>







    </section>
@endsection
