<?php

namespace App;
 
use App\Traits\Attributes\ProdukAttributes;
use App\Traits\Relations\ProdukRelations;


class  Produk extends Model{

	
	protected $table = 'produk';
  
	protected $casts = [
		'created_at' => 'datetime',
		'berat'=> 'decimal:2'
	];

	
	}