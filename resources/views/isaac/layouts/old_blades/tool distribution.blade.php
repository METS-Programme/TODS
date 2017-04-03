@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@include('includes.sidebar')

@section('content')
<div class="row centered-form">
    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        <div class="panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> TOOL DISTRIBUTION </h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="Health Facility" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Health Facility
                        </button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="Facility Level" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Facility Level
                        </button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="Implementing Partner" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Implementing Partner
                        </button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="text" id="Received By" placeholder="Received By">
                    </div>
                    <table class="table">
                        <thead class="table-lines">
                        <tr>
                            <th class="table-lines"> HMIS Tool Code and name </th>
                            <th class="table-lines"> Facility currently </th>
                            <th class="table-lines"> Quantity Distributed </th>
                            <th class="table-lines" rowspan="2"> Estimated Period </th>
                        </tr>

                        </thead>
                        <tbody>
                        <tr>
                            <td class="table-lines"> &nbsp</td>
                            <td class="table-lines"> &nbsp</td>
                            <td class="table-lines"> &nbsp </td>
                            <td class="table-lines"> Months </td>
                            <td class="table-lines"> Days </td>
                        </tr>
                        <tr>
                            <td class="table-lines">
                                <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                            </td>
                            <td class="table-lines"> &nbsp</td>
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
                            <td class="table-lines"> &nbsp </td>
                        </tr>
                        <tr>
                            <td class="table-lines">
                                <input type="text" name="HMIS Code and name" class="form-control input-sm" placeholder="HMIS Code and name">
                            </td>
                            <td class="table-lines"> &nbsp </td>
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