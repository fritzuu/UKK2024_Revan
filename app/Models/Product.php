<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nama_product', 'image', 'platform', 'genre_id', 'harga'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function index()
{
    $products = Product::all();
    return view('home', ['products' => $products]);
}
}
