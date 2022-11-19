<?php

namespace App\Http\Controllers;

use App\Models\Cancha;
use Illuminate\Http\Request;

class CanchaController extends Controller
{
    public function index()
    {

        $canchas = Cancha::paginate(3);

        return view('canchas.index', compact('canchas'));
    }
}
