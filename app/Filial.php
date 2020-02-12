<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    protected $table = 'filial';
    public $timestamps = false;
    protected $fillable = ['nome', 'cidade', 'cnpj', 'endereco', 'email', 'latitude', 'longitude'];
}
