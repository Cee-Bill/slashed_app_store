@extends('admin.adminTemp')

@section('content')

    <h3>Product Items</h3>

    <ul>
        @forelse($products as $product)
            <li>
                <h4>Product Name: {{$product->name}}</h4>
            </li>

                @empty
                    <h3>No product items to display</h3>
        @endforelse

        {{--  @foreach($products as $product)
            <li>
                <h4>Product Name: {{$product->name}}</h4>
            </li>
        @endforeach  --}}
    </ul>


@endsection