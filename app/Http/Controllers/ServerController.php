<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Server;

class ServerController extends Controller
{
    public function index(){
        return view('server.create');
    }

    public function viewList() {
        $servers = Server::all();
        return view('server.list', compact('servers'));
    }

    public function viewDetail($id){
        $server = Server::findOrFail($id);
        return view('server.detail', compact('server'));
    }

    public function store(Request $request){
        Server::create([
            'name' => $request->server_name,
            'region' => $request->server_region
        ]);
        return redirect('/server');
    }

    public function edit($id) {
        $server = Server::findOrFail($id);
        return view('server.edit', compact('server'));
    }

    public function update($id, Request $request) {
        Server::findOrFail($id)->update([
            'name' => $request->server_name,
            'region' => $request->server_region
        ]);
        return redirect('/server/list');
    }

    public function delete($id) {
        $server = Server::findOrFail($id);
        foreach ($server->gameaccounts as $gameaccount){
                $gameaccount->delete();
        }
        $server->delete();
        return redirect('/server/list');
    }
}
