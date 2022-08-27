@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="header-title mt-0 mb-1">List Waste</h4>
                        </div>
                    </div>
                    <table id="datatable" class="table m-0 nowrap">
                        <thead>
                            <tr>
                                <th>Uraian</th>
                                <th>Proses Pengangkutan</th>
                                <th>Harga Kontrak (Rp)</th>
                                <th>Realisasi Qty (Kg)</th>
                                <th>Realisasi Penjualan (Rp)</th>
                                <th>Total Penjualan (Rp)</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> <!-- container-fluid -->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var timeline = $('#datatable').DataTable({
            language: {
                paginate: {
                    previous: "<i class='uil uil-angle-left'>",
                    next: "<i class='uil uil-angle-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
            },
            processing: true,
            serverSide: true,
            ajax: "{{ route('data.waste') }}",
            columns: [{
                    data: 'uraian'
                },
                {
                    data: 'proses_pengangkutan'
                },
                {
                    data: 'harga_kontrak'
                },
                {
                    data: 'realisasi_qty'
                },
                {
                    data: 'realisasi_penjualan'
                },
                {
                    data: 'total_penjualan'
                },
                {
                    data: 'tanggal'
                },
            ]
        });
    })
</script>
@endpush