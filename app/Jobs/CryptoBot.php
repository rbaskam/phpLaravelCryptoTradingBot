<?php



namespace App\Jobs;



use Carbon\Carbon;

use Illuminate\Bus\Queueable;

use Illuminate\Queue\SerializesModels;

use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Foundation\Bus\Dispatchable;

use App\CryptoTrading;

use App\CryptoTradingBot;



class CryptoBot implements ShouldQueue

{

    use Dispatchable, InteractsWithQueue, Queueable;

   

    /**

     * Create a new job instance.

     *

     * @return void

     */

    public function __construct()

    {

       

    }



     /**

     * Execute the job.

     *

     * @return void

     */

    public function handle()

    {
        app('App\Http\Controllers\ToolsController')->checkTradingBids();

        sleep(18);

        app('App\Http\Controllers\ToolsController')->checkTradingBids();

        sleep(18);

        app('App\Http\Controllers\ToolsController')->checkTradingBids();

    }

}