<div class="box box-default">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group has-feedback">
                    {!! Form::label('items', 'Implementing Partner:') !!}
                    {!! Form::select('items', $items, null ) !!}
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('orderNumber', 'Order Number' ) !!}
                    {!! Form::number('orderNumber', 'value') !!}
                    {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-group">
                        {!! Form::label('date', 'Date Picked' ) !!}
                        <div class="input-group date">
                            {!! Form::date('date', \Carbon\Carbon::now()) !!}
                            {{--<input type="text" class="form-control pull-right" id="datepicker">--}}
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <!-- /.col -->
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('pickedBy', 'Picked By' ) !!}
                    {!! Form::text('pickedBy', '') !!}
                    {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('givenBy', 'Given By' ) !!}
                    {!! Form::text('givenBy', '') !!}
                    {{--<input type="text" class="form-control" placeholder="Enter ...">--}}
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->


{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group has-feedback">
        <input type="text" name="name" class="form-control" placeholder="IP Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <!-- select -->
    <div class="form-group">
        <label>Is IP a Comprehensive Partner</label>
        <select class="form-control" name="comprehensive_partner">
            <option value="No">NO</option>
            <option value="Yes">YES</option>
        </select>
    </div>

    <!-- select -->
    <div class="form-group">
        <label>Funding Agency</label>
        <select class="form-control" name="fundingagency_id">
            @foreach($items as $item)
                <option value="{{$item->fundingagency_id}}">{{$item->short_name}}</option>
            @endforeach

            --}}{{--{!! Form::select('items', $items, null ) !!}--}}{{--
            --}}{{--<option value="1">CDC</option>
            <option value="2">USAID</option>--}}{{--
        </select>
    </div>
    --}}{{--@foreach($fundingAgencies as $agency )
        {{$agency->name}} | {{$agency->fundingagency_id}}

    @endforeach--}}{{--

    <div class="row modal-footer">
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat ">{{$submitButtonText}}</button>
        </div>
        <div class="col-xs-4 ">
            <button type="reset" class="btn btn-primary btn-block btn-flat">{{$clearButton}}</button>
        </div>
        <!-- /.col -->
    </div>--}}
