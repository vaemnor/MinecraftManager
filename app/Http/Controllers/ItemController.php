<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    public function home()
    {
        $featuredItems = Items::inRandomOrder()->limit(3)->get();
        return view('home', ['featuredItems' => $featuredItems]);
    }

    public function info()
    {
        return view('info');
    }

    public function items()
    {
        $items = Items::all();
        return view('items', ['items' => $items]);
    }

    public function item($id)
    {
        $item = Items::findOrFail($id);
        return view('item', ['item' => $item]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $results = Items::query()
        ->where('name', 'LIKE', '%' . $query . '%')
        ->orWhere('minecraft_id', '=', $query)
        ->get();

        return view('search', ['results' => $results]);
    }
}
