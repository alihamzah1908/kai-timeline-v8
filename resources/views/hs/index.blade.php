@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Harga Satuan</h4>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="datatable" class="table m-0 nowrap">
                            <thead>
                                <tr>
                                    <th>Material No</th>
                                    <th>Nama Barang/ Upah</th>
                                    <th>Kategori</th>
                                    <th>Merk</th>
                                    <th>Spesifikasi</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Mata Uang</th>
                                    <th>Referensi</th>
                                    <th>Tahun</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
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
            order: [[2, 'asc']],
            ajax: "{{ route('data.hs') }}",
            columns: [
                {
                    data: 'material_no'
                },
                {
                    data: 'nama_barang_upah'
                },
                {
                    data: 'kategori'
                },
                {
                    data: 'merk'
                },
                {
                    data: 'spesifiaksi'
                },
                {
                    data: 'satuan'
                },
                {
                    data: 'harga'
                },
                {
                    data: 'mata_uang'
                },
                {
                    data: 'referensi'
                },
                {
                    data: 'remark_harga_tahun'
                },
            ]
        });

        $('body').on('click', '.draft-rks', function() {
            var id = $(this).attr('data-id')
            $('#sp3_id').val(id)
            $("#modal-rks").modal('show')
        })

        $('body').on('click', '.approve-rks', function() {
            var id = $(this).attr('data-id')
            $.ajax({
                url: '{{ route("procurement.sp3") }}',
                dataType: 'json',
                method: 'get',
                data: {
                    'id': id
                }
            }).done(function(response) {
                var reverse = response.data.nilai_pr.toString().split('').reverse().join(''),
                    ribuan = reverse.match(/\d{1,3}/g);
                ribuan = ribuan.join('.').split('').reverse().join('');
                // FORMAT DATE
                const tanggal_kak = response.data.tanggal_kak.split(/[- :]/);
                const wanted1 = `${tanggal_kak[2]}/${tanggal_kak[1]}/${tanggal_kak[0]}`;
                const tanggal_rab = response.data.tanggal_rab.split(/[- :]/);
                const wanted2 = `${tanggal_rab[2]}/${tanggal_rab[1]}/${tanggal_rab[0]}`;
                const tanggal_pr = response.data.tanggal_pr.split(/[- :]/);
                const wanted3 = `${tanggal_pr[2]}/${tanggal_pr[1]}/${tanggal_pr[0]}`;
                const tanggal_justifikasi = response.data.tanggal_pr.split(/[- :]/);
                const wanted4 = `${tanggal_justifikasi[2]}/${tanggal_justifikasi[1]}/${tanggal_justifikasi[0]}`;
                $("#sp3_id").val(response.data.sp3_id)
                $(".judul-pengadaan").html(response.data.judul_pengadaan)
                $(".department").html(response.data.department_cd)
                $(".no-sp3").html(response.data.no_sp3)
                $(".no-pr").html(response.data.no_pr)
                $(".nilai-pr").html(ribuan)
                $(".nilai-tax").html(ribuan)
                $(".vendor-name").html(response.data.nama_vendor)
                $(".no-rab").html(response.data.no_rab)
                $(".tanggal-rab").html(wanted2)
                $(".no-kak").html(response.data.no_kak)
                $(".tanggal-kak").html(wanted1)
                if (response.data.type_tax == '1') {
                    var type = 'Pajak Tidak Dipungut';
                } else if (response.data.type_tax == '2') {
                    var type = 'Pajak Dipungut';
                } else {
                    var type = 'Pajak Dipungut Sebagian';
                }
                $(".type-tax").html(type)
                $(".tanggal-pr").html(wanted3)
                $(".tanggal-justifikasi").html(wanted4)
                $(".no-mi").html(response.data.no_mi)

                // CONDITION STATUS FOR TAB
                if (response.data.proses_st == 'PROSES_DRKS') {
                    $("#peserta-tender").attr('style', 'display:none')
                    $("#evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-reviewrks").attr('style', 'display:none')
                    $(".tab-peserta-tender").attr('style', 'display:none')
                    $(".tab-evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-klarifikasi").attr('style', 'display:none')
                    $(".tab-contract").attr('style', 'display:none')
                    $(".tab-draftrks").removeAttr('style', 'display:none')
                } else if (response.data.proses_st == 'PROSES_RRKS') {

                    $("#penjelasan_start_date").val(response.jadwal.penjelasan_start_date)
                    $("#penjelasan_end_date").val(response.jadwal.penjelasan_end_date)
                    $("#pemasukan_start_date").val(response.jadwal.pemasukan_start_date)
                    $("#pemasukan_end_date").val(response.jadwal.pemasukan_end_date)
                    $("#penawaran_start_date").val(response.jadwal.penawaran_start_date)
                    $("#penawaran_end_date").val(response.jadwal.penawaran_end_date)
                    $("#evaluasi_start_date").val(response.jadwal.evaluasi_start_date)
                    $("#evaluasi_end_date").val(response.jadwal.evaluasi_end_date)
                    $("#pengumuman_start_date").val(response.jadwal.pengumuman_start_date)
                    $("#pengumuman_end_date").val(response.jadwal.pengumuman_end_date)
                    $("#tandatangan_start_date").val(response.jadwal.tandatangan_start_date)
                    $("#tandatangan_end_date").val(response.jadwal.tandatangan_end_date)

                    $("#peserta-tender").attr('style', 'display:none')
                    $("#evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-draftrks").attr('style', 'display:none')
                    $(".tab-peserta-tender").attr('style', 'display:none')
                    $(".tab-evaluasi-dokumen").attr('style', 'display:none')
                    $(".tab-klarifikasi").attr('style', 'display:none')
                    $(".tab-contract").attr('style', 'display:none')
                    $(".tab-reviewrks").removeAttr('style', 'display:none')
                }

            })
            $("#modal-approve").modal('show')
        })

        $('body').on('click', '.add-form-pelaksanaan', function() {
            var body = '<div class="form-group">'
            body += '<input type="date" name="pelaksanaan_aanwidjzing[]" class="form-control" placeholder="please insert item">'
            body += '</div>'
            $(".pelaksanaan_aanwidjzing").append(body)
        })

        // SAVE DATA RKS
        $('body').on('click', '.save-rks', function() {
            var file = $("#file")[0].files;
            var tanggal_rks = $("#tanggal-rks").val();
            var formData = new FormData();
            formData.append('file', file[0])
            formData.append('tanggal_rks', tanggal_rks)
            formData.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: "{{ route('procurement.store') }}",
                method: "POST",
                dataType: 'JSON',
                data: formData,
                processData: false,
                contentType: false,
            }).done(function(response) {
                if (response.status == 200) {
                    Swal.fire(
                        'RKS Saved!',
                        'Your RKS has saved.',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'RKS failed Save!',
                        'Your RKS has failed save.',
                        'error'
                    )
                }
            })
        })

        // SAVE JADWAL PELAKSANAAN
        $('body').on('click', '.save-jadwal', function() {
            var formData = $("#jadwal-pelaksanaan").serialize()
            $.ajax({
                url: "{{ route('procurement.store') }}",
                method: "POST",
                dataType: 'JSON',
                data: formData,
            }).done(function(response) {
                if (response.status == 200) {
                    Swal.fire(
                        'Jadwal Pelaksanaan Saved!',
                        'Your Jadwal Pelaksanaan has saved.',
                        'success'
                    )
                } else {
                    Swal.fire(
                        'Jadwal Pelaksanaan failed Save!',
                        'Your Jadwal Pelaksanaan has failed save.',
                        'error'
                    )
                }
            })
        })

        $('body').on('click', '.add-button-vendor', function() {
            var body = '<div class="row mb-3">'
            body += '<div class="col-md-6">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>'
            body += '<select data-plugin="customselect" class="form-control" name="vendor_code[]">'
            body += '<option value="">Select Vendor</option>'
            body += '<option value="RK10047">PT. TEKNOKRAT MITRA DATA</option>'
            body += '<option value="RK100002">PT. SARANA MULTI CORPORA</option>'
            body += '<option value="RK10003">PT. TRIINTI INTERNATIONAL</option>'
            body += '</select>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">PIC Name</label>'
            body += '<input type="text" name="pic_name[]" class="form-control" placeholder="Please insert pic name">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Email Corporate</label>'
            body += '<input type="text" name="email[]" class="form-control" placeholder="Please insert email">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Phone Number</label>'
            body += '<input type="text" name="phone_number[]" class="form-control" placeholder="Please insert phone number">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-6">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1" class="font-weight-bold">Vendor Address</label>'
            body += '<textarea name="vendor_address[]" class="form-control" placeholder="Please insert vendor addres"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            $(".add-vendor").append(body)
        })
    })
</script>
@endpush