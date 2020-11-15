@extends('Web.layouts.app')
@section('content')
    <section class="container-fluid bread-crumb">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('web.main_page')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('web.forget_password')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="login">
        <div class="container">
            <div class="row login-row justify-content-center align-items-center">
                <div class="login-column col-md-5">
                    <div class="login-box col-md-12">
                        <div class="login-img">
                            <img src="{{asset('web/img/login.png')}}" alt="">
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="login-form form" action="{{url('password/forget')}}" method="post">
                            <div class="form-group">
                                <label for="email" class="text-info">{{__('web.User.email')}}</label>
                                <input type="email" name="email" id="email" placeholder="{{__('web.User.email')}}" class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="{{__('web.send_forget_password')}}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
