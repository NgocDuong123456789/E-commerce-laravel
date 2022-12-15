@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <a href="">filter</a>
    </div>
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($product as $item)
            <div class="searched-item">
                <a href="/detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" alt="" class="trending-image">
                    <div>
                        <h2>{{$item->userName}}</h2>
                        <h5>{{$item->description}}</h5>
                    </div>
                </a>
                <a  href="/removecart/{{$item->cart_id}}" class="btn btn-primary">Remove to Cart</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop