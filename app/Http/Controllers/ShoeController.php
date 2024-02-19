<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoeController extends Controller
{
    function createShoe() {
        $categories = Category::all();
        return view('addProduct', compact('categories'));
    }

    function createShoe1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::create([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return redirect('/product');
    }

    public function viewShoes() {
        $shoes = Shoe::all();
        $categories = Category::all();
        return view('product', compact('shoes', 'categories'));
    }

    public function editProduct($id) {
        $shoe = Shoe::findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('shoe', 'categories'));
    }

    public function updateProduct(Request $request, $id) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::find($id)->update([
            'Name' => $request->Name,
            'Price' => $request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return redirect('/product');
    }

    public function deleteProduct($id) {
        $shoe = Shoe::find($id);
        Shoe::destroy($id);
        Storage::delete('/public'.'/'.$shoe->Photo);
        return redirect('/product');
    }
}
