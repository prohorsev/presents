<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        Broadcast::channel('presents-{room_id}', function ($user, $room_id) {
            try {
                $result = DB::table('room_user')->where('room_id', '=', $room_id)
                    ->where('user_id', '=', $user->id)->get()->toArray();
                if (empty($result)) {
                    return false;
                }
                return true;
            } catch (\Exception $exception) {
                return false;
            }

        });

        require base_path('routes/channels.php');
    }
}
