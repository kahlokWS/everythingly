@extends('firstPage.header')

@section('content')
<div class="row">
    <div class="top-right links">
        <a href="{{url('/')}}">Back to Login Page</a>
    </div>
    <div class="col-mg-12" align="center">
        <h1>New Account Registration</h1>
    </div>
    <form method="post" action="{{ url('registerStore') }}">
    {{csrf_field()}}
    <div class="col-mg-12">
        <table class="table table-bordered">
            <tr>
                <th>Username</th>
                <td><input type='text' class="form-control" name="username" maxlength="25" autocomplete='off'></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td><input type='text' class="form-control" name="name" autocomplete="off"></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="text" class="form-control" name="email" autocomplete="off"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" class="form-control" name="password" autocomplete="off"></td>
            </tr>
            <tr>
                <th>Retype Password</th>
                <td><input type="password" class="form-control" name="password_confirmation"></td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>
                    <div class="col-lg-4 p-10 clearfix">
                        <select name="day" class="form-control">
                            @for ($i = 1; $i <= 31; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-lg-4 p-10 clearfix">
                        <select name="month" class="form-control">
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{$i}}">{{date("M", strtotime("2019-$i-01"))}}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-lg-4 p-10 clearfix">
                        <select name="year" class="form-control">
                            @for ($i = 1990; $i <= 2020; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>
                    <select name="gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>
        </table>
        <div class="col-mg-12 text-right">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
    
    <div class="row">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
        @foreach ($errors->all() AS $error)
            <li>{{$error}}</li>
        @endforeach
        </div>
    @endif
    @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
  @endif
    </div>
</div>
@endsection