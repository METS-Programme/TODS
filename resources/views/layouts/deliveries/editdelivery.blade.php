@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Delivery</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('deliveryCRUD.index') }}"> Back</a>
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
    {!! Form::model($delivery, ['method' => 'PATCH','route' => ['deliveryCRUD.update', $delivery->delivery_id]]) !!}
    @include('layouts.deliveries.deliveryform')
    {!! Form::close() !!}
@endsection