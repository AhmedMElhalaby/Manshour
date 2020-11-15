@extends('Web.layouts.app')
@section('content')
    <section class="container-fluid bread-crumb">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('web.main_page')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('web.contact_us')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="row">
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="username" class="text-info">{{__('web.User.username')}}</label>
                    <input type="text" name="username" required id="username" placeholder="{{__('web.User.username')}}" class="form-control">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="email" class="text-info">{{__('web.User.email')}}</label>
                    <input type="email" name="email" required id="email" placeholder="{{__('web.User.email')}}" class="form-control">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="mobile" class="text-info">{{__('web.User.mobile')}}</label>
                    <input type="tel" name="mobile" required id="mobile" placeholder="{{__('web.User.mobile')}}" class="form-control">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <label for="type">{{__('crud.Ticket.type')}}</label>
                    <select id="type" name="type" required class="form-control">
                        @foreach(\App\Helpers\Constant::TICKETS_TYPE as $i)
                            <option value="{{$i}}">{{__('crud.Ticket.Types.'.$i)}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label for="message" class="text-info">{{__('crud.Ticket.message')}}</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="{{__('crud.Ticket.message')}}"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9"></div>
            <div class="col-lg-3">
                <div class="form-group">
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-info btn-md  contact-btn" value="{{__('admin.Home.n_send')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
