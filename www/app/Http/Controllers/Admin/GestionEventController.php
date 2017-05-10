<?php 

	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Http\Requests\EventAddRequest;
	use Illuminate\Support\Facades\DB as DB;
	use App\Models\Evenement;

	class GestionEventController extends Controller
	{
		public $adminPage = 'event';
 
		public function eventList(Request $request)
	    {
	    	if ( session('adminLogged') === true ) {

	    		var_dump($request->all());
	    		$results = [];

	    		// if ( $id != 'all' ) {
	    		// 	$results = DB::table('utilisateur')->select('t_nom', 't_prenom', 't_mail', 'i_numero')->get();
	    		// } else {
	    		// 	$results = Evenement::all();	
	    		// }
	    		$filterEvent = Evenement::select('evenementID', 't_titre_evenement')->get();

	    		$data = [
		    		'title' => 'Base de donnée ',
		    		'page' => $this->adminPage, 

		    		'results' => $results, 
		    		'filterEvent' => $filterEvent
		    	];
		    	return view('admin.event.list-event', $data);
	    	}

	    	return redirect()->route('admin.log'); 	
	    }

	    public function eventAdd()
	    {
	    	if ( session('adminLogged') === true ) {
	    		$data = [
		    		'title' => 'Ajouter un événement ',
		    		'page' => $this->adminPage 
		    	];
		    	return view('admin.event.add-event', $data);
	    	}

	    	return redirect()->route('admin.log'); 	
	    }

	    public function postEventAdd(Request $request)
	    {
	    	dd($request->all());

	    	Evenement::create($request->all());
	    	return redirect()->route('admin.gestion.event.add');
	    }
	} 