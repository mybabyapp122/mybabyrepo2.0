@extends('layouts.admin')
@section('page_title', 'Add New Teacher')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add New Teacher</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <select class="form-control" id="subject" name="subject">
                                    <option value="">Select Subject</option>
                                    <option value="mathematics">Mathematics</option>
                                    <option value="physics">Physics</option>
                                    <option value="chemistry">Chemistry</option>
                                    <option value="biology">Biology</option>
                                    <option value="english">English</option>
                                    <option value="history">History</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="experience" class="form-label">Years of Experience</label>
                                <input type="number" class="form-control" id="experience" name="experience" min="0">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="qualification" class="form-label">Qualification</label>
                                <input type="text" class="form-control" id="qualification" name="qualification">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Add Teacher</button>
                        <a href="{{ route('admin.teachers.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
@endsection
