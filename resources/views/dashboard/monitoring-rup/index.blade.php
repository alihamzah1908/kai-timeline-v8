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
            <h5 class="mb-1 mt-0">Dashboard Monitoring RUP</h4>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-2">
            <select class="form-control type-metode" name="type_metode">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <!-- <option value="3">Pelelangan Terbuka</option> -->
            </select>
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
        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="align-self-center">
                            <img src="{{ asset('assets/images/graph-timeline.png') }}" class="mr-2">
                        </div>
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Total
                                Timeline</span>
                            <h6 class="mb-0 total_timeline"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="align-self-center">
                            <img src="{{ asset('assets/images/graph-sp3.png') }}" class="mr-2">
                        </div>
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Total
                                SP3</span>
                            <h6 class="mb-0 total_sp3"></h6>
                        </div>
                        <!-- <div class="align-self-center">
                            <div id="today-product-sold-chart" class="apex-charts"></div> -->
                            <!-- <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i> 5.05%</span> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Project
                                SP3 No Timeline</span>
                            <h6 class="mb-0 no_timeline"></h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-new-customer-chart" class="apex-charts"></div>
                            <!-- <span class="text-success font-weight-bold font-size-13"><i class='uil uil-arrow-up'></i> 25.16%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="card">
                <div class="card-body p-0">
                    <div class="media p-3">
                        <div class="media-body">
                            <span class="text-muted text-uppercase font-size-9 font-weight-bold">Project
                                Timeline Overdue</span>
                            <h6 class="mb-0 overdue"></h6>
                        </div>
                        <div class="align-self-center">
                            <div id="today-new-visitors-chart" class="apex-charts"></div>
                            <!-- <span class="text-danger font-weight-bold font-size-13"><i class='uil uil-arrow-down'></i> 5.05%</span> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- stats + charts -->
    <div class="row">
        <div class="col-xl-12">
            <figure class="highcharts-figure">
                <div id="container"></div>
            </figure>
        </div>
    </div>

    <!-- PROGRAM & REALIZATION PBJ OPEX -->
    <div class="row mt-4">
        <div class="col-xl-12">
            <figure class="highcharts-figure">
                <div id="pbj-opex"></div>
            </figure>
        </div>
        <!-- <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="pbj-capex"></div>
            </figure>
        </div> -->
    </div>

    <!-- MONITORING PENGADAAN 2022 -->
    <div class="row mt-4">
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="pengadaan"></div>
            </figure>
        </div>
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="pengadaan-pie"></div>
            </figure>
        </div>
    </div>

    <!-- PROSES PENGADAAN 2022 -->
    <div class="row mt-4">
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="proses-pengadaan-sarana"></div>
            </figure>
        </div>
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="proses-pengadaan-non-sarana"></div>
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

</script>
<script>
    $(document).ready(function() {
        // CARD DASHBOARD
        $.ajax({
            url: '{{ route("get.dashboard.card") }}',
            dataType: 'json',
            method: 'get',
        }).done(function(response) {
            $('.total_timeline').html(response.total_timeline)
            $('.total_sp3').html(response.total_sp3)
            $('.no_timeline').html(response.total_sp3_no_timeline)
            $('.overdue').html(response.total_overdue)
        })

        // BY STATUS TIMELINE
        $.ajax({
            url: '{{ route("program.rup") }}',
            dataType: 'json',
            method: 'get',
        }).done(function(response) {
            var seriesData = [];
            seriesData.push({
                name: "Submitted Proposal",
                data: [{
                    y: response.st_timeline,
                    color: 'orange'
                }, {
                    y: response.st_sp3,
                    color: 'orange'
                }],
                url: "{{ route('task.approval') }}?status=PROSES_ST",
                color: 'orange',
                pointWidth: 30,
                shadow: true,
                borderRadius: 10
            });
            seriesData.push({
                name: "Approval Proposal",
                data: [{
                    y: response.at_timeline,
                    color: '#6699ff'
                }, {
                    y: response.at_sp3,
                    color: '#6699ff'
                }],
                url: "{{ route('task.approval') }}?status=PROSES_AT",
                color: '#6699ff',
                pointWidth: 30,
                shadow: true,
                borderRadius: 10
            });
            seriesData.push({
                name: "Rejected Proposal",
                data: [{
                    y: response.ct_timeline,
                    color: '#e60000'
                }, {
                    y: response.ct_sp3,
                    color: '#e60000'
                }],
                url: "{{ route('task.approval') }}?status=PROSES_CT",
                color: '#e60000',
                pointWidth: 30,
                shadow: true,
                borderRadius: 10
            });
            Highcharts.chart('container', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Timeline & SP 3 by status'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: ['Timeline Status', 'SP3 Status'],
                    title: {
                        text: null
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
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    },
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
                plotOptions: {
                    series: {
                        borderRadius: 8,
                        cursor: 'pointer',
                        point: {
                            events: {
                                click: function() {
                                    var point = this;
                                    if (point.url) {
                                        window.open(point.url);
                                    } else if (point.series.userOptions.url) {
                                        window.open(point.series.userOptions.url);
                                    }
                                }
                            }
                        }

                    },
                    column: {
                        pointPadding: 1,
                        borderWidth: 0
                    }

                },
                series: seriesData
            });
        })

        // GRAFIK BY DEPARTMENT
        $.ajax({
            url: '{{ route("get.department") }}',
            dataType: 'json',
            method: 'get',
        }).done(function(response) {
            Highcharts.chart('pbj-opex', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Timeline by Department'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
                        'CUS',
                        'CFH',
                        'CTI',
                        'CTP',
                        'CTS',
                        'COC',
                        'COH',
                        'COS',
                        'COT',
                        'COLA',
                        'KERETA BANDARA',
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: ' Timeline by Department'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y} total</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    series: {
                        borderRadius: 10,
                        pointWidth: 30,
                        shadow: true,
                        borderRadius: 10
                    },
                    column: {
                        pointPadding: 1,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Timeline',
                    color: 'red',
                    data: [{
                        y: response.cus_timeline,
                        color: 'red',
                    }, {
                        y: response.cfh_timeline,
                        color: 'red',
                    }, {
                        y: response.cti_timeline,
                        color: 'red',
                    }, {
                        y: response.ctp_timeline,
                        color: 'red',
                    }, {
                        y: response.cts_timeline,
                        color: 'red',
                    }, {
                        y: response.coc_timeline,
                        color: 'red',
                    }, {
                        y: response.coh_timeline,
                        color: 'red',
                    }, {
                        y: response.cos_timeline,
                        color: 'red',
                    }, {
                        y: response.cot_timeline,
                        color: 'red',
                    }, {
                        y: response.cola_timeline,
                        color: 'red',
                    }],

                }, {
                    name: 'SP3',
                    color: 'orange',
                    data: [{
                        y: response.cus_sp3,
                        color: 'orange'
                    }, {
                        y: response.cfh_sp3,
                        color: 'orange'
                    }, {
                        y: response.cti_sp3,
                        color: 'orange'
                    }, {
                        y: response.ctp_sp3,
                        color: 'orange'
                    }, {
                        y: response.cts_sp3,
                        color: 'orange'
                    }, {
                        y: response.coc_sp3,
                        color: 'orange'
                    }, {
                        y: response.coh_sp3,
                        color: 'orange'
                    }, {
                        y: response.cos_sp3,
                        color: 'orange'
                    }, {
                        y: response.cot_sp3,
                        color: 'orange'
                    }, {
                        y: response.cola_sp3,
                        color: 'orange'
                    }],
                }]
            });
        })

        // MONITORING PENGADAAN BAR
        $.ajax({
            url: "{{ route('pengadaan.monitoring') }}",
            dataType: "json",
            method: "get"
        }).done(function(response) {
            console.log(response)
            Highcharts.chart('pengadaan', {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Monitoring & Pengadaan 2022'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: ['Proses Pengadaan', 'Selesai Pengadaan'],
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
                        pointWidth: 30,
                        shadow: true,
                        borderRadius: 10
                    },
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
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
                    name: 'Penunjukan Langsung',
                    data: [{
                        y: response.penunjukan_langsung,
                        color: "orange",
                    }, {
                        y: 1,
                        color: "orange",
                    }],
                    color: 'orange'
                }, {
                    name: 'Pemilihan Langsung',
                    data: [{
                        y: response.pemilihan_langsung,
                        color: "#6699ff",
                    }, {
                        y: 50,
                        color: "#6699ff",
                    }],
                    color: '#6699ff'
                }, {
                    name: 'Pelelangan Terbuka',
                    data: [{
                        y: response.pelelangan_terbuka,
                        color: "#e60000",
                    }, {
                        y: 50,
                        color: "#e60000",
                    }],
                    color: '#e60000'
                }]
            });
        })


        // MONITORING PENGADAAN PIE
        Highcharts.chart('pengadaan-pie', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Nilai Kontrak'
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
                name: "Monitoring Sarana",
                colorByPoint: true,
                data: [{
                        name: "PBJ Sarana",
                        y: 62.74,
                        color: 'red',
                        drilldown: "PBJ Sarana"
                    },
                    {
                        name: "PBJ Non Sarana",
                        y: 10.57,
                        color: 'orange',
                        drilldown: "PBJ Non Sarana"
                    }
                ]
            }],
        });

        // PROSES PENGADAAN SARANA
        $.ajax({
            url: '{{ route("pengadaan.sarana") }}',
            dataType: 'json',
            method: 'get',
        }).done(function(response) {
            Highcharts.chart('proses-pengadaan-sarana', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'center',
                    text: 'Monitoring Pengadaan Sarana'
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
                        text: 'Total Monitoring Pengadaan Sarana'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        pointWidth: 30,
                        shadow: true,
                        borderRadius: 10,
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
                    name: "Sarana",
                    colorByPoint: true,
                    data: [{
                            name: "CFH",
                            y: response.cfh,
                            color: '#ff3300',
                            drilldown: "Chrome"
                        },
                        {
                            name: "COC",
                            y: response.coc,
                            color: '#ff3300',
                            drilldown: "Firefox"
                        },
                        {
                            name: "COH",
                            y: response.coh,
                            color: '#ff3300',
                            drilldown: "Internet Explorer"
                        },
                        {
                            name: "COLA",
                            y: response.cola,
                            color: '#ff3300',
                            drilldown: "Safari"
                        },
                        {
                            name: "COS",
                            y: response.cos,
                            color: '#ff3300',
                            drilldown: "Edge"
                        },
                        {
                            name: "CTI",
                            y: response.cti,
                            color: '#ff3300',
                            drilldown: "Opera"
                        },
                        {
                            name: "CTS",
                            y: response.cts,
                            color: '#ff3300',
                            drilldown: null
                        },
                        {
                            name: "CUSG",
                            y: response.cusg,
                            color: '#ff3300',
                            drilldown: null
                        },
                        {
                            name: "COLS",
                            y: response.cols,
                            color: '#ff3300',
                            drilldown: null
                        }
                    ]
                }],
            })
        });

        // PROSES PENGADAAN NON SARANA
        $.ajax({
            url: '{{ route("pengadaan.non.sarana") }}',
            dataType: 'json',
            method: 'get',
        }).done(function(response) {
            Highcharts.chart('proses-pengadaan-non-sarana', {
                chart: {
                    type: 'column'
                },
                title: {
                    align: 'center',
                    text: 'Monitoring Pengadaan Non Sarana'
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
                        text: 'Total Monitoring Pengadaan Sarana'
                    }

                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    series: {
                        borderWidth: 0,
                        pointWidth: 30,
                        shadow: true,
                        borderRadius: 10,
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
                    name: "Sarana",
                    colorByPoint: true,
                    data: [{
                            name: "CFH",
                            y: response.cfh,
                            color: '#ff3300',
                            drilldown: "Chrome"
                        },
                        {
                            name: "COC",
                            y: response.coc,
                            color: '#ff3300',
                            drilldown: "Firefox"
                        },
                        {
                            name: "COH",
                            y: response.coh,
                            color: '#ff3300',
                            drilldown: "Internet Explorer"
                        },
                        {
                            name: "COLA",
                            y: response.cola,
                            color: '#ff3300',
                            drilldown: "Safari"
                        },
                        {
                            name: "COS",
                            y: response.cos,
                            color: '#ff3300',
                            drilldown: "Edge"
                        },
                        {
                            name: "CTI",
                            y: response.cti,
                            color: '#ff3300',
                            drilldown: "Opera"
                        },
                        {
                            name: "CTS",
                            y: response.cts,
                            color: '#ff3300',
                            drilldown: null
                        },
                        {
                            name: "CUSG",
                            y: response.cusg,
                            color: '#ff3300',
                            drilldown: null
                        },
                        {
                            name: "COLS",
                            y: response.cols,
                            color: '#ff3300',
                            drilldown: null
                        }
                    ]
                }],
            })
        });
    })
</script>
@endpush