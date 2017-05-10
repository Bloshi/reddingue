<?php

	namespace App\Http\Controllers\Admin;

	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB as DB;

	class IndexAdminController extends Controller
	{
	    public function login()
	    {
	    	$data = [ 
	    		'title' => 'Connection espace administration |'
	    	];

	    	return view('admin.auth-admin', $data);
	    }

	    public function logValidation(Request $request)
	    {
	    	$pw = md5(sha1('test'));
	    	$post = $request->all()['login-to-admin'];
	    	$post = md5(sha1($post));

	    	if ( $pw === $post ) {
	    		session(['adminLogged' => true]);
	    		return redirect()->route('admin.gestion.actu.list'); 
	    	} else {
	    		return redirect()->route('admin.log');
	    	}
	    }
	}
