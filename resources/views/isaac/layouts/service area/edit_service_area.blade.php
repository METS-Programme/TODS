<!--For editing an already registered service area -->
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Service Area</h2>
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
    {!! Form::model($service_area, ['method' => 'PATCH','route' => ['serviceAreaCRUD.update', $service_area->servicearea_id]]) !!}
    @include('layouts.service area.service_area_form')
    {!! Form::close() !!}
@endsection