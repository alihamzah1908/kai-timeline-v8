@extends('layouts.master')
@section('content')
<style>
    .highcharts-figure {
        height: 400px;
    }
</style>
<div class="container-fluid">
    <div class="row page-title align-items-center">
        <div class="col-sm-4 col-xl-6">
            <h5 class="mb-1 mt-0">Vendor Monitoring Dashboard</h4>
        </div>
        <div class="col-sm-8 col-xl-6">
            <form class="form-inline float-sm-right mt-3 mt-sm-0">
                <div class="btn-group">
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item notify-item">
                            <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                            <span>Email</span>
                        </a>
                        <a href="#" class="dropdown-item notify-item">
                            <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                            <span>Print</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item notify-item">
                            <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                            <span>Re-Generate</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- content -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Total
                                Vendor</span>
                            <h6 class="mb-0">Rp. 2.189</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Total
                                Vendor Blacklist</span>
                            <h6 class="mb-0">Rp. 1.065</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-product-sold-chart" class="apex-charts"></div>
                            <!-- <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i> 5.05%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MONITORING PENGADAAN 2022 -->
    <div class="row mt-4">
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="vendor-penerbit"></div>
            </figure>
        </div>
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="waktu-blacklist"></div>
            </figure>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
    // PROGRAM & REALIZATION
    var seriesData = [];
    seriesData.push({
        name: "Program",
        data: [{
            y: 19,
            color: 'red'
        }, {
            y: 21,
            color: 'red'
        }],
        url: "{{ route('vendor.blacklist') }}",
        color: 'red'
    });
    seriesData.push({
        name: "Realization",
        data: [{
            y: 16,
            color: 'orange'
        }, {
            y: 18,
            color: 'orange'
        }],
        url: "{{ route('vendor.blacklist') }}",
        color: 'orange'
    });

    // MONITORING PENGADAAN BAR
    Highcharts.chart('vendor-penerbit', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Waktu Blacklist Vendor'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Proses Pengadaan Barang dan Jasa', 'Pelaksanaan Kontrak', 'Masa Pemeliharaan'],
            title: {
                text: 'PBJ Sarana'
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' total'
        },
        plotOptions: {
            series: {
                borderRadius: 10
            },
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF',
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            data: [{
                y: 18,
                color: "yellow",
            }, {
                y: 50,
                color: "red",
            }, {
                y: 18,
                color: "orange",
            }]
        }]
    });

    // MONITORING PENGADAAN PIE
    Highcharts.chart('waktu-blacklist', {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Penerbit Blacklist dan Suspend'
        },
        subtitle: {
            text: ''
        },

        accessibility: {
            announceNewData: {
                enabled: true
            },
            point: {
                valueSuffix: '%'
            }
        },

        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.1f}%'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },

        series: [{
            name: "Browsers",
            colorByPoint: true,
            data: [{
                    name: "KAI Persero",
                    y: 62.74,
                    color: 'blue',
                    drilldown: "PBJ Sarana"
                },
                {
                    name: "KAI Komuter",
                    y: 10.57,
                    color: 'orange',
                    drilldown: "PBJ Non Sarana"
                },
                {
                    name: "KAI Bandara",
                    y: 10.57,
                    color: 'orange',
                    drilldown: "PBJ Non Sarana"
                },
                {
                    name: "KAI Logistik",
                    y: 10.57,
                    color: 'yellow',
                    drilldown: "PBJ Non Sarana"
                }
            ]
        }],
    });
</script>
@endpush