<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Curso;

class CreateCourseForm extends Component
{
    public $nombre;
    public $descripcion;
    public $asignaturas;

    public function submit()
    {
        $curso = new Curso;
        $curso->nombre = $this->nombre;
        $curso->descripcion = $this->descripcion;
        $curso->save();

        foreach ($this->asignaturas as $asignatura) {
            // Aquí asumimos que asignaturas es un array de IDs de asignaturas existentes
            // Necesitarás ajustar esto según tu modelo de datos
            $curso->asignaturas()->attach($asignatura);
        }

        session()->flash('message', 'Curso creado exitosamente.');

        return redirect()->route('courses.index');
    }

    public function render()
    {
        return view('livewire.create-course-form');
    }
}

