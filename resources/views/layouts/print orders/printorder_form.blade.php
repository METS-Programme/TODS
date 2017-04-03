<!-- SELECT2 EXAMPLE -->
   <!-- <div class="box box-default">
        <div class="box-header with-border">
            <!-- /.box-header -->
           <!-- <div class="box-body">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>LPO Number:</strong>
                            {!! Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')) !!}

                        </div>
                    </div>
                    <!-- /.form-group -->

                  <!--  <div class="col-md-6">
                        <div class="form-group">
                            <strong>Date Ordered:</strong>
                            {!! Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}

                        </div>
                    </div>

                </div>
            </div>
                <!-- /.row -->
                <!-- /.box-body -->
            <!-- /.box -->

            <!--<div class="row">
                <div class="col-md-12">

                    <div class="box box-danger">
                        <div class="box-header">
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-md-12">

                                </div>
                                <!-- /.form group -->
                               <!-- <div class="box-body">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>HMIS Tool Name and code</th>
                                            <th>Quantity Ordered</th>
                                            <th>Tool Duration</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td><div class="form-group">
                                                    {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!! Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td><div class="form-group">
                                                    {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!! Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td><div class="form-group">
                                                    {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!! Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    {!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Comments:</strong>
                                                {!! Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control')) !!}
                                            </div>
                                            <!-- /.input group -->
                                       <!-- </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Order</button>
                                    <button type="reset" class="btn btn-primary">Clear</button>
                                </div>
                                <!-- /.box-body -->

                                <!-- /.input group -->
                           <!-- </div>
                            <!-- /.form group -->

                       <!-- </div>
                        <!-- /.box-body -->
                   <!-- </div>

                    <!-- /.box -->


                    <!-- /.form-group -->
               <!-- </div>
                <!-- /.tab-pane -->
          <!--  </div>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
           <!-- <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->


<div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4 class="modal-title" style="text-align: center;"></h4>
        </div>
        <div class="modal-body">
            {{ Form::open(array('action' => 'Auth\AuthController@login', 'method' => 'post')) }}
            <div class="form-group">
                <label for="login-email">Email address</label>
                {!! Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')) !!}
            </div>
            <div class="form-group">
                <label for="login-password">Password</label>
                {!! Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <label for="login-password">Password</label>
                {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <label for="login-password">Password</label>
                {!! Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <label for="login-password">Password</label>
                {!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}
            </div>
            {{ Form::submit('Sign in', array('class' => 'btn btn-info btn-block')) }}
            <hr>
            {{ Form::close() }}
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->