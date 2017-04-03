@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Place new print order</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('printorderCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(array('route'=>'printorderCRUD.store','method'=>'POST')) !!}
    @include('layouts.print orders.printorder_form')
    {!! Form::close() !!}
@endsection