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
  <link rel="stylesheet" href="/css/buttons.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
</head>
@extends('layouts.master')

@section('title')
  Ip Dashboard
@endsection
@section ('content')
<body class="hold-transition skin-blue sidebar-mini">

    <!-- Content Header (Page header) -->
    {{--<section class="content-header">--}}
      {{--<h1>--}}
        {{--IP Profile--}}
      {{--</h1>--}}

    {{--</section>--}}

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{'/images/'.$ips->image}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$ips->name}}</h3>

              <p class="text-muted text-center">Comprehensive Partner: {{$ips->comprehensive_partner}}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Regions</b> <a class="pull-right">{{$ips->regions}}</a>
                </li>
                <li class="list-group-item">
                  <b>Districts</b> <a class="pull-right">{{$ips->districts}}</a>
                </li>
                <li class="list-group-item">
                  <b>Health Facilities</b> <a class="pull-right">{{$totalFacilities}}</a>
                </li>
                <li class="list-group-item">
                  @if($ips->funding_agency_id ==1) <b>Funded by</b> <a class="pull-right">CDC</a>
                    @else <b>Funded by</b> <a class="pull-right">USAID</a>
                    @endif
                </li>
              </ul>

              {{--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>--}}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Vision</strong>
              <p class="text-muted">
                {{$ips->vision}}
              </p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
              <p class="text-muted">
                {{$ips->location}}
              </p>

              <hr>
              <strong><i class="fa fa-book margin-r-5"></i> More</strong>
              <p class="text-muted">
                {{$ips->about}}
              </p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#facilities" data-toggle="tab">Facilities</a></li>
              <li><a href="#allocation" data-toggle="tab">Facility Allocations</a></li>
              <li><a href="#home" data-toggle="tab">Partner Allocations</a></li>
              <li><a href="#pickups" data-toggle="tab">Pickup</a></li>
            </ul>
            <div class="tab-content">

              <!-- /.tab-pane FACILITIES SUPPORTED -->
              <div class="active tab-pane" id="facilities">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">HEALTH FACILITIES SUPPORTED BY {{$ips->name}}</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    @if(!Empty($healthFacilities))

                      <table id="example2" class="table table-bordered table-striped">
                        {{--@include('layouts.ip_dashboard.ipAllocation')--}}
                        <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Name</th>
                          <th>Code</th>
                          <th>Facility Level</th>
                          <th>Sub-county</th>
                          <th>Status</th>

                        </tr>
                        </thead>
                        <tbody>
                        @php($i = 1)
                        @foreach($healthFacilities as $facility)
                            <tr>
                              <td>{{$i}}</td>
                              <td>{{$facility->facilityName}}</td>
                              <td>{{$facility->code}}</td>
                              <td>{{$facility->levelName}}</td>
                              <td>{{$facility->subcountyName}}</td>
                              @if($i == 1 || $i == 3)<td><p class="alert-danger">No Tools Delivered</p></td>
                              @else<td><p class="alert-success">Tools Delivered</p></td>
                              @endif
                            </tr>
                            @php($i++)
                        @endforeach

                        <tr style="font-weight: bold"> <td>TOTAL</td><td>{{$totalFacilities}}</td><td></td><td></td><td></td><td></td></tr>
                        </tbody>
                      </table>
                    @else
                      <div class="alert-danger">
                        <strong>No Facilities Found supported by {{$ips->name}},
                          <a href="{{url('facility')}}" style="color:greenyellow; text-decoration:underline "> ADD Facilities</a>
                        </strong>
                      </div>
                    @endif
                  </div>
                </div>

              </div>
              <!-- /.tab-pane ALLOCATION -->
              <div class="tab-pane" id="allocation">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">FACILITY ALLOCATION FOR {{$ips->name}}</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <table id="example1" class="table table-bordered table-striped">
                        {{--@include('layouts.ip_dashboard.ipAllocation')--}}
                        <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>HMIS Tool</th>
                          <th>Facility Name</th>
                          <th>Facility Level</th>
                          <th>Quantity Allocated</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php($i=1)
                      @foreach($array as $arr)
                        {{--@php(print_r($arr['facilityName']."===>".$arr['toolName']."(".$arr['quantity'].")"))--}}
                          <tr>
                            <td>{{$i}}</td>
                            <td>{{$arr['toolName']}}</td>
                            <td>{{$arr['facilityName']}}</td>
                            <td>{{$arr['facilityLevel']}}</td>
                            <td>{{$arr['quantity']}}</td>
                          </tr>
                        @php($i++)
                      @endforeach

                      {{--@php($all_data = [])--}}
                      {{--@php($tool_qty = 0)--}}
                      {{--@for($index = 0; $index < count($allocation); $index++)--}}
                        {{--@php($array = $allocation[$index])--}}
                        {{--@foreach($array as $arr)--}}
                          {{--@php($v= get_object_vars($arr))--}}
                          {{--@php(print_r($v))--}}
                        {{--@endforeach--}}
                      {{--@endfor--}}
                      {{--@foreach($allocation as $allocationData)--}}
                        {{--@php(print_r($allocationData))--}}
                      {{--@endforeach--}}

                      {{--<table id="example1" class="table table-bordered table-striped">--}}
                      {{--@include('layouts.ip_dashboard.ipAllocation')--}}
                      {{--<thead>--}}
                      {{--<tr>--}}
                        {{--<th style="width: 10px">#</th>--}}
                        {{--<th>Date</th>--}}
                        {{--<th>Tool</th>--}}
                        {{--<th>Facility Name</th>--}}
                        {{--<th>Level</th>--}}
                        {{--<th>Quantity</th>--}}
                        {{--<th>Total Allocated</th>--}}
                        {{--<th>Allocated By</th>--}}
                      {{--</tr>--}}
                      {{--</thead>--}}
                      {{--<tr>--}}
                      {{--@php($toolsPerTool = []) <!-- Create Empty array to hold total TOOL for each Facility Level-->--}}
                      {{--@php($i = 1)--}}
                      {{--@php($totalAllocation = 0)--}}
                       {{--@foreach($allocation as $allocationData)--}}
                       {{--@foreach($array as $allocate)--}}
                          {{--@foreach($allocationData as $allocate)--}}
                            {{--@php($toolsPerTool[$allocate->toolName][] = $totalToolPerLevel)--}}
                            {{--@php(print_r($toolsPerTool))--}}
                              {{--@php($total = 0)--}}
                              {{--@php($index=0)--}}
                              {{--@foreach($toolsPerTool as $tool)--}}
                                {{--@php($total += $tool)--}}
                              {{--@endforeach--}}


                              {{--<tr>--}}
                                {{--<td>{{$i}}</td>--}}
                                {{--<td>{{$allocate->date_allocated}}</td>--}}
                                {{--<td>{{$allocate->toolName}}</td>--}}
                                {{--<td>{{$allocate->facilityName}}</td>--}}
                                {{--<td>{{$allocate->facilityLevel}}</td>--}}
                                {{--<td>{{$allocate->quantity}}</td>--}}
                                {{--@foreach($noFacilityLevel as $levels)--}}
                                  {{--<!-- Get Total Number of each tool to be given per facility Level-->--}}
                                  {{--@if($levels->facilitylevel_id == $allocate->levelId)--}}
                                    {{--<td>{{ $totalToolPerLevel = ($levels->facilityLevel_count * $allocate->quantity) }}</td>--}}
                                  {{--@endif--}}
                                {{--@endforeach--}}
                                {{--<td>{{$allocate->allocated_by}}</td>--}}
                                {{--<!--Create an Array total Number to be received by an IP of Each tool  -->--}}

                              {{--</tr>--}}

                        {{--@php($i++)--}}
                        {{--@php($totalAllocation+=$allocate->quantity)--}}
                       {{--@endforeach--}}
                      {{--@endforeach--}}
                      {{--<tr style="font-weight: bold"> <td>TOTAL</td><td></td><td></td><td></td><td>{{$totalAllocation}}</td><td></td><td></td></tr>--}}
                      </tbody>
                    </table>
                  </div>
                </div>

              </div>
              <!-- /.tab-pane PICKUP-->

              <div class="tab-pane" id="pickups">


                <p>PICKUP CONTENT HERE</p>


              </div>
              <!-- /.tab-pane HOME -->
              <div class="tab-pane" id="home">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">PARTNER ALLOCATION ( {{$ips->name}} )</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table id="example3" class="table table-bordered table-striped">
                      {{--@include('layouts.ip_dashboard.ipAllocation')--}}
                      <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>HMIS Tools</th>
                        <th>Quantity Allocated</th>
                        <th>Pack Size</th>
                        <th>Packs</th>
                        <th>Pieces</th>
                      </tr>
                      </thead>
                      <tbody>

                      @php($i=1)
                      @foreach($all_allocation as $key=>$value)
                        @php($toolName = explode("|",$key)[1])

                        <tr>
                          <td>{{$i}}</td>
                          <td>{{$toolName}}</td>
                          <td>{{$value}}</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        @php($i++)
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>


              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>




  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

    <!-- jQuery 1.12.4 -->
    {{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
    {{--<script src="https://cdn.datatables.net/1.10.14/js/jquery.dataTables.min.js"></script>--}}
<!-- jQuery 2.2.3 -->
<script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/bower_components/AdminLTE/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/bower_components/AdminLTE/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!--EXPORT PRINT BUTTON-->
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
<!-- SlimScroll -->
<script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>

<!-- page script -->
<script>
    $(function () {
        $("#example3").DataTable({
            "pageLength": 15,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            });
        $("#example1").DataTable({
            dom: 'Bfrtip',
            "pageLength": 15,
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
       });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "pageLength": 15,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]

//            buttons: [
//                { extend: 'create', editor: editor },
//                { extend: 'edit',   editor: editor },
//                { extend: 'remove', editor: editor },
//                {
//                    extend: 'collection',
//                    text: 'Export',
//                    buttons: [
//                        'copy',
//                        'excel',
//                        'csv',
//                        'pdf',
//                        'print'
//                    ]
//                }
//            ]
        });
    });
</script>

</body>
@endsection
</html>
