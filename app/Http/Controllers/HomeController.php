<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = DB::select("SELECT * FROM `devices`");
        $pc = 0;
        $router = 0;
        $switch = 0;

        foreach($data as $d){
            if($d->type == 'pc'){
                $pc = $pc+1;
            }else if($d->type == 'router'){
                $router = $router+1;
            }else if($d->type == 'switch'){
                $switch = $switch+1;
            }
        }


        return view('home')->with('pc',$pc)->with('router', $router)->with('switch',$switch);
    }


    public function dashboard(){
        return view('dashboard');
    }


    public function pinghost(){

        return view('pinghost_view');
    }

    public function checkpinhost(Request $request){

        $host = $request->host;
        
        //$host = '193.33.186.70'; 
        $port = 80; 
        $waitTimeoutInSeconds = 1; 
        try{
            if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
                // It worked 
                    echo "1";
                } else {
                    // It didn't work 
                    echo "0";
                } 
                fclose($fp);
        }
        catch(Exception $e){
            echo "0";
        }
        
    }




    public function portscanner_view(){


        return view("portscanner_view");
    }

    public function portscanner_check(Request $request){

        ini_set('max_execution_time', 0);
        ini_set('memory_limit', -1);

        $host = $request->host;
        $ports = array(21, 25, 80, 81, 110, 143, 443, 587, 2525, 3306,161);

        echo '<table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Port</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tboady>';

        foreach ($ports as $port)
        {
            if($port == 21){
                $pname ="FTP";
            }else if($port == 25){
                $pname ="SMTP";
            }else if($port == 80){
                $pname ="HTTP";
            }else if($port == 81){
                $pname ="UDP/TCP";
            }else if($port == 110){
                $pname ="POP3";
            }else if($port == 143){
                $pname ="IMAP";
            }else if($port == 161){
                $pname ="SNMP";
            }else if($port == 443){
                $pname ="HTTPS";
            }else if($port == 587){
                $pname ="SSL ";
            }else if($port == 2525){
                $pname ="SMTP ";
            }else if($port == 3306){
                $pname ="MySQL";
            }   
            else{
                $pname ="None";
            }

            

            $connection = @fsockopen($host, $port, $errno, $errstr, 2);

            if (is_resource($connection))
            {
                //echo '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2>' . "\n";
                echo '<tr>
                        <td>'.$pname.'</td>
                        <td>'.$port.'</td>
                        <td><b>Open</b></td>
                    </tr>';

                fclose($connection);
            }
            else
            {
                //echo '<h2>' . $host . ':' . $port . ' is not responding.</h2>' . "\n";
                echo '<tr>
                        <td>'.$pname.'</td>
                        <td>'.$port.'</td>
                        <td><b>Close</b></td>
                    </tr>';
            }
        }

        echo '</tbody>
            </table>';

    }


    //show device function
    public function add_computer_view(){


        return view("add_computer_view");
    }

    public function add_router_view(){


        return view("add_router_view");
    }

    public function add_switch_view(){


        return view("add_switch_view");
    }


    //add device function
    public function add_computer_add(Request $request){

        $host = $request->host;
        $community = $request->community;
        $oid = $request->oid;

        DB::insert("INSERT INTO `devices`(`host`, `community`, `oid`, `type`) VALUES ('$host', '$community', '$oid', 'pc')");
       
    }

    public function add_router_add(Request $request){

        $host = $request->host;
        $community = $request->community;
        $oid = $request->oid;

        DB::insert("INSERT INTO `devices`( `host`, `community`, `oid`, `type`) VALUES ('$host', '$community', '$oid', 'router')");
        
    }

    public function add_switch_add(Request $request){

        $host = $request->host;
        $community = $request->community;
        $oid = $request->oid;

        DB::insert("INSERT INTO `devices`(`host`, `community`, `oid`, `type`) VALUES ('$host', '$community', '$oid', 'switch')");
        
    }



    //device llist

    public function device_list_view(){

        $data = DB::select("SELECT * FROM `devices`");

        return view("device_list_view")->with('data', $data);
    }




    public function device_view(Request $request){
        $id = $request->id;

        $data = DB::select("SELECT * FROM `devices` WHERE `id` = '$id'");

        $name = $data['0']->host;

        return view('view_device')->with('did',$name)->with('name',$name);
    }


    // chart post data
    public function cart1(Request $request){

        $id = $request->did;
        $a = array();
        $data = DB::select("SELECT * FROM `device_c_p_u_s` WHERE `did` = '$id' ORDER BY `id` DESC LIMIT 10 ");

        foreach($data as $d){
            
            array_push($a,$d->usage);
        }

        
        return $a;
        
    }

    public function cart2(Request $request){

        $id = $request->did;
        $a = array();
        $data = DB::select("SELECT * FROM `device_r_a_m_s` WHERE `did` = '$id' ORDER BY `id` DESC LIMIT 10");

        foreach($data as $d){
            
            array_push($a,$d->usage);
        }

        
        return $a;
        
    }

    public function cart3(Request $request){

        $id = $request->did;
        $a = array();
        $data = DB::select("SELECT * FROM `device_storages` WHERE `did` = '$id' ORDER BY `id` DESC LIMIT 10 ");

        foreach($data as $d){
            
            array_push($a,$d->usage);
        }

        
        return $a;
        
    }

    public function cart4(Request $request){

        $id = $request->did;
        $a = array();
        $b = array();
        $c = array();
        $data = DB::select("SELECT * FROM `device_networks` WHERE `did` = '$id' ORDER BY `id` DESC LIMIT 10 ");

        foreach($data as $d){
            
            array_push($a,$d->send);
            array_push($b,$d->recv);
        }

        array_push($c,$a);
        array_push($c,$b);
        return $c;
        
    }




    public function load_details_dashboard(){

        
        $data = DB::select("SELECT * FROM `devices`");
        $ac = 0;
        $s = 0;
        $dg = 0;

        foreach($data as $d){

            $host = $d->host;

            //$host = '193.33.186.70'; 
            $port = 80; 
            $waitTimeoutInSeconds = 1; 
            try{
                if($fp = @fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){   
                    // It worked 
                        $s = $s+1;
                        $ac = $ac+1;
                    } else {
                        // It didn't work 
                        
                        $dg = $dg+1;
                        $ac = $ac+1;

                    }
                    if (is_resource($fp))
                        { 
                            fclose($fp);
                        }

            }
            catch(Exception $e){
                
                $dg = $dg+1;
                $ac = $ac+1;
            }

        }

        return [$ac,$s,$dg];
        
        
    }


}
