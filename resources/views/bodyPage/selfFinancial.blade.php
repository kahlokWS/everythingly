@extends('bodyPage.header')

@section('content')
<div class="col-lg-12">
    <div style="background: #fff; box-shadow: 0 0 5px #ccc;">
        <p class="profilep_title_h pp1" style="background: #56BAEC; padding: 9px 10px 7px 10px; cursor: pointer;">
            <span style="font-weight: bold; color: #fff;">FINANCIAL INFORMATION</span>
        </p>
        <div style="padding: 0px 10px 100px 10px;">
            <div class="col-sm-2" style="padding: 0px 30px 30px 30px;">
                <div style="text-align: center;">
                    <img src="https://www.telegraph.co.uk/content/dam/films/2017/03/20/bean_trans_NvBQzQNjv4BqFNieKJvd-mi0anfcfhLYGg39oWbqNtszRryLrO6EuiQ.png?imwidth=450" 
                        style="width: 80px; height: auto; border-radius: 3px;">
                </div>
            </div>
            <div class="col-sm-3">
                <p style="font-weight: bold; font-size: 14px; color: #999; line-height: 20px;">NAME<br> <span>{{$user_info->fullname}}</span></p>
            </div>
            <div class="col-sm-3">
                <p style="font-weight: bold; font-size: 14px; color: #999; line-height: 20px;">EMAIL<br> <span>{{$user_info->email}}</span></p>
            </div>
            <div class="col-sm-3">
                <p style="font-weight: bold; font-size: 14px; color: #999; line-height: 20px;">DOB<br> <span>{{date("d M Y", strtotime($user_info->dob))}}</span></p>
            </div>
            <div class="clearfix"></div>

            <div class="col-sm-6" style="padding-right: 3px;">
                <div class="table-responsive">
                    <table style="background: #f4f4f4; border:solid 1px #91A4B5 !important;">
                        <tbody>
                            <tr>
                                <td colspan="3" style="background: #8899A8; padding: 10px 10px 0px 10px;">
                                    <p style="font-weight: bold; color: #fff;"><span>INCOME</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: green;">Basic</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: green;">Allowance</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: green;">Claim</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: red;">Deduction</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Net</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">2000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table style="background: #f4f4f4; border:solid 1px #91A4B5 !important;">
                        <tbody>
                            <tr>
                                <td colspan="3" style="background: #8899A8; padding: 10px 10px 0px 10px;">
                                    <p style="font-weight: bold; color: #fff;"><span>Allowance</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Transport</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">VOLA</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Total</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table style="background: #f4f4f4; border:solid 1px #91A4B5 !important;">
                        <tbody>
                            <tr>
                                <td colspan="3" style="background: #8899A8; padding: 10px 10px 0px 10px;">
                                    <p style="font-weight: bold; color: #fff;"><span>Claim</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">MDEC (2019-01-01)</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">MDEC (2019-02-02)</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Total</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 3px;">
                <div class="table-responsive">
                    <table style="background: #f4f4f4; border:solid 1px #91A4B5 !important;">
                        <tbody>
                            <tr>
                                <td colspan="3" style="background: #8899A8; padding: 10px 10px 0px 10px;">
                                    <p style="font-weight: bold; color: #fff;"><span>MONTHLY COMMITMENT</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Car Loan</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">House Loan</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Expenses</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Total</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">3000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-3" style="padding-right: 3px;">
                <div class="table-responsive">
                    <table style="background: #f4f4f4; border:solid 1px #91A4B5 !important;">
                        <tbody>
                            <tr>
                                <td colspan="3" style="background: #8899A8; padding: 10px 10px 0px 10px;">
                                    <p style="font-weight: bold; color: #fff;"><span>EXPENSES</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Car Loan</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">House Loan</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Expenses</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Total</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">3000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="col-sm-12" style="padding-right: 3px;">
                <div class="table-responsive">
                    <table style="background: #f4f4f4; border:solid 1px #91A4B5 !important; width: 100%;">
                        <tbody>
                            <tr>
                                <td colspan="3" style="background: #8899A8; padding: 10px 10px 0px 10px;">
                                    <p style="font-weight: bold; color: #fff;"><span>MONTHLY REMAINING</span></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: green;">Income</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: red;">Monthly Commitment</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold; color: red;">Expenses</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">1000</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 200px; padding-top: 11px; white-space: nowrap; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">Remaining</p>
                                </td>
                                <td width="1%" style="padding-top: 11px; background: #f4f4f4;">
                                    <p style="font-weight: bold;">:</p>
                                </td>
                                <td style="padding-top: 11px; background: #f4f4f4; padding-left: 10px;">
                                    <p style="font-weight: bold;">3000</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection