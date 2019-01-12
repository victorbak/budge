@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Spent</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{route('spent.update')}}">
                            <label>Enter amount you spent.</label>
                            <input class="form-control" type="text" name="spent" id="spent">
                            {{ csrf_field() }}
                            <br/>
                            <div>
                                <input class="form-control btn btn-success" type="submit" value="Submit" style="width:100px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection