@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List NPP</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <button type="button" class="create-sp-3 d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Create NPP
                                </button>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table m-0 nowrap"> -->
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:10%'>No. SP3</th>
                                    <th style='width:40%'>Procurement Title</th>
                                    <th style='width:10%'>RKAP Value</th>
                                    <th style='width:5%'>Department</th>
                                    <th style='width:10%'>Tax Value</th>
                                    <th style='width:10%'>Realization</th>
                                    <th style='width:10%'>Status</th>
                                    <th></th>
                                    <th style='width:5%'>Action</th>
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Create NPP</h5>
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
                                    where tt.division_cd='" . Auth::user()->division_cd . "' and tt.proses_st='PROSES_AT' and ts.timeline_id is null");
                                ?>
                                <select data-plugin="customselect" class="form-control" name="timeline_id[]" multiple>
                                    @foreach($timeline as $val)
                                    <option value="{{ $val->timeline_id }}">{{ $val->judul_pengadaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row mb-2">
                        <div class="col-md-12">
                            <button class="btn btn-sm btn-primary btn-rounded add-timeline" type="button"><i class="uil uil-plus"></i> add timeline</button>
                        </div>
                    </div> -->

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
                                <option value="">Pilih Metode</option>
                                <option value="1">Penunjukan Langsung</option>
                                <option value="2">Pemilihan Langsung</option>
                                <option value="3">Pelelangan Terbuka</option>
                            </select>
                            <!-- <input type="text" name="metode" class="form-control" placeholder="Please insert metode"> -->
                        </div>
                        <div class="col-md-6 vendor-name">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>
                                <input type="text" id="vendor_name" name="vendor_name[]" class="form-control form-vendor-name" placeholder="Please insert vendor name">
                                <div id="loading"></div>
                            </div>
                        </div>
                        <div class="col-md-6 add-vendor-form" style="display: none;">
                            <label for="exampleInputEmail1" class="font-weight-bold">Vendor Name</label>
                            @php 
                            $vendor = DB::select('select * from vendor');
                            @endphp
                            <select data-plugin="customselect" class="form-control" name="vendor_name[]" multiple>
                                @foreach($vendor as $val)
                                <option value="{{ $val->vendor_name }}">{{ $val->vendor_name}}</option>
                                @endforeach
                            </select>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="font-weight-bold">COA</label>
                                    <select class="form-control" name="coa[]" data-plugin="customselect" multiple placeholder="Please insert coa">
                                        <option value="">Pilih COA</option>
                                        <option value="default-1">Default 1</option>
                                        <option value="default-2">Default 2</option>
                                        <option value="default-3">Default 3</option>
                                    </select>
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
                                    <input type="text" class="form-control nilai-tax-value" placeholder="Please insert nilai tax" readonly>
                                    <input type="hidden" class="form-control nilai-tax-insert" name="nilai_tax">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Barang</label>
                                <select class="form-control" name="jenis_barang">
                                    <option value="Non-Import">Non-Import</option>
                                    <option value="Import">Import</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kurs</label>
                                <select class="form-control kurs" name="kurs">
                                    <option value="IDR"><i class="uil uil-money-stack"></i> IDR</option>
                                    <option value="JPY"><i class="uil uil-dollar-sign"></i> JPY</option>
                                    <option value="EUR"><i class="uil uil-yen"></i> EUR</option>
                                    <option value="USD"><i class="uil uil-yen"></i> USD</option>
                                </select>
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
                    <fieldset>
                        <legend>Dokumen PR/RAB/Justifikasi Barang:</legend>
                        <div class="doc-pr-rab">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No PR/IP</label>
                                        <input type="text" name="no_pr_ip[]" class="form-control" placeholder="Please Insert No. PR/IP">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal PR/IP</label>
                                        <input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_pr[]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dokumen PR/IP</label>
                                        <input type="file" name="file_pr[]" class="form-control" id="filePr" aria-describedby="filePr">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No RAB</label>
                                        <input type="text" name="no_rab[]" class="form-control" placeholder="Please Insert No. RAB">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal RAB</label>
                                        <input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_rab[]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dokumen RAB</label>
                                        <input type="file" name="file_rab[]" class="form-control" id="fileRab" aria-describedby="fileRab">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No Justifikasi Kebutuhan Barang</label>
                                        <input type="text" name="no_justifikasi_kebutuhan[]" class="form-control" placeholder="Please Insert No. Justifikasi">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Justifikasi</label>
                                        <input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_justifikasi[]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Dokumen Justifikasi Barang</label>
                                        <input type="file" name="file_jus_br[]" class="form-control" id="fileJustifikasiBarang" aria-describedby="fileJustifikasiBarang">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-sm btn-primary btn-rounded add-pr-rab" type="button"><i class="uil uil-plus"></i> add form </button>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mt-4">
                        <legend>Dokumen MI/Justifikasi Penunjukan/KAK/Lainya:</legend>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No MI</label>
                                    <input type="text" name="no_mi" class="form-control" placeholder="Please Insert No. MI">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal MI</label>
                                    <input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_mi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dokumen MI</label>
                                    <input type="file" name="doc_mi" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="no-justifikasi">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Justifikasi Penunjukan/Pemilihan Langsung</label>
                                    <input type="text" name="no_justifikasi_pemilihan" class="form-control" placeholder="Please Insert No. Justifikasi">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Justifikasi Penunjukan/ Pemilihan Langsung</label>
                                    <input type="date" name="date_justifikasi_pemilihan" class="form-control datepicker" placeholder="Please Insert Date">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dokumen Justifikasi Penunjukan/ Pemilihan Langsung</label>
                                    <input type="file" name="file_just_langsung" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No KAK</label>
                                    <input type="text" name="no_kak" class="form-control" placeholder="Please Insert No. KAK">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal KAK</label>
                                    <input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_kak">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dokumen KAK</label>
                                    <input type="file" name="doc_kak" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No. Lainnya</label>
                                    <input type="text" name="no_kak" class="form-control" placeholder="Please Insert No. KAK">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal</label>
                                    <input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_kak">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dokumen Lainya</label>
                                    <input type="file" name="doc_lainya" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1" class="font-weight-medium">* Dokumen Lainnya meliputi Spesifikasi Teknis/DED/Kajian Resiko</label>
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
            ajax: {
                url: "{{ route('data.sp3') }}",
                data: {
                    timeline_type: 'npp'
                }
            },
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


        // SEARCH VENDOR
        $("#vendor_name").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('vendor.autocomplete') }}",
                    data: {
                        search: request.term
                    },
                    dataType: "json",
                    beforeSend: function() {
                        $('#loading').html('loading ...')
                    },
                    success: function(data) {
                        $('#loading').html(' ')
                        var resp = $.map(data, function(obj) {
                            console.log(obj.vendor_name)
                            return obj.vendor_name;
                        });
                        response(resp);
                    }
                });
            },
            minLength: 2
        });


        $('body').on('click', '.realisasi', function() {
            var data = $(this).val()
            if (data == 'no') {
                $(".row-timeline").hide();
                $(".add-timeline").hide();
                $(".kolom-timeline").show();
                // $(".judul-pengadaan").show();
            } else if (data == 'ya') {
                $(".row-timeline").show();
                $(".kolom-timeline").hide();
                // $(".judul-pengadaan").hide();
                $(".add-timeline").show();
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
                                'Your npp has approved.',
                                'success'
                            )
                            timeline.ajax.reload()
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed approved.',
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
                // $(".nilai-tax-insert").val('0')
                $(".nilai-pr").val(rupiah)
                $(".nilai-tax-value").prop('disabled', true)
            } else if (jenis == '2') {
                var persen = (11 / 100);
                var tax = parseInt(new_nilai_pr) * persen
                var pr = parseInt(new_nilai_pr)
                const format = pr.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = convert.join('.').split('').reverse().join('')

                const formatTax = tax.toString().split('').reverse().join('');
                const convertTax = formatTax.match(/\d{1,3}/g);
                const rupiahTax = convertTax.join('.').split('').reverse().join('')
                $(".nilai-tax").show()
                //$(".nilai-tax-value").val('11')
                $(".nilai-tax-value").val(rupiahTax)
                //$(".nilai-tax-insert").val('11')
                $(".nilai-tax-insert").val(tax)
                $(".nilai-tax-percent").html('%')
                $(".nilai-pr").val(rupiah)
                $(".nilai-tax-value").prop('disabled', false)
            } else if (jenis == '3') {
                var pr = parseInt(new_nilai_pr)
                const format = pr.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = convert.join('.').split('').reverse().join('')
                $(".nilai-tax").show()
                $(".nilai-tax-value").attr("readonly", false); 
                //$(".nilai-tax-value").val(' ')
                $(".nilai-tax-value").val(tax)
                //$(".nilai-tax-insert").val(' ')
                $(".nilai-tax-insert").val(tax)
                //$(".nilai-pr").val(nilai_pr)
                $(".nilai-pr").val(rupiah)
            }
        })
        $('body').on('keyup', '.nilai-tax-value', function() {
            var persen = (parseInt($(this).val()) / 100)
            var nilai_pr = $(".nilai-pr").val()
            var new_nilai_pr = nilai_pr.replace(/\./g, '')
            //var hasil_kalkulasi = parseInt(new_nilai_pr) * persen;
            //var hasilFix = parseInt(new_nilai_pr) - parseInt(hasil_kalkulasi);
            //const format = hasilFix.toString().split('').reverse().join('');
            const format = new_nilai_pr.toString().split('').reverse().join('');
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
        // $('body').on('click', '.add-timeline', function() {
        //     $.ajax({
        //         url: '{{ route("get.timeline") }}',
        //         dataType: 'json',
        //         method: 'get'
        //     }).done(function(response) {
        //         var option = []
        //         $.each(response, function(index, value) {
        //             option.push('<option value="">Pilih Timeline</option><option value=' + value.timeline_id + '>' + value.judul_pengadaan + '</option>')
        //         })
        //         var body = '<div class="col-md-12">';
        //         body += '<div class="form-group">'
        //         body += '<select data-plugin="customselect" class="form-control" name="timeline_id[]">'
        //         body += option
        //         body += '</select>'
        //         body += '</div>'
        //         body += '</div>'
        //         $(".row-timeline").append(body)
        //     })
        // })

        $('body').on('change', '.type-metode', function() {
            if ($(this).val() == '3') {
                $("#no-justifikasi").css('display', 'none')
                $(".add-vendor-form").css('display', 'none')
                $(".form-vendor-name").prop('disabled', true)
                $(".vendor-name").show()
            } else if ($(this).val() == '1') {
                $("#no-justifikasi").css('display', '')
                $(".add-vendor-form").css('display', 'none')
                $(".form-vendor-name").prop('disabled', false)
                $(".vendor-name").show()
            } else if ($(this).val() == '2') {
                $("#no-justifikasi").css('display', '')
                $(".add-vendor-form").css('display', '')
                $(".form-vendor-name").prop('disabled', false)
                $(".vendor-name").hide()
            }
        })

        $('body').on('click', '.add-pr-rab', function() {
            var body = '<div style="border-top: 1px solid #ff3333;">'
            body += '<div class="row mt-2">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">No PR/IP</label>'
            body += '<input type="text" name="no_pr_ip[]" class="form-control" placeholder="Please Insert No. PR/IP">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Tanggal PR/IP</label>'
            body += '<input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_pr[]">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Dokumen PR/IP</label>'
            body += '<input name="file_pr[]" type="file" id="file_pr" multiple class="form-control" />'
            body += '</div>'
            body += '</div>'

            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">No RAB</label>'
            body += '<input type="text" name="no_rab[]" class="form-control" placeholder="Please Insert No. RAB">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Tanggal RAB</label>'
            body += '<input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_rab[]">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Dokumen RAB</label>'
            body += '<input name="file_rab[]" type="file" id="file_rab" multiple class="form-control"/>'
            body += '</div>'
            body += '</div>'

            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">No Justifikasi Kebutuhan Barang</label>'
            body += '<input type="text" name="no_justifikasi_kebutuhan[]" class="form-control" placeholder="Please Insert No. Justifikasi">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Tanggal Justifikasi</label>'
            body += '<input type="date" class="form-control datepicker" placeholder="Please Insert Date" name="date_justifikasi[]">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<label for="exampleInputEmail1">Dokumen Justifikasi</label>'
            body += '<input name="file_jus_br[]" type="file" id="file_just_brg" class="form-control" multiple />'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            $('.doc-pr-rab').append(body)
        })

        $('body').on('click', '.add-vendor', function() {
            var body = '<div class="form-group">'
            body += '<input type="text" id="vendor_name" name="vendor_name[]" class="form-control form-vendor-name" placeholder="Please insert vendor name">'
            body += '<div id="loading"></div>'
            body += '</div>'
            $(".vendor-name").append(body)
        })
    })
</script>
@endpush