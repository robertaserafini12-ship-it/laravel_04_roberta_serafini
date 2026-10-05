<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles = [
        [
            'id' => 1,
            'title' => 'Il Panda Gigante 🐼',
            'content' => 'Il panda gigante passa fino a 12 ore al giorno a mangiare bambù. È un simbolo mondiale della conservazione della natura!',
        ],
        [
            'id' => 2,
            'title' => 'La Tigre del Bengala 🐯',
            'content' => 'La tigre è uno dei felini più grandi e affascinanti del pianeta. Le sue strisce sono uniche, proprio come le nostre impronte digitali.',
        ],
        [
            'id' => 3,
            'title' => 'L\'Elefante Africano 🐘',
            'content' => 'L\'elefante è il mammifero terrestre più grande della Terra. Hanno una memoria straordinaria e legami familiari fortissimi.',
        ],
    ];

    public function homepage()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show($id)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return view('articles.show', ['article' => $article]);
            }
        }
    }
}