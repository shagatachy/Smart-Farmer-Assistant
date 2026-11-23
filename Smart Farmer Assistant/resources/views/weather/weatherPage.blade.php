@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header bg-success text-white">
            <div class="d-flex justify-content-between">
                <h3>30-Day Weather History</h3>
                <form action="{{ route('weather.fetch') }}" method="POST">
                    @csrf
                    <button class="btn btn-light btn-sm">
                        <i class="fas fa-sync"></i> Update Data
                    </button>
                </form>
            </div>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Max Temp (°C)</th>
                            <th>Min Temp (°C)</th>
                            <th>Rainfall (mm)</th>
                            <th>Conditions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($weatherData as $weather)
                        <tr>
                            <td>{{ $weather->date->format('D, M j') }}</td>
                            <td>{{ $weather->temperature_max }}</td>
                            <td>{{ $weather->temperature_min }}</td>
                            <td>{{ $weather->rainfall }}</td>
                            <td>{{ $weather->conditions }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection