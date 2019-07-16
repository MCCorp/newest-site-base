
@section('cssDevMod')
@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/src/libs/bootstrap.3.3.7.min.css') }}" media="all,handheld"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/detail.min.css') }}" media="all,handheld"/>
@stop
@section('cssMix')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset(mix('/css/mix-detail.css')) }}" media="all,handheld"/>
@stop

@extends('app')

@section('content')
    @parent
    <ul class="breadcrumb">
        <li><a href="{{ url('/') }}" title="Home page {{ $_SERVER['HTTP_HOST'] }}">Home</a></li>
        <li><a href="{{ url('/category') }}" title="all categories">category</a></li>
        <li class="active">{{ $store->name }}</li>
    </ul>
    <div class="info">
        <div class="info-item info-image">
            <a href="{{ ( !empty($store->affiliate_url) ? $store->affiliate_url : $store->store_url ) }}" title="{{ $store->name }} link store">
            <div class="info-wrap">
                <img src="{{ $store->logo }}" alt="logo {{ $store->name }}"/>
            </div>
            </a>
        </div>
        <div class="info-item info-content">
            <div class="info-content-title">
                <h1>{{ $store->name_keyword }}</h1>
            </div>
            <div class="info-content-desc">
                {{ $store->head_description }}
            </div>
        </div>
        <div class="info-item info-go">
            <div class="info-button">
                <a href="{{ ( !empty($store->affiliate_url) ? $store->affiliate_url : $store->store_url ) }}" title="{{ $store->name }} link store">
                <button class="btn btn-info">
                    GO TO RICHBROOK...
                </button>
                </a>
            </div>
        </div>
    </div>
    {{--Box show --}}
    <div class="box-show">
    <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="filter-box" data-url="{{ route('store-filter') }}?alias={{ $store->alias }}">
                <button class="btn-type btn btn-all">All</button>
                @foreach($couponsType as $title => $type)
                    <?php $activeType = $ssType?in_array($type, $ssType):''; ?>
                     <button class="btn-type btn{{ $activeType?' btn-active':' btn-none' }}" data-type="{{ $type }}">{{ $title }}</button>
                @endforeach
            </div>
            <div class="box-list" id="coupons-list">
                {{--item--}}
                @foreach($store->coupons as $c)
					@include('elements.coupons_item')
                @endforeach
                {{--end item--}}
            </div>

            <div id="show-more" class="show-more" data-url="{{ route('store-detail-more',['storeId'=>$store->id,'offset'=>'']) }}">
                <button class="btn btn-success">SHOW MORE...</button>
            </div>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="side-bar-right">
                <div class="wrap-side-bar">
                    <h2>About Richbrook</h2>
                    Richbrook provides high-quality products that can help make your life better. There are many ways to save money when you shop on the Richbrook:
                    Sign up allows users to avail newsletters and regular updates of Richbrook Discount Code and discounts and offers at Richbrook.
                    Richbrook offers flat 15% OFF discount on all orders for a limited period by using Richbrook Discount Code.
                    Customers can purchase Richbrook items and save a lot.
                    On all orders, the company guarantee free shipping.
                </div>
            </div>
        </div>

    </div>
    </div>
    {{-- end box show --}}

{{--desciption info --}}
<div class="about-this">
    <h1>About Richbrook</h1>
    Purchase at Richbrook and save up to 15% OFF on your order with the latest Richbrook Discount Code, Vouchers and sales. There are Richbrook Promo Codes and deals for June 2019. Act now and never miss Richbrook special offers.

    <h4>How to use a Richbrook Special Offer?</h4>
    Find what you like at richbrook.co.uk site, and put them into the cart at first.

    Check for Richbrook Vouchers and Promo Codes at hotdeals.com. Try the code at the page which correctly meet your requirement.
    Go back to richbrook.co.uk and proceed to checkout.And add the code you copied at hotdeals.com. Then click "check out" button.
    You can save a lot with Richbrook Discount Code online.
    Avail all the latest Richbrook Discount Code and discount offers and enjoy up to 15% OFF when you shop at richbrook.co.uk. HotDeals is regularly updated with the list of coupons, deals, discounts added on a regular basis. To apply the promo code or deal at check out for extra savings.

</div>

@stop

@section('scriptDevMod')
@parent
<script src="{{ asset('/js/all/mix-libs.js') }}"></script>
<script src="{{ asset('/js/app-footer.min.js') }}"></script>
<script src="{{ asset('/js/modules/store-detail/index.min.js') }}"></script>
<script src="{{ asset('/js/copy.min.js') }}"></script>
@stop
@section('scriptMix')
    @parent
    <script src="{{ asset(mix('/js/detail/mix-footer.js')) }}"></script>
@stop
