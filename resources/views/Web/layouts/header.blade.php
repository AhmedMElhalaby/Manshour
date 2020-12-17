<header>
    <nav class="navbar navbar-expand-lg navbar-light linear-gradient top-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse links" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-menu-icon pr-0">
                    <li class="nav-item active">
                        <a class="nav-link c-w" href="{{url('app/lang')}}" role="button">
                            <img src="{{asset('web/img/Icon%20metro-language.png')}}" alt="">
                            @if (app()->getLocale() == 'ar')
                                <span>{{__('English')}}</span>
                            @else
                                <span>{{__('عربي')}}</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-w" href="{{url('about')}}"> <img src="{{asset('web/img/Group%2015235.png')}}" alt=""> {{__('crud.Setting.Pages.About')}}</a>
                    </li>
                    <li class="nav-item c-w">
                        <a class="nav-link c-w" href="{{url('commission')}}"> <i class="fas fa-money-bill-wave"></i> {{__('crud.Setting.Pages.Commission')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-w" href="{{url('faq')}}"> <i class="fas fa-question-circle"></i> {{__('crud.Setting.Pages.Faq')}}</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link c-w" href="{{url('contact_us')}}"> <i class="fas fa-headset"></i> {{__('crud.Setting.Pages.Contact')}} </a>
                    </li>
                </ul>
                <ul class="navbar-nav left-icon">
                    <li class="nav-item">
                        <a class="nav-link c-w" href="{{\App\Models\Setting::where('key','twitter')->first()->value??'#'}}"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-w" href="{{\App\Models\Setting::where('key','instagram')->first()->value??'#'}}"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link c-w" href="{{\App\Models\Setting::where('key','facebook')->first()->value??'#'}}"><i class="fab fa-facebook-square"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light  pb-0 container-fluid" style="margin-bottom: 15px">
        <div class="row ">
            <div class="col-lg-2 col-12 col-md-3"><a class="pr-0" href="{{url('/')}}"><img class="logo" src="{{asset('web/img/logo.png')}}" alt=""></a></div>
            <form class="col-lg col-12 col-md-9 form-inline">
                <input class="search form-control col-lg-4 col-9" id="q" name="q" type="search" value="{{request('q')}}" placeholder="{{__('admin.search')}}" aria-label="Search">
                <button class="btn btn-gradient my-2 my-sm-0 col-lg-1 col-3" type="submit"><i class="fas fa-search"></i></button>
                <section class="dropdown top-navbar col-lg-2 col-5"> <a class="user-color dropdown-toggle nav-link dropdown" href="#"><i class="far fa-user-circle user"></i> {{__('web.my_account')}} </a>
                    <ul>
                        @guest
                            <li><a href="{{ route('login') }}">{{ __('auth.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('auth.register') }}</a></li>
                        @else
                            <li><a href="{{ url('profile/chat') }}" >{{ __('web.chats') }}</a></li>
                            <li><a href="{{ url('profile/update') }}" >{{ __('web.update_profile') }}</a></li>
                            <li><a href="{{ url('profile/favourite') }}" >{{ __('web.favourite') }}</a></li>
                            <li><a href="{{ url('profile/notifications') }}" >{{ __('web.notifications') }}</a></li>
                            <li><a href="{{ url('profile/my_advertisements') }}" >{{ __('web.my_advertisements') }}</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('auth.logout') }}</a></li>
                        @endguest

                    </ul>
                </section>
                <button class="btn btn-add my-2 my-sm-0 col-lg-2 col-7" onclick="@auth window.location='{{url('advertisements/create')}}';@else alert('{{__('auth.unauthenticated')}}') @endauth" type="button"> <i class="fas fa-plus-circle pluse"></i> {{__('web.add_advertisement')}} </button>
            </form>
        </div>
    </nav>
    @if (url()->current() == url('/'))
        <div class="container-fluid pl-0 pr-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach(\App\Models\Banner::where('is_active',true)->get() as $banner)

                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" @if($loop->index == 0) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner ">
                    @foreach(\App\Models\Banner::where('is_active',true)->get() as $banner)
                    <div class="carousel-item @if($loop->index == 0) active @endif" onclick="window.open('{{$banner->getUrl()}}','_blank')">
                        <img class="d-block w-100" src="{{asset($banner->getImage())}}" height="350" alt="{{$banner->getName()}}">
                    </div>
                    @endforeach
                    <div class="shape"></div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    @endif

</header>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
