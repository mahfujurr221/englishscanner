@extends('backend.layouts.master')
@section('content')
<div class="card col-12 containing-card">
    <div class="card-header">
        <b>Todays Activity</b>
    </div>
    <div class="p-2 row">
        <div class="mb-4 col-md-3 col-sm-6">
            <div class="shadow card bg-info">
                <div class="card-body">
                    <h6 class="text-white card-title text-uppercase font-weight-bold">Present</h6>
                    <p class="text-white card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        <div class="mb-4 col-md-3 col-sm-6">
            <div class="text-white shadow-sm card bg-danger">
                <div class="card-body">
                    <h6 class="text-white card-title text-uppercase font-weight-bold">Absent</h6>
                    <p class="card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        <div class="mb-4 col-md-3 col-sm-6">
            <div class="text-white shadow-sm card bg-warning">
                <div class="card-body">
                    <h6 class="text-white card-title text-uppercase font-weight-bold">Leave</h6>
                    <p class="card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>

        <div class="mb-4 col-md-3 col-sm-6">
            <div class="text-white shadow-sm card bg-success">
                <div class="card-body">
                    <h6 class="text-white card-title text-uppercase font-weight-bold">Application Received</h6>
                    <p class="card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
        
    </div>
</div>

{{-- total info --}}
<div class="card col-12 containing-card">
    <div class="card-header">
        <b>Total Info</b>
    </div>

    <div class="p-2 row">
        <div class="mb-4 col-md-3 col-sm-6">
            <div class="text-white shadow-sm card bg-info">
                <div class="card-body">
                    <h6 class="text-white card-title text-uppercase font-weight-bold">Total Employees</h6>
                    <p class="card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>

        <div class="mb-4 col-md-3 col-sm-6">
            <div class="text-white shadow-sm card bg-success">
                <div class="card-body">
                    <h6 class="text-white card-title text-uppercase font-weight-bold">Total Clients</h6>
                    <p class="card-text fs-5 fw-bold">0</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- employee info --}}
<div class="card col-12 containing-card">
    <div class="card-header">
        <b>Total Employee</b>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Joining Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>IT</td>
                        <td>12/12/2021</td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>IT</td>
                        <td>12/12/2021</td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>IT</td>
                        <td>12/12/2021</td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>IT</td>
                        <td>12/12/2021</td>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Software Engineer</td>
                        <td>IT</td>
                        <td>12/12/2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection