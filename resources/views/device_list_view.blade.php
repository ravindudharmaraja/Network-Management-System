@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Device list</h4>
                </div>
                <div class="card-body">

                        <div class="row" id="tbl">
                        
                        <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Host</th>
                                <th>OID</th>
                                <th>Community</th>
                                <th>Type</th>
                                <th>View</th>
                            </tr>

                            @foreach($data as $d)

                            <tr>
                                <td>{{$d->id}}</td>
                                <td>{{$d->host}}</td>
                                <td>{{$d->oid}}</td>
                                <td>{{$d->community	}}</td>
                                <td>{{$d->type}}</td>
                                <td><a href="/view/{{$d->id}}"><i class="fa fa-bars" aria-hidden="true"></i></a></td>
                            </tr>

                            @endforeach
                        
                        </table>
                        
                        </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection