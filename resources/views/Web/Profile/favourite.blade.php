@extends('Web.layouts.app')
@section('style')
    <style>
        .pagination>li>a,.pagination>li>span{
            padding: 6px 12px 8px;
            border-radius: 12%;
            background: lightgray;
            margin: 2px;
            font-size: 16px;
        }
        .pagination>li>a:hover{
            text-decoration: none;
            color: #D41675 !important;
        }
        .pagination>li.active>span,.page-item.active .page-link{
            background: linear-gradient(90deg, rgba(212, 22, 117, 1) 0%, rgba(253, 54, 21, 1) 100%);
            border-color: transparent;
            color: #fff;
        }
    </style>
@endsection
@section('content')
    <section class="container-fluid bread-crumb">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('web.main_page')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('web.advertisements_list')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <section class="ads-list container-fluid" style="min-height: 25vh">
        <div class="row">
            <div class="col-lg-12 all-media">
                @foreach ($Objects as $advertisement)
                    <div class="media">
                        <div class="media-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <button class="btn btn-add my-2 my-sm-0 mb-2 detail-btn"  onclick="window.location = '{{url('advertisements/show?advertisement_id='.$advertisement->id)}}'">{{__('web.Home.details')}} </button>
                                </div>
                                <h5 class="mt-0 mb-4 col-lg-9" style="cursor: pointer" onclick="window.location = '{{url('advertisements/show?advertisement_id='.$advertisement->id)}}'">{{$advertisement->getTitle()}}</h5>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 mt-4">
                                    <button class="btn my-2 my-sm-0 adds-name detail-btn">{{$advertisement->user->name}} </button>
                                </div>
                                <div class="col-lg-9">{{$advertisement->getContent()}}</div>
                            </div>
                            <div class="col-lg-12">
                                <hr class="media-hr">
                            </div>
                            <div class="row">
                                <div class="col-lg-3 text-center" id="ToggleFav-{{$advertisement->getId()}}">
                                    <span class="add-to-fav" onclick="ToggleFav({{$advertisement->getId()}})">{{__('web.Home.remove_from_fav')}} <i class="fas fa-heart"></i></span>
                                </div>
                                <div class="col-lg-5"></div>
                                <div class="col-lg-4">
                                    <div class="row">
                                        <span class="col-lg-6 col-6 media-date">{{$advertisement->city->getName()}} <i class="fas fa-map-marker-alt ml-2"></i></span>
                                        <span class="col-lg-6 col-5 media-date">{{\Carbon\Carbon::parse($advertisement->created_at)->format('Y-m-d')}} <i class="far fa-clock  ml-2"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset($advertisement->first_media->file)}}" width="260" height="235" style="border-radius: 10px" alt="...">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col mb-4" id="Paging">
                {{ $Objects->links('vendor.pagination.default') }}
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $('input[name="sell_type"]').change(function (){
            if($(this).val() === '{{\App\Helpers\Constant::ADVERTISEMENT_SELL_TYPE['InsideWebsite']}}'){
                $('#sell_price_div').show();
            }else{
                $('#sell_price_div').hide();
            }
        });
        function ToggleFav(id){
            $.post( "{{url('advertisements/response/toggle_fav')}}", {advertisement_id:id,_token:'{{csrf_token()}}'},function( response ) {
                if (response.status.status === 'success'){
                    if (response.data){
                        $('#ToggleFav-'+id).html('<span class="add-to-fav" onclick="ToggleFav('+id+')"> {{__('web.Home.remove_from_fav')}}<i class="fas fa-heart"></i></span>');
                    }else{
                        $('#ToggleFav-'+id).html('<span class="add-to-fav color" onclick="ToggleFav('+id+')"> {{__('web.Home.add_to_fav')}}<i class="far fa-heart"></i></span>');
                    }
                }
            });
        }
    </script>
@endsection
