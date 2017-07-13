
@extends('layouts.master')

@section('title')
    <h4>Registered Users</h4>
@endsection

@section('content')
 <body>
    <div class="users-table">
        {{--{{$users}}--}}
       <div class="add-button" style="margin-bottom: 10px">
           <a href="{{ url('/register') }}" class="btn btn-primary">
            <span class="glyphicon glyphicon-user"></span> Add User
           </a>
       </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Registered Users</h3>

                <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Names</th>
                        <th>Organisation/IP</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Operations</th>
                    </tr>
                    @php($i = 1)
                    @foreach($users as $user)
                        <tr>
                            <td>{{$i}}</td>
                            <td><a href="{{ url('/people',$user->id)}}"> {{$user->firstname}} {{$user->lastname}} {{$user->othernames}}</a></td>
                            <td>{{$user->ip}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->emailaddress}}</td>
                            <td colspan="2">
                                <a href="#" class="btn btn-default btn-sm">Edit</a>
                                <a href="#" class="btn btn-adn btn-sm">Delete</a>
                                <a href="{{url('/people',$user->id)}}" class="btn btn-info btn-sm">View More</a>
                            </td>
                        </tr>
                       @php($i++)
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/bower_components/AdminLTE/dist/js/demo.js"></script>
 </body>
    @endsection