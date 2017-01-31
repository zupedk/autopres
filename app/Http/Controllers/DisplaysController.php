<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Display;
use \App\Client;

class DisplaysController extends Controller{
    public function index(){
		$displays = Display::all();
	    return view('displays.index', compact('displays'));
    }
    public function create(){
        $clients = Client::all();
    	return view('displays.create', compact('clients'));
    }
    public function store(){
    	$this->validate(request(), [
    		'name' => 'required'
    	]);
    	Display::create(request(['name', 'client_id']));
    	return redirect('/displays');
    }
}