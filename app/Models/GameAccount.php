<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAccount extends Model
{
    use HasFactory;

    protected $fillable = ['name','role','level','server_id'];

    public function server(){
        return $this->belongsTo(Server::class);
    }
}