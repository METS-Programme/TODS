@extends('layouts.master')
@section('title')
    Print Orders
@endsection

@section('content')

    <div id="sidebar" class="col-md-4">
        @include('includes.sidebar')
    </div>
    <div class="row centered-form col-md-8">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> PRINT ORDER DELIVERIES </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="Printing Agency" class="form-control input-sm" placeholder="Printing Agency">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="date" name="date delivered" class="form-control input-sm">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="Print order number" class="form-control input-sm" placeholder="Print Order Number">
                            </div>
                        </div>
                        <table class="table">
                            <thead class="table-lines">
                            <tr>
                                <th class="table-lines"> HMIS Tool Code and name </th>
                                <th class="table-lines"> Quantity Delivered </th>
                                <th class="table-lines"> Storage Location </th>
                            </tr>

                            </thead>
                            <tbody>
                            <tr>
                                <td class="table-lines">
                                    <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                </td>
                                <td class="table-lines"> &nbsp</td>
                                <td class="table-lines"> &nbsp </td>
                            </tr>
                            <tr>
                                <td class="table-lines">
                                    <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                </td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                            </tr>
                            <tr>
                                <td class="table-lines">
                                    <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                </td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                            </tr>

                            </tbody>
                        </table>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="Delivered By" class="form-control input-sm" placeholder="Delivered By">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="Received By" class="form-control input-sm" placeholder="Received By">
                            </div>
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" value="Save" class="btn btn-info btn-block">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="reset" value="Clear" class="btn btn-info btn-block">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection