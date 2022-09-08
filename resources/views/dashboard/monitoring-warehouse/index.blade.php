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
            <h5 class="mb-1 mt-0">Warehouse Monitoring Dashboard</h4>
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
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            @php
                            $bogor = DB::select("SELECT count(*) as total FROM warehouse_part WHERE sloc='C008'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Bogor</span>
                            <h6 class="mb-0">{{ $bogor[0]->total }}</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            @php
                            $juanda = DB::select("SELECT count(*) as total FROM warehouse_part WHERE sloc='C012'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Juanda</span>
                            <h6 class="mb-0">{{ $juanda[0]->total }}</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-product-sold-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            @php
                            $duri = DB::select("SELECT count(*) as total FROM warehouse_part WHERE sloc='C006'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Bukit Duri</span>
                            <h6 class="mb-0">{{ $duri[0]->total }}</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            @php
                            $depok = DB::select("SELECT count(*) as total FROM warehouse_part WHERE sloc='C007'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Depok</span>
                            <h6 class="mb-0">{{ $depok[0]->total }}</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            @php
                            $manggarai = DB::select("SELECT count(*) as total FROM warehouse_part WHERE sloc='C009'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Manggarai</span>
                            <h6 class="mb-0">{{ $manggarai[0]->total }}</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            @php
                            $main = DB::select("SELECT count(*) as total FROM warehouse_part WHERE sloc='C013'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Main</span>
                            <h6 class="mb-0">{{ $main[0]->total }}</h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-revenue-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 10.21%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <!-- <h4 class="header-title mt-0 mb-1">List Spare Part</h4> -->
        </div>
        <div class="col-md-3 mt-2 d-flex justify-content-end">
            <label>Warehouse : </label>
        </div>
        <div class="col-md-3 d-flex justify-content-end">
            <select name="code_loc" class="form-control warehouse" data-plugin="customselect">
                <option value="">Pilih Warehouse</option>
                <option value="C008" {{ request()->code_loc == 'C008' ? ' selected' : '' }}>Bogor</option>
                <option value="C006" {{ request()->code_loc == 'C006' ? ' selected' : '' }}>Bukit Duri</option>
                <option value="C007" {{ request()->code_loc == 'C007' ? ' selected' : '' }}>Depok</option>
                <option value="C012" {{ request()->code_loc == 'C012' ? ' selected' : '' }}>Juanda</option>
                <option value="C009" {{ request()->code_loc == 'C009' ? ' selected' : '' }}>Manggarai</option>
                <option value="C013" {{ request()->code_loc == 'C009' ? ' selected' : '' }}>Main</option>
            </select>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12">
            <figure class="highcharts-figure">
                <div id="warehouse-part"></div>
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
    // PROSES PENGADAAN
    $.ajax({
        url: "{{ route('warehouse.part') }}",
        dataType: "json",
        method: "get",
    }).done(function(response) {
        console.log(response)
        Highcharts.chart('warehouse-part', {
            chart: {
                type: 'column'
            },
            title: {
                align: 'center',
                text: 'Closing Value Spareparts'
            },
            subtitle: {
                align: 'left',
                text: ''
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Closing Value Spareparts'
                }

            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y}'
                    }
                }
            },

            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
            },

            series: [{
                name: "",
                colorByPoint: true,
                data: response
            }],
        });
    })
    $('body').on('change', '.warehouse', function() {
        $.ajax({
            url: "{{ route('warehouse.part') }}",
            dataType: "json",
            method: "get",
            data: {
                'warehouse': $(this).val()
            }
        }).done(function(response) {
            Highcharts.chart('warehouse-part', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'center',
                    text: 'Closing Value Spareparts'
                },
                subtitle: {
                    align: 'left',
                    text: ''
                },
                accessibility: {
                    announceNewData: {
                        enabled: true
                    }
                },
                xAxis: {
                    type: 'category'
                },
                yAxis: {
                    title: {
                        text: 'Closing Value Spareparts'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        dataLabels: {
                            enabled: true,
                            format: '{point.y}'
                        }
                    }
                },

                tooltip: {
                    headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                    pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
                },

                series: [{
                    name: "",
                    colorByPoint: true,
                    data: response
                }],
            });
        })
    })
</script>
@endpush