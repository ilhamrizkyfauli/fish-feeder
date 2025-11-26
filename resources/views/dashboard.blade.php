@extends('layouts.app')

@section('content')
    <div class="alert alert-info">
        Welcome back, <strong>{{ auth()->user()->name }}</strong> 👋
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Total Feeding Schedule</h5>
                <h2>0</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Next Feeding</h5>
                <h2>-</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h5>Manual Control</h5>
                <button class="btn btn-success w-100"><i class="bi bi-play-circle"></i> Feed Now</button>
            </div>
        </div>
    </div>
@endsection
