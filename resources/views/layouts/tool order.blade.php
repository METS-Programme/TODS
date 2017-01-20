@extends('layouts.master')

@section('title')
    Tool Pickup
@endsection

@section('content')

    <body>

    <h3 align="center"> HMIS Tool Order </h3>

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
        <div class="box-header with-border">

        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Implementing Partner</label>
                        <select class="form-control select2" style="width: 100%;">
                            <option>IDI - KCC</option>
                            <option>IDI - BHP</option>
                            <option>IDI - WNP</option>
                            <option>Mildmay</option>
                            <option>Baylor</option>
                            <option>USAID</option>
                            <option>ASSIST</option>
                        </select>
                    </div>
                    <!-- /.form-group -->

                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <!-- /.form-group -->
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Order Date:</label>

                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>


                    <!-- /.form-group -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="row">
        <div class="col-md-12">

            <div class="box box-danger">
                <div class="box-header">
                </div>
                <div class="box-body">

                    <div class="form-group">
                        <div class="col-md-12">

                        </div>
                        <!-- /.form group -->
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>HMIS Tool Name and code</th>
                                    <th colspan="6">Quantity Ordered</th>
                                </tr>
                                <tr>
                                    <td> &nbsp </td>
                                    <td> &nbsp </td>
                                    <td> Hospital </td>
                                    <td> HC IV </td>
                                    <td> HC III </td>
                                    <td> HC II </td>
                                    <td> Clinic </td>
                                    <td> Total </td>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td><div class="form-group">
                                            <select class="form-control select2" data-placeholder="Select a tool" style="width: 100%;">
                                                <option>Comprehensive ART Transfer Form</option>
                                                <option>HMIS Form 031 - Out Patient Register</option>
                                                <option>HMIS Form 033b - Health Unit Weekly Epidemological Surveillance Report</option>
                                                <option>HMIS Form 035 - Safe Male Circumcision Register</option>
                                                <option>HMIS Form 035a - Safe Male Circumcision client form</option>
                                                <option>HMIS Form 035b - Safe Male Circumcision client card</option>
                                                <option>HMIS Form 036 - Post Exposure Prophylaxis Register</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>                                            </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>

                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td><div class="form-group">
                                            <select class="form-control select2" data-placeholder="Select a tool" style="width: 100%;">
                                                <option>Comprehensive ART Transfer Form</option>
                                                <option>HMIS Form 031 - Out Patient Register</option>
                                                <option>HMIS Form 033b - Health Unit Weekly Epidemological Surveillance Report</option>
                                                <option>HMIS Form 035 - Safe Male Circumcision Register</option>
                                                <option>HMIS Form 035a - Safe Male Circumcision client form</option>
                                                <option>HMIS Form 035b - Safe Male Circumcision client card</option>
                                                <option>HMIS Form 036 - Post Exposure Prophylaxis Register</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><div class="form-group">
                                            <select class="form-control select2" data-placeholder="Select a tool" style="width: 100%;">
                                                <option>Comprehensive ART Transfer Form</option>
                                                <option>HMIS Form 031 - Out Patient Register</option>
                                                <option>HMIS Form 033b - Health Unit Weekly Epidemological Surveillance Report</option>
                                                <option>HMIS Form 035 - Safe Male Circumcision Register</option>
                                                <option>HMIS Form 035a - Safe Male Circumcision client form</option>
                                                <option>HMIS Form 035b - Safe Male Circumcision client card</option>
                                                <option>HMIS Form 036 - Post Exposure Prophylaxis Register</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><div class="form-group">
                                            <select class="form-control select2" data-placeholder="Select a tool" style="width: 100%;">
                                                <option>Comprehensive ART Transfer Form</option>
                                                <option>HMIS Form 031 - Out Patient Register</option>
                                                <option>HMIS Form 033b - Health Unit Weekly Epidemological Surveillance Report</option>
                                                <option>HMIS Form 035 - Safe Male Circumcision Register</option>
                                                <option>HMIS Form 035a - Safe Male Circumcision client form</option>
                                                <option>HMIS Form 035b - Safe Male Circumcision client card</option>
                                                <option>HMIS Form 036 - Post Exposure Prophylaxis Register</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Quantity">
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <p align="center"> <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-primary">Clear</button> </p>
                        <!-- /.box-body -->

                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->


            <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="../../plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();

            //Datemask dd/mm/yyyy
            $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
            //Datemask2 mm/dd/yyyy
            $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
            //Money Euro
            $("[data-mask]").inputmask();

            //Date range picker
            $('#reservation').daterangepicker();
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                    {
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function (start, end) {
                        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }
            );

            //Date picker
            $('#datepicker').datepicker({
                autoclose: true
            });

            //iCheck for checkbox and radio inputs
            $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                checkboxClass: 'icheckbox_minimal-blue',
                radioClass: 'iradio_minimal-blue'
            });
            //Red color scheme for iCheck
            $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                checkboxClass: 'icheckbox_minimal-red',
                radioClass: 'iradio_minimal-red'
            });
            //Flat red color scheme for iCheck
            $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            //Colorpicker
            $(".my-colorpicker1").colorpicker();
            //color picker with addon
            $(".my-colorpicker2").colorpicker();

            //Timepicker
            $(".timepicker").timepicker({
                showInputs: false
            });
        });
    </script>
    </body>
    @endsection
    </html>
