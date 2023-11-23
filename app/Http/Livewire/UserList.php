<?php

namespace App\Http\Livewire;

use App\Models\User;

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;
    public $confirmingDelete = false;
    public $selectedUserId;
    protected $paginationTheme = 'bootstrap';
    public $message = '';
    public function render()
    {

        $users = User::where('first_name', 'like', '%' . $this->search . '%')
                     ->orWhere('last_name', 'like', '%' . $this->search . '%')
                     ->paginate(7);

        return view('livewire.user-list', compact('users'));
    }

    public function confirmDelete($userId)
    {

        $this->selectedUserId = $userId;
        $this->confirmingDelete = true;

    }

    public function deleteUser()
    {
        $user = User::find($this->selectedUserId);

        if ($user) {
            $user->delete();
            $this->message = 'User deleted successfully.';
            $this->emit('userDeleted');
        } else {
            $this->message = 'User not found.';
        }

        $this->confirmingDelete = false;
    }

    public function cancelDelete()
    {
        $this->confirmingDelete = false;
    }
    public function SetMessageEmppty()
    {
        $this->message = '';
    }

}
