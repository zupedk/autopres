<?php

namespace App;

class Display extends Model{
    public function client(){
        return $this->belongsTo(Client::class);
    }
}