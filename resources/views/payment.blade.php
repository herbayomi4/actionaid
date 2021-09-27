@extends('layouts.app')

@section('content')
@php
                            switch ($link) {
                                case 'Monthly_Donation_NGN 2,000':
                                    $li = "actionaid_monthly_donation_2000";
                                    break;
                                    case 'Monthly_Donation_NGN 5,000':
                                    $li = "actionaid_monthly_donation_5000";
                                    break;
                                    case 'Monthly_Donation_NGN 7,500':
                                    $li = "actionaid_monthly_donation_7500";
                                    break;
                                    case 'Monthly_Donation_NGN 10,000':
                                    $li = "actionaid_monthly_donation_10000";
                                    break;
                                    case 'Monthly_Donation_NGN 15,000':
                                    $li = "actionaid_monthly_donation_15000";
                                    break;
                                    case 'Monthly_Donation_NGN 20,000':
                                    $li = "actionaid_monthly_donation_20000";
                                    break;
                                    case 'Give_Once_NGN 2,000':
                                    $li = "actionaid_give_once_2000";
                                    break;
                                    case 'Give_Once_NGN 5,000':
                                    $li = "actionaid_give_once_5000";
                                    break;
                                    case 'Give_Once_NGN 7,500':
                                    $li = "actionaid_give_once_75000";
                                    break;
                                    case 'Give_Once_NGN 10,000':
                                    $li = "actionaid_give_once_10000";
                                    break;
                                    case 'Give_Once_NGN 15,000':
                                    $li = "actionaid_give_once_15000";
                                    break;
                                    case 'Give_Once_NGN 20,000':
                                    $li = "actionaid_give_once_20000";
                                    break; 
                                
                                default:
                                    # code...
                                    break;
                            }
                        @endphp
    <div class="container">
        <form method="POST" action="<?php echo 'https://paystack.com/pay/'.$li; ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
            <div class="row" style="margin-bottom:40px;">
                <div class="col-md-8 col-md-offset-2">
                <p>
                    <div>
                        
                    </div>
                </p>
                <input type="hidden" name="email" value="otemuyiwa@gmail.com"> {{-- required --}}
                <input type="hidden" name="orderID" value="345">
                <input type="hidden" name="amount" value="800"> {{-- required in kobo --}}
                <input type="hidden" name="quantity" value="3">
                <input type="hidden" name="metadata" value="<? php json_encode($array = ['key_name' => 'value',]) ?>" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                <input type="hidden" name="reference" value="<? php Paystack::genTranxRef() ?>"> {{-- required --}}
                <input type="hidden" name="key" value="<? php config('paystack.secretKey') ?>"> {{-- required --}}
    
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                    </button>
                </p>
                </div>
            </div>
        </form>
    </div>
@endsection