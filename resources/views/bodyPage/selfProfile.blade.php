@extends('bodyPage.header')

@section('content')
<style>
.text-darkteal {
    color: #43A19E !important;
}
</style>
<div class="col-lg-12 p-0 clearfix p-t-10">
    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 p-1-0 border-grey-right pull-left">
        <div style="width: 150px; height: 150px; border-radiou: 50%;">
            <div style="width: 100%; height: 100%; border-radius: 50%; background-repeat: no-repeat; background-clip: padding-box; background-size: cover; background-image: url(https://www.telegraph.co.uk/content/dam/films/2017/03/20/bean_trans_NvBQzQNjv4BqFNieKJvd-mi0anfcfhLYGg39oWbqNtszRryLrO6EuiQ.png?imwidth=450)"></div>
        </div>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 pull-left">
        <span class="h-6" style="display: block; width: 100%; font-weight: 600 !important; color: rgb(70, 168, 165);">{{$user_info->username}}</span>
        <table class="table-no-border table-no-effect" cellpadding="5" cellspacing="0" border="0">
            <tr>
                <td width="20%" class="p-1-0 p-0"><b>Direct Line </b></td>
                <td class="p-t-0 p-r-0 p-b-0">: <b>010-1234567</td>
            </tr>
            <tr>
                <td width="20%" class="p-1-0 p-0"><b>Mobile Line </b></td>
                <td class="p-t-0 p-r-0 p-b-0">: <b>010-2344444</b></td>
            </tr>
            <tr>
                <td width="20%" class="p-1-0 p-0"><b>Email </b></td>
                <td class="p-t-0 p-r-0 p-b-0">: <b>{{$user_info->email}}</b></td>
            </tr>
        </table>
    </div>
</div>
<hr class="over">
<div class="clearfix"></div>
<div class="panel panel-with-tabs bg-transparent">
    <div class="tab-content p-0">
        <div class="panel bg-white p-0">
            <div class="panel-body p-1-0 p-r-0">
            <div style="margin-bottom: 15px;" class="col-md-12">
                    <div class="pull-right">
                        <profile :user_info="{!! json_encode($user_info) !!}"></profile>
                    </div>
            </div>
            <div class="clearfix"></div>
                <fieldset>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="panel has-border-grey no-rounded-corner">
                                <div class="panel-heading">
                                    <h4 class="panel-title clearfix">
                                        <span class="f-s-18 f-w-600 l-h-30" style="color: #43A19E !important;">Employee Information</span>
                                    </h4>
                                </div>
                                <div class="panel-body p-l-50 p-r-30 border-grey-bottom p-b-30">
                                    <span class="f-s-14 f-w-600 text-darkteal">General Info</span>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Name</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$user_info->fullname}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Date of Birth</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{ date("d M Y", strtotime($info->dob))}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Gender</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$gender}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Race</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->race}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Religion</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->religion}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body p-l-50 p-r-30 border-grey-bottom p-b-30">
                                    <span class="f-s-14 f-w-600 text-darkteal">IC & Passport</span>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">NRIC (with -)</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->ic}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Passport Number</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->passport}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body p-l-50 p-r-30 border-grey-bottom p-b-30">
                                    <span class="f-s-14 f-w-600 text-darkteal">Contact Info</span>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Mobile Line</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->mobile_phone}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Home Line</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->home_phone}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Office Line</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->office_phone}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="panel has-border-grey no-rounded-corner">
                                <div class="panel-heading">
                                    <h4 class="panel-title clearfix">
                                        <span class="f-s-18 f-w-600 l-h-30" style="color: #43A19E !important;">Address</span>
                                    </h4>
                                </div>
                                <div class="panel-body p-l-50 p-r-30 border-grey-bottom p-b-30">
                                    <span class="f-s-14 f-w-600 text-darkteal">Home Address</span>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Address</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->address}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Postcode</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->postcode}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">City</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->city}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">State</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->state}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Country</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->country}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-heading">
                                    <h4 class="panel-title clearfix">
                                        <span class="f-s-18 f-w-600 l-h-30" style="color: #43A19E !important;">Job Information</span>
                                    </h4>
                                </div>
                                <div class="panel-body p-l-50 p-r-30 border-grey-bottom p-b-30">
                                    <span class="f-s-14 f-w-600 text-darkteal">Company</span>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Company Name</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->company_name}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Position</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$info->position}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Joined Date</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{ date("d M Y", strtotime($info->join_date))}}</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 p-l-0 p-r-0 p-b-10 p-t-5 border-grey-bottom">
                                        <label class="f-s-10 m-b-0 f-w-400 f-w-400">Length of Service</label>
                                        <div class="col-md-12 p-0">
                                            <span class="f-w-600 f-s-16 ds-block l-h-20">{{$los}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
@endsection