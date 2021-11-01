<?php

namespace App\Controllers;

use App\Models\pokemonModel;
use App\Models\elementModel;
use App\Models\relationalModel;


class Utama extends BaseController
{
    protected $pokemonModel;
    protected $elementModel;
    protected $relationalModel;
    function __construct()
    {
        $this->pokemonModel = new pokemonModel();
        $this->elementModel = new elementModel();
        $this->relationalModel = new relationalModel();
    }
    public function index()
    {
        $pokemon = $this->pokemonModel->findAll();
        $element = $this->elementModel->findAll();
        $data = [
            'title' => 'utama',
            'pokemon' => $pokemon
        ];
        return view('Utama/index', $data);
    }
    public function save()
    {
        $db = \Config\Database::connect();
        $nama = $_POST['name'];
        $filePhoto = $_FILES['gambar']['tmp_name'];
        $photo = $_FILES['gambar']['name'];
        // dd($filePhoto, $photo);

        rename($filePhoto, 'image/' . $photo);

        $id = rand();
        // dd($id);
        $db->query("INSERT INTO pokemon_tb VALUES ('" . $id . "', '" . $nama . "', '', '', " . "'$photo')");
        $element = $_POST['element'];
        foreach ($element as $e) {
            $this->relationalModel->save([
                'pokemon_id' => $id,
                'element_id' => $e
            ]);
        }

        return redirect()->to(base_url('Utama'));
    }
    public function delete($id)
    {
        $db = \Config\Database::connect();
        $this->pokemonModel->delete(($id));
        return redirect()->to(base_url('Utama'));
        $db->query('DELETE FROM relational_tb WHERE pokemon_id=' . $id);
    }
}
