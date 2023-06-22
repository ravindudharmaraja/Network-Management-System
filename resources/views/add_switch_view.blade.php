@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Add Switch</h4>
                </div>
                <div class="card-body">
                <div class="alert alert-success text-center" style="display:none" id="success_msg">Successfully Added</div>
                <div class="alert alert-danger text-center" style="display:none" id="error_msg">Something wrong...! Try again..</div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="host" id="host" placeholder="Enter Host">
                            </div>
                            <div class="col-md-6">
                            <input class="form-control" type="text" name="community" id="community" placeholder="Enter Community">
                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="oid" id="oid" placeholder="Enter OID">
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-success" onclick="add_switch()" id="btn">Add</button>
                                
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection