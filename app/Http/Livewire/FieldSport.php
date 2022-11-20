<?php

namespace App\Http\Livewire;

use App\Models\SportField;
use Livewire\Component;
use Livewire\WithPagination;

class FieldSport extends Component
{
    use WithPagination;

    public $search = '';
    private $paginate = 3;

    public function render()
    {

        $sport_fields = SportField::when($this->search, function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%');
        })->paginate($this->paginate);

        return view('livewire.field-sport', compact('sport_fields'));
    }
}
