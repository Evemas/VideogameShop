<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function games($console, Request $request)
    {
        // creato un array di generi associati al numero identificativo dentro l'API
        $platforms = [
            'ps5' => 187,
            'ps4' => 18,
            'xbox' => 1,
            'nintendo_switch' => 7,
            'pc' => 4
        ];

        // recuperato i giochi dall'API
        $apiKey = env('RAWG_API_KEY');
        $page = $request->input('page', 1);
        $gameResponse = Http::get("https://api.rawg.io/api/games", [
            'key' => $apiKey,
            'platforms' => $platforms[$console],
            'page' => $page,
            'page_size' => 20
        ])->json();

        // salvataggio dei giochi nel database
        $games = [];
        foreach ($gameResponse['results'] as $game) {
            $existingGame = Game::where('title', $game['name'])->first();
            if (!$existingGame) {
                $newGame = new Game();
                $newGame->title = $game['name'];
                $newGame->platform = $console;
                $newGame->genre = $game['genres'][0]['name'] ?? 'Unknown';
                $newGame->image = $game['background_image'];
                $newGame->save();
                $games[] = $newGame;
            } else {
                $games[] = $existingGame;
            }
        }
            
        //recuperato i generi dall'API
        $genresResponse = Http::get("https://api.rawg.io/api/genres", [
            'key' => $apiKey
        ])->json();
        $genres = $genresResponse['results'];

        return view('console_games', compact('games', 'console', 'page', 'genres'));
    }
}