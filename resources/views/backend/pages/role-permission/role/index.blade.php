@extends('backend.layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Role List</h4>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRoleModal">
                    <i class="bi bi-plus"></i> Add New Role
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <x-table :columns="['#', 'Role Name', 'Action']">
            @foreach ($roles as $key => $data)
            <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->name }}</td>
                <td>
                    <a href="{{ route('role.permissions', $data->id) }}" class="btn btn-primary btn-sm" title="Permission">
                        <i class="bi bi-list "></i>  
                        Permission
                    </a>
                    
                    <button class="btn btn-info btn-sm editButton" data-bs-toggle="modal"
                        data-bs-target="#editRoleModal" data-id="{{ $data->id }}" data-name="{{ $data->name }}" title="Edit">
                        <i class="bi bi-pencil"></i> 
                    </button>
                    <form action="{{ route('roles.destroy', $data->id) }}" method="POST" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure to delete?')" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </x-table>
    </div>
</div>

{{-- Add Modal --}}
<x-modal id="addRoleModal" title="Add New Role" action="{{ route('roles.store') }}">
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </x-slot>
    <x-input type="text" name="name" placeholder="Enter Role Name" />
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</x-modal>

{{-- Edit Modal --}}
<x-modal id="editRoleModal" title="Update Role" action="{{ route('roles.update', ['role' => $data->id]) }}" method="PUT">
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
    </x-slot>
    <x-input id="edit_name" type="text" name="name" placeholder="Enter Role Name" value="{{ $data->name }}" />
    @error('name')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</x-modal>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        let editButtons = document.querySelectorAll('.editButton');
        let editModal = document.getElementById('editRoleModal');
        let editNameInput = document.querySelector('#edit_name');
        let errorMsg = document.querySelector('#errorMsg');

        editButtons.forEach(button => {
            button.addEventListener('click', () => {
                let roleId = button.getAttribute('data-id');
                let roleName = button.getAttribute('data-name');
                let form = editModal.querySelector('form');
                form.action = `/roles/${roleId}`;
                editNameInput.value = roleName;
            });
        });

        @if($errors->any())
            new bootstrap.Modal(editModal).show();
        @endif

        // Clear form and error message after modal close
        editModal.addEventListener('hidden.bs.modal', () => {
            editNameInput.value = '';
            if (errorMsg) {
                errorMsg.innerHTML = '';
                errorMsg.style.display = 'none';
                errorMsg.classList.remove('alert', 'alert-danger');
            }
        });
    });
</script>
@endpush