@extends('layouts.admin')
@section('page_title', 'Teachers')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Teachers Management</h4>
                <div class="card-tools">
                    <a href="{{ route('admin.teachers.create') }}" class="btn btn-primary">
                        <i class="material-symbols-outlined">add</i>
                        Add New Teacher
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Experience</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. Sarah Johnson</td>
                                <td>sarah@example.com</td>
                                <td>Mathematics</td>
                                <td>5 years</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Prof. Michael Brown</td>
                                <td>michael@example.com</td>
                                <td>Physics</td>
                                <td>8 years</td>
                                <td><span class="badge badge-success">Active</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
@endsection
