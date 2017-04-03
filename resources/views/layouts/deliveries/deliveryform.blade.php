
<div class="box box-default">
        <div class="box-header with-border">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Printing Agency:</strong>
                            {!! Form::text('printing_agency', null, array('placeholder' => 'printing_agency','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <strong>Date delivered:</strong>
                                {!! Form::date('date_delivered', null, array('placeholder' => 'Date delivered','class' => 'form-control')) !!}
                                </div>
                                <!-- /.input group -->
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Print Order Number:</strong>
                            {!! Form::text('print_order_number', null, array('placeholder' => 'print order number','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <!-- /.form-group -->
                    <!-- /.row -->
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
                                    <!-- /.form group -->
                                    <div class="box-body">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>HMIS Tool Name and code</th>
                                                <th>Quantity Delivered</th>
                                                <th colspan=>Storage Location</th>
                                            </tr>
                                            <tr>
                                                <td>1.</td>
                                                <td><div class="form-group">
                                                        {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    {!! Form::text('quantity_delivered', null, array('placeholder' => 'quantity delivered','class' => 'form-control')) !!}
                                                </td>
                                                <td>
                                                    {!! Form::text('storage_location', null, array('placeholder' => 'storage location','class' => 'form-control')) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2.</td>
                                                <td><div class="form-group">
                                                        {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    {!! Form::text('quantity_delivered', null, array('placeholder' => 'quantity delivered','class' => 'form-control')) !!}
                                                </td>
                                                <td>
                                                    {!! Form::text('storage_location', null, array('placeholder' => 'storage location','class' => 'form-control')) !!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3.</td>
                                                <td><div class="form-group">
                                                        {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    {!! Form::text('quantity_delivered', null, array('placeholder' => 'quantity delivered','class' => 'form-control')) !!}
                                                </td>
                                                <td>
                                                    {!! Form::text('storage_location', null, array('placeholder' => 'storage location','class' => 'form-control')) !!}
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
                    </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.control-sidebar -->
                <!-- Add the sidebar's background. This div must be placed
                     immediately after the control sidebar -->
                <div class="control-sidebar-bg"></div>
            </div>
        </div>
     <!-- ./wrapper -->

