<?php

namespace App\Http\Controllers;
use App\Models\rooms;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    public function index()
{
    $offers = rooms::whereColumn('price', '!=', 'offer_price')->get();
    
    return view('offers', ['offers' => $offers]);
}

}
