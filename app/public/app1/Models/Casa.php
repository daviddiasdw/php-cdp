<?php

namespace Api\Models;

include "Model.php";

class Casa extends Model
{
    protected $table = 'casas';
    protected $connection = 'homestead';
    protected $fillable = ['qtdSalas', 'qtdQuartos', 'qtdCozinhas', 'qtdBanheiros'];
}
