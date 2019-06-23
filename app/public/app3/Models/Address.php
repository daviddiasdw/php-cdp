<?php


namespace app3\Models;

include "Model.php";

class Address extends Model
{
    protected $table = 'address';
    protected $connection = 'homestead';
    protected $fillable = ['zip_code', 'nation', 'state', 'city', 'neighborhood', 'street', 'number', 'complement'];
}
