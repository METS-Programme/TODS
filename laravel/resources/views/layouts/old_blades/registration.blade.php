@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@include('includes.sidebar')

@section('content')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="...">
                    <h3 class="panel-title" style="..."> Sign up </h3>
                </div>
                <div class="panel-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="first_name"> First Name </label>
                            <input class="form-control" type="text" name="first_name" id="first_name">
                        </div>

                        <div class="form-group">
                            <label for="last_name"> Last Name </label>
                            <input class="form-control" type="text" name="last_name" id="last_name">
                        </div>

                        <div class="form-group">
                            <label for="other_name"> Other Name(s) </label>
                            <input class="form-control" type="text" name="other_name" id="other_name">
                        </div>

                        <div class="form-group">
                            <label for="e-mail"> E-mail Address </label>
                            <input class="form-control" type="text" name="e-mail" id="e-mail">
                        </div>

                        <div class="form-group">
                            <label for="phone1"> Phone Number</label>
                            <input class="form-control" type="tel" name="phone1" id="phone1">
                        </div>

                        <div class="form-group">
                            <label for="phone2"> Phone Number</label>
                            <input class="form-control" type="tel" name="phone2" id="phone2">
                        </div>

                        <div class="form-group">
                            <label for="Organisation"> Organisation</label>
                            <input class="form-control" type="text" name="organisation" id="organisation">
                        </div>

                        <div class="form-group">
                            <label for="username"> User Name</label>
                            <input class="form-control" type="text" name="username" id="username">
                        </div>

                        <div class="form-group">
                            <label for="password"> Password</label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>

                        <div class="form-group">
                            <label for="password-confirmation"> Confirm Password</label>
                            <input class="form-control" type="password" name="password-confirmation" id="password">
                        </div>

                        <button type="submit" class="btn btn-primary"> Submit </button>
                        <button type="reset" class="btn btn-primary"> Reset </button>
                    </form>
                </div>
            </div>
        </div>

        @endsection