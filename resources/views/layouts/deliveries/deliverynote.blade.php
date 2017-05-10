@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h2>Order Details</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('printorderCRUD.index') }}"> Back</a>
                </div>
            </div>

            {{--<div class="row">--}}
                {{--<table class="table table-bordered table-striped">--}}
                    {{--<thead>--}}
                    {{----}}
                    {{--</thead>--}}
                {{--</table>--}}
            {{--</div>--}}

            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>
                        <strong>LPO number:</strong>
                        <span style="font-weight: 500; font-size: 22px; color: red;">{{ $printorder->lpo_number}}</span>
                    </th>
                    <th>
                        <strong>Date ordered:</strong>
                        <span style="font-weight: 500; font-size: 18px;">{{ $printorder->date_ordered}}</span>
                    </th>
                    <th>
                        <strong>Tools duration:</strong>
                        <span style="font-weight: 500; font-size: 17px;">{{ $printorder->tools_duration}}</span>
                    </th>
                    <th>
                        <strong>Ordered By:</strong>
                        <span style="font-weight: 500; font-size: 17px;">{{ $printorder->ordered_by}}</span>
                    </th>
                    <th>
                        <strong>Ordered To:</strong>
                        <span style="font-weight: 500; font-size: 17px;">{{ $printorder->ordered_to}}</span>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th>No</th>
                    <th colspan="2">Tool Name</th>
                    <th colspan="2">Quantity Ordered</th>
                </tr>
                </thead>
                <tbody>
                    @php($i=1)
                    @foreach ($printOrderDetail as $details)
                        <tr>
                        <td>{{$i}}</td>
                        <td colspan="2">{{ $details->name}}</td>
                        <td colspan="2">{{ $details->quantity_ordered}}</td>
                        </tr>
                        @php($i++)
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
@endsection