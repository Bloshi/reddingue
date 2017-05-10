<?php 

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Evenement;

	class Formule extends Model
	{
		protected $table = 'formule';
		protected $primaryKey = 'formuleID';
		protected $fillable = ['t_nom_formule'];

		public $timestamps = false;

		public function evenement()
		{
			return $this->hasMany(Evenement::class);
		}
	}