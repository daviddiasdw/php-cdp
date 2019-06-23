<?php


namespace app2\Models;

include "Model.php";

class NaturalPerson extends Model
{
    protected $table = 'natural_person';
    protected $connection = 'homestead';
    protected $fillable = ['name', 'email', 'telephone', 'cpf'];
}
