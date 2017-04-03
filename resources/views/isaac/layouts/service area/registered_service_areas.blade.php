<!-- to display already existing/registered service areas -->
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Registered Service Areas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('serviceAreaCRUD.create') }}"> Register new service area</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($service_area as $service_a)
            <tr>
                <td>{{$service_a->servicearea_id }}</td>
                <td>{{$service_a->name}}</td>
                <td>{{$service_a->description}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('serviceAreaCRUD.show',$service_area->servicearea_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('serviceAreaCRUD.edit',$service_area->servicearea_id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['serviceAreaCRUD.destroy', $service_area->servicearea_id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $service_area->render() !!}
@endsection