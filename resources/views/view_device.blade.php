@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

            <div class="card-title">
                <h4 class="text-center">{{$name}}</h4>
                <hr>
            </div>
                
            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                    <h5 style="text-align:center"><b>CPU Usage</b></h5>
                    <canvas id="myChart" width="" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                    <h5 style="text-align:center"><b>RAM Usage</b></h5>
                    <canvas id="myChart2" width="" height="200"></canvas>
                    </div>
                
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                    <h5 style="text-align:center"><b>Disk Usage</b></h5>
                    <canvas id="myChart3" width="" height="200"></canvas>
                    </div>
                    <div class="col-md-6">
                    <h5 style="text-align:center"><b>Network Usage</b></h5>
                    <canvas id="myChart4" width="" height="200"></canvas>
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

chart_1();
chart_2();
chart_3();
chart_4();

setInterval(() => {
    chart_1();
    chart_2();
    chart_3();
    chart_4();
}, 60000);

function chart_1(){


    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/cart1',
        type: 'POST',
        data:{'_token': csrf,'did':'{{$did}}'},
        //dataType: 'json',

        success: function( data ) {
           
            var ctx = document.getElementById('myChart').getContext('2d');
            var speedData = {
            labels: ["1m", "2m", "3m", "4m", "5m", "6m", "7m","8m", "9m", "10m"],
            datasets: [{
                label: "CPU",
                //data: [0, 59, 75, 20, 20, 55, 40,50,60,70,10,50,21],
                data:data,
                backgroundColor: 'rgb(102, 153, 255)',
            }]
            };
            
            var chartOptions = {
            legend: {
                display: true,
                position: 'top',
                labels: {
                boxWidth: 80,
                fontColor: 'black'
                }
            }
            };
            var lineChart = new Chart(ctx, {
                type: 'line',
                data: speedData,
                options: chartOptions
            });
            
        },
        error: function(xhr, textStatus, errorThrown){
            
         }
    });




    

}



function chart_2(){



    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/cart2',
        type: 'POST',
        data:{'_token': csrf,'did':'{{$did}}'},
        //dataType: 'json',

        success: function( data ) {
           
            var ctx2 = document.getElementById('myChart2').getContext('2d');

            var speedData2 = {
                labels: ["1m", "2m", "3m", "4m", "5m", "6m", "7m","8m", "9m", "10m"],
            datasets: [{
                label: "Ram",
                //data: [0, 59, 75, 20, 20, 55, 40,50,60,70,10,50,21],
                data:data,
                backgroundColor: 'rgb(255, 102, 0)',
            }]
            };
            
            var chartOptions2 = {
            legend: {
                display: true,
                position: 'top',
                labels: {
                boxWidth: 80,
                fontColor: 'black'
                }
            }
            };
            var lineChart = new Chart(ctx2, {
                type: 'line',
                data: speedData2,
                options: chartOptions2
            });
            
        },
        error: function(xhr, textStatus, errorThrown){
            
         }
    });



    

}


function chart_3(){


    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/cart3',
        type: 'POST',
        data:{'_token': csrf,'did':'{{$did}}'},
        //dataType: 'json',

        success: function( data ) {
           
            var ctx3 = document.getElementById('myChart3').getContext('2d');

            var speedData3 = {
                labels: ["1m", "2m", "3m", "4m", "5m", "6m", "7m","8m", "9m", "10m"],
            datasets: [{
                label: "Storage",
                //data: [0, 59, 75, 20, 20, 55, 40,50,60,70,10,50,21],
                data:data,
                backgroundColor: 'rgb(255, 51, 204)',
            }]
            };
            
            var chartOptions3 = {
            legend: {
                display: true,
                position: 'top',
                labels: {
                boxWidth: 80,
                fontColor: 'black'
                }
            }
            };
            var lineChart = new Chart(ctx3, {
                type: 'line',
                data: speedData3,
                options: chartOptions3
            });
            
        },
        error: function(xhr, textStatus, errorThrown){
            
         }
    });




    
}


function chart_4(){



    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/cart4',
        type: 'POST',
        data:{'_token': csrf,'did':'{{$did}}'},
        //dataType: 'json',

        success: function( data ) {
           
            var ctx4 = document.getElementById('myChart4').getContext('2d');

            var speedData4 = {
                labels: ["1m", "2m", "3m", "4m", "5m", "6m", "7m","8m", "9m", "10m"],
            datasets: [{
                label: "Sent",
                //data: [52, 5, 55, 30, 20, 55, 40,50,60,70,10,50,21],
                data:data[0],
                backgroundColor: 'rgb(0, 255, 0)',
                borderColor: 'rgb(255, 0, 0)',
            },{
                label: "Receive",
                //data: [0, 59, 75, 20, 20, 55, 40,50,60,70,10,50,21],
                data:data[1],
                backgroundColor: 'rgb(0, 255, 0)',
                borderColor: 'rgb(0, 0, 255)',
            }
        ]
            };
            
            var chartOptions4 = {
            legend: {
                display: true,
                position: 'top',
                labels: {
                boxWidth: 80,
                fontColor: 'black'
                }
            }
            };
            var lineChart = new Chart(ctx4, {
                type: 'line',
                data: speedData4,
                options: chartOptions4
            });
            
        },
        error: function(xhr, textStatus, errorThrown){
            
         }
    });




    
}


</script>


@endsection