@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Paid</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            @foreach($bills as $bill)
                                <h4><a href="{{ route('pay.bills', [$bill->id]) }}">{{ $bill->name }}</a></h4>
                                <h5>{{ $bill->price . PHP_EOL }}</h5>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection