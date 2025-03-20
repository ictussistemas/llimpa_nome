<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Página inicial (Landing Page)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rotas para as páginas principais
Route::get('/empresa', function () {
    return view('empresa');
})->name('empresa');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos');

Route::get('/servico/{slug}', function ($slug) {
    return view('servico', compact('slug'));
})->name('servico');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', compact('slug'));
})->name('blog.show');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/fale-conosco', function () {
    return view('fale-conosco');
})->name('fale-conosco');

Route::get('/orcamento', function () {
    return view('orcamento');
})->name('orcamento');

Route::get('/consulta', function () {
    return view('consulta');
})->name('consulta');

Route::get('/categoria/{slug}', function ($slug) {
    return view('categoria', compact('slug'));
})->name('categoria');

// Rotas para formulários
Route::post('/newsletter/subscribe', function (\Illuminate\Http\Request $request) {
    // Lógica para salvar o e-mail na newsletter
    return redirect()->back()->with('success', 'E-mail cadastrado com sucesso!');
})->name('newsletter.subscribe');

Route::post('/contato/rapido', function (\Illuminate\Http\Request $request) {
    // Lógica para processar o formulário de contato rápido
    return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
})->name('contato.rapido');