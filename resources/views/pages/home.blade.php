@extends('layout.main')
@section('content')
    <div class="row" id="articleHolder" style="padding-top:">
        <div class="col-sm-9" id="slashDiv" style="width:; color:wheat ; padding-left: 58px; padding-right: 1px;">
            <h1 id="styleSlash">#SLASHED</h1>
            <span id="homeBuyLine"><h5 style="color: #7fffd4;">Looking for <strong>#trendy</strong>, <strong>#stylish</strong>, yet <strong>#affordale</strong> clothings & hairs?</h5>
            Well then, look no further than here. #SlashedStore is the definition of trendy style on a budget.
            </br>
            Be on point without spending a fortune.
            <div>
                <a href="{{url('/hairs')}}"><button id="shopHairs">Shop Hairs</button></a><a href="{{url('/garments')}}"><button id="shopGarments">Shop Clothes</button></a><a href="{{url('/garments')}}"><button id="shopShoes">Shop Shoes</button></a>
            </div> 
            </span>
        </div>
        <div class="col-sm-3 side-images">
            {{--  <div class="row">
                <div class="col-sm-8" style="padding-right: 0px;">
                    <img src="{{asset('img/img1.jpg')}}" width="188px !important;" height=""/>
                </div>
                <div class="col-sm-4" style="padding-right: 0px; padding-left: 0px;">
                    <img src="{{asset('img/img2.jpg')}}" width="" height="166px;"/>
                </div>
                <div class="col-sm-4" style="padding-left: 0">
                    <img src="{{asset('img/img4.jpg')}}" width="79px" height="64px"/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <img src="{{asset('img/img7.jpg')}}" width="" height=""/>
                </div>
                <div class="col-sm-4">
                    <img src="{{asset('img/img5.jpg')}}" width="" height=""/>
                </div>
                <div class="col-sm-5">
                    <img src="{{asset('img/img3.jpg')}}" width="" height=""/>
                </div>
                <div class="col-sm-4">
                    <img src="{{asset('img/img5.jpg')}}" width="" height=""/>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <img src="{{asset('img/img6.jpg')}}" width="" height=""/>
                </div>
            </div>  --}}




            <marquee behavior="scroll" direction="up">
                <img src="{{asset('img/img1.jpg')}}" width="100" height="300"/></span>
                <img src="{{asset('img/img2.jpg')}}" width="90" height="100"/></span>
                <img src="{{asset('img/img3.jpg')}}" width="70" height="70"/></span>
                <img src="{{asset('img/img4.jpg')}}" width="90" height="30"/></span>
                <img src="{{asset('img/img1.jpg')}}" width="80" height="60"/></span>
                
            </marquee>
            <marquee behavior="scroll" direction="down">
                <img src="{{asset('img/img5.jpg')}}" width="100" height="100"/></span>
                <img src="{{asset('img/img1.jpg')}}" width="90" height="100"/></span>
                <img src="{{asset('img/img1.jpg')}}" width="70" height="70"/></span>
                <img src="{{asset('img/img2.jpg')}}" width="80" height="30"/></span>
                <img src="{{asset('img/img5.jpg')}}" width="80" height="500"/></span>
                {{--  <img src="{{asset('img/img3.jpg')}}" width="90" height="90"/></span>
                <img src="{{asset('img/img4.jpg')}}" width="80" height="80"/></span>  --}}
            </marquee>
    
        </div>
    </div>
@endsection
            