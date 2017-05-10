<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
    	$data = [
    		'title' => 'Evénement'
    	];
    	return view('evenement.evenement', $data);
    }
}
