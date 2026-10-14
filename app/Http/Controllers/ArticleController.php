<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $movies = [
        [
            'id' => 1,
            'title' => 'Inception',
            'director' => 'Christopher Nolan',
            'genre' => 'Fantascienza',
            'year' => 2010,
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqZ3SV5lXO9QQQg2ZnE0MoavFzwdEugCXG3N0Gv3Z6zA&s=10'
        ],
        [
            'id' => 2,
            'title' => 'Oppenheimer',
            'director' => 'Christopher Nolan',
            'genre' => 'Azione',
            'year' => 2023,
            'img' => 'https://m.media-amazon.com/images/I/51YU9Q90zEL._SL500_.jpg?format=auto&width=640&height=auto&quality=50' // <-- Link aggiunto qui
        ],

        [
            'id' =>3,
            'title' => 'Il Cavaliere Oscuro',
            'director' => 'Christopher Nolan',
            'genre' => 'Azione',
            'year' => 2008,
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4PWKIqnzzTmaxl7hIS5VONIQ1zH2HdckAPnZQTdZbSg&s=10' // <-- Link aggiunto qui
        ],

        [
            'id' =>4,
            'title' => 'Barbie',
            'director' => 'Greta Gerwig',
            'genre' => 'Romanzo',
            'year' => 2023,
            'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHsnTa3-wsxRNlByY_BIrwYLcKO8y0Ipd5VlcjRgRqvg&s=10' // <-- Link aggiunto qui
        ],


    ];

    public function index()
    {
        return view('movie.movie-index', ['movies' => $this->movies]);
    }

    public function show($id)
    {
        foreach ($this->movies as $movie) {
            if ($movie['id'] == $id) {
                return view('movie.movie-detail', ['movie' => $movie]);
            }
        }

        abort(404);
    }
}