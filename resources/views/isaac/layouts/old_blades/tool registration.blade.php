@extends('layouts.master')
@section('title')
    Tool Registration
@endsection
@include('includes.sidebar')
@section('content')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> TOOL REGISTRATION</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">

                                <table class="table">
                                    <thead class="table-lines">
                                    <tr>
                                        <th class="table-lines"> HMIS Tool Code </th>
                                        <th class="table-lines"> HMIS Tool Name</th>
                                        <th class="table-lines"> Specification </th>
                                        <th class="table-lines"> Service</th>
                                        <th class="table-lines"> Package</th>
                                        <th class="table-lines"> Description</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="table-lines">
                                            <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                        </td>
                                        <td class="table-lines"> &nbsp</td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp</td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp</td>
                                    </tr>
                                    <tr>
                                        <td class="table-lines">
                                            <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                        </td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp</td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp</td>
                                    </tr>
                                    <tr>
                                        <td class="table-lines">
                                            <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                                        </td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp</td>
                                        <td class="table-lines"> &nbsp </td>
                                        <td class="table-lines"> &nbsp</td>
                                    </tr>

                                    </tbody>
                                </table>

                                <div class="form-group">
                                    <input type="text" name="Comment" class="form-control input-sm" placeholder="Comments">
                                </div>


                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="submit" value="Register" class="btn btn-info btn-block">
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