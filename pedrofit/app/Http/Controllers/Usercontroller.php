<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function loadAllusers(){
        $all_users = User::all();
        return view('users', compact('all_users'));
    }

    public function loadAddUserForm(){
        return view('add-user');
    }

    public function AddUser (Request $request){
        $request->validate([
            'nome_completo' => 'required|string',
            'livro' => 'required|unique:users',
            'editora' => 'required',
            'ano_de_publicacao' => 'required',
            'autor' => 'required|string',
        ]);

        try {
            $new_user = new User;
            $new_user->nome_completo = $request->nome_completo;
            $new_user->livro = $request->livro;
            $new_user->ano_de_publicacao = $request->ano_de_publicacao;
            $new_user->editora = $request->editora;
            $new_user->autor = $request->autor;
            $new_user->save();
    
            return redirect('/users')->with('usuario adicionado com sucesso');
    
    
        } catch (\Exception $e) {
            return redirect('/add/user')->with('falha ao adicionar usuario', $e->getMessage());
        }

       
    }

    public function deleteUser($id){
        try {
            User::where('id', $id)->delete();
            return redirect('/users')->with('sucesso', 'usuario deletado');
        } catch (\Exception $e) {
            return redirect('/users')->with('falha');
        }
    }

}
