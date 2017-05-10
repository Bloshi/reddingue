<?php 

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Contact;

	class Utilisateur extends Model
	{
		protected $table = 'utilisateur';
		protected $primaryKey = 'utilisateurID';
		protected $fillable = ['t_nom', 't_prenom', 't_adresse_physique', 't_mail', 'i_numero', 'i_telephone'];

		public $timestamps = false;

		public function contact()
		{
			return $this->hasMany(Contact::class);
		}
	}