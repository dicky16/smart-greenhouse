@extends('user.master')
@section('custom-css')
<link href="{{ asset('user/css/product.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<div class="container">
    <br>
<div class="row">
    <div class="col-md-3 col-xs-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="{{ asset('user/images/12.jpg') }}">
                </a>
                <span class="product-discount-label">-33%</span>
                <ul class="product-links">
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Mangga</a></h3>
                <div class="price"><span>$90.00</span> $66.00</div>
                <a class="add-to-cart" href="#">add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="{{ asset('user/images/12.jpg') }}">
                </a>
                <ul class="product-links">
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Mangga</a></h3>
                <div class="price">$79.90</div>
                <a class="add-to-cart" href="#">add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="{{ asset('user/images/12.jpg') }}">
                </a>
                <ul class="product-links">
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Mangga</a></h3>
                <div class="price">$79.90</div>
                <a class="add-to-cart" href="#">add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="{{ asset('user/images/12.jpg') }}">
                </a>
                <ul class="product-links">
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Mangga</a></h3>
                <div class="price">$79.90</div>
                <a class="add-to-cart" href="#">add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="{{ asset('user/images/12.jpg') }}">
                </a>
                <ul class="product-links">
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Mangga</a></h3>
                <div class="price">$79.90</div>
                <a class="add-to-cart" href="#">add to cart</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#" class="image">
                    <img class="pic-1" src="{{ asset('user/images/12.jpg') }}">
                </a>
                <ul class="product-links">
                    <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                    <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                    <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <div class="product-content">
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                </ul>
                <h3 class="title"><a href="#">Mangga</a></h3>
                <div class="price">$79.90</div>
                <a class="add-to-cart" href="#">add to cart</a>
            </div>
        </div>
    </div>
</div>
<br>
</div>
@endsection