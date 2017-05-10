<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB as DB;

	class ActuController extends Controller
	{
	    public function actualite()
	    {
	    	$data = [
	    		'title' => 'Actualité |'
	    	];
	    	return view('actu.actu', $data);
	    }
	}
