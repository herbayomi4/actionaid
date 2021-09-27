@extends('layouts.app')
@section('content')
    <div class="container">
        <p>Note: Give Monthly sets up for you ‘Regular Giving’: a recurring Monthly debit on your payment-card as sign-on to Action Aids’s Social Justice support to the Rights of : Women & safe city, child & Girl’s to Education. Psychosocial support to displaced victims of insurgences Relief in emergencies and Building resilience of rural communities</p>
        <p>While: Give Once is a ‘One-off’ Donation</p>

        <div class="jumbotron">
            @include('inc.messages')
            {{--  --}}
                <div class="form-group row">
                    <div class="col-md-4">
                        
                        <input id="amount1" type="button" onclick="getValue('2,000')" value="NGN 2,000" class="btn btn-success form-control" >
                        
                    </div>
                    <div class="col-md-4">
                        <input name="amount2" type="button" onclick="getValue('5,000')" class="btn btn-success form-control" value="NGN 5,000" >
                    </div>
                    <div class="col-md-4">
                        <input name="amount3" type="button" onclick="getValue('7,500')" class="btn btn-success form-control" value="NGN 7,500" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4">
                        <input name="amount4" type="button" onclick="getValue('10,000')" class="btn btn-success form-control" value="NGN 10,000" >
                    </div>
                    <div class="col-md-4">
                        <input name="amount5" type="button" onclick="getValue('15,000')" class="btn btn-success form-control" value="NGN 15,000" >
                    </div>
                    <div class="col-md-4">
                        <input name="amount6" type="button" onclick="getValue('20,000')" class="btn btn-success form-control" value="NGN 20,000" >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4 col-md-offset-2">
                        <input type="button" class="btn btn-danger" onclick="getPlan('Monthly_Donation')" value="Give Monthly" name="plan1">
                    </div>
                    <div class="col-md-offset-7">
                        <input type="button" class="btn btn-danger" onclick="getPlan('Give_Once')" value="Give Once" name="plan2">
                    </div>
                </div>
                {!! Form::open(['action' => 'DashboardController@store', 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('amount', 'Amount')}}
                        {{Form::text('amount', '', ['class'=>'form-control', 'id'=>'amount', 'readonly'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('plan', 'Plan')}}
                        {{Form::text('plan', '', ['class'=>'form-control', 'id'=>'plan', 'readonly'])}}
                    </div>
                    <input class="btn btn-primary" role="submit" type="submit" value="Proceed to Donate">
                {!! Form::close() !!}
        </div>
    </div>
@endsection
<script>
        function getValue(amount) {
            document.getElementById("amount").value = "NGN "+amount;
        }
        function getPlan(plan) {
            document.getElementById("plan").value = plan;
        }
        </script>