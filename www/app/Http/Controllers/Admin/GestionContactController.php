<?php 

	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use App\Http\Requests\ContactRequest;
	use Illuminate\Support\Facades\DB as DB;
	use App\Models\Utilisateur;
	use Validator;

	class GestionContactController extends Controller
	{
		public $adminPage = 'contact';

		public function contactList()
	    {
	    	if ( session('adminLogged') === true ) {

	    		$users = Utilisateur::select('t_nom', 't_prenom', 't_mail', 'i_numero', 'i_telephone')->get();

	    		$data = [
		    		'title' => 'Liste des actualitées ',
		    		'users' => $users,
		    		'model' => new Utilisateur(),
		    		'page' => $this->adminPage
		    	];
		    	return view('admin.contact.list-contact', $data);
	    	}

	    	return redirect()->route('admin.log'); 	
	    }

	    public function contactAdd(ContactRequest $request)
	    {
	    	return redirect()->route('admin.gestion.contact.list');
	    }

	    public function contactEdit($id)
	    {
	  //   	$date = [
			// 	'model' => Contact::find($id)
			// ];
			// return view('participant.index', $data);
	    }
	}