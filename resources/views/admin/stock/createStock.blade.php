@extends('admin.adminTemp')

@section('content')

    <h3>Create New Stock</h3>

    {{--  Inventory Form  --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             {!! Form::open(['route' => 'stock.store', 'method'=>'post', 'files' => true]) !!}

            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name', null, array('class' => 'form-control')) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('quantity','Quantity') }}
                {{ Form::number('quantity', null, array('class' => 'form-control')) }}
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