<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameAccount;
use App\Models\Server;

class GameController extends Controller {
    public function index() {
        $servers = Server::all();
        return view('create', compact('servers'));
    }

    public function viewList() {
        $gameaccounts = GameAccount::all();
        return view('list', compact('gameaccounts'));
    }

    public function store(Request $request) {
        GameAccount::create([
            'name' => $request->game_name,
            'role' => $request->game_role,
            'level' => $request->game_level,
            'server_id' => $request->server_id
        ]);
        return redirect('/');
    }

    public function edit($id) {
        $gameaccount = GameAccount::findOrFail($id);
        return view('edit', compact('gameaccount'));
    }

    public function update($id, Request $request) {
        GameAccount::findOrFail($id)->update([
            'name' => $request->game_name,
            'role' => $request->game_role,
            'level' => $request->game_level
        ]);
        return redirect('/gameaccount');
    }

    public function delete($id) {
        GameAccount::destroy($id);
        return back();
    }
}
