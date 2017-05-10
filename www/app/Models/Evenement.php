<?php 

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;

	class Evenement extends Model
	{
		protected $table = 'evenement';
		protected $primaryKey = 'evenementID';
		protected $fillable = ['t_titre_evenement', 't_description', 'd_date', 't_lieu', 'ti_prive'];

		public $timestamps = false;
	}