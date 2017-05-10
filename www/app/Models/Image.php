<?php 

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use App\Models\Evenement;

	class Image extends Model
	{
		protected $table = 'image';
		protected $primaryKey = 'imageEventID';
		protected $fillable = ['t_url_image'];

		public $timestamps = false;

		public function evenement()
		{
			return $this->hasMany(Evenement::class);
		}
	}