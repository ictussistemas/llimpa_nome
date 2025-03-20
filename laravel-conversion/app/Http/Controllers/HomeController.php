<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Exemplo de dados para a seção de notícias
        $news = [
            (object) [
                'title' => 'Como negociar dívidas com até 90% de desconto',
                'slug' => 'como-negociar-dividas-com-desconto',
                'excerpt' => 'Aprenda estratégias eficientes para negociar suas dívidas e conseguir descontos significativos.',
                'image' => 'images/blog/negociacao-dividas.jpg',
                'published_at' => now()->subDays(2),
                'category' => (object) ['name' => 'Dicas Financeiras']
            ],
            (object) [
                'title' => 'Entenda as mudanças no cadastro positivo em 2023',
                'slug' => 'mudancas-cadastro-positivo-2023',
                'excerpt' => 'O cadastro positivo passou por importantes mudanças. Saiba como isso afeta seu score de crédito.',
                'image' => 'images/blog/cadastro-positivo.jpg',
                'published_at' => now()->subDays(5),
                'category' => (object) ['name' => 'Notícias']
            ],
            (object) [
                'title' => 'Os direitos do consumidor na negativação de nome',
                'slug' => 'direitos-consumidor-negativacao',
                'excerpt' => 'Conheça seus direitos quando seu nome é incluído em órgãos de proteção ao crédito.',
                'image' => 'images/blog/direitos-consumidor.jpg',
                'published_at' => now()->subDays(7),
                'category' => (object) ['name' => 'Direitos']
            ],
        ];
        
        return view('landing-page', compact('news'));
    }
}