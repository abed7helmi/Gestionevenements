<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination; 

use App\Evenement;

class Datatable extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $allevens=Evenement::with('Organisateur')
        // ->orderBy($this->sortBy, $this->sortDirection)
        ->where('Nom_evenement','like','%'.$this->search.'%')
        ->orwhere('Type','like','%'.$this->search.'%')
        ->orwhere('Nb_participants','like','%'.$this->search.'%')
        ->orwhere('Adresse','like','%'.$this->search.'%')
        ->orwhere('date_evenement','like','%'.$this->search.'%')
        
        ->paginate($this->perPage);

        // dd($allevens);
        return view('livewire.datatable',compact('allevens'));
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
