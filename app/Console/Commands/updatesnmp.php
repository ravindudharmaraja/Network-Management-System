<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Ndum\Laravel\Snmp;
use Illuminate\Console\Command;



class updatesnmp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:snmp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $data = DB::select("SELECT * FROM `devices`");
        foreach($data as $d){

            //$host = '128.199.232.123';
            //$community = 'public';

            $host = $d->host;
            $community = $d->community;


            try {
            $snmp = new Snmp();
            $snmp->newClient($host, 2, $community);

            //ram usage
            $totmem = (int)$snmp->getValue('.1.3.6.1.4.1.2021.4.5.0');
            $usedemem = (int)$snmp->getValue('.1.3.6.1.4.1.2021.4.6.0');
            $memusage = (($usedemem/$totmem)*100);

            DB::insert("INSERT INTO `device_r_a_m_s`(`did`, `usage`) VALUES ('$host', '$memusage')");

            //disk usage
            $diskusage = (int)$snmp->getValue('1.3.6.1.4.1.2021.9.1.9.1');
            DB::insert("INSERT INTO `device_storages`(`did`, `usage`) VALUES ('$host', '$diskusage')");


            //cpu usage
            $cpuusage = (float)$snmp->getValue('.1.3.6.1.4.1.2021.10.1.3.1');
            //dd($cpuusage);
            DB::insert("INSERT INTO `device_c_p_u_s`(`did`, `usage`) VALUES ('$host', '$cpuusage')");

            //network usage

            $send_net = (float)$snmp->getValue('.1.3.6.1.2.1.2.2.1.16.2');
            $recv_net = (float)$snmp->getValue('.1.3.6.1.2.1.2.2.1.10.2');

            $cal_send_net = $send_net/10000000/60;
            $cal_recv_net = $recv_net/10000000/60;

            DB::insert("INSERT INTO `device_networks`(`did`, `send`, `recv`) VALUES ('$host', '$cal_send_net', '$cal_recv_net')");


            }catch (Throwable $e) {
                report($e);
        
                return false;
            }

        }

    }
}
