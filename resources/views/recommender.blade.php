@extends('layouts.app')

@section('title', 'Recommender - Agrikalcer App')
    
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Rekomendasi</h1>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Crop</th>
                    <th>Details</th>
                </tr>
            </thead>
        </table>
    </div>

    <script>
        function showDetails(data) {
            alert(JSON.stringify(data, null, 2));
        }
    </script>    

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Crop Recommender</h6>
        </div>
        <div class="d-flex justify-content-around py-3">
            <button class="btn btn-sm btn-primary shadow-sm mx-3" data-toggle="modal" data-target="#cropModal">
                <i class="fas fa-leaf fa-sm text-white-50"></i> Crop Recommender
            </button>
        </div>
    </div>

    <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cropModalLabel">Crop Recommender</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="cropForm" method="POST" action="{{ route('predict') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nitrogen" class="form-label">Amount of Nitrogen in Soil</label>
                            <input type="text" name="N" class="form-control input-placeholder" id="nitrogen"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="phosphorous" class="form-label">Amount of Phosphorous in Soil</label>
                            <input type="text" name="P" class="form-control input-placeholder" id="phosphorous"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="potassium" class="form-label">Amount of Potassium in Soil</label>
                            <input type="text" name="K" class="form-control input-placeholder" id="potassium"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="temperature" class="form-label">Temperature (in Celsius)</label>
                            <input type="text" name="Temperature" class="form-control input-placeholder"
                                id="temperature" required>
                        </div>
                        <div class="form-group">
                            <label for="humidity" class="form-label">Humidity (in %)</label>
                            <input type="text" name="Humidity" class="form-control input-placeholder" id="humidity"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="phValue" class="form-label">pH value of Soil</label>
                            <input type="text" name="ph" class="form-control input-placeholder" id="phValue"
                                required>
                        </div>
                        <button id="predictBtn" class="btn-predict">Predict Crop</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push()
    
@endpush