@extends('dashboard.layout')

@section('content')

    <div class="row mt-5">
        <div class="col-md-12">
            <h2>Show Post</h2>
            <a href="{{ route('dashboard.index') }}" class="btn btn-primary my-3">Back</a>
        </div>
    </div>

    <div class="row">
        <div class="card p-3">
            <div class="card-title">
                <strong>Timestamp:</strong>
                {{ $dashboard->updated_at }}
            </div>
            <div class="card-text">
                <strong>Device ID:</strong>
                {{ $dashboard->device_id }}
            </div>
            <div class="card-text">
                <strong>Humid:</strong>
                {{ $dashboard->humid }}
            </div>
            <div class="card-text">
                <strong>Temp:</strong>
                {{ $dashboard->temp }}
            </div>
            <div class="card-text">
                <strong>Port 1:</strong>
                {{ $dashboard->port_1 }}
            </div>
            <div class="card-text">
                <strong>Port 2:</strong>
                {{ $dashboard->port_2 }}
            </div>
            <div class="card-text">
                <strong>Port 3:</strong>
                {{ $dashboard->port_3 }}
            </div>
            <div class="card-text">
                <strong>Port 4:</strong>
                {{ $dashboard->port_4 }}
            </div>
            <div class="card-text">
                <strong>Port 5:</strong>
                {{ $dashboard->port_5 }}
            </div>
            <div class="card-text">
                <strong>Port 6:</strong>
                {{ $dashboard->port_6 }}
            </div>
            <div class="card-text">
                <strong>Port 7:</strong>
                {{ $dashboard->port_7 }}
            </div>
            <div class="card-text">
                <strong>Port 8:</strong>
                {{ $dashboard->port_8 }}
            </div>
        </div>
    </div>

@endsection