<?php
// Esto es el modelo que se conecta con el controller para renderizar la vista

namespace sisNew;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
   
   protected $table='articulo';

   protected $primaryKey="idarticulo";

   public $timestamps=false;

   protected $fillable = [
	'idcategoria',
	'codigo',
	'nombre',
	'stock',
	'descripcion',
	'imagen',
	'estado'
   ];

   protected $guarded = [
   		
   ];
}

