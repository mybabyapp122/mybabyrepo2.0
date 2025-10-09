@extends('layouts.admin')
@section('page_title', 'Profile')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="{{ asset('theme-related/images/user.jpg') }}" alt="Profile Picture" class="rounded-circle" width="150" height="150">
                            <h4 class="mt-3">{{ Auth::user()->name ?? 'Admin User' }}</h4>
                            <p class="text-muted">{{ Auth::user()->email ?? 'admin@example.com' }}</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><strong>Name:</strong></td>
                                        <td>{{ Auth::user()->name ?? 'Admin User' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Email:</strong></td>
                                        <td>{{ Auth::user()->email ?? 'admin@example.com' }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Role:</strong></td>
                                        <td>Administrator</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Member Since:</strong></td>
                                        <td>{{ Auth::user()->created_at ? Auth::user()->created_at->format('M d, Y') : 'N/A' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                            <a href="{{ route('profile.password.edit') }}" class="btn btn-secondary">Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
@endsection
