@extends('layouts.app')

@section('title', 'Dashboard - Agrikalcer App')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="d-flex align-items-center">
            <label for="dateRange" class="mr-2 text-sm font-weight-bold text-gray-600">Select Date:</label>
            <input type="date" id="dateRange" class="form-control form-control-sm" style="width: 150px;" value="{{ date('Y-m-d') }}">
        </div>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">N (Nitrogen)</th>
            <th scope="col">P (Phosphorus)</th>
            <th scope="col">K (Potassium)</th>
            <th scope="col">Temperature</th>
            <th scope="col">pH</th>
            <th scope="col">Humidity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          @foreach ( $dataDaily as $data )
            <td>{{ $data["n"] }}</td>
            <td>{{ $data["p"] }}</td>
            <td>{{ $data["k"] }}</td>
            <td>{{ $data["temp"] }}</td>
            <td>{{ $data["humidity"] }}</td>
            <td>{{ $data["ph"] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection

@push('scripts')
    <script>
        document.getElementById('dateRange').addEventListener('change', function() {
            document.getElementById('selectedDate').textContent = this.value;
        });
    </script>
@endpush
