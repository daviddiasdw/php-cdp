<?php


namespace app2\Models;

include "Model.php";

class LegalPerson extends Model
{
    protected $table = 'legal_person';
    protected $connection = 'homestead';
    protected $fillable = ['social_name', 'email', 'telephone', 'cnpj'];
}
