@extends('layouts.admin')
@section('page_title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 m-t35">
        <div class="card card-coin">
            <div class="card-body text-center">
                <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="40" fill="#FFA500"/>
                    <path d="M40.725 0C18.25 0 0 18.25 0 40.725C0 63.2 18.25 81.45 40.725 81.45C63.2 81.45 81.45 63.2 81.45 40.725C81.45 18.25 63.2 0 40.725 0ZM59.0075 54.6025L37.23 61.675C36.675 61.8475 36.12 61.93 35.565 61.93C34.395 61.93 33.225 61.4225 32.4 60.5975L25.3275 53.525C24.5025 52.7 23.995 51.53 23.995 50.36C23.995 49.805 24.0775 49.25 24.25 48.695L31.3225 26.9175C32.4 23.5775 35.74 21.475 39.08 22.5525C42.42 23.63 44.5225 26.97 43.445 30.31L38.1575 46.8L51.675 42.42C54.015 41.675 56.5225 43.2825 57.2675 45.6225C58.0125 47.9625 56.405 50.47 54.065 51.215L59.0075 54.6025Z" fill="white"/>
                </svg>
                <h2 class="text-black mb-2">#1,234</h2>
                <p class="mb-0 fs-14">Total Students</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 m-t35">
        <div class="card card-coin">
            <div class="card-body text-center">
                <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="40" fill="#FFA500"/>
                    <path d="M40.725 0C18.25 0 0 18.25 0 40.725C0 63.2 18.25 81.45 40.725 81.45C63.2 81.45 81.45 63.2 81.45 40.725C81.45 18.25 63.2 0 40.725 0ZM59.0075 54.6025L37.23 61.675C36.675 61.8475 36.12 61.93 35.565 61.93C34.395 61.93 33.225 61.4225 32.4 60.5975L25.3275 53.525C24.5025 52.7 23.995 51.53 23.995 50.36C23.995 49.805 24.0775 49.25 24.25 48.695L31.3225 26.9175C32.4 23.5775 35.74 21.475 39.08 22.5525C42.42 23.63 44.5225 26.97 43.445 30.31L38.1575 46.8L51.675 42.42C54.015 41.675 56.5225 43.2825 57.2675 45.6225C58.0125 47.9625 56.405 50.47 54.065 51.215L59.0075 54.6025Z" fill="white"/>
                </svg>
                <h2 class="text-black mb-2">#1,234</h2>
                <p class="mb-0 fs-14">Total Teachers</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 m-t35">
        <div class="card card-coin">
            <div class="card-body text-center">
                <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="40" fill="#FFA500"/>
                    <path d="M40.725 0C18.25 0 0 18.25 0 40.725C0 63.2 18.25 81.45 40.725 81.45C63.2 81.45 81.45 63.2 81.45 40.725C81.45 18.25 63.2 0 40.725 0ZM59.0075 54.6025L37.23 61.675C36.675 61.8475 36.12 61.93 35.565 61.93C34.395 61.93 33.225 61.4225 32.4 60.5975L25.3275 53.525C24.5025 52.7 23.995 51.53 23.995 50.36C23.995 49.805 24.0775 49.25 24.25 48.695L31.3225 26.9175C32.4 23.5775 35.74 21.475 39.08 22.5525C42.42 23.63 44.5225 26.97 43.445 30.31L38.1575 46.8L51.675 42.42C54.015 41.675 56.5225 43.2825 57.2675 45.6225C58.0125 47.9625 56.405 50.47 54.065 51.215L59.0075 54.6025Z" fill="white"/>
                </svg>
                <h2 class="text-black mb-2">#1,234</h2>
                <p class="mb-0 fs-14">Total Classes</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 m-t35">
        <div class="card card-coin">
            <div class="card-body text-center">
                <svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="40" fill="#FFA500"/>
                    <path d="M40.725 0C18.25 0 0 18.25 0 40.725C0 63.2 18.25 81.45 40.725 81.45C63.2 81.45 81.45 63.2 81.45 40.725C81.45 18.25 63.2 0 40.725 0ZM59.0075 54.6025L37.23 61.675C36.675 61.8475 36.12 61.93 35.565 61.93C34.395 61.93 33.225 61.4225 32.4 60.5975L25.3275 53.525C24.5025 52.7 23.995 51.53 23.995 50.36C23.995 49.805 24.0775 49.25 24.25 48.695L31.3225 26.9175C32.4 23.5775 35.74 21.475 39.08 22.5525C42.42 23.63 44.5225 26.97 43.445 30.31L38.1575 46.8L51.675 42.42C54.015 41.675 56.5225 43.2825 57.2675 45.6225C58.0125 47.9625 56.405 50.47 54.065 51.215L59.0075 54.6025Z" fill="white"/>
                </svg>
                <h2 class="text-black mb-2">#1,234</h2>
                <p class="mb-0 fs-14">Total Revenue</p>
            </div>
        </div>
    </div>
</div>

@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Welcome to School Management Dashboard</h4>
            </div>
            <div class="card-body">
                <p>You are successfully logged in to the school management system. This dashboard provides you with an overview of your school's key metrics and activities.</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection