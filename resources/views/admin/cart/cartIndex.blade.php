@extends('layout.main')

@section('content')
    <h3>Cart Items</h3>

     <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Size</th>
                        <th>Colour</th>
                    </tr>
                </thead>
                <tbody>
                @foreach(Cart::content() as $cartItem)
                    <tr>
                        <td>{{$cartItem->name}}</td>
                        <td>{{$cartItem->price}}</td>
                        <td>{{$cartItem->quantity}}</td>
                        <td>{{$cartItem->options->has('size')?$cartItem->options->size:''}}</td>
                        <td>{{$cartItem->options->has('colour')?$cartItem->options->colour:''}}</td>
                    </tr>
                    {{--  @empty<tr><td>No Data</td></tr>  --}}
                @endforeach
                </tbody>
            </table>



@endsection