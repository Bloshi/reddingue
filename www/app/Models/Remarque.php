<?php 

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Evenement;
	use App\Models\Utilisateur;

	class Remarque extends Model
	{
		protected $table = 'remarque';
		protected $primaryKey = 'remarqueID';
		protected $fillable = ['t_remarque'];

		public $timestamps = false;
		
		public function evenement()
		{
			return $this->hasMany(Evenement::class);
		}

		public function utilisateur()
		{
			return $this->hasMany(Utilisateur::class);
		}
	}