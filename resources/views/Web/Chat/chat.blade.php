@extends('Web.layouts.app')
@section('content')
    <section class="container-fluid bread-crumb">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('web.main_page')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('web.chats')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="chats container-fluid">
        <div class="row">
            <div class="col-lg-4 col-12 chat-r">
                <div class="w3-sidebar w3-bar-block w3-card">
                    <div class="row">
                        <form class="form-inline col-12">
                            <input class="search form-control " type="search" placeholder="{{__('web.search')}}" aria-label="Search">
                            <button class="btn btn-gradient my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                        </form></div>
                    <div class="scroll">
                        <button class="w3-bar-item w3-button tablink">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="card" style="max-width: 540px;" >
                                        <div class="row no-gutters">
                                            <div class="col-mf-2 col-3 chat-img">
                                                <img src="lib/img/Avatar.png" class="card-img" alt="...">
                                            </div>
                                            <div class="col-mf-10 col-9">
                                                <div class="card-body chat-con">
                                                    <div class="div card-h">
                                                        <h5 class="card-title">اسم المستخدم</h5>
                                                        <p class="card-text"><small class="text-muted">قبل دقيقتين</small></p>
                                                    </div>
                                                    <p class="card-text">هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص</p>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8 chat-l">
                <div class="w3-container city" style="display:block">
                    <div class="header-chat row">
                        <div class="col-lg-5 col-7 pr-0">
                            <div class="row">
                                <div class="back col-lg col-2 ">
                                    <button type="button" class="btn"> <i class="fas fa-angle-right"></i></button>
                                </div>
                                <div class="col-lg-2 col-3 chat-img">
                                    <img src="lib/img/Avatar.png" class="card-img " alt="...">
                                </div>
                                <div class="col-lg-10 col-7 img-name">
                                    <p>اسم المستخدم</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-5 chat-remove">
                            <button type="button" class="btn btn-danger"> <i class="far fa-trash-alt ml-2"></i> حذف المحادثة </button>
                        </div>
                    </div>
                    <hr>
                    <div class="row chat-body">
                        <div class="col-12 pl-0 pr-0">
                            <div class="main-chat">
                                <div class="float-l">
                                    <div class="you">
                                        <p>هناك حقيقة مثبتة منذ زمن</p>
                                    </div>
                                    <span>10:24</span>
                                </div>
                                <div class="float-r">
                                    <div class="me">
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي</p>
                                    </div>
                                    <span>10:24</span>
                                </div>
                                <div class="float-l">
                                    <div class="you">
                                        <p>هناك حقيقة مثبتة منذ زمن</p>
                                    </div>
                                    <span>10:24</span>
                                </div>
                                <div class="float-r">
                                    <div class="me">
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي</p>
                                    </div>
                                    <span>10:24</span>
                                </div>
                                <div class="float-l">
                                    <div class="you">
                                        <p>هناك حقيقة مثبتة منذ زمن</p>
                                    </div>
                                    <span>10:24</span>
                                </div>
                                <div class="float-r">
                                    <div class="me">
                                        <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي</p>
                                    </div>
                                    <span>10:24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 send-chat">
                            <div class="row">
                                <div class="form-group col-md-11 col-10 chat-input">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ادخل الرسالة"></textarea>
                                </div>
                                <div class="col-md-1 col-2 chat-button">
                                    <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn" rows="5" type="submit"><i class="fas fa-paper-plane"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
