<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // Database finto di articoli sul mondo degli animali
    private $articles = [
        ['id' => 1, 'title' => 'Curiosità incredibili sui gatti', 'content' => 'I gatti trascorrono circa il 70% della loro vita a dormire e hanno un udito straordinario capace di percepire frequenze altissime.'],
        ['id' => 2, 'title' => 'Perché i cani scodinzolano?', 'content' => 'Il movimento della coda nei cani non indica sempre felicità: dipende molto dall’altezza della coda e dalla velocità del movimento.'],
        ['id' => 3, 'title' => 'Alla scoperta del Panda Gigante', 'content' => 'Il panda gigante passa fino a 12 ore al giorno a masticare bambù per soddisfare il suo fabbisogno energetico quotidiano.'],
    ];

    public function home() {
        return view('welcome');
    }

    public function index() {
        return view('articles.index', ['articles' => $this->articles]);
    }

    public function show($id) {
        $article = null;
        foreach($this->articles as $art) {
            if($art['id'] == $id) {
                $article = $art;
                break;
            }
        }

        if(!$article) {
            abort(404);
        }

        return view('articles.show', ['article' => $article]);
    }
}