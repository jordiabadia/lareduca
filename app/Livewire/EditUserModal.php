<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\User;
use Livewire\Component;

class EditUserModal extends ModalComponent
{
    public $userId;
    public $isOpen = false;
    public $name;
    public $email;

    public function mount($userId)
    {
        $this->userId = $userId;
        $this->loadData();
    }

    public function loadData()
    {
        $user = User::find($this->userId);
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function render()
    {
        return view('livewire.edit-user-modal');
    }

    public function saveChanges()
    {
        $user = User::find($this->userId);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->closeModal();
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }
    

}


