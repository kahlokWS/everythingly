@extends('bodyPage.header')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="col-lg-12 col-md-12 p0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-star"></i> Quick Access</h4>
                </div>
                <div class="panel-body">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 div_btn">
                        <button class="btn btn-primary btn_report" style="height: 130px; width: 130px; margin: 15px;">Profile</button>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 div_btn">
                        <button class="btn btn-primary btn_report" style="height: 130px; width: 130px; margin: 15px;">Financial <br>Information</button>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 div_btn">
                        <button class="btn btn-primary btn_report" style="height: 130px; width: 130px; margin: 15px;">ASD</button>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 div_btn">
                        <button class="btn btn-primary btn_report" style="height: 130px; width: 130px; margin: 15px;">ASD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="col-lg-12 col-md-12 p0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><i class="fa fa-star"></i> Monthly Savings</h4>
                </div>
                <div class="panel-body">
                    <monthydash></monthydash>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection