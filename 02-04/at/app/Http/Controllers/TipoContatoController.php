<?php
namespace App\Http\Controllers;

use App\Models\TipoContato;
use Illuminate\Http\Request;

class TipoContatoController extends Controller
{
    public function index()
    {
        $tipos = TipoContato::all();
        return view('TipoContatoView.index', compact('tipos'));
    }

    public function create()
    {
        return view('TipoContatoView.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required',
        ]);

        TipoContato::create($request->all());
        return redirect()->route('tipo_contato.index')->with('success', 'Tipo de Contato criado com sucesso!');
    }

    public function show(TipoContato $tipoContato)
    {
        return view('tipo_contato.show', compact('tipoContato'));
    }

    public function edit(TipoContato $tipoContato)
    {
        return view('TipoContatoView.edit', compact('tipoContato'));
    }

    public function update(Request $request, TipoContato $tipoContato)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required',
        ]);

        $tipoContato->update($request->all());
        return redirect()->route('tipo_contato.index')->with('success', 'Tipo de Contato atualizado com sucesso!');
    }

    public function destroy(TipoContato $tipoContato)
    {
        $tipoContato->delete();
        return redirect()->route('tipo_contato.index')->with('success', 'Tipo de Contato excluído com sucesso!');
    }
}