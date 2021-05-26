<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Action;
use App\Models\Log;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function view(Request $request)
    {
        $state = $request->session()->get('state');

        if ($state == null || $state == "OFF") {
            $state = "OFF";
            $option = Action::where('action', 'ON')->first();
        } else {
            $state = "ON";
            $option = Action::where('action', 'OFF')->first();
        }

        return view('home', compact('state', 'option'));
    }

    public function change(Request $request)
    {
        $action = $request->input('switch');
        switch ($action) {
            case 'ON':
                $newlog = new Log();
                $newlog->device = "lamp_1";
                $newlog->save();
                break;
            case 'OFF':
                $lastlogid = DB::table('logs')->orderByDesc('id')->first('id');
                $lastlogupdate = Log::where('id', $lastlogid->id)->first();
                $lastlogupdate->updated_at = date("Y-m-d H:i:s");
                $lastlogupdate->update();
                break;
        }
        session(['state' => $action]);
        return back();
    }
}
