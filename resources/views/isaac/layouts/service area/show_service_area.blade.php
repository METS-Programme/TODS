<!--To display details of selected service area-->

@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Service Area Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('serviceAreaCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $service_area->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $service_area->description}}
            </div>
        </div>
    </div>
@endsection