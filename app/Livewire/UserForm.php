<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserForm extends Component
{
    public $name, $email, $password, $confirmPassword, $editMode = false, $user, $updateId;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email,'. $updateId,
        'password' => 'confirmed',
    ];

    public function render()
    {
        return view('livewire.user-form');
    }

    public function save()
    {
        $validator = Validator::make($this->validateOnly(['name', 'email', 'password']), $this->rules);

        if ($validator->fails()) {
            session()->flash('errors', $validator->errors());
            return;
        }

        if (!$this->editMode) {
            User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
        } else {
            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => bcrypt($this->password),
            ]);
        }

        session()->flash('message', 'Usuario guardado exitosamente.');

        $this->emit('closeModal');

        $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:success', ['title' => 'Guardado!', 'timer' => 2000]);
    }

    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->confirmPassword = '';
        $this->editMode = false;
        $this->user = null;
        $this->updateId = null;
    }
}

