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
                    <input type="text" class="form-control" placeholder="Search by Description" name="description"
                        value="{{ request()->description }}">
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Search</button>
                    <a href="{{ route('lets-learn.index') }}" class="btn btn-danger">Clear</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">Learn List</h4>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn btn-primary" href="{{ route('lets-learn.create') }}">
                    <i class="bi bi-plus"></i> Add New Learn
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <x-table :columns="['#', 'Title',  'Description','File',   'Status', 'Action']">
            @forelse($letsLearn as $key => $data)
            <tr class="text-center">
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->title}}</td>
                <td>
                    {{ Str::limit($data->description, 50) }}
                </td>
                <td class="max-width:1">
                    {{ asset('backend/assets/file/lets-learn/'.$data->file) }}
                </td>
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
                    <form action="{{ route('lets-learn.destroy', $data->id) }}" method="POST"
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

@endsection

@push('scripts')
<script>
</script>
@endpush