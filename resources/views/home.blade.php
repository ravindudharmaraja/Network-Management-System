@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Dashboard</b></div>

                <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-4">
                                <div class="alert alert-info" style="color:white; text-align:center">
                                    <b>
                                        All devices
                                        
                                        <h3 id="alld">...</h3>
                                    </b>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="alert alert-success" style="color:white; text-align:center">
                                    <b>
                                        All Active devices
                                        
                                        <h3 id="actived">...</h3>
                                    </b>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="alert alert-danger" style="color:white; text-align:center">
                                    <b>
                                        All Deactive devices
                                        
                                        <h3 id="dangerd">...</h3>
                                    </b>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-body" style="text-align:center">
                                        <b>
                                            PC
                                            
                                            <h3 id="">{{$pc}}</h3>
                                        </b>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="card card-body" style="text-align:center">
                                        <b>
                                            Router
                                            
                                            <h3 id="">{{$router}}</h3>
                                        </b>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="card card-body" style="text-align:center">
                                        <b>
                                            Switch
                                            
                                            <h3 id="">{{$switch}}</h3>
                                        </b>
                                    </div>
                                </div>
                        
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js" integrity="sha512-hZf9Qhp3rlDJBvAKvmiG+goaaKRZA6LKUO35oK6EsM0/kjPK32Yw7URqrq3Q+Nvbbt8Usss+IekL7CRn83dYmw==" crossorigin="anonymous"></script>

<script src="/plugins/jquery/jquery.min.js"></script>
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>





<script>

function load_details(){

    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/load_details_dashboard',
        type: 'POST',
        data:{'_token': csrf},
        //dataType: 'json',

        success: function( data ) {
           
            document.getElementById('alld').innerHTML = data[0];
            document.getElementById('actived').innerHTML = data[1];
            document.getElementById('dangerd').innerHTML = data[2];
            
            
        },
        error: function(xhr, textStatus, errorThrown){
            
         }
    });



}

load_details();

setInterval(() => {
    load_details();
}, 50000);


</script>




@endsection
