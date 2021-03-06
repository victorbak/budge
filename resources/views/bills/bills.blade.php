@extends('layouts.app')

@section('content')
<script>document.getElementById('nav-bills').style.fontWeight = "bold"</script>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Add Bill</h4></div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- Add bills form -->
                        <form method="post" action="{{route('bills.insert')}}">
                            <label>Add a bill.</label>
                                <div class="input-group">
                                    <input class="form-control" placeholder="Bill Name" type="text" name="name" id="name">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control bfh-number" name="price" id="price" placeholder="Price" data-min="0" data-max="9999999">
                                </div>
                            {{ csrf_field() }}
                            <br/>
                            <div>
                                <input class="form-control btn btn-success pull-right" type="submit" value="Submit" style="width:100px;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection