<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|string', // Valida como string primeiro
        ]);

         // Remove o 'R$', os pontos e substitui a vírgula por ponto para salvar no formato correto
    $price = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('price'));

    // Agora você pode converter para float ou decimal antes de salvar
    $price = (float) $price;

    Product::create([
        'name' => $request->input('name'),
        'quantity' => $request->input('quantity'),
        'price' => $price,
    ]);

    return redirect()->back()->with('success', 'Produto adicionado com sucesso!');
    }

    public function destroy($id)
    {
    $product = Product::findOrFail($id);
    $product->delete();

    if (!$product) {
        return redirect()->back()->with('error', 'Erro ao excluir o produto!');
    }

    return redirect()->back()->with('success', 'Produto excluído com sucesso!');
    }

    public function update(Request $request, Product $product)
{

    try {
        $request->validate([
            'name' => 'required|string',
            'quantity' => 'required|integer',
            'price' => 'required|string', // Valida como string primeiro
        ]);

        $price = str_replace(['R$', ','], ['', '.'], $request->input('price'));

        // Converter para número decimal com precisão de duas casas decimais
        $price = floatval($price);

        $product->update([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $price,
        ]);

        if (!$product->wasChanged()) {
            return redirect()->back()->with('error', 'Erro ao atualizar o produto!');
        }

        return redirect()->back()->with('success', 'Produto atualizado com sucesso!');

    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar o produto.');
    }
}

}
