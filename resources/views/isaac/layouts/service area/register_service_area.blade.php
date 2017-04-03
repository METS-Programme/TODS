<!--For registering a new service area -->
@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-middle">
                <h2>Register new service area</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('serviceAreaCRUD.index') }}"> Back</a>
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
    {!! Form::open(array('route' => 'serviceAreaCRUD.store','method'=>'POST')) !!}
    @include('layouts.service area.service_area_form')
    {!! Form::close() !!}
@endsection