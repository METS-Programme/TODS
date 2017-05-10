<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TODS | IP Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
@extends('layouts.master')
@section('title')
    Health Facilities
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="facilities-table">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static" data-target="#newFacility">
                    Add new facility
                    <span class="glyphicon glyphicon-plus"></span>
                </button>

            </div>
        </div>
    </div>
    <!-- div for register new facility pop up dialog-->
    <div class="modal fade" id="newFacility" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="text-align: center;">Register new facility</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => 'facility.store','method'=>'POST')) !!}

                    <div class="form-group row">
                        <div class="col-md-4"><strong>Health Facility Name:</strong></div>
                        <div class="col-md-8">{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}</div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4"><strong>Health Facility Code:</strong></div>
                        <div class="col-md-8">{!! Form::text('code', null, array('placeholder' => 'Code','class' => 'form-control')) !!}</div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4"><strong>Facility Level:</strong></div>
                        <div class="col-md-8">{{ Form::select('facilitylevel_id', $levelforfacility, null)}}</div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4"><strong>Implementing Partner:</strong></div>
                        <div class="col-md-8">{{ Form::select('ip_id', $implementingpartnerforfacility, null)}}</div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4"><strong>Subcounty:</strong></div>
                        <div class="col-md-8">{{Form::select('subcounty_id', $subcountyforfacility, null)}}</div>
                    </div>
                    <div class="orm-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">{{ Form::submit('Register facility', array('class' => 'btn btn-info btn-block')) }}</div>
                        <div class="col-md-3"></div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--place new order ends -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Registered Health Facilities</h3>
        </div>
        <div class="box-body no-padding">
    <table class="table table-striped table-bordered">
        <tr >
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Health Facility Level</th>
            <th>Implementing Partner</th>
            <th>Subcounty</th>
            <th width="280px">Action</th>
        </tr>
        @php($i = 1)
        @foreach ($facilities as $healthfacility)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $hfName = $healthfacility->name}}</td>
                <td>{{ $healthfacility->code}}</td>
                @if($healthfacility->facilitylevel_id == 1)<td>{{'Clinic'}}</td>
                @elseif($healthfacility->facilitylevel_id == 2)<td>{{'HCII'}}</td>
                @elseif($healthfacility->facilitylevel_id == 3)<td>{{'HCIII'}}</td>
                @elseif($healthfacility->facilitylevel_id == 4)<td>{{'HCIV'}}</td>
                @elseif($healthfacility->facilitylevel_id == 5)<td>{{'HOSPITAL'}}</td>
                @endif
                <td>{{ $healthfacility->ip_id}}</td>
                <td>{{ $healthfacility->subcounty_id}}</td>
            <td>

                    <!-- show tool -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#showFacility">
                        Show
                    </button>
                    <div class="modal fade" id="showFacility" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Health Facility details</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-12 margin-tb">
                                            <div class="pull-right">
                                                <a class="btn btn-primary" href="{{ route('facility.index') }}"> Back</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Name:</strong>
                                                {{ $healthfacility->name}}
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Code:</strong>
                                                {{ $healthfacility->code}}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Facility Level:</strong>
                                                {{ $healthfacility->facilitylevel_id}}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Implementing Partner:</strong>
                                                {{ $healthfacility->ip_id}}
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <strong>Sub County:</strong>
                                                {{ $healthfacility->subcounty_id}}
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--show tool ends -->
                    <!-- edit tool -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editFacility">
                        Edit
                    </button>

                    <div class="modal fade" id="editFacility" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Edit Facility</h4>
                                </div>
                                <div class="modal-body">
                                    {!! Form::model($healthfacility, ['method' => 'PATCH','route' => ['facility.update', $healthfacility->healthfacility_id]]) !!}
                                    <div class="form-group">
                                        <strong>Health Facility Name:</strong>
                                        {!! Form::text('name', $healthfacility->name, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">
                                        <strong>Health Facility Code:</strong>
                                        {!! Form::text('code', $healthfacility->code, array('placeholder' => 'Code','class' => 'form-control')) !!}
                                    </div>


                                    <div class="form-group">
                                        <strong>Facility Level:</strong>
                                        {{ Form::select('facilitylevel_id', $levelforfacility, null)}}
                                    </div>

                                    <div class="form-group">
                                        <strong>Implementing Partner:</strong>
                                        {{Form::select('ip_id', $implementingpartnerforfacility, null)}}
                                    </div>

                                    <div class="form-group">
                                        <strong>Subcounty:</strong>
                                        {{Form::select('subcounty_id', $subcountyforfacility, null)}}
                                    </div>


                                    {{ Form::submit('Edit Health Facility', array('class' => 'btn btn-info btn-block')) }}
                                    <hr>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--edit tool ends-->
                <script>
                    function ConfirmDelete()
                    {
                        var x = confirm("Are you sure you want to delete?");
                        if (x)
                            return true;
                        else
                            return false;
                    }
                </script>

                    <!-- delete tool begins -->
                    {!! Form::open(['method' => 'DELETE','route' => ['facility.destroy', $healthfacility->healthfacility_id], 'onsubmit' => 'return ConfirmDelete()', 'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                </td>
            </tr>
          @php($i++)
        @endforeach
    </table>
        </div>
    </div>
</html>
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


@endsection

