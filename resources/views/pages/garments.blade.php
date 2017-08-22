@extends('layout.main')

@section('title', 'Garments!!')
@section('content')
<!-- products listing -->
         <!-- Latest Shirts -->
        <div class="row">
            @forelse($garments as $garment)
                <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a class="button expanded add-to-cart">
                                Add to Cart
                            </a>
                            <a href="#">
                                <img src="{{url('img\adminProdItem',$garment->image)}}"/>
                            </a>
                        </div>
                        <a href="shirt.html">
                            <h3>
                                {{$garment->name}}
                            </h3>
                        </a>
                        <h5>
                            GhC {{$garment->price}}
                        </h5>
                        <p>
                            {{$garment->description}}
                        </p>
                    </div>
                </div>
                @empty
                    <h3>No garments</h3>
            @endforelse
        </div>
@endsection