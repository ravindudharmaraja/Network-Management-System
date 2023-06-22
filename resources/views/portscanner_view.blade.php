@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Check Open Ports</h4>
                </div>
                <div class="card-body">
                <div class="alert alert-danger text-center" style="display:none" id="error_msg">Something Wrong! Try again...></div>
                        <div class="row">
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="host" id="host" placeholder="Enter domain or IP address (ex-  193.33.186.70)">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success" onclick="checkportscanner()" id="btn">Check</button>
                                
                            </div>
                        </div>

                        <br><br>

                        <div class="row" id="tbl"></div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection