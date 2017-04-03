
@extends('layouts.master')

@section('title')
    <h4>Registered Users</h4>
@endsection

@section('content')
 <body>
    <div class="users-table">
        {{--{{$users}}--}}
       <a href="{{url('/people')}}" class="btn btn-primary">Back to List</a>
        <h3 class="box-title">{{$users->firstname}} {{$users->lastname}} {{$users->othernames}}</h3>
        <div class="col-md-2">
            <strong>Organisation/IP:</strong><br/>
            <strong>User Name:</strong><br/>
            <strong>Email:</strong><br/>
            <strong>Phone Numbers:</strong><br/>
            <strong>Member Since</strong>
        </div>
        <div class="col-md-6 pull-left">
            <span>{{$users->ip}}</span><br/>
            <span>{{$users->username}}</span><br/>
            <span>{{$users->emailaddress}}</span><br/>
            <span>{{$users->phoneone}}/{{$users->phonetwo}}/{{$users->phonethree}}</span><br/>
            <span>{{date_format($users->created_at, 'j/M/Y')}}</span>
        </div>


    </div>
 </body>
    @endsection