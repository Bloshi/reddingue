<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB as DB;

	class ServiceController extends Controller
	{
	    public function service()
	    {
	    	$data = [
	    		'title' => 'Nos services'
	    	];

	    	return view('services.services', $data);
	    }
	}
