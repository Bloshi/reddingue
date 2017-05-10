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
 
		public function eventList(Request $request, $id = null)
	    {
	    	if ( session('adminLogged') === true ) {

	    		if ( $id == null ) {
	    			$results = DB::table('inscriptionEvent')->select('utilisateur.t_nom', 'utilisateur.t_prenom', 'utilisateur.t_mail', 'utilisateur.i_numero')
	    										   ->join('evenement', 'inscriptionEvent.evenementID', '=', 'evenement.evenementID')
	    										   ->join('utilisateur', 'inscriptionEvent.utilisateurID', '=', 'utilisateur.utilisateurID')
												   ->orderBy('evenement.evenementID', 'desc')
												   ->get();
					$selectOption = 'null';
	    		} else {
	    			$results = DB::table('inscriptionEvent')->select('utilisateur.t_nom', 'utilisateur.t_prenom', 'utilisateur.t_mail', 'utilisateur.i_numero')
	    										   ->join('evenement', 'inscriptionEvent.evenementID', '=', 'evenement.evenementID')
	    										   ->join('utilisateur', 'inscriptionEvent.utilisateurID', '=', 'utilisateur.utilisateurID')
	    										   ->where('evenement.evenementID', $id)
												   ->orderBy('evenement.evenementID', 'desc')
												   ->get();
					$selectOption = $id;
	    		}

	    		$filterEvent = Evenement::select('evenementID', 't_titre_evenement')->get();

	    		$data = [
		    		'title' => 'Base de donnée ',
		    		'page' => $this->adminPage, 
		    		'selectOption' => $selectOption,

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
	    	Evenement::insert([
	    		't_titre_evenement' => $request->all()['t_titre_evenement'],
				'd_date' => $request->all()['d_date'],
				't_lieu' => $request->all()['t_lieu'],
				't_description' => $request->all()['t_description'],
				'ti_prive' => $request->all()['ti_prive']
	    	]);
	    	return redirect()->route('admin.gestion.event.add');
	    }
	} 