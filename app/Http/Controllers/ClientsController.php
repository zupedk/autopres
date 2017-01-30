<?php

namespace App\Http\Controllers;
use App\Client;

use Illuminate\Http\Request;

class ClientsController extends Controller{
    public function index(){
		$clients = Client::all();
	    return view('clients.index', compact('clients'));
    }
    public function create(){
    	return view('clients.create');
    }
    public function store(){
    	$this->validate(request(), [
    		'name' => 'required'
    	]);
    	Client::create(request(['name']));
    	return redirect('/clients');
    }
}
