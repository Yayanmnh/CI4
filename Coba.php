<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        echo "selamat datang Alifnur!";
    }
    public function test($nama)
    {
        //return view('welcome_message');
        echo "fungsi test.selamat datang " . $nama;
    }
    public function load()
    {
        $db = db_connect();
        $query = $db->query('select * from iris_arff');

        $row = $query->getRowArray();
        $dbd = '';
        if (isset($row)) {
            $dbd = $dbd . $row['id'];
            $dbd .= $row['petallength'];
        }
        $terserah = array(
            'dbd' => $dbd,
            'judul' => 'data iris',
            'q' => $query,

        );
        return view('welcome_message', $terserah);
    }
}
