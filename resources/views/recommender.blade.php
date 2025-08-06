@extends('layouts.app')

@section('title', 'Recommender - Agrikalcer App')
    
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekomendasi</h1>
    </div>   

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-black">Crop Recommender</h6>
        </div>
        <div class="m-5">
        <h4 class="h4">Coba Crop Recommender dengan input manual </h4>

        <form action="{{ route('predict') }}" method="POST" class="mx-5">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan N</label>
              <input  name="n" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan p</label>
              <input  name="p" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan K</label>
              <input  name="k" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan Temp</label>
              <input  name="temp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan Humidity</label>
              <input  name="humidity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masukkan pH</label>
              <input  name="ph" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        @if($prediction !== null)
            <h4 class="h4 mt-5">Hasil Prediksi: {{ $prediction }}</h4>
        @endif
    </div>
    </div>
@endsection