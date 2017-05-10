<?php 

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB as DB;

	/**
	* 
	*/
	class HomeController extends Controller
	{
		public function index()
		{	
			$data = [
				'title' => 'Accueil'
			];
			return view('accueil.accueil', $data);
		}
	}