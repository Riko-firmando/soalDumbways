<?php

namespace App\Models;

use CodeIgniter\Model;

class pokemonModel extends Model
{
    protected $table      = 'pokemon_tb';
    // protected $useTimestamps = true;
    protected $allowedFields = ['id', 'name', 'str', 'def', 'photo'];

    public function getPokemon($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
