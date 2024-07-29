@extends('backend.layouts.master')
@section('content')

<div class="card">
    <div class="card-body">
        <form>
            <div class="mt-3 row">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by Title" name="title"
                        value="{{ request()->title }}">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by Code" name="code"
                        value="{{ request()->code }}">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Search by Description" name="description"
                        value="{{ request()->description }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('courses.index') }}" class="btn btn-danger">Clear</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Course List</h4>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCourseModal">
                    <i class="bi bi-plus"></i> Add New Course
                </button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <x-table :columns="['#', 'Title', 'Code', 'Description', 'Course Fee', 'Status', 'Action']">
            @forelse($courses as $key => $data)
            <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->title}}</td>
                <td>{{ $data->code }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->course_fee }}</td>
                <td>
                    @if($data->status == 1)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>
                <td>
                    <button class="btn btn-info btn-sm editButton" data-bs-toggle="modal"
                        data-bs-target="#editCourseModal" data-id="{{ $data->id }}" data-name="{{ $data->title }}"
                        data-code="{{ $data->code }}" data-description="{{ $data->description }}"
                        data-course_fee="{{ $data->course_fee }}" title="Edit">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <form action="{{ route('courses.destroy', $data->id) }}" method="POST"
                        style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure to delete?')" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">No data found</td>
            </tr>
            @endforelse
        </x-table>
    </div>
</div>

{{-- Add Modal --}}
<x-modal id="addCourseModal" title="Add New Course" modalSize="modal-md" action="{{ route('courses.store') }}">
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </x-slot>
    <div class="mb-2 form-group">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <x-input type="text" name="title" placeholder="Enter Course Title" />
    </div>

    <div class="mb-2 form-group">
        <label class="form-label" for="code">Code<span class="text-danger">*</span></label>
        <x-input type="text" name="code" placeholder="Enter Course Code" />
    </div>

    <div class="mb-2 form-group">
        <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
        <textarea name="description" class="form-control" placeholder="Enter Course Description" rows="7"></textarea>
    </div>

    <div class="mb-2 form-group">
        <label class="form-label" for="course_fee">Course Fee <span class="text-danger">*</span></label>
        <x-input type="number" name="course_fee" placeholder="Enter Course Fee" />
    </div>
    @error('title')
    <span class="text-danger">{{ $message }}</span>
    @enderror
</x-modal>

{{-- Edit Modal --}}
<x-modal id="editCourseModal" title="Update Course" modalSize="modal-md" method="POST">
    @csrf
    @method('PUT')
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update changes</button>
    </x-slot>
    <div class="mb-2 form-group">
        <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
        <x-input type="text" name="title" placeholder="Enter Course Title" id="edit_title" />
        @error('title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-2 form-group">
        <label class="form-label" for="code">Code</label>
        <x-input type="text" name="code" placeholder="Enter Course Code" id="edit_code" />
        @error('code')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-2 form-group">
        <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
        <textarea name="description" class="form-control" placeholder="Enter Course Description" rows="7"
            id="edit_description"></textarea>
        @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-2 form-group">
        <label class="form-label" for="course_fee">Course Fee <span class="text-danger">*</span></label>
        <x-input type="number" name="course_fee" placeholder="Enter Course Fee" id="edit_course_fee" />
        @error('course_fee')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</x-modal>

@endsection

@push('scripts')
<script>
    // document.addEventListener('DOMContentLoaded', () => {
    //     var id=

    //     @if($errors->any())
    //         new bootstrap.Modal(editModal).show();
    //     @endif

    //     // Clear form and error message after modal close
    //     editModal.addEventListener('hidden.bs.modal', () => {
    //         editNameInput.value = '';
    //         if (errorMsg) {
    //             errorMsg.innerHTML = '';
    //             errorMsg.style.display = 'none';
    //             errorMsg.classList.remove('alert', 'alert-danger');
    //         }
    //     });
    // });
    
    $(document).on('click', '.editButton', function () {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var code = $(this).data('code');
        var description = $(this).data('description');
        var course_fee = $(this).data('course_fee');

        var url= "{{ route('courses.update', ':id') }}";
        url = url.replace(':id', id);

        $('#edit_title').val(name);
        $('#edit_code').val(code);
        $('#edit_description').val(description);
        $('#edit_course_fee').val(course_fee);
        $('#editCourseModal').attr('action', url);
    });
    
</script>
@endpush