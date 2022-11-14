@extends('layouts.master')
@section('content')
<style>
    .btn-export {
        background: linear-gradient(183.55deg, #FE432A 1.65%, #FF7D61 21.76%, #F20C0C 63.44%, #AD1703 95.8%);

        /* Stacks/Level 3 */
        box-shadow: 0px 0px 2px rgba(40, 41, 61, 0.04), 0px 4px 8px rgba(96, 97, 112, 0.16);
        border-radius: 30px;

        /* Inside auto layout */
        flex: none;
        order: 1;
        flex-grow: 0;
    }

    .text-vector {
        width: 111.69px;
        /* Headline */
        font-family: 'Trueno';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;

        /* or 133% */

        /* Red/Light 300 */
        color: #FE4128;


        /* Inside auto layout */
        flex: none;
        order: 1;
        flex-grow: 0;
    }

    .vector-1 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8.10306px;
        gap: 8.1px;

        width: 50px;
        height: 50px;

        background: #FF543E;
        box-shadow: 0px 1px 9px rgba(255, 147, 133, 0.85);
        border-radius: 100px;

        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .vector-2 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8.10306px;
        gap: 8.1px;

        width: 50px;
        height: 50px;

        background: #FF9E57;
        box-shadow: 0px 1px 9px rgba(255, 158, 87, 0.85);
        border-radius: 100px;

        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;

    }

    .vector-3 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8.10306px;
        gap: 8.1px;

        width: 50px;
        height: 50px;

        background: #66D364;
        box-shadow: 0px 1px 9px rgba(44, 219, 40, 0.85);
        border-radius: 100px;

        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .vector-4 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8.10306px;
        gap: 8.1px;

        width: 50px;
        height: 50px;

        background: #29B5F1;
        box-shadow: 0px 1px 9px rgba(81, 205, 212, 0.85);
        border-radius: 100px;

        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;
    }

    .vector-5 {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 8.10306px;
        gap: 8.1px;

        width: 50px;
        height: 50px;

        background: #A47FF2;
        box-shadow: 0px 1px 9px rgba(164, 127, 242, 0.85);
        border-radius: 100px;
        /* Inside auto layout */
        flex: none;
        order: 0;
        flex-grow: 0;
    }
