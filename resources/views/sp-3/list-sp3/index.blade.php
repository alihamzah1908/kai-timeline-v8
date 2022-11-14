@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List SP 3</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <!-- <button type="button" class="create-sp-3 d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Create SP 3
                                </button> -->
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table m-0 nowrap" style="width:100%"> -->
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:10%'>Nomor. SP3</th>
                                    <th style='width:30%'>Procurement Title</th>
                                    <th style='width:10%'>RKAP Value</th>
                                    <th style='width:5%'>Department</th>
                                    <th style='width:10%'>Tax Value</th>
                                    <th style='width:10%'>Realization</th>
                                    <th style='width:10%'>Status</th>
                                    <th style='width:10%'></th>
                                    <th style='width:10%'>Action</th>
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
<div class="modal fade" id="modal-timeline" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Create SP 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action='{{ route("sp3.store") }}' id="form-timeline" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Realisasi</label><br />
                            <input type="radio" name="realisasi" class="realisasi" value="ya"> Timeline
                            <input type="radio" name="realisasi" class="realisasi" value="no"> Diluar Timeline
                        </div>
                    </div>
                    <div class="row row-timeline">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Timeline</label>
                                <?php
                                $timeline = DB::select("select tt.timeline_id, tt.judul_pengadaan from trx_timeline tt
                                    left join trx_sp3 ts on tt.timeline_id = ts.timeline_id
                                    where tt.division_cd='". Auth::user()->division_cd ."' and tt.proses_st='PROSES_AT' and ts.timeline_id is null");
                                ?>
                                <select data-plugin="customselect" class="form-control" name="timeline_id">
                                    @foreach($timeline as $val)
                                    <option value="{{ $val->timeline_id }}">{{ $val->judul_pengadaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row judul-pengadaan">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Judul Pengadaan</label>
                                <input type="text" class="form-control" placeholder="Please insert judul pengadaan" name="judul_pengadaan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <label for="exampleInputEmail1">No SP3</label>
                            <input type="text" name="nomor_sp3" class="form-control" placeholder="Please insert no sp3">
                        </div> -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Metode</label>
                            <select class="form-control type-metode" name="type_metode">
                                <option value="1">Penunjukan Langsung</option>
                                <option value="2">Pemilihan Langsung</option>
                                <option value="3">Pelelangan Terbuka</option>
                            </select>
                            <!-- <input type="text" name="metode" class="form-control" placeholder="Please insert metode"> -->
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>
                                <input type="text" name="vendor_name" class="form-control" placeholder="Please insert vendor name">
                            </div>
                        </div>
                    </div>
                    <div class="kolom-timeline">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Nilai PR</label>
                                    <input type="text" class="form-control nilai-pr money" placeholder="Please insert nilai_pr" name="nilai_pr">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Type TAX</label>
                                    <select class="form-control type-tax" name="type_tax">
                                        <option value="1">Pajak Tidak Dipungut</option>
                                        <option value="2">Pajak Dipungut</option>
                                        <option value="3">Pajak Dipungut Sebagian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 nilai-tax border">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Nilai TAX</label>
                                    <input type="text" class="form-control nilai-tax-value" placeholder="Please insert nilai tax" name="nilai_tax" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">Keterangan</label>
                                    <textarea class="form-control" placeholder="Please insert keterangan" name="keterangan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Barang</label>
                                <select class="form-control type-tax" name="type_tax">
                                    <option value="1">Local</option>
                                    <option value="2">Impor</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">No MI</label>
                                <input type="text" name="no_mi" class="form-control" placeholder="Please insert no mi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal MI</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert start date" name="date_mi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">No PR/IP</label>
                                <input type="text" name="no_pr_ip" class="form-control" placeholder="Please insert nomor pr/ip">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal PR/IP</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert start date" name="date_pr">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">No Justifikasi</label>
                                <input type="text" name="no_justifikasi" class="form-control" placeholder="Please insert nomor justifikasi">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal Justifikasi</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert start date" name="date_justifikasi">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">No RAB</label>
                                <input type="text" name="no_rab" class="form-control" placeholder="Please insert nomor rab">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal RAB</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert start date" name="date_rab">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">No KAK</label>
                                <!-- <div id="summernote-editor">
                                    <p>Uraian Details</p>
                                </div> end summernote-editor -->
                                <input type="text" name="no_kak" class="form-control" placeholder="Please insert nomor kak">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Tanggal KAK</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert start date" name="date_kak">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="header-title" class="font-weight-bold">Upload File</h5>
                            <div class="fallback">
                                <input name="file[]" type="file" id="file" multiple />
                            </div>
                            <div class="dz-message needsclick">
                                <i class="h1 text-muted  uil-cloud-upload"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <input class="btn btn-sm btn-warning btn-rounded save" type="submit" name="save" value="Save As Draft">
                            <input class="btn btn-sm btn-primary btn-rounded save ml-2" type="submit" name="save" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var timeline = $('#datatable').DataTable({
	    "pageLength": 25,
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
            ajax: "{{ route('data.sp3') }}",
            order: [
                [7, 'desc']
            ],
            columns: [{
                    data: 'no_sp3'
                },
                {
                    data: 'judul_pengadaan'
                },
                {
                    data: 'nilai_pr'
                },
                {
                    data: 'department_cd'
                },
                {
                    data: 'nilai_tax'
                },
                {
                    data: 'realisasi'
                },
                {
                    data: 'proses_st'
                },
                {
                    data: 'created_at',
                    visible: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ]
        });

        $('body').on('click', '.realisasi', function() {
            var data = $(this).val()
            console.log(data)
            if (data == 'no') {
                $(".row-timeline").hide();
                $(".kolom-timeline").show();
                $(".judul-pengadaan").show();
            } else if (data == 'ya') {
                $(".row-timeline").show();
                $(".kolom-timeline").hide();
                $(".judul-pengadaan").hide();
            }
        })
        $('body').on('click', '.type_metode', function() {
            var jenis = $(this).val()
            if (jenis == '3') {
                $(".vendor_name").hide()
            } else {
                $(".vendor_name").show()
            }
        })

        $('body').on('click', '.save', function() {
            $("#form-timeline").submit(); // Submit the form
        });
        // $('body').on('click', '.save', function() {
        //     var data = $('#form-timeline').serialize();
        //     const photo_anak = $('#photo-anak').prop('files')[0];
        //     const photo_ktp = $('#photo-ktp').prop('files')[0];
        //     $.ajax({
        //         url: '{{ route("sp3.store") }}',
        //         dataType: 'json',
        //         method: 'post',
        //         data: data,
        //         processData: false,
        //         contentType: false,
        //     }).done(function(response) {
        //         if (response.status == '200') {
        //             $('#modal-timeline').modal('hide')
        //             timeline.ajax.reload()
        //         }
        //     })
        // })
        $('body').on('click', '.create-sp-3', function() {
            $('#modal-timeline').modal('show')
        })
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve NPP?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    var sp_3_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("sp3.approve") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'sp3_id': sp_3_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Approved!',
                                'Your NPP has approved.',
                                'success'
                            )
                            timeline.ajax.reload()
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your NPP failed approved.',
                                'success'
                            )
                        }
                    })

                }
            })
        })

        $('body').on('change', '.type-tax', function() {
            var nilai_pr = $(".nilai-pr").val()
            var new_nilai_pr = nilai_pr.replace(/\./g, '')
            var jenis = $(this).val()
            if (jenis == '1') {
                const format = new_nilai_pr.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = convert.join('.').split('').reverse().join('')
                $(".nilai-tax").show()
                $(".nilai-tax-value").val('0')
                $(".nilai-pr").val(rupiah)
                $(".nilai-tax-value").prop('disabled', true)
            } else if (jenis == '2') {
                var persen = (11 / 100);
                var total = parseInt(new_nilai_pr) * persen
                var totalFix = parseInt(new_nilai_pr) - total
                const format = totalFix.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = convert.join('.').split('').reverse().join('')
                $(".nilai-tax").show()
                $(".nilai-tax-value").val('11')
                $(".nilai-tax-percent").html('%')
                $(".nilai-pr").val(rupiah)
                $(".nilai-tax-value").prop('disabled', true)
            } else if (jenis == '3') {
                $(".nilai-tax").show()
                $(".nilai-tax-value").prop('disabled', false)
                $(".nilai-tax-value").val(' ')
                $(".nilai-pr").val(nilai_pr)
            }
        })
        $('body').on('keyup', '.nilai-tax-value', function() {
            var persen = (parseInt($(this).val()) / 100)
            var nilai_pr = $(".nilai-pr").val()
            var new_nilai_pr = nilai_pr.replace(/\./g, '')
            var hasil_kalkulasi = parseInt(new_nilai_pr) * persen;
            var hasilFix = parseInt(new_nilai_pr) - parseInt(hasil_kalkulasi);
            const format = hasilFix.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = convert.join('.').split('').reverse().join('')
            $('.nilai-pr').val(rupiah)
        })

        $('body').on('click', '.reject', function() {
            Swal.fire({
                title: 'Are you sure reject timeline?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Reject'
            }).then((result) => {
                if (result.isConfirmed) {
                    var sp_3_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("sp3.reject") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'sp3_id': sp_3_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Rejected!',
                                'Your timeline has rejected.',
                                'success'
                            )
                            timeline.ajax.reload()
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed reject.',
                                'success'
                            )
                        }
                    })

                }
            })
        })
    })
</script>
@endpush