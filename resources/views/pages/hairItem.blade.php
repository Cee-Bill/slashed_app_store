@extends ('layout.main')

@section('title', 'hair')

@section('content')

    <div class="row">
        <div class="small-5 small-offset-1 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                        <img src="{{url('img/slashed_productListing.png')}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                    <span class="price-tag">20 Ghc</span> Indian Curls
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            Select Length
                            <select>
                                <option value="10">
                                    10'
                                </option>
                                <option value="12">
                                    12'
                                </option>
                                <option value="14">
                                    14'
                                </option>

                            </select>
                        </label>
                        <a href="#" class="button expanded">Add to Cart</a>
                    </div>
                </div>
                <p class="text-left subheader">
                    <small>* Designed by <a href="https://www.youtube.com/webdevmatics">****</a></small>
                </p>

            </div>
        </div>
    </div>

@endsection
