<?php

namespace App\Traits\Attributes;

use App\User;

trait ProdukAttributes {

function seller(){
		return $this->belongsTo(User:: class, 'id_user');
	
	}
}

