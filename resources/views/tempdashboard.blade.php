@extends('layouts.app')

@section('title', 'Dashboard - Agrikalcer App')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <form action="{{ route('pv-daily') }}" method="post">
        @csrf
        @method('POST')
        <label for="tanggal">Masukkan Tanggal (format: yyyy-mm-dd)</label>
        <input type="datetime" name="tanggal" id="tanggal" class="mb-5">
        <button type="submit">Lihat Data</button>
      </form>
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
