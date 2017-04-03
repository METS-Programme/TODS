@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('userCRUD.create') }}"> Register New User</a>
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
            <th>User id</th>
            <th>Username</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Organisation</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->user_id }}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->organization}}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('userCRUD.show',$user->user_id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('userCRUD.edit',$user->user_id) }}">Edit</a>
                    {!! Form::open(['method' => 'DELETE','route' => ['userCRUD.destroy', $user->user_id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection