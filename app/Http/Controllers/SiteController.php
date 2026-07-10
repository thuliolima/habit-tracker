<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $nome = 'Thulio';
        $sobrenome = 'Lima';
        $habitos = ['Ler', 'Comer', 'Estudar'];

        return view('home', compact('nome', 'sobrenome', 'habitos'));
    }
}
