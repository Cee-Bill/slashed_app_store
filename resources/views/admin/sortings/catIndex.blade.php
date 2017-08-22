
@extends('admin.adminTemp')

@section('content')

    <h3>Product Sortings</h3>
    <div class="navbar">
        <a class="navbar-brand" href="#">By Stock Type=></a>
        <ul class="nav navbar-nav">
            @if(!empty($stocks))
                @forelse($stocks as $stock)
                    <li class="active">
                        <a href="{{route('sorting.show',$stock->id)}}">{{$stock->name}}</a>
                    </li>
                    @empty
                    <li>No data!</li>
                @endforelse
            @endif
        </ul>

        <a class="btn btn-primary" data-toggle="modal" href="{{route('stock.create')}}">New Stock</a>
    </div>
        

    <div>
        <a class="navbar-brand" href="{{route('sorting.index')}}">By Category/Item=></a>
        <ul class="nav navbar-nav">
            @if(!empty($prodCats))
                @forelse($prodCats as $prodCat)
                    <li class="active">
                        <a href="{{route('sorting.show',$prodCat->id)}}">{{$prodCat->name}}</a>
                    </li>
                    @empty
                    <li>No data!</li>
                @endforelse
            @endif
        </ul>

        <a class="btn btn-primary" data-toggle="modal" href="{{route('product.create')}}">New Category</a>

    </div>

    {{--  @if(!empty($prodCats))
        <section>
            <h3>Associated Products</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product Categories</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($prodCats as $prodCat)
                    <tr>
                        <td>{{$prodCat}}</td>
                    </tr>
                    @empty<tr><td>No Data</td></tr>
                @endforelse
                </tbody>
            </table>
        </section>
    @endif  --}}

    @if(!empty($products))
        <section>
            <h3>Associated Products</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Products</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{$product}}</td>
                    </tr>
                    @empty<tr><td>No Data</td></tr>
                @endforelse
                </tbody>
            </table>
        </section>
    @endif

    {{--  @if(!empty($prodCats))
        <section>
            <h3>Associated Products</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Products</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($prodCats as $prodCat)
                    <tr>
                        <td>{{$prodCat->name}}</td>
                    </tr>
                @endforelse
                    @empty
                    <tr><td>No Product</td></tr>
                </tbody>
            </table>

        </section>
    @endif


    @if(!empty($stocks))
        <section>
            <h3>Associated Products</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Products</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($stocks as $stock)
                    <tr>
                        <td>{{$stock->name}}</td>
                    </tr>
                @endforelse
                    @empty
                    <tr><td>No Product</td></tr>
                </tbody>
            </table>

        </section>
    @endif  --}}

@endsection