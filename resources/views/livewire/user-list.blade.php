<div>
    <div class="row text-center">
        <h2 class="text-primary">Users List</h2>
    </div>
    <div class="row">
        <input type="text" wire:model="search" placeholder="Search users..." class="form-control mb-3 py-3">

    </div>
    <div class="row">
        @if ($message)
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Response :</strong> {{ $message }}
            <button type="button" class="btn-close" wire:click="SetMessageEmppty"></button>
        </div>
        @endif
    </div>


    <div class="row">

        <div class="table-responsive ">
            <table class="table table-bordered  ">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center">
                            <button class="btn btn-danger" wire:click="confirmDelete({{ $user->id }})">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No users found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $users->links() }}

        @if ($confirmingDelete)
        <div id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" style="display: block" class="modal " tabindex="-1" wire:click="cancelDelete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Deletion</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this user?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="cancelDelete">Cancel</button>
                        <button type="button" class="btn btn-danger" wire:click="deleteUser" onclick="disableButtonAndShowSpinner('btn-delete')" id="btn-delete">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" style="display: none;"></span>
                            Delete</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
