@extends('layout.main')

@section('title', 'Hairsss!!')
@section('content')
<!-- products listing -->
         <!-- Latest SHirts -->
        <div id="shirtsHolder">
        <div class="row">
            <div class="small-3 columns">
                <div class="item-wrapper" style="">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="{{route('hairItem')}}">
                            <img src="{{url('img/slashed_productListing.png')}}"/>
                        </a>
                    </div>
                    <h5>
                        $19.99
                    </h5>
                    <a href="{{route('hairItem')}}">
                        <h3>
                            Indian Curls
                        </h3>
                    </a>
                    {{--  <h5>
                        $19.99
                    </h5>  --}}
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper" style="">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="{{url('img/slashed_productListing.png')}}"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Funmi Hair
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper" style="">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            kinky Morrocan
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Brazillian Remy
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
        <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Funmi Hair
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
        <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            jamican Hair
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div><div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Mongolian Hair Deep waves
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div><div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                            <img src="http://i.imgur.com/Mcw06Yt.png"/>
                        </a>
                    </div>
                    <a href="#">
                        <h3>
                            Mongolian Deep Waves
                        </h3>
                    </a>
                    <h5>
                        $19.99
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
                    </p>
                </div>
            </div>
        </div>
        </div>
@endsection