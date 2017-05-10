<?php

	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB as DB;

	class GestionActuController extends Controller
	{
		public $adminPage = 'actu';

	    public function list()
	    {
	    	if ( session('adminLogged') === true ) {
	    		$data = [
		    		'title' => 'Liste des actualitées ',
		    		'page' => $this->adminPage
		    	];
		    	return view('admin.actu.liste-actu', $data);
	    	}

	    	return redirect()->route('admin.log'); 	
	    }

	    public function ajout() 
	    {
	    	if ( session('adminLogged') === true ) {
		    	$data = [
		    		'title' => 'Ajouter une actualitée ',
		    		'page' => $this->adminPage
		    	];
		    	return view('admin.actu.ajouter-actu', $data);	
	    	}

	    	return redirect()->route('admin.log');
	    }

	}
