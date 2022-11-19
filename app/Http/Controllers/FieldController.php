<?php

namespace App\Http\Controllers;

use App\Models\Field;

class FieldController extends Controller
{
    public function index()
    {

        $canchas = Field::paginate(3);

        return view('field.index', compact('canchas'));
    }
}
