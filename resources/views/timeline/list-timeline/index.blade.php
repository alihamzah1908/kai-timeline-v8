@extends('layouts.master')
@section('content')
<style>
    element {
        height: 100px;
    }
</style>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List Timeline</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <button type="button" class="create-timeline d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Create Timeline
                                </button>
                            </p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- <table id="datatable" class="table table-striped mb-0 nowrap"> -->
                        <table id="datatable" style="width:100%">
                            <thead>
                                <tr>
                                    <th style='width:10%'>No. Pengadaan</th>
                                    <th style='width:40%'>Procurement Title</th>
                                    <th style='width:10%'>RKAP Value</th>
                                    <th style='width:5%'>Department</th>
                                    <th style='width:10%'>PBJ</th>
                                    <th style='width:10%'>Cost</th>
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
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Create Timeline</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form-timeline">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Judul Pengadaan</label>
                                <textarea name="judul_pengadaan" class="form-control judul_pengadaan" placeholder="Please insert judul pengadaan"></textarea>
                                <div class="invalid-feedback error-judul" style="display: none;">
                                    Mohon isi judul pengadaan.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Beban Biaya</label>
                                <select class="form-control beban_biaya" name="beban_biaya">
                                    <option value="CAPEX">Capex</option>
                                    <option value="OPEX">Opex</option>
                                </select>
                                <div class="invalid-feedback error-biaya" style="display: none;">
                                    Mohon isi judul beban biaya.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">PBJ</label>
                                <select class="form-control obj" name="pbj">
                                    <option value="Sarana">Sarana</option>
                                    <option value="Non Sarana">Non Sarana</option>
                                </select>
                                <div class="invalid-feedback error-pbj" style="display: none;">
                                    Mohon isi pbj.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Sumber Dana</label>
                                <select class="form-control sumber_dana" name="sumber_dana">
                                    <option value="2022">2021</option>
                                    <option value="2023">2022</option>
                                    <option value="2023">2023</option>
                                </select>
                                <div class="invalid-feedback error-sumber" style="display: none;">
                                    Mohon isi sumber dana.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Jenis Kontrak</label>
                                <br />
                                <input type="radio" class="jenis_kontrak" name="jenis_kontrak" value="single_year"> Single Year
                                <input type="radio" class="jenis_kontrak" name="jenis_kontrak" value="multi_year"> Multi Year
                            </div>
                        </div>
                        <div class="col-md-6 jenis_kontrak_year" style="display: none;">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Total Year</label>
                                <select class="form-control">
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="font-weight-bold">Nilai RKAP</label>
                            <input type="text" class="form-control money nilai-pr" placeholder="Please insert nilai_pr" name="nilai_pr">
                            <div class="invalid-feedback nilai-rkap" style="display: none;">
                                Mohon isi nilai rkap.
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Type TAX</label>
                                <select class="form-control type-tax" name="type_tax">
                                    <option value="">Pilih</option>/option>
                                    <option value="1">Pajak Tidak Dipungut</option>
                                    <option value="2">Pajak Dipungut</option>
                                    <option value="3">Pajak Dipungut Sebagian</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 nilai-tax border">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Nilai TAX</label>
                                <input type="text" class="form-control nilai-tax-value money" name="nilai_tax_sebagian" placeholder="Please insert nilai tax" disabled>
                                <input type="hidden" class="form-control nilai-tax-insert" placeholder="Please insert nilai tax" name="nilai_tax">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Start Date Pengadaan</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert start date" name="start_date">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">End Date Pengadaan</label>
                                <input type="date" class="form-control datepicker" placeholder="Please insert end date" name="end_date">
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
                    <div class="row">
                        <input type="hidden" name="save" id="save" value="">
                        <div class="col-md-12 d-flex justify-content-end">
                            <button class="btn btn-sm btn-warning btn-rounded save" data-bind="draft" type="button">Save as Draft</button>
                            <button class="btn btn-sm btn-primary btn-rounded ml-2 save" data-bind="submit" type="button">Submit</button>
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
            ajax: "{{ route('data.timeline') }}",
            order: [
                [7, 'desc']
            ],
            columns: [{
                    data: 'no_pengadaan'
                },
                {
                    data: 'judul_pengadaan',
                    sWidth: '15%'
                },
                {
                    data: 'nilai_pr'
                },
                {
                    data: 'department_cd'
                },
                {
                    data: 'pbj'
                },
                {
                    data: 'beban_biaya'
                },
                {
                    data: 'proses_st'
                },
                {
                    data: 'timeline_id',
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
        $('body').on('click', '.create-timeline', function() {
            $('#modal-timeline').modal('show')
        })
        $('body').on('click', '.save', function() {
            var data = $('#form-timeline').serialize();
            var type = $(this).attr('data-bind');
            $('#save').val(type)
            $.ajax({
                url: '{{ route("timeline.store") }}',
                dataType: 'json',
                method: 'post',
                data: data
            }).done(function(response) {
                if (response.status == '200') {
                    $('#modal-timeline').modal('hide')
                    timeline.ajax.reload();
                    $('#form-timeline')[0].reset();
                }
            })
        })
        $('body').on('click', '.approve', function() {
            Swal.fire({
                title: 'Are you sure approve timeline?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    var timeline_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("timeline.approve") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'timeline_id': timeline_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Approved!',
                                'Your timeline has approved.',
                                'success'
                            )
                            timeline.ajax.reload();
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
                    var timeline_id = $(this).attr('data-bind');
                    $.ajax({
                        url: '{{ route("timeline.reject") }}',
                        dataType: 'json',
                        method: 'get',
                        data: {
                            'timeline_id': timeline_id
                        }
                    }).done(function(response) {
                        if (response.status == '200') {
                            Swal.fire(
                                'Rejected!',
                                'Your timeline has rejected.',
                                'success'
                            )
                            timeline.ajax.reload();
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your timeline failed rejected.',
                                'success'
                            )
                        }
                    })

                }
            })
        })
        $('body').on('click', '.jenis_kontrak', function() {
            var jenis = $(this).val()
            if (jenis == 'multi_year') {
                $(".jenis_kontrak_year").show()
            } else if (jenis == 'single_year') {
                $(".jenis_kontrak_year").hide()
            }
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
                $(".nilai-tax-insert").val('0')
                $(".nilai-pr").val(rupiah)
                $(".nilai-tax-value").prop('disabled', true)
            } else if (jenis == '2') {
                var persen = (11 / 100);
                var tax = parseInt(new_nilai_pr) * persen
                var pr = parseInt(new_nilai_pr)
                const format = pr.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = convert.join('.').split('').reverse().join('')

                // convert nilai tax to rupiah
                const formatTax = tax.toString().split('').reverse().join('');
                const converts = formatTax.match(/\d{1,3}/g);
                const taxAfterClick = converts.join('.').split('').reverse().join('')

                $(".nilai-tax").show()
                $(".nilai-tax-value").val(taxAfterClick)
                $(".nilai-tax-insert").val(tax)
                $(".nilai-tax-percent").html('%')
                $(".nilai-pr").val(rupiah)
                $(".nilai-tax-value").prop('disabled', true)
            } else if (jenis == '3') {
                var pr = parseInt(new_nilai_pr)
                const format = pr.toString().split('').reverse().join('');
                const convert = format.match(/\d{1,3}/g);
                const rupiah = convert.join('.').split('').reverse().join('')
                $(".nilai-tax").show()
                $(".nilai-tax-value").prop('disabled', false)
                $(".nilai-tax-value").val(tax)
                $(".nilai-tax-insert").val(tax)
                $(".nilai-pr").val(rupiah)
            }
        })
        $('body').on('keyup', '.nilai-tax-value', function() {
            var persen = (parseInt($(this).val()) / 100)
            var nilai_pr = $(".nilai-pr").val()
            var new_nilai_pr = nilai_pr.replace(/\./g, '')

            const format = new_nilai_pr.toString().split('').reverse().join('');
            const convert = format.match(/\d{1,3}/g);
            const rupiah = convert.join('.').split('').reverse().join('')
            $('.nilai-pr').val(rupiah)
        })
    })
</script>
@endpush