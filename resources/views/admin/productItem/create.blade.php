@extends('admin.adminTemp')

@section('content')

    <h3>Add New Product Item</h3>


{{--  Product Items Listing Form  --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             {!! Form::open(['route' => 'productItem.store', 'method'=>'post', 'files' => true]) !!}

            <div class="form-group">
                {{ Form::label('productId','Product Category') }}
                {{ Form::select('productId', $productsCat, null, ['placeholder' => 'Select the id for prooduct category', 'class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('colour','Colour') }}
                {{ Form::select('colour',['Clothings' => ['white' => 'White', 'yellow' => 'Yellow', 'red' => 'Red'], 'Hairs' => ['#222222brown' => '#222222Brown', '#000000black' => '#000000Black', '#1223456GreyTint' => '#1223456GreyTint']], null, ['class' => 'form-control', 'placeholder' => 'Select a colour...']) }}
            </div>

            <div class="form-group">
                {{ Form::label('sizeLen','Size/Length') }}
                {{ Form::select('sizeLen',['Clothings' => ['S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'xLarge'], 'Hairs' => ['8"' => '8"', '10"' => '10"', '12"' => '12"', '18"' => '18"']], null, ['class' => 'form-control', 'placeholder' => 'Select a clothing size or hair length...']) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('description','Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('price','Price') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('quantity','Quantity') }}
                {{ Form::number('quantity', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('image','Image') }}
                {{ Form::file('image', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('image2','Image') }}
                {{ Form::file('image2', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('image3','Image') }}
                {{ Form::file('image3', array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('status','Status') }}
                {{ Form::select('status',['A' => 'Active', 'D' => 'Deleted'], null, ['class' => 'form-control', 'placeholder' => 'Select an option...']) }}
            </div>

            {{ Form::submit('Create', array('class' => 'btn btn-default')) }}

        {!! Form::close() !!}

        </div>
       
    </div>

@endsection