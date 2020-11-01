<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

// 追加
use Illuminate\Support\Facades\Storage;
use App\Models\vehicle;

class LoadVehicleData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:LoadVehicleData';

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
     * @return int
     */
    public function handle()
    {
        echo "start batch.\n";

        try
        {
            $file_path = Storage::path('public/vehicle.csv');
            $file = new \SplFileObject($file_path);

        }
        catch(\RuntimeException $exception)
        {
            echo("Not Found File\n");
            return 1;
        }

        $file->setFlags(
            \SplFileObject::READ_CSV |// CSVとして行を読み込み
            \SplFileObject::READ_AHEAD |// 先読み／巻き戻しで読み込み
            \SplFileObject::SKIP_EMPTY | // 空行を読み飛ばす
            \SplFileObject::DROP_NEW_LINE// 行末の改行を読み飛ばす
        );

        foreach($file as $line){
            $vehicle = new vehicle();
            $vehicle->vehicle_id = $line[0];
            $vehicle->vehicle_name = $line[1];
            $vehicle->capacities = $line[2];
            // dd($vehicle);
            $vehicle->save();
        }

        echo "end batch.\n";
        return 0;
    }
}
