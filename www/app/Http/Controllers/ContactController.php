<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use App\Http\Requests\SendMessageRequest;
	use Illuminate\Support\Facades\DB as DB;

	class ContactController extends Controller
	{
	    public function index()
	    {
	    	$data = [
	    		'title' => 'Nous contacter'
	    	];
	    	return view('contact.contact', $data);
	    }

	    public function contacter(SendMessageRequest $request)
	    {
	    	session(['flash' => 'Votre message nous à bien été envoyer, merci.']);
	    	return redirect()->route('accueil');
	    }
	}
