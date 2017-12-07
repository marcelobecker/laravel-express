<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index($nome) {
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas() {

        $notas = [
          0 => 'Anotação 1',
          1 => 'Anotação 2',
          2 => 'Anotação 3',
          3 => 'Anotação 4',
          4 => 'Anotação 5'
        ];

        return view('test.notas', compact('notas'));
    }

    public function blog() {

        $blogs = [
            0 => [0 => 'Aprendendo Laravel', 1 => 'Através do curso Laravel Express estou aprendendo como funciona o o framework Laravel'],
            1 => [0 => 'Conhecendo o IONIC', 1 => 'Depois de conhecermos o framework Laravel, eh hora de entender o IONIC para gerarmos aplicaçoes móveis!']
        ];

        return view('test.blog', compact('blogs'));
    }

}
