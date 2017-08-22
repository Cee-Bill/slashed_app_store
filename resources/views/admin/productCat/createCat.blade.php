@extends('admin.adminTemp')

@section('content')

    <h3>Add New Product Category</h3>

    {{--  Product Categories Listing Form  --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             {!! Form::open(['route' => 'product.store', 'method'=>'post', 'files' => true]) !!}

            <div class="form-group">
                {{ Form::label('stockId','Type') }}
                {{ Form::select('stockId', $stock, null, ['placeholder' => 'Select the id for prooduct category', 'class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description','Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('quantity','Quantity') }}
                {{ Form::number('quantity', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('featuredImg','Featured Image') }}
                {{ Form::file('featuredImg', array('class' => 'form-control')) }}
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