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
    <nav class="navbar navbar-light  pb-0 container-fluid">
        <div class="row ">
            <div class="col-lg-2 col-12 col-md-3"><a class="pr-0" href="{{url('/')}}"><img class="logo" src="{{asset('web/img/logo.png')}}" alt=""></a></div>
            <form class="col-lg col-12 col-md-9 form-inline">
                <input class="search form-control col-lg-4 col-9" type="search" placeholder="{{__('admin.search')}}" aria-label="Search">
                <button class="btn btn-gradient my-2 my-sm-0 col-lg-1 col-3" type="submit"><i class="fas fa-search"></i></button>
                <section class="dropdown top-navbar col-lg-2 col-5"> <a class="user-color dropdown-toggle nav-link dropdown" href="#"><i class="far fa-user-circle user"></i> {{__('web.my_account')}} </a>
                    <ul>
                        @guest
                            <li><a href="{{ route('login') }}">{{ __('auth.login') }}</a></li>
                            <li><a href="{{ route('register') }}">{{ __('auth.register') }}</a></li>
                        @else
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('auth.logout') }}</a></li>
                        @endguest

                    </ul>
                </section>
                <button class="btn btn-add my-2 my-sm-0 col-lg-2 col-7" onclick="@auth window.location='{{url('advertisements/create')}}';@else alert('{{__('auth.unauthenticated')}}') @endauth" type="button"> <i class="fas fa-plus-circle pluse"></i> {{__('web.add_advertisement')}} </button>
            </form>
        </div>
        <div class="row mt-4">
            <div class="col-lg-2 col-12">
                <div class="btn-group menu-btn">
                    <button type="button" class="btn btn-secondary linear-gradient" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars menu-size"></i>
                        {{__('web.all_categories')}}
                    </button>
                    <div class="dropdown-menu dropdown-menu-right menu-con">
                        @foreach(\App\Models\Category::where('is_active',true)->get() as $Category)
                            @if($Category->children()->count() >0)
                                <div class="btn-group dropleft menu-btn dropdown">
                                    <button type="button" id="Category{{$Category->getId()}}" class=" dropdown-item sec-dropdowm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-angle-left"></i>
                                        {{(app()->getLocale() == 'ar')?$Category->getNameAr():$Category->getName()}}
                                    </button>
                                    <div class="dropdown-menu " aria-labelledby="Category{{$Category->getId()}}">
                                    @foreach($Category->children as $SubCategory)
                                        @if($SubCategory->children()->count() >0)
                                            <div class="btn-group dropleft menu-btn dropdown">
                                                <button type="button" id="Category{{$SubCategory->getId()}}" class=" dropdown-item sec-dropdowm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-angle-left"></i>
                                                    {{(app()->getLocale() == 'ar')?$SubCategory->getNameAr():$SubCategory->getName()}}
                                                </button>
                                                <div class="dropdown-menu " aria-labelledby="Category{{$SubCategory->getId()}}">
                                                @foreach($SubCategory->children as $children)
                                                    <button class="dropdown-item" type="button">{{(app()->getLocale() == 'ar')?$children->getNameAr():$children->getName()}}</button>
                                                @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <button class="dropdown-item" type="button">{{(app()->getLocale() == 'ar')?$SubCategory->getNameAr():$SubCategory->getName()}}</button>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            @else
                                <button class="dropdown-item" type="button">{{(app()->getLocale() == 'ar')?$Category->getNameAr():$Category->getName()}}</button>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
