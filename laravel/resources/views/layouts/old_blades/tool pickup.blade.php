@extends('layouts.master')
@section('title')
    Print Orders
@endsection
@include('includes.sidebar')
@section('content')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> TOOL PICKUP</PICKUP> </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="Implementing Partner" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Implementing Partner
                            </button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="Order Number" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Order Number
                            </button>
                        </div>
                        <div class="form-group">
                            <label for="Date of Pickup">Date of Pickup</label>
                            <input type="date" id="Date of Pickup" placeholder="Pickup date">
                        </div>
                        <table class="table">
                            <thead class="table-lines">
                            <tr>
                                <th class="table-lines"> HMIS Tool Code and name </th>
                                <th class="table-lines" rowspan="3"> Quantity </th>

                            </tr>

                            </thead>
                            <tbody>
                            <tr>
                                <td class="table-lines"> &nbsp</td>
                                <td class="table-lines"> Ordered</td>
                                <td class="table-lines"> Authorised</td>
                                <td class="table-lines"> Collected </td>
                            </tr>
                            <tr>
                                <td class="table-lines">
                                    <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                </td>
                                <td class="table-lines"> &nbsp</td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                            </tr>
                            <tr>
                                <td class="table-lines">
                                    <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                </td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                            </tr>
                            <tr>
                                <td class="table-lines">
                                    <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                </td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                                <td class="table-lines"> &nbsp </td>
                            </tr>

                            </tbody>
                        </table>
                        <div class="form-group">
                            <input type="textbox" name="Comment" class="form-control input-sm" placeholder="Comments">
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="Picked By" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Picked By
                            </button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="Given By" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Given By
                            </button>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" value="Save" class="btn btn-info btn-block">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="reset" value="Clear" class="btn btn-info btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

@endsection