<footer class="container-fluid">
    <div class=" mt-5 mb-4 w-100">
        <div class="row">
            <div class="col-lg-2 col-4">
                <a href=""><img class="footer-img" src="{{asset('web/img/footer.png')}}" alt=""></a>
                <ul class="footer-links">
                    <li><a href="{{\App\Models\Setting::where('key','instagram')->first()->value??'#'}}"><img src="{{asset('web/img/insta.png')}}" alt=""></a></li>
                    <li><a href="{{\App\Models\Setting::where('key','twitter')->first()->value??'#'}}"><img src="{{asset('web/img/twi.png')}}" alt=""></a></li>
                    <li><a href="{{\App\Models\Setting::where('key','facebook')->first()->value??'#'}}"><img src="{{asset('web/img/facebook.png')}}" alt=""></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-8">
                <p class="footer-p">
                </p>
            </div>
            <div class="col-lg-3 col-5 footer-email">
                <p class="footer-p"> <i class="fas fa-paper-plane ml-2"></i>{{__('web.User.email')}} : &nbsp; &nbsp;<span>{{\App\Models\Setting::where('key','email')->first()->value??'-'}}</span></p>
                <p class="footer-p"><i class="fas fa-phone ml-2"></i>{{__('web.User.mobile')}} :<span>&nbsp; &nbsp; {{\App\Models\Setting::where('key','mobile')->first()->value??'#'}}</span> </p>
            </div>

{{--            <div class="col-lg-3 col-7 pl-0">--}}
{{--                <p class="footer-p">حمل تطبيقنا</p>--}}
{{--                <div class="flex social-btns">--}}
{{--                    <a class="app-btn blu flex vert" href="http:apple.com">--}}
{{--                        <p class="available">Available on the <br /> <span class="big-txt">App Store</span></p>--}}
{{--                        <i class="fab fa-apple"></i>--}}
{{--                    </a>--}}
{{--                    <a class="app-btn blu flex vert" href="http:google.com">--}}
{{--                        <p class="available">Get it on <br /> <span class="big-txt">Google Play</span></p>--}}
{{--                        <i class="fab fa-google-play"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-12">
                <ul class="sec-list">
                    <li><a href="{{url('terms')}}"> {{__('web.terms_and_conditions')}} </a></li>
                    <li><a href="{{url('privacy')}}"> {{__('web.privacy_and_conditions')}} </a></li>
                    <li><a href="{{url('commission')}}"> {{__('web.site_commission')}} </a></li>
                    <li><a href="{{url('about')}}"> {{__('crud.Setting.Pages.About')}} </a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-12">
                <p class="copyright">Copyright &copy; 2020 <a href="">Mnshour</a> </p>
            </div>
        </div>
    </div>
</footer>
