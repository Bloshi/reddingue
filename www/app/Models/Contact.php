<?php 

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Utilisateur;

	class Contact extends Model
	{
		protected $table = 'contact';
		protected $primaryKey = 'contactID';
		protected $fillable = ['ti_type_de_contact', 't_objet', 't_societe'];

		public $timestamps = false;

		public function utilisateur()
		{
			return $this->belongsTo(Utilisateur::class);
		}
	}