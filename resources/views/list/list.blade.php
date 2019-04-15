@extends('layouts.app')

@section('content')
<script>document.getElementById('nav-list').style.fontWeight = "bold"</script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>My Bills</h4></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                                @foreach($bills as $bill)
                                @if($bill->userId == Auth::user()->id)
                                <div class="full-bill-row">
                                    <div class="bill-row">
                                        <h4>{{ $bill->name }}</a></h4>
                                        <h5>&#36;{{ $bill->price . PHP_EOL }}</h5>
                                    </div>
                                    <div>
                                        <a href="{{ route('pay.bills', [$bill->id]) }}"><button class="btn btn-danger pull-right">Delete</button></a>
                                        <a href="{{ route('pay.delete', [$bill->id]) }}"><button class="btn btn-success pull-right">Pay</button></a>
                                    </div>
                                </div>
                                <hr />
                                @endif
                                @endforeach
                        <a href="{{ route('bills') }}"><button class="btn btn-info pull-right">Add Bills</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection