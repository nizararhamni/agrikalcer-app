@extends('layouts.app')

@section('title', 'Photovoltaic - Agrikalcer App')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Photovoltaic</h1>
        <div class="d-flex align-items-center">
            <label for="dateRange" class="mr-2 text-sm font-weight-bold text-gray-600">Select Date:</label>
            <input type="date" id="dateRange" class="form-control form-control-sm" style="width: 150px;" value="{{ date('Y-m-d') }}">
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Energy Flow</h6>
                    <div class="dropdown no-arrow">
                        <select class="form-control form-control-sm" id="energyFlowSelect" style="width: 150px;">
                            <option value="pv_voltage">PV Voltage</option>
                            <option value="pv_current">PV Current</option>
                            <option value="pv_power">PV Power</option>
                            <option value="battery_voltage">Battery Voltage</option>
                            <option value="battery_current">Battery Current</option>
                            <option value="battery_power">Battery Power</option>
                            <option value="load_voltage">Load Voltage</option>
                            <option value="load_current">Load Current</option>
                            <option value="load_power">Load Power</option>
                        </select>
                    </div>
                </div>
                <!-- Card Body -->
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
                        <p class="text-sm font-weight-bold mb-3">Energy Flow: <span id="selectedEnergy" class="text-gray-800">PV Voltage</span></p>
                    </div>
                    
                    <h6 class="font-weight-bold text-primary mb-3">Data Summary</h6>
                    
                    <div class="data-summary" style="max-height: 228px; overflow-y: auto;">
                        <div class="text-sm">
                            <p class="mb-2">00:00: <span class="font-weight-bold">45.2</span></p>
                            <p class="mb-2">01:00: <span class="font-weight-bold">47.8</span></p>
                            <p class="mb-2">02:00: <span class="font-weight-bold">52.1</span></p>
                            <p class="mb-2">03:00: <span class="font-weight-bold">49.5</span></p>
                            <p class="mb-2">04:00: <span class="font-weight-bold">48.7</span></p>
                            <p class="mb-2">05:00: <span class="font-weight-bold">58.3</span></p>
                            <p class="mb-2">06:00: <span class="font-weight-bold">61.3</span></p>
                            <p class="mb-2">07:00: <span class="font-weight-bold">59.1</span></p>
                            <p class="mb-2">08:00: <span class="font-weight-bold">55.8</span></p>
                            <p class="mb-2">09:00: <span class="font-weight-bold">62.7</span></p>
                            <p class="mb-2">10:00: <span class="font-weight-bold">67.4</span></p>
                            <p class="mb-2">11:00: <span class="font-weight-bold">71.2</span></p>
                            <p class="mb-2">12:00: <span class="font-weight-bold">73.2</span></p>
                            <p class="mb-2">13:00: <span class="font-weight-bold">76.8</span></p>
                            <p class="mb-2">14:00: <span class="font-weight-bold">78.9</span></p>
                            <p class="mb-2">15:00: <span class="font-weight-bold">82.4</span></p>
                            <p class="mb-2">16:00: <span class="font-weight-bold">85.1</span></p>
                            <p class="mb-2">17:00: <span class="font-weight-bold">83.7</span></p>
                            <p class="mb-2">18:00: <span class="font-weight-bold">82.6</span></p>
                            <p class="mb-2">19:00: <span class="font-weight-bold">80.9</span></p>
                            <p class="mb-2">20:00: <span class="font-weight-bold">79.3</span></p>
                            <p class="mb-2">21:00: <span class="font-weight-bold">74.1</span></p>
                            <p class="mb-2">22:00: <span class="font-weight-bold">68.7</span></p>
                            <p class="mb-2">23:00: <span class="font-weight-bold">52.3</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('js/chartpv.js') }}"></script>
    
    <script>
        document.getElementById('dateRange').addEventListener('change', function() {
            document.getElementById('selectedDate').textContent = this.value;
        });
        
        document.getElementById('energyFlowSelect').addEventListener('change', function() {
            const sensorMap = {
                'pv_voltage': 'PV Voltage',
                'pv_current': 'PV Current',
                'pv_power': 'PV Power',
                'battery_voltage': 'Battery Voltage',
                'battery_current': 'Battery Current',
                'battery_power': 'Battery Power',
                'load_voltage': 'Load Voltage',
                'load_current': 'Load Current',
                'load_power': 'Load Power'
            };
            
            document.getElementById('selectedEnergy').textContent = sensorMap[this.value];

            const chartYAxisLabel = {
                'pv_voltage': 'Voltage (V)',
                'pv_current': 'Current (A)',
                'pv_power': 'Power (W)',
                'battery_voltage': 'Voltage (V)',
                'battery_current': 'Current (A)',
                'battery_power': 'Power (W)',
                'load_voltage': 'Voltage (V)',
                'load_current': 'Current (A)',
                'load_power': 'Power (W)'
            };
            
            if (typeof myLineChart !== 'undefined') {
                myLineChart.options.scales.yAxes[0].scaleLabel.labelString = chartYAxisLabel[this.value];
                myLineChart.update();
            }
        });
    </script>
@endpush
