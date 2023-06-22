function checkping(){

    var host = document.getElementById("host").value;
    document.getElementById("success_msg").style.display = "none";
    document.getElementById("error_msg").style.display = "none";
    document.getElementById("btn").innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;loading';
    

    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/checkpinhost',
        type: 'POST',
        data:{'_token': csrf, 'host':host},
        //dataType: 'json',

        success: function( data ) {
            if(data == '1'){
                document.getElementById("success_msg").style.display = "block";
                console.log("das");
            }else{
                document.getElementById("error_msg").style.display = "block";
            }
            
        },
        error: function(xhr, textStatus, errorThrown){
            document.getElementById("error_msg").style.display = "block";
         }
    });

    document.getElementById("btn").innerHTML = 'Check';
}


function checkportscanner(){

    var host = document.getElementById("host").value;
    document.getElementById("error_msg").style.display = "none";
    document.getElementById("tbl").innerHTML = "";
    
    document.getElementById("btn").innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;loading';
    

    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/checkportscanner',
        type: 'POST',
        data:{'_token': csrf, 'host':host},
        //dataType: 'json',

        success: function( data ) {
           
            document.getElementById("tbl").innerHTML = data;
            document.getElementById("btn").innerHTML = 'Check';
            
        },
        error: function(xhr, textStatus, errorThrown){
            document.getElementById("error_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Check';
         }
    });

    
}




function add_computer(){

    var host = document.getElementById("host").value;
    var community = document.getElementById("community").value;
    var oid = document.getElementById("oid").value;

    document.getElementById("success_msg").style.display = "none";
    document.getElementById("error_msg").style.display = "none";
    
    document.getElementById("btn").innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;loading';
    

    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/add-computer',
        type: 'POST',
        data:{'_token': csrf, 'host':host, 'community':community, 'oid':oid},
        //dataType: 'json',

        success: function( data ) {
           
            document.getElementById("success_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Add';
            document.getElementById("host").value = "";
            document.getElementById("community").value = "";
            document.getElementById("oid").value = "";
            
        },
        error: function(xhr, textStatus, errorThrown){
            document.getElementById("error_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Add';
         }
    });

    
}



function add_router(){

    var host = document.getElementById("host").value;
    var community = document.getElementById("community").value;
    var oid = document.getElementById("oid").value;

    document.getElementById("success_msg").style.display = "none";
    document.getElementById("error_msg").style.display = "none";
    
    document.getElementById("btn").innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;loading';
    

    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/add-router',
        type: 'POST',
        data:{'_token': csrf, 'host':host, 'community':community, 'oid':oid},
        //dataType: 'json',

        success: function( data ) {
           
            document.getElementById("success_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Add';
            document.getElementById("host").value = "";
            document.getElementById("community").value = "";
            document.getElementById("oid").value = "";
            
        },
        error: function(xhr, textStatus, errorThrown){
            document.getElementById("error_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Add';
         }
    });

    
}



function add_switch(){

    var host = document.getElementById("host").value;
    var community = document.getElementById("community").value;
    var oid = document.getElementById("oid").value;

    document.getElementById("success_msg").style.display = "none";
    document.getElementById("error_msg").style.display = "none";
    
    document.getElementById("btn").innerHTML = '<i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;loading';
    

    var csrf = $('meta[name="csrf-token"]').attr('content');
    
    $.ajax({
        url:'/add-switch',
        type: 'POST',
        data:{'_token': csrf, 'host':host, 'community':community, 'oid':oid},
        //dataType: 'json',

        success: function( data ) {
           
            document.getElementById("success_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Add';
            document.getElementById("host").value = "";
            document.getElementById("community").value = "";
            document.getElementById("oid").value = "";
            
        },
        error: function(xhr, textStatus, errorThrown){
            document.getElementById("error_msg").style.display = "block";
            document.getElementById("btn").innerHTML = 'Add';
         }
    });

    
}





