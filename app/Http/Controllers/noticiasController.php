<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
   
    public function index()
    {
        //Vai buscar todas as noticias
        $dados = noticias::all();
        return view('noticias_index', compact('dados'));
    }

    public function create()
    {
        //Vai Chamar formulario para novas notícias
        return view('noticias_create');
    }


    public function store(Request $request)
    {

        //Gravação de uma nova notícia na base de dados
        $noticia = new noticias;

        $noticia->titulo = $request->txt_titulo;
        $noticia->texto = $request->txt_texto;
        $noticia->autor = $request->txt_autor;
        
        //Visibilidade 
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;

        }else

        {
            $noticia->visivel = 0;
        }
        //salvar notícia com valor (( 0 )), porque 1 já vem por padrão
        $noticia->save();

        //redirecionar para página inicial (home)
        return redirect('/');   

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //Chamar formulario para editar as notícias
        $noticia = noticias::find($id);
        return view('noticias_edit', compact('noticia'));
    }

    public function update(Request $request, $id)
    {
        //Atualização das notícias na base de dados ( depois de editado)
        $noticia = noticias::find($id);

        //Atualizar os seus campos
        $noticia->titulo = $request->txt_titulo;
        $noticia->texto = $request->txt_texto;
        $noticia->autor = $request->txt_autor;
        
         if(isset($request->check_visivel)){
            $noticia->visivel = 1;

        }else

        {
            $noticia->visivel = 0;
        }

        $noticia->save();
        return redirect('/gerir_noticias');
    }

    public function destroy($id)
    {
        //Deletar uma notícia
        noticias::destroy($id);

        return redirect('/gerir_noticias');
    }

        
    public function apresentarTabelaGestao()
    {
        //Carregar Todas as notícias, visíveis ou não, em formato de tabela

        $noticias = noticias::all();
        return view('noticias_gestao', compact('noticias'));
    }

    public function colocarVisivel($id)
    {
        //Tornar visivel uma mensagem que está invisível

        $noticia = noticias::find($id);
        $noticia->visivel = 1;
        $noticia->save();

        return redirect('/gerir_noticias');


    }

     public function colocarInvisivel($id)
    {
        //Tornar invisível uma mensagem que está visivel

        $noticia = noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();

        return redirect('/gerir_noticias');


    }
}
