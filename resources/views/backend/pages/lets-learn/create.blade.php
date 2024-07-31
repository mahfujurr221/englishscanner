@extends('backend.layouts.master')
@section('content')
{{-- <div class="col-md-8 offset-md-2"> --}}
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Create lets learn</h4>
                </div>
                <div class="mt-1 col-md-6 text-end">
                    <a class="btn btn-primary" href="{{ route('lets-learn.index') }}">
                        <i class="bi bi-list"></i>Learn List
                    </a>
                </div>
            </div>
        </div>
        <form action="{{ route('lets-learn.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="mb-2 form-group">
                                <label class="form-label" for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-2 form-group">
                                <label class="form-label" for="description">Description <span
                                        class="text-danger">*</span></label>
                                <textarea name="description" class="form-control" placeholder="Enter Description"
                                    rows="7" required></textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-2 form-group col-md-4">
                        <div class="row">
                            <div class="mb-2 form-group">
                                <label class="form-label" for="file">File <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" name="file" id="file" accept="application/pdf" required>
                                @error('file')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{-- preview --}}
                            <div class="mt-3 form-group" style="width: 100%; background-color: #f8f9fa;">
                                <iframe id="preview" class="img-fluid" style="width: 100%; height: 300px; border: none;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="py-3 text-center card-footer">
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
    {{--
</div> --}}

@endsection

@push('scripts')
<script>
    document.getElementById('file').addEventListener('change', function(event) {
        var file = event.target.files[0];
        if (file.type === "application/pdf") {
            var url = URL.createObjectURL(file);
            document.getElementById('preview').src = url;
        } else {
            document.getElementById('preview').src = '';
            alert('Please select a valid PDF file.');
        }
    });
    </script>
@endpush