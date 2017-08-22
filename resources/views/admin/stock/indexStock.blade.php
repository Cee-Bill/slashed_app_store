@extends('admin.adminTemp')

@section('content')

    <h3>Inventory</h3>

    <ul>
        @forelse($stocks as $stock)
            <li>
                <h4>Stock Name: {{$stock->name}}</h4>
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