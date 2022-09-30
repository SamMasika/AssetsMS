<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Asset;
use App\Models\Disposal;
use App\Models\Depression;
use Illuminate\Console\Command;

class Depreciation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'depreciate:asset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Asset has been depreciated successful';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->call('\App\Http\Controllers\Admin\AssetController@depreciation');
        $assets=Asset::where('status','!=','disposed')->where('status','!=','broken')->get();
        $currentTime = Carbon::now();
  foreach($assets as $asset){
      $created=$asset->created_at;
      $rep_id=$asset->id;
      $purchace_date=$asset->purchace_date;
      $status=$asset->status;
     $uta=$asset->uta;
      $savage=$asset->savage;
      $price=$asset->p_price;
    //    $totalDuration = $currentTime-> $purchace_date;
         $total= $currentTime->diffInMinutes($created);
         $dv=(($price-$savage)/ ($uta ));
         $depAs=$uta-1;

         if($depAs){
          $asset->uta=$uta-1;
          $asset->update();

           $netValue=$price- $dv;
           $dep=new Depression;
           $dep->assets_id=$rep_id;
           $dep->dep_value= $netValue;
           $dep->duration=$created;
           $dep->save();    
         }

    if($total> $uta){
        $disposal=new Disposal;
        $disposal->assets_id= $rep_id;
        $disposal->condtn_m="disposed";
        $disposal->save(); 
        
       $asset->status='used';
        $asset->update();
    }
}
$this->info('Asset has been depreciated successful');
}
}
