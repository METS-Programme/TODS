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
                    <h3 class="panel-title"> PRINT ORDER </h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="Ordered By" class="form-control input-sm" placeholder="Ordered By">
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="LPO number" class="form-control input-sm" placeholder="LPO Number">
                            </div>
                        </div>

                        <div class="form-group">
                            Date ordered
                            <input type="date" name="date ordered" class="form-control input-sm">
                        </div>


                        <table class="table">
                            <thead class="table-lines">
                            <tr>
                                <th class="table-lines"> HMIS Tool Code and name </th>
                                <th class="table-lines"> Quantity Ordered </th>
                                <th class="table-lines"> Tools Duration</th>
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

                        <div class="form-group">
                            <input type="text" name="Ordered By" class="form-control input-sm" placeholder="Ordered By">
                        </div>

                        <div class="form-group">
                            <input type="textbox" name="Comment" class="form-control input-sm" placeholder="Comments">
                        </div>


                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" value="Place Order" class="btn btn-info btn-block">
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