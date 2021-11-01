<?php

namespace App\Models;

use CodeIgniter\Model;

class relationalModel extends Model
{
    protected $table      = 'relational_tb';
    // protected $useTimestamps = true;
    protected $allowedFields = ['pokemon_id', 'element_id'];

    public function getrelational($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