</style>
<div class="card">
</div>
<div class="content">
    <div class="container-fluid">
        <img src="{{ asset('assets/images/dash_summary.png') }}" />
        <div class="row page-title align-items-center">
            <div class="col-sm-4 col-xl-6">
                <h2 class="mb-1 mt-0">Dashboard Program Realisasi</h2>
            </div>
            <div class="col-sm-8 col-xl-6">
                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                    <div class="form-group mb-sm-0 mr-2">
                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle btn-export" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class='uil uil-file-alt mr-1'></i>Download
                            <i class="icon"><span data-feather="chevron-down"></span></i>
                        </button>
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

        <!-- OPEX -->
        <div class="row">
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media px-3 py-4 border-bottom">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1 font-size-16">Summary OPEX:</h5>
                                <!-- <h5 class="mt-0 mb-1 font-size-16">Realisasi vs Program</h5> -->
                                <span class="text-muted">Realisasi vs Program</span>
                            </div>
                            <!-- <i data-feather="users" class="align-self-center icon-dual icon-lg"></i> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- stat 1 -->
                        <div class="media px-3 py-4 border-bottom">
                            <div class="vector-1 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            <div class="media-body p-2">
                                @php
                                $cu = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='CU'
                                AND beban_biaya='OPEX'");
                                @endphp
                                <h6 class="mt-0 mb-1 font-size-16">CU</h6>
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $cu[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media px-3 py-4 border-bottom">
                            <!-- stat 2 -->
                            <div class="vector-2 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            <div class="media-body p-2">
                                <h6 class="mt-0 mb-1 font-size-16">CF</h6>
                                @php
                                $cf = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='CF'
                                AND beban_biaya='OPEX'");
                                @endphp
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $cf[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- stat 3 -->
                        <div class="media px-3 py-4 border-bottom">
                            <div class="vector-3 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            <div class="media-body p-2">
                                <h6 class="mt-0 mb-1 font-size-16">CT</h6>
                                @php
                                $ct = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='CT'
                                AND beban_biaya='OPEX'");
                                @endphp
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $ct[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- stat 4 -->
                        <div class="media px-3 py-4 border-bottom">
                            <div class="vector-4 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            @php
                            $co = DB::select("SELECT COUNT(*) as total FROM trx_timeline
                            WHERE directorate_cd='CO' AND beban_biaya='OPEX'");
                            @endphp
                            <div class="media-body p-2">
                                <h6 class="mt-0 mb-1 font-size-16">CO</h6>
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $co[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <!-- stat 5 -->
                    <div class="media px-3 py-4 border-bottom">
                        <div class="vector-5 mr-1">
                            <img src="{{ asset('assets/images/Vector.png') }}">
                        </div>
                        <div class="media-body p-2">
                            @php
                            $ka_bandara = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='KB'
                            AND beban_biaya='OPEX'");
                            @endphp
                            <h6 class="mt-0 mb-1 font-size-16">KA BANDARA</h6>
                            <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $ka_bandara[0]->total }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="container-opex"></div>
            </figure>
        </div>
        <div class="col-xl-6">
            <figure class="highcharts-figure">
                <div id="pbj-opex"></div>
            </figure>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-primary btn-sm float-right btn-export">
                        <i class='uil uil-export ml-1'></i> Export
                    </a>
                    <h5 class="card-title mt-0 mb-0">Detail OPEX</h5>

                    <div class="table-responsive mt-4">
                        <table class="table table-hover table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Directorate</th>
                                    <th>Unit</th>
                                    <th colspan="2">TW1</th>
                                    <th colspan="2">TW2</th>
                                    <th colspan="2">TW3</th>
                                    <th colspan="2">TW4</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>Program</td>
                                    <td>Realisasi</td>
                                    <td>Program</td>
                                    <td>Realisasi</td>
                                    <td>Program</td>
                                    <td>Realisasi</td>
                                    <td>Program</td>
                                    <td>Realisasi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CU</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CUS</td>
                                    <td>8</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>CF</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CFH</td>
                                    <td>3</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>CT</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CTI</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CTP</td>
                                    <td>23</td>
                                    <td>10</td>
                                    <td>3</td>
                                    <td>6</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CTS</td>
                                    <td>4</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>CO</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COC</td>
                                    <td>6</td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COH</td>
                                    <td>28</td>
                                    <td>16</td>
                                    <td>0</td>
                                    <td>3</td>
                                    <td>16</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COS</td>
                                    <td>11</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>10</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COT</td>
                                    <td>2</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COLA</td>
                                    <td>8</td>
                                    <td>7</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>8</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>KA BANDARA</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>KA BANDARA</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th colspan="10"></th>
                                </tr>
                                <tr>
                                    <th colspan="2">Program vs Realisasi OPEX</th>
                                    <th>98</th>
                                    <th>61</th>
                                    <th>6</th>
                                    <th>11</th>
                                    <th>55</th>
                                    <th>4</th>
                                    <th>0</th>
                                    <th>0</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <a href="" class="btn btn-primary btn-sm float-right btn-export">
                        <i class='uil uil-export ml-1'></i> Export
                    </a>
                    <h5 class="card-title mt-0 mb-0">OPEX Diluar Timeline</h5>

                    <div class="table-responsive mt-4">
                        <table class="table table-hover table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>Directorate</th>
                                    <th>Unit</th>
                                    <th>Realisasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CU</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CUP</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CUS</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>CF</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CFH</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>CT</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CTI</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CTP</td>
                                    <td>13</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>CTS</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>CO</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COC</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COH</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COS</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COT</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>COLA</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>KA BANDARA</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>KA BANDARA</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th colspan="10"></th>
                                </tr>
                                <tr>
                                    <th colspan="2">Program vs Realisasi OPEX</th>
                                    <th>44</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CAPEX -->
    <div class="row">
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media px-3 py-4 border-bottom">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1 font-size-16">Summary CAPEX:</h5>
                                <!-- <h5 class="mt-0 mb-1 font-size-16">Realisasi vs Program</h5> -->
                                <span class="text-muted">Realisasi vs Program</span>
                            </div>
                            <!-- <i data-feather="users" class="align-self-center icon-dual icon-lg"></i> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- stat 1 -->
                        <div class="media px-3 py-4 border-bottom">
                            <div class="vector-1 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            <div class="media-body p-2">
                                @php
                                $cu = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='CU'
                                AND beban_biaya='CAPEX'");
                                @endphp
                                
                                <h6 class="mt-0 mb-1 font-size-16">CU</h6>
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $cu[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="media px-3 py-4 border-bottom">
                            <!-- stat 2 -->
                            <div class="vector-2 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            <div class="media-body p-2">
                                <h6 class="mt-0 mb-1 font-size-16">CF</h6>
                                @php
                                $cf = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='CF'
                                AND beban_biaya='CAPEX'");
                                @endphp
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $cf[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- stat 3 -->
                        <div class="media px-3 py-4 border-bottom">
                            <div class="vector-3 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            <div class="media-body p-2">
                                <h6 class="mt-0 mb-1 font-size-16">CT</h6>
                                @php
                                $ct = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='CT'
                                AND beban_biaya='CAPEX'");
                                @endphp
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $ct[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <div class="card-body p-0">
                        <!-- stat 4 -->
                        <div class="media px-3 py-4 border-bottom">
                            <div class="vector-4 mr-1">
                                <img src="{{ asset('assets/images/Vector.png') }}">
                            </div>
                            @php
                            $co = DB::select("SELECT COUNT(*) as total FROM trx_timeline
                            WHERE directorate_cd='CO' AND beban_biaya='CAPEX'");
                            @endphp
                            <div class="media-body p-2">
                                <h6 class="mt-0 mb-1 font-size-16">CO</h6>
                                <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $co[0]->total }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2">
                <div class="card">
                    <!-- stat 5 -->
                    <div class="media px-3 py-4 border-bottom">
                        <div class="vector-5 mr-1">
                            <img src="{{ asset('assets/images/Vector.png') }}">
                        </div>
                        <div class="media-body p-2">
                            @php
                            $ka_bandara = DB::select("SELECT COUNT(*) as total FROM trx_timeline WHERE directorate_cd='KB'
                            AND beban_biaya='CAPEX'");
                            @endphp
                            <h6 class="mt-0 mb-1 font-size-16">KA BANDARA</h6>
                            <h6 class="mt-0 mb-1 font-size-16 text-vector">{{ $ka_bandara[0]->total }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <figure class="highcharts-figure">
            <div id="container-capex"></div>
        </figure>
    </div>
    <div class="col-xl-6">
        <figure class="highcharts-figure">
            <div id="pbj-capex"></div>
        </figure>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-primary btn-sm float-right btn-export">
                    <i class='uil uil-export ml-1'></i> Export
                </a>
                <h5 class="card-title mt-0 mb-0">Detail CAPEX</h5>

                <div class="table-responsive mt-4">
                    <table class="table table-hover table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>Directorate</th>
                                <th>Unit</th>
                                <th colspan="2">TW1</th>
                                <th colspan="2">TW2</th>
                                <th colspan="2">TW3</th>
                                <th colspan="2">TW4</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Program</td>
                                <td>Realisasi</td>
                                <td>Program</td>
                                <td>Realisasi</td>
                                <td>Program</td>
                                <td>Realisasi</td>
                                <td>Program</td>
                                <td>Realisasi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CU</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>CUS</td>
                                <td>8</td>
                                <td>5</td>
                                <td>2</td>
                                <td>0</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>CF</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>CFH</td>
                                <td>3</td>
                                <td>2</td>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>CT</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>CTI</td>
                                <td>5</td>
                                <td>5</td>
                                <td>0</td>
                                <td>0</td>
                                <td>4</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>CTP</td>
                                <td>23</td>
                                <td>10</td>
                                <td>3</td>
                                <td>6</td>
                                <td>5</td>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>CTS</td>
                                <td>4</td>
                                <td>3</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>CO</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>COC</td>
                                <td>6</td>
                                <td>3</td>
                                <td>1</td>
                                <td>0</td>
                                <td>3</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>COH</td>
                                <td>28</td>
                                <td>16</td>
                                <td>0</td>
                                <td>3</td>
                                <td>16</td>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>COS</td>
                                <td>11</td>
                                <td>10</td>
                                <td>0</td>
                                <td>0</td>
                                <td>10</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>COT</td>
                                <td>2</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>COLA</td>
                                <td>8</td>
                                <td>7</td>
                                <td>0</td>
                                <td>0</td>
                                <td>8</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td>KA BANDARA</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>KA BANDARA</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th colspan="10"></th>
                            </tr>
                            <tr>
                                <th colspan="2">Program vs Realisasi CAPEX</th>
                                <th>98</th>
                                <th>61</th>
                                <th>6</th>
                                <th>11</th>
                                <th>55</th>
                                <th>4</th>
                                <th>0</th>
                                <th>0</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- content -->
@endsection
@push('styles')
<style>
    #monitoring_online_offline {
        height: 450px;
    }

    .highcharts-data-table table {
        min-width: 310px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #ebebeb;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }
</style>
@endpush

@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    function getRandomInt(max) {
        return Math.floor(Math.random() * max);
    }
    var seriesData = [];
    seriesData.push({
        name: "Pemilihan/Penunjukan Langsung",
        data: [{
            y: 19,
            color: 'red'
        }, {
            y: 21,
            color: 'red'
        }],
        url: "{{ route('task.approval') }}",
        color: 'red'
    });
    seriesData.push({
        name: "Lelang Terbuka",
        data: [{
            y: 16,
            color: 'orange'
        }, {
            y: 18,
            color: 'orange'
        }],
        url: "{{ route('task.approval') }}",
        color: 'orange'
    });
    // PROGRAM & REALIZATION CAPEX
    $.ajax({
        url: '{{ route("realisasi.capex") }}',
        dataType: 'json',
        method: 'get',
    }).done(function(response) {
        var seriesData = [];
        seriesData.push({
            name: "Program",
            data: [{
                y: response.cu,
                color: '#e60000'
            }, {
                y: response.cf,
                color: '#e60000'
            }, {
                y: response.ct,
                color: '#e60000'
            }, {
                y: response.co,
                color: '#e60000'
            }, {
                y: response.ka_bandara,
                color: '#e60000'
            }],
            url: "{{ route('task.approval') }}",
            color: '#e60000'
        });
        seriesData.push({
            name: "Realization",
            data: [{
                y: 10,
                color: 'orange'
            }, {
                y: 15,
                color: 'orange'
            }, {
                y: 7,
                color: 'orange'
            }, {
                y: 9,
                color: 'orange'
            }, {
                y: 11,
                color: 'orange'
            }],
            url: "{{ route('task.approval') }}",
            color: 'orange'
        });
        Highcharts.chart('container-capex', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Program and Realization CAPEX'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['CU', 'CF', 'CT', 'CO', 'KA BANDARA'],
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
                    borderRadius: 6,
                    borderWidth: 0,
                    pointWidth: 15,
                    shadow: true,
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
                    pointPadding: 0.2,
                    borderWidth: 0
                }

            },
            series: seriesData
        });
    });

    // BY STATUS TIMELINE
    $.ajax({
        url: '{{ route("realisasi.opex") }}',
        dataType: 'json',
        method: 'get',
    }).done(function(response) {
        // PROGRAM & REALIZATION OPEX
        var seriesData = [];
        seriesData.push({
            name: "Program",
            color: "#4d79ff",
            data: [{
                y: response.cu,
                color: '#4d79ff'
            }, {
                y: response.cf,
                color: '#4d79ff'
            }, {
                y: response.ct,
                color: '#4d79ff'
            }, {
                y: response.co,
                color: '#4d79ff'
            }, {
                y: response.ka_bandara,
                color: '#4d79ff'
            }],
            url: "{{ route('task.approval') }}",
            color: 'blue'
        });
        seriesData.push({
            name: "Realization",
            color: "#e60000",
            data: [{
                y: 10,
                color: '#e60000'
            }, {
                y: 20,
                color: '#e60000'
            }, {
                y: 25,
                color: '#e60000'
            }, {
                y: 26,
                color: '#e60000'
            }, {
                y: 22,
                color: '#e60000'
            }],
            url: "{{ route('task.approval') }}",
            color: 'orange'
        });
        Highcharts.chart('container-opex', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Program & Realization by Directorate (OPEX)'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['CU', 'CF', 'CT', 'CO', 'KA BANDARA'],
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
                    pointWidth: 17,
                    shadow: true,
                    borderRadius: 7,
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
                    pointPadding: 0.2,
                    borderWidth: 0
                }

            },
            series: seriesData
        });
    });
    // PROGRAM & REALIZATION PBJ OPEX
    $.ajax({
        url: '{{ route("realisasi.unit") }}',
        dataType: 'json',
        method: 'get',
    }).done(function(response) {
        Highcharts.chart('pbj-opex', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Program & Realization by Unit (OPEX)'
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
                    'KA BANDARA',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ' Jumlah Pengadaan'
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
                    pointWidth: 15,
                    shadow: true,
                    borderRadius: 7,
                },
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Program',
                color: '#e60000',
                data: [{
                    y: response.cus,
                    color: '#e60000'
                }, {
                    y: response.cfh,
                    color: '#e60000'
                }, {
                    y: response.cti,
                    color: '#e60000'
                }, {
                    y: response.ctp,
                    color: '#e60000'
                }, {
                    y: response.cts,
                    color: '#e60000'
                }, {
                    y: response.coc,
                    color: '#e60000'
                }, {
                    y: response.coh,
                    color: '#e60000'
                }, {
                    y: response.cos,
                    color: '#e60000'
                }, {
                    y: response.cot,
                    color: '#e60000'
                }, {
                    y: response.cola,
                    color: '#e60000'
                }, {
                    y: response.ka_bandara,
                    color: '#e60000'
                }],

            }, {
                name: 'Realization',
                color: 'orange',
                data: [{
                        y: 30,
                        color: '#4d79ff'
                    },
                    {
                        y: 35,
                        color: '#4d79ff'
                    }, {
                        y: 25,
                        color: '#4d79ff'
                    }, {
                        y: 50,
                        color: '#4d79ff'
                    }, {
                        y: 45,
                        color: '#4d79ff'
                    }, {
                        y: 25,
                        color: '#4d79ff'
                    }, {
                        y: 34,
                        color: '#4d79ff'
                    }, {
                        y: 25,
                        color: '#4d79ff'
                    }, {
                        y: 56,
                        color: '#4d79ff'
                    }, {
                        y: 43,
                        color: '#4d79ff'
                    }, {
                        y: 30,
                        color: '#4d79ff'
                    },
                ]
            }]
        });
    });

    // PROGRAM & REALIZATION PBJ CAPEX
    $.ajax({
        url: '{{ route("realisasi.unit") }}',
        dataType: 'json',
        method: 'get',
    }).done(function(response) {
        Highcharts.chart('pbj-capex', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Program & Realization PBJ (CAPEX)'
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
                    'KA BANDARA',
                ],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ' Jumlah Pengadaan'
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
                    borderWidth: 0,
                    pointWidth: 15,
                    shadow: true,
                    borderRadius: 6
                },
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Program',
                color: '#e60000',
                data: [{
                        y: response.cus,
                        color: '#e60000'
                    },
                    {
                        y: response.cfh,
                        color: '#e60000'
                    }, {
                        y: response.cti,
                        color: '#e60000'
                    }, {
                        y: response.ctp,
                        color: '#e60000'
                    }, {
                        y: response.cts,
                        color: '#e60000'
                    }, {
                        y: response.coc,
                        color: '#e60000'
                    }, {
                        y: response.coh,
                        color: '#e60000'
                    }, {
                        y: response.cos,
                        color: '#e60000'
                    }, {
                        y: response.cot,
                        color: '#e60000'
                    }, {
                        y: response.cola,
                        color: '#e60000'
                    }, {
                        y: response.ka_bandara,
                        color: '#e60000'
                    }
                ]

            }, {
                name: 'Realization',
                color: '#47d147',
                data: [{
                    y: 49.9,
                    color: 'orange'
                }, {
                    y: 71.5,
                    color: 'orange'
                }, {
                    y: 106.4,
                    color: 'orange'
                }, {
                    y: 129.2,
                    color: 'orange'
                }, {
                    y: 144.0,
                    color: 'orange'
                }, {
                    y: 135.6,
                    color: 'orange'
                }, {
                    y: 148.5,
                    color: 'orange'
                }, {
                    y: 216.4,
                    color: 'orange'
                }, {
                    y: 194.1,
                    color: 'orange'
                }, {
                    y: 95.6,
                    color: 'orange'
                }, {
                    y: 5.6,
                    color: 'orange'
                }],
            }]
        });
    });
    Highcharts.chart('donut_chart_1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Contract By Category Ammount'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                innerSize: '60%',
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Jumlah',
            data: [
                ['Ammount <1M', getRandomInt(100)],
                ['1M - 5M', getRandomInt(100)],
                ['Ammount >5M', getRandomInt(100)],
            ]
        }]
    });

    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Contract by Count'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['SARANA', 'NON-SARANA'],
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
                borderRadius: 15,
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

            }

        },
        series: seriesData
    });
</script>
@endpush