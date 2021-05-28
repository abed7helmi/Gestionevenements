<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Livewire\WithPagination; 

use App\Evenement;

class Datatablee extends Component
{

    use WithPagination;
    public $perPage = 10;
    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $evens=Evenement::where('Organisateur',Auth::user()->id)
        // ->orwhere('Type','like','%'.$this->search.'%')
        // ->orwhere('Nb_participants','like','%'.$this->search.'%')
        // ->orwhere('Adresse','like','%'.$this->search.'%')
        // ->orwhere('date_evenement','like','%'.$this->search.'%')
        ->paginate($this->perPage);;
        return view('livewire.datatablee',compact('evens'));
    }




    public function updatingSearch()
    {
        $this->resetPage();
    }



    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }


}
