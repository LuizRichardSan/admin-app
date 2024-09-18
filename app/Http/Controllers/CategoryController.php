<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $products = Product::all();

        $categories = Category::with('products')->get();

        return view('category.index', compact(
        'products',
        'categories'));
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'products' => 'required|array', // Verifica se existe um array de produtos
            'products.*' => 'exists:products,id', // Cada produto selecionado deve existir na tabela 'products'
        ], [
            'products.*.exists' => 'O produto selecionado não existe na tabela de produtos.',
            'cover_image.jpeg,png,jpg,gif' => 'O formato da imagem de capa deve ser jpeg, png, jpg ou gif.',
            'cover_image.max' => 'O tamanho da imagem de capa deve ser menor que 2MB.',
        ]);

        $price = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('price'));
        $price = (float) $price;


        // Upload da imagem de capa (se fornecida)
        $coverImagePath = null;
        if ($request->hasFile('cover_image')) {
            $coverImagePath = $request->file('cover_image')->store('category_images', 'public');
        }

        // Criação da categoria
        $category = Category::create([
            'name' => $request->name,
            'price' => $price,
            'cover_image' => $coverImagePath,
        ]);

        // Vincula os produtos selecionados à categoria
        $category->products()->sync($request->products);

        if (!$category->wasChanged()) {
            return redirect()->back()->with('error', 'Erro ao criar a categoria!');
        }

        // Redireciona ou retorna uma resposta (exemplo com redirecionamento)
        return redirect()->back()->with('success', 'Categoria criada com sucesso!');
    }

    public function update(Request $request, $id)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'products' => 'required|array', // Verifica se existe um array de produtos
            'products.*' => 'exists:products,id', // Cada produto selecionado deve existir na tabela 'products'
        ], [
            'products.*.exists' => 'O produto selecionado não existe na tabela de produtos.',
            'cover_image.jpeg,png,jpg,gif' => 'O formato da imagem de capa deve ser jpeg, png, jpg ou gif.',
            'cover_image.max' => 'O tamanho da imagem de capa deve ser menor que 2MB.',
        ]);

        $price = str_replace(['R$', '.', ','], ['', '', '.'], $request->input('price'));
        $price = (float) $price;

        // Encontra a categoria pelo ID
        $category = Category::findOrFail($id);

        // Upload da imagem de capa (se fornecida)
        if ($request->hasFile('cover_image')) {
            // Remove a imagem antiga se existir
            if ($category->cover_image) {
                Storage::disk('public')->delete($category->cover_image);
            }

            // Armazena a nova imagem
            $coverImagePath = $request->file('cover_image')->store('category_images', 'public');
            $category->cover_image = $coverImagePath;
        }

        // Atualiza os dados da categoria
        $category->name = $request->name;
        $category->price = $price;
        $category->save();

        // Atualiza os produtos associados à categoria
        $category->products()->sync($request->products);

        // Redireciona ou retorna uma resposta (exemplo com redirecionamento)
        return redirect()->back()->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    }

}
