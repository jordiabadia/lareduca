<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UsersTable extends Component
{
    public $search = '';

    public function render()
    {
        $query = User::where('name', 'like', '%'. $this->search. '%')
                     ->orWhere('email', 'like', '%'. $this->search. '%');

        return view('livewire.users-table', ['users' => $query->paginate(10)]);
    }
}

