<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Para gerar códigos aleatórios

class UrlController extends Controller
{
    // Exibe o formulário de encurtamento
    public function index()
    {
        return view('welcome'); // Laravel já vem com a view 'welcome' por padrão. Você pode customizá-la.
    }

    // Encurta a URL
    public function shorten(Request $request)
    {
        $request->validate([
            'long_url' => 'required|url' // Valida que é uma URL válida
        ]);

        $longUrl = $request->input('long_url');

        // Verifica se a URL já foi encurtada antes para evitar duplicidade
        $url = Url::where('long_url', $longUrl)->first();

        if (!$url) {
            // Se não existir, gera um código curto único
            do {
                $shortCode = Str::random(6); // Gera um código de 6 caracteres
            } while (Url::where('short_code', $shortCode)->exists()); // Garante que o código é único

            $url = Url::create([
                'long_url' => $longUrl,
                'short_code' => $shortCode,
            ]);
        }

        // Gera a URL curta completa
        $shortenedUrl = url($url->short_code);

        return redirect()->route('home')->with('success', 'Sua URL encurtada é: ' . $shortenedUrl);
    }

    // Redireciona a URL curta para a URL original
    public function redirect($shortCode)
    {
        $url = Url::where('short_code', $shortCode)->first();

        if (!$url) {
            // Se a URL curta não for encontrada, retorne um 404 ou redirecione para a home
            abort(404);
        }

        // Incrementa o contador de cliques
        $url->increment('clicks');

        // Redireciona para a URL longa
        return redirect($url->long_url);
    }
}