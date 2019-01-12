@extends('layouts.app')

@section('content')
<?php $debt =""; ?>
 <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>My Budget</h4></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Auth::user()->budget < 0)  
                        <?php $debt = "You're in debt!!!"?>
                    @endif
                    <div style="font-size:65px; text-align:center">${{ Auth::user()->budget }}
                        <br/>
                        <?php echo $debt ?>
                    </div>
                    <br/>
                    <div class="col-sm-12 text-center">
                        <a href="{{ route('paid') }}"><button class="btn btn-success pull-left">Got Paid!</button></a>
                        <a href="{{ route('spent') }}"><button class="btn btn-danger text-center">Spent Money</button></a>
                        <a href="{{ route('pay') }}"><button class="btn btn-info pull-right">Pay Bills</button></a>
                    </div>
                    <br/>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
