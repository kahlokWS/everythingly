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