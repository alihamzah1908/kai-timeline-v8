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
                            $bogor = DB::select("select SUM(value_unrestricted) as value, count(*) total_part
                            from warehouse_part where unrestricted != '0'
                            and value_unrestricted != '0' and sloc = 'C008'
                            ");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Bogor
                            </span>
                            <h6 class="mb-0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>Value Unrestricted</span>
                                        <h6>Rp. {{ number_format($bogor[0]->value,2,',','.') }}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Total Part</span>
                                        <h6>{{ $bogor[0]->total_part }}</h6>
                                    </div>
                                </div>
                            </h6>
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
                            $juanda = DB::select("select SUM(value_unrestricted) as value, count(*) total_part
                            from warehouse_part where unrestricted != '0'
                            and value_unrestricted != '0' and sloc = 'C012'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Juanda
                            </span>
                            <h6 class="mb-0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>Value Unrestricted</span>
                                        <h6>Rp. {{ number_format($juanda[0]->value,2,',','.') }}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Total Part</span>
                                        <h6>{{ $juanda[0]->total_part }}</h6>
                                    </div>
                                </div>
                            </h6>
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
                            $duri = DB::select("select SUM(value_unrestricted) as value, count(*) total_part
                            from warehouse_part where unrestricted != '0'
                            and value_unrestricted != '0' and sloc = 'C006'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Bukit Duri
                            </span>
                            <h6 class="mb-0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>Value Unrestricted</span>
                                        <h6>Rp. {{ number_format($duri[0]->value,2,',','.') }}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Total Part</span>
                                        <h6>{{ $duri[0]->total_part }}</h6>
                                    </div>
                                </div>
                            </h6>
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
                            $depok = DB::select("select SUM(value_unrestricted) as value, count(*) total_part
                            from warehouse_part where unrestricted != '0'
                            and value_unrestricted != '0' and sloc = 'C007'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Depok
                            </span>
                            <h6 class="mb-0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>Value Unrestricted</span>
                                        <h6>Rp. {{ number_format($depok[0]->value,2,',','.') }}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Total Part</span>
                                        <h6>{{ $depok[0]->total_part }}</h6>
                                    </div>
                                </div>
                            </h6>
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
                            $manggarai = DB::select("select SUM(value_unrestricted) as value, count(*) total_part
                            from warehouse_part where unrestricted != '0'
                            and value_unrestricted != '0' and sloc = 'C009'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Manggarai
                            </span>
                            <h6 class="mb-0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>Value Unrestricted</span>
                                        <h6>Rp. {{ number_format($manggarai[0]->value,2,',','.') }}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Total Part</span>
                                        <h6>{{ $manggarai[0]->total_part }}</h6>
                                    </div>
                                </div>
                            </h6>
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
                            $main = DB::select("select SUM(value_unrestricted) as value, count(*) total_part
                            from warehouse_part where unrestricted != '0'
                            and value_unrestricted != '0' and sloc = 'C013'");
                            @endphp
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Warehouse
                                Main
                            </span>
                            <h6 class="mb-0">
                                <div class="row">
                                    <div class="col-md-7">
                                        <span>Value Unrestricted</span>
                                        <h6>Rp. {{ number_format($main[0]->value,2,',','.') }}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <span>Total Part</span>
                                        <h6>{{ $main[0]->total_part }}</h6>
                                    </div>
                                </div>
                            </h6>
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
    <div class="row mt-4">
        <div class="col-xl-12">
            <figure class="highcharts-figure">
                <div id="waste-estimate"></div>
            </figure>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="harga-kontrak"></div>
            </figure>
        </div>
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="total-penjualan"></div>
            </figure>
        </div>
    </div>
    <!-- <div class="row mt-4">
        <div class="col-xl-12">
            <figure class="highcharts-figure">
                <div id="program-realisasi"></div>
            </figure>
        </div>
    </div> -->
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

    // GET WASTE ESTIMATE
    $.ajax({
        url: "{{ route('warehouse.waste.estimate') }}",
        dataType: "json",
        method: "get",
    }).done(function(response) {
        Highcharts.chart('waste-estimate', {
            title: {
                text: 'Total Estimasi dan Realisasi QTY',
                align: 'center'
            },
            xAxis: {
                categories: ['Gram Bubutan', 'Potongan Logam', 'Limbah Pelumas']
            },
            yAxis: {
                title: {
                    text: 'Value'
                }
            },
            labels: {},
            series: [{
                type: 'column',
                color: 'red',
                name: 'Estimasi qty',
                data: [parseInt(response.gram_bubutan.estimasi_qty[0].total), parseInt(response.potongan_logam.estimasi_qty[0].total), parseInt(response.limbah_pelumas.estimasi_qty[0].total)]
            }, {
                type: 'column',
                color: 'orange',
                name: 'Realisasi Qty',
                data: [parseInt(response.gram_bubutan.realisasi_qty[0].total), parseInt(response.potongan_logam.realisasi_qty[0].total), parseInt(response.limbah_pelumas.realisasi_qty[0].total)]
            }, {
                type: 'spline',
                name: 'Progres Presentasi Qty',
                data: [Math.round(response.gram_bubutan.progres_qty[0].total), Math.round(response.potongan_logam.progres_qty[0].total), Math.round(response.limbah_pelumas.progres_qty[0].total)],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }]
        });
    })

    // HARGA KONTRAK
    $.ajax({
        url: "{{ route('warehouse.waste.kontrak') }}",
        dataType: "json",
        method: "get",
    }).done(function(response) {
        Highcharts.chart('harga-kontrak', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Harga Kontrak (Rp)'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Gram Bubutan',
                    'Potongan Logam',
                    'Limbah Pelumas',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ' '
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} value</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                series: {
                    borderRadius: 3,
                },
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Harga Kontrak',
                color: '#4d79ff',
                data: [{
                    y: parseInt(response.gram_bubutan.kontrak[0].total),
                    color: '#4d79ff'
                }, {
                    y: parseInt(response.potongan_logam.kontrak[0].total),
                    color: '#4d79ff'
                }, {
                    y: parseInt(response.limbah_pelumas.kontrak[0].total),
                    color: '#4d79ff'
                }],

            }]
        });
    })

    // TOTAL PENJUALAN
    $.ajax({
        url: "{{ route('warehouse.waste.penjualan') }}",
        dataType: "json",
        method: "get",
    }).done(function(response) {
        Highcharts.chart('total-penjualan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Total Penjualan Barang Limbah'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Gram Bubutan',
                    'Potongan Logam',
                    'Limbah Pelumas',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} value</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                series: {
                    borderRadius: 3,
                },
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Total Penjualan',
                color: '#4d79ff',
                data: [{
                    y: parseInt(response.gram_bubutan.penjualan[0].total),
                    color: '#4d79ff'
                }, {
                    y: parseInt(response.potongan_logam.penjualan[0].total),
                    color: '#4d79ff'
                }, {
                    y: parseInt(response.limbah_pelumas.penjualan[0].total),
                    color: '#4d79ff'
                }],

            }]
        });
    })

    // TOTAL PENJUALAN
    $.ajax({
        url: "{{ route('warehouse.waste.program') }}",
        dataType: "json",
        method: "get",
    }).done(function(response) {
        Highcharts.chart('program-realisasi', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Program Realisasi Gram Sisa Bubutan dan Potongan Logam Bekas'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Gram Bubutan',
                    'Potongan Logam',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} value</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                series: {
                    borderRadius: 3,
                },
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Estimasi User',
                color: 'red',
                data: [{
                    y: parseInt(response.gram_bubutan.estimasi_qty[0].total),
                    color: 'red'
                }, {
                    y: parseInt(response.potongan_logam.estimasi_qty[0].total),
                    color: 'red'
                }],

            },{
                name: 'Realisasi Qty',
                color: 'orange',
                data: [{
                    y: parseInt(response.gram_bubutan.realisasi_qty[0].total),
                    color: 'orange'
                }, {
                    y: parseInt(response.potongan_logam.realisasi_qty[0].total),
                    color: 'orange'
                }],

            },{
                name: 'Sisa Qty',
                color: 'silver',
                data: [{
                    y: parseInt(response.gram_bubutan.sisa_qty[0].total),
                    color: 'silver'
                }, {
                    y: parseInt(response.potongan_logam.sisa_qty[0].total),
                    color: 'silver'
                }],

            }]
        });
    })
</script>
@endpush