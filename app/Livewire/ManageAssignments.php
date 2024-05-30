<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Asignatura;

class ManageAssignments extends Component
{
    public $titulo;
    public $contenidoTeorico;
    public $objetivos;
    public $recursos;

    public function createAssignment()
    {
        $asignatura = new Asignatura;
        $asignatura->titulo = $this->titulo;
        $asignatura->contenidoTeorico = $this->contenidoTeorico;
        $asignatura->objetivos = $this->objetivos;
        $asignatura->recursos = $this->recursos;
        $asignatura->save();

        session()->flash('message', 'Asignatura creada exitosamente.');

        return redirect()->route('assignments.index');
    }

    public function render()
    {
        return view('livewire.manage-assignments');
    }
}
