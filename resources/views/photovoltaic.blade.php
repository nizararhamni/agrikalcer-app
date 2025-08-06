@extends('layouts.app')

@section('title', 'Photovoltaic - Agrikalcer App')

@section('content')
    <div class="d-sm-flex mb-4 align-items-center justify-center">
        <h1 class="h3 mb-0 text-gray-800">Photovoltaic</h1>
        <p class="ml-5">Tanggal Hari ini: {{ $dateToday }}</p>
    </div>
    <h4 class="h4">Data Hari Ini</h4>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Voltage</th>
            <th scope="col">Current</th>
            <th scope="col">Power</th>
            <th scope="col">Battery Voltage</th>
            <th scope="col">Battery Current</th>
            <th scope="col">Battery Power</th>
            <th scope="col">Load Voltage</th>
            <th scope="col">Load Current</th>
            <th scope="col">Load Power</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          @foreach ( $dataPv as $data )
            <td>{{ $data["voltage"] }}</td>
            <td>{{ $data["current"] }}</td>
            <td>{{ $data["power"] }}</td>
            <td>{{ $data["battery_voltage"] }}</td>
            <td>{{ $data["battery_current"] }}</td>
            <td>{{ $data["battery_power"] }}</td>
            <td>{{ $data["load_voltage"] }}</td>
            <td>{{ $data["load_current"] }}</td>
            <td>{{ $data["load_power"] }}</td>
            <td>{{ $data["date"] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
