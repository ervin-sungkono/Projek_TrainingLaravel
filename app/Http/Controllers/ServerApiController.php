<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServerApiController extends Controller
{
    public function index(){
        $servers = Server::all();
        return response()->json([
            'servers' => $servers
        ]);
    }

    public function store(Request $request){
        Server::create([
            'name' => $request->server_name,
            'region' => $request->server_region
        ]);
        return response()->json([
            'message' => 'Successfully Created Server'
        ]);
    }
    
    public function viewDetail($id){
        $server = Server::findOrFail($id);
        return response()->json([
            'servers' => $server,
            'game_account' => $server->gameaccounts
        ]);
    }

    public function update($id, Request $request) {
        Server::findOrFail($id)->update([
            'name' => $request->server_name,
            'region' => $request->server_region
        ]);
        return response()->json([
            'message' => 'Successfully Update Server'
        ]);
    }

    public function delete($id) {
        $server = Server::findOrFail($id);
        foreach ($server->gameaccounts as $gameaccount){
                $gameaccount->delete();
        }
        $server->delete();
        return response()->json([
            'message' => 'Successfully Deleted Server'
        ]);
    }
}
