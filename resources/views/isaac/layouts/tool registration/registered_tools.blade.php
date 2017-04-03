@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tools Registered</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('toolCRUD.create') }}"> Register new tool</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-striped" border="3">
        <tr >
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Specification</th>
            <th>Description</th>
            <th>Service_area</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tools as $tool)
            <tr>
                <td>{{ $tool->tools_id }}</td>
                <td>{{ $tool->name}}</td>
                <td>{{ $tool->code}}</td>
                <td>{{ $tool->specification}}</td>
                <td>{{ $tool->description}}</td>
                <td>{{ $tool->service_area}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('toolCRUD.show',$tool->tools_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('toolCRUD.edit',$tool->tools_id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['toolCRUD.destroy', $tool->tools_id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $tools->render() !!}
@endsection