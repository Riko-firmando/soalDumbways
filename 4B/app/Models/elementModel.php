<?php

namespace App\Models;

use CodeIgniter\Model;

class elementModel extends Model
{
    protected $table      = 'pokemon_tb';
    // protected $useTimestamps = true;
    protected $allowedFields = ['name', 'str', 'def', 'photo'];

    public function getPokemon($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
