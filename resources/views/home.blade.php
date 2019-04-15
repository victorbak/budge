@extends('layouts.app')

@section('content')
<script>document.getElementById('nav-home').style.fontWeight = "bold"</script>

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
                    <!--  Checks users budget and displays -->
                    <div id="debt">
                        <h1 id="cash">${{ Auth::user()->budget }}</h1>
                            <br/>
                        @if (Auth::user()->budget < 0)  
                            <h1>You're in debt!!!</h1>
                        @endif
                    </div>
                    <br/>
                    <div class="col-sm-12 text-center">
                        <a href="{{ route('paid') }}"><button class="btn btn-success pull-left">Got Paid!</button></a>
                        <a href="{{ route('spent') }}"><button class="btn btn-danger pull-right">Spent Money</button></a>
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
