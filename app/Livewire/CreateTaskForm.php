<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tarea;

class CreateTaskForm extends Component
{
    public $tipo;
    public $titulo;
    public $descripcion;
    public $activo;

    public function submit()
    {
        $tarea = new Tarea;
        $tarea->tipo = $this->tipo;
        $tarea->titulo = $this->titulo;
        $tarea->descripcion = $this->descripcion;
        $tarea->activo = $this->activo;
        $tarea->save();

        session()->flash('message', 'Tarea creada exitosamente.');

        return redirect()->route('tasks.index');
    }

    public function render()
    {
        return view('livewire.create-task-form');
    }
}

