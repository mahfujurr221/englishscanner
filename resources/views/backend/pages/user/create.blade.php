@extends('backend.layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h4 class="card-title">User Create</h4>
            </div>
            <div class="col-md-6 text-end">
                <a class="btn btn-primary" href="{{ route('users.index') }}" title="User List">
                    <i class="bi bi-list"></i> User List</a>
                </a>
            </div>
        </div>
    </div>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="mt-3 row">

                <div class="mb-2 col-md-6">
                    <label class="form-label">Frist Name<span class="text-danger">*</span></label>
                    <input class="form-control {{ $errors->has('fname') ? 'is-invalid' : '' }}" type="text" name="fname"
                        placeholder="Enter First Name" value="{{ old('fname') }}" required>

                    @if($errors->has('fname'))
                    <div class="invalid-feedback">{{ $errors->first('fname') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-6">
                    <label class="form-label">Last Name<span class="text-danger">*</span></label>
                    <input class="form-control {{ $errors->has('lname') ? 'is-invalid' : '' }}" type="text" name="lname"
                        placeholder="Enter Last Name" value="{{ old('lname') }}">

                    @if($errors->has('lname'))
                    <div class="invalid-feedback">{{ $errors->first('lname') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-6">
                    <label class="form-label">Email<span class="text-danger">*</span></label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email"
                        placeholder="Enter Login Email." value="{{ old('email') }}">

                    @if($errors->has('email'))
                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-6">
                    <label class="form-label">Phone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control{{ $errors->has('phone') ? 'is-invalid' : '' }}" name="phone"
                        value="{{ old('phone') }}">
                    @if($errors->has('phone'))
                    <div class="invalid-feedback">{{ $errors->first('phone') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-6">
                    <label class="form-label">Password<span class="text-danger">*</span></label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password"
                        name="password" placeholder="******">
                    @if($errors->has('password'))
                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-6">
                    <label class="form-label">Password Confirmation<span class="text-danger">*</span></label>
                    <input class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                        type="password" name="password_confirmation" placeholder="******">

                    @if($errors->has('password_confirmation'))
                    <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-4">
                    <label class="form-label">Role<span class="text-danger">*</span></label>
                    <select name="role" class="form-control {{ $errors->has('role') ? 'is-invalid' : '' }} select2"
                        data-placeholder="Select Role" multiple required>
                        @foreach ($roles as $role)
                        <option {{ old('role')==$role->name? 'selected' : '' }} value="{{ $role->name }}">{{ $role->name
                            }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('role'))
                    <div class="invalid-feedback">{{ $errors->first('role') }}</div>
                    @endif
                </div>

                <div class="mb-2 col-md-4">
                    <label class="form-label">Add As Employee</label>
                    <select name="is_employee" class="form-select {{ $errors->has('employee') ? 'is-invalid' : '' }}"
                        required>
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                    @if($errors->has('employee'))
                    <div class="invalid-feedback">{{ $errors->first('employee') }}</div>
                    @endif
                </div>

                <div class="row is_employee">
                    <div class="mb-2 col-md-6">
                        <label class="form-label">Address<span class="text-danger">*</span></label>
                        <textarea class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" name="address"
                            placeholder="Enter Address">{{ old('address') }}</textarea>
                    </div>

                    <div class="mb-2 col-md-6">
                        <label class="form-label">Status<span class="text-danger">*</span></label>
                        <select name="status" class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}"
                            required>
                            <option value="1" {{ old('status')=='active' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status')=='inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="mb-2 col-md-6">
                        <label class="form-label">Designation<span class="text-danger">*</span></label>
                        <select name="designation_id"
                            class="form-control {{ $errors->has('designation_id') ? 'is-invalid' : '' }}" required>
                            <option value="">Select Designation</option>
                            {{-- @foreach ($designations as $designation)
                            <option value="{{ $designation->id }}" {{ old('designation_id')==$designation->id ?
                                'selected' : '' }}>
                                {{ $designation->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>

                    <div class="mb-2 col-md-6">
                        <label class="form-label">Salary<span class="text-danger">*</span></label>
                        <input class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}" type="text"
                            name="salary" placeholder="Enter Salary" value="{{ old('salary') }}" required>

                        @if($errors->has('salary'))
                        <div class="invalid-feedback">{{ $errors->first('salary') }}</div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3 text-center card-footer">
            <button type="submit" class="btn btn-primary">Create User</button>
        </div>
    </form>
</div>

@endsection

@push('scripts')
@endpush