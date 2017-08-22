@extends('admin.adminTemp')

@section('content')

    <h3>Product Categories</h3>

    <ul>
        @forelse($categories as $category)
            <li>
                <h4>Category Type: {{$category->stockId}}</h4>
                <h4>Category Name: {{$category->name}}</h4>
                <h4>Category Image: {{$category->featuredImg}}</h4>
            </li>
            

                @empty
                    <h3>Nothing to display</h3>
        @endforelse

        {{--  @foreach($products as $product)
            <li>
                <h4>Product Name: {{$product->name}}</h4>
            </li>
        @endforeach  --}}
    </ul>


@endsection