@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b><h3>Dashboard</h3></b></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <h4><b>Donation History</b></h4>
                    @if(count($transactions)>0)
                    <p>The table belows show your donation history.</p>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>S/N</th>
                                <th>Donate Category</th>
                                <th>Amount</th>
                                <th>Date</th>
                              </tr>
                            </thead>
                            <tbody>
                            @php
                                $sn = 0;
                            @endphp
                            @foreach($transactions as $traansaction)
                            @php
                                $sn++;
                            @endphp
                              <tr>
                                <td><?php echo $sn;?></td>
                                <td>{{$traansaction->category}}</td>
                                <td>{{$traansaction->amount}}</td>
                                <td>{{$traansaction->created_at->format('y-m-d')}}</td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                     
                    @else
                          <p class="alert alert-warning">You are yet to make a donation</p>
                          @endif  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
