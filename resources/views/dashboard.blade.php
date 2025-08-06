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

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sensor Type</h6>
                    <div class="dropdown no-arrow">
                        <select class="form-control form-control-sm" id="sensorTypeSelect" style="width: 150px;">
                            <option value="N">N (Nitrogen)</option>
                            <option value="P">P (Phosphorus)</option>
                            <option value="K">K (Potassium)</option>
                            <option value="Temperature">Temperature</option>
                            <option value="pH">pH</option>
                            <option value="Humidity">Humidity</option>
                        </select>
                    </div>
                </div>
                
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Deskripsi Data</h6>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <p class="text-sm font-weight-bold mb-1">Tanggal: <span id="selectedDate" class="text-gray-800">{{ date('Y-m-d') }}</span></p>
                        <p class="text-sm font-weight-bold mb-3">Sensor: <span id="selectedSensor" class="text-gray-800">N (Nitrogen)</span></p>
                    </div>
                    
                    <h6 class="font-weight-bold text-primary mb-3">Data Summary</h6>
                    
                    <div class="data-summary" style="max-height: 228px; overflow-y: auto;">
                        <div class="text-sm">
                            <p class="mb-2">00:00: <span class="font-weight-bold">45.2</span></p>
                            <p class="mb-2">02:00: <span class="font-weight-bold">52.1</span></p>
                            <p class="mb-2">04:00: <span class="font-weight-bold">48.7</span></p>
                            <p class="mb-2">06:00: <span class="font-weight-bold">61.3</span></p>
                            <p class="mb-2">08:00: <span class="font-weight-bold">55.8</span></p>
                            <p class="mb-2">10:00: <span class="font-weight-bold">67.4</span></p>
                            <p class="mb-2">12:00: <span class="font-weight-bold">73.2</span></p>
                            <p class="mb-2">14:00: <span class="font-weight-bold">78.9</span></p>
                            <p class="mb-2">16:00: <span class="font-weight-bold">85.1</span></p>
                            <p class="mb-2">18:00: <span class="font-weight-bold">82.6</span></p>
                            <p class="mb-2">20:00: <span class="font-weight-bold">79.3</span></p>
                            <p class="mb-2">22:00: <span class="font-weight-bold">68.7</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/chartdb.js') }}"></script>
    
    <script>
        document.getElementById('dateRange').addEventListener('change', function() {
            document.getElementById('selectedDate').textContent = this.value;
        });
        
        document.getElementById('sensorTypeSelect').addEventListener('change', function() {
            const sensorMap = {
                'N': 'N (Nitrogen)',
                'P': 'P (Phosphorus)', 
                'K': 'K (Potassium)',
                'Temperature': 'Temperature',
                'pH': 'pH',
                'Humidity': 'Humidity'
            };
            
            document.getElementById('selectedSensor').textContent = sensorMap[this.value];
            
            const chartYAxisLabel = {
                'N': 'N Value (ppm)',
                'P': 'P Value (ppm)',
                'K': 'K Value (ppm)',
                'Temperature': 'Temperature (°C)',
                'pH': 'pH Level',
                'Humidity': 'Humidity (%)'
            };
            
            if (typeof myLineChart !== 'undefined') {
                myLineChart.options.scales.yAxes[0].scaleLabel.labelString = chartYAxisLabel[this.value];
                myLineChart.update();
            }
        });
    </script>
@endpush