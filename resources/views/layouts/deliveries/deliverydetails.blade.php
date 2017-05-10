@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h2>Delivery details</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('deliveryCRUD.index') }}"> Back</a>
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th colspan="2">
                        <strong>LPO number:</strong>
                        <span style="font-weight: 500; font-size: 22px; color: red;">{{ $delivery->lpo_number}}</span>
                    </th>
                    <th >
                        <strong>Date Delivered:</strong>
                        <span style="font-weight: 500; font-size: 18px;">{{ $delivery->date_delivered}}</span>
                    </th>
                    <th>
                        <strong>Delivered By:</strong>
                        <span style="font-weight: 500; font-size: 17px;">{{ $delivery->delivered_by}}</span>
                    </th>
                    <th>
                        <strong>received By:</strong>
                        <span style="font-weight: 500; font-size: 17px;">{{ $delivery->received_by}}</span>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th>No</th>
                    <th colspan="2">Tool Name</th>
                    <th colspan="">Quantity Delivered</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach ($deliveryDetail as $details)
                    <tr>
                        <td class="col-sm-1">{{$i}}</td>
                        <td colspan="2">{{ $details->name}}</td>
                        <td colspan="2">{{ $details->quantity}}</td>
                    </tr>
                    @php($i++)
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    </div>
@endsection