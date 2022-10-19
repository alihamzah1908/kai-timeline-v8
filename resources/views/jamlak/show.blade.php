@extends('layouts.master')
@section('content')
<style>
    label {
        font-size: 10px;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li><i class="uil uil-chart-infographic"></i></li>
                    <li class="breadcrumb-item"><a href="{{ route('list.contract') }}"><b>Back to list</b></a></li>
                    <li class="breadcrumb-item"><a href="#"><b>Detail {{ $data->no_jamlak }}</b></a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">Detail Jamlak</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Nomor Jamlak</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-normal">{{ $data->no_jamlak }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Judul Pengadaan</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-8">
                            <dt class="font-weight-normal"> {{ $data->judul_pengadaan }}</dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Masa Berlaku</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-normal">{{ date('d M Y', strtotime($data->start_berlaku)) }} sampai <b>{{ date('d M Y', strtotime($data->end_berlaku)) }}</b></dt>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 mb-1">
                            <dt class="font-weight-bold">Status</dt>
                        </div>
                        <div>
                            <dt class="font-weight-normal">:</dt>
                        </div>
                        <div class="col-md-6">
                            <!-- <dt class="font-weight-normal"> {{ $data->status_jamlak }}</dt> -->
                            <select name="status_jamlak">
                                <option value="1">Active</option>
                                <option value="2">Adendum</option>
                                <option value="3">Bermasalah</option>
                                <option value="4">Non-Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-end">
                            <!-- <input class="btn btn-sm btn-warning btn-rounded save" type="submit" name="save" value="Save As Draft"> -->
                            <input class="btn btn-sm btn-primary btn-rounded save ml-2" type="submit" name="save" value="Submit">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var user = "{{ auth()->user()->hasRole('manajer_user') }}";
        if(user){
            $(".sw-toolbar-bottom").hide()
        }
        var status = $('#contract_status').val();
        if (status == 'PROSES_UJP') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
        } else if (status == 'PROSES_VJP') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
        } else if (status == 'PROSES_RDC') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
        } else if (status == 'PROSES_VAC') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
        } else if (status == 'PROSES_ALG') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
        } else if (status == 'PROSES_APU') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
        } else if (status == 'PROSES_VAC') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
        } else if (status == 'PROSES_KAC') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
        } else if (status == 'PROSES_CR') {
            $('.draft-contract').addClass('done')
            $('.performance').addClass('done')
            $('.verifikasi').addClass('done')
            $('.review').addClass('done')
            $('.approval-logistik').addClass('done')
            $('.approval-user').addClass('done')
            $('.ttd-vendor').addClass('done')
            $('.ttd-kci').addClass('done')
            $('.mppl').addClass('done')
            $('.summary-contract').addClass('done')
        }
        $('body').on('click', '.sw-btn-next', function(e) {
            // conditional contract prosess
            // if status 
            var id = $(this).closest('#smartwizard-arrows').find('#id').val();
            var status = $(this).closest('#smartwizard-arrows').find('#contract_status').val();
            if (status == 'PROSES_DC') {
                $('.performance').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Draft Contract ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-draft-kontrak").submit();
                    }
                })
            } else if (status == 'PROSES_UJP') {
                $('.verifikasi').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Jaminan Pelaksanaan ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-draft-performance").submit();
                    }
                })
            } else if (status == 'PROSES_VJP') {
                $('.review').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Verifikasi Jaminan ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-verif-jamlak").submit();
                    }
                })
            } else if (status == 'PROSES_RDC') {
                $('.review').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Review Legal ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    e.preventDefault()
                    $("#form-review-legal").submit();
                })
            } else if (status == 'PROSES_VAC') {
                $('.approval-user').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Approval Logistik ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-approval-logistik").submit();
                    }
                })
            } else if (status == 'PROSES_ALG') {
                $('.ttd-vendor').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Approval User ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        // $('.ttd-kci').removeClass('active')
                        e.preventDefault()
                        $("#form-approval-user").submit();
                    }
                })
            } else if (status == 'PROSES_APU') {
                $('.ttd-kci').removeClass('active')
                Swal.fire({
                    title: 'Are you sure save Tanda Tangan Vendor ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        // $('.ttd-kci').removeClass('active')
                        e.preventDefault()
                        $("#form-ttd-vendor").submit()
                    }
                })
            } else if (status == 'PROSES_KAC') {
                Swal.fire({
                    title: 'Are you sure save Tanda Tangan KCI ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-ttd-kci").submit()
                    }
                })
            } else if (status == 'PROSES_CR') {
                Swal.fire({
                    title: 'Are you sure save MPPL ?',
                    // text: 'Your procurement are send to contract!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault()
                        $("#form-mppl").submit()
                    }
                })
            }else if (status == 'PROSES_CR') {
            }
            // console.log($(this).closest('#smartwizard-arrows').find('.performance').addClass('test'));
        })
        $('body').on('click', '.add-review', function() {
            var body = '<div style="padding-top: 10px; border-top: 1px solid red;">'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_submit_review[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_end_review[]" class="form-control datepicker" id="tanggal-end-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="file" name="file_review[]" class="form-control" id="file-review">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<textarea class="form-control" name="catatan_review[]" placeholder="please insert catatan"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div></div>'
            $('.add-form-review').append(body)
        })

        $('body').on('click', '.add-approval-logistik', function() {
            var body = '<div style="padding-top: 10px; border-top: 1px solid red;">'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_submit_logistik[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_end_logistik[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="file" name="file_approval_logistik[]" class="form-control" id="file-review">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<textarea class="form-control" name="catatan_logistik[]" placeholder="please insert catatan"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div></div>'
            $('.form-layout-approval-logistik').append(body)
        })

        $('body').on('click', '.add-approval-user', function() {
            var body = '<div style="padding-top: 10px; border-top: 1px solid red;">'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_submit_user[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_end_user[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="file" name="file_approval_user[]" class="form-control" id="file-review">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<textarea class="form-control" name="catatan_user[]" placeholder="please insert catatan"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div></div>'
            $('.form-layout-approval-user').append(body)
        })

        $('body').on('click', '.add-ttd-vendor', function() {
            var body = '<div style="padding-top: 10px; border-top: 1px solid red;">'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_submit_vendor[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="date" name="tanggal_end_vendor[]" class="form-control datepicker" id="tanggal-submit-review" placeholder="please insert date submit">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<input type="file" name="file_vendor[]" class="form-control" id="file-review">'
            body += '</div>'
            body += '</div>'
            body += '</div>'
            body += '<div class="row">'
            body += '<div class="col-md-4">'
            body += '<div class="form-group">'
            body += '<textarea class="form-control" name="catatan_vendor[]" placeholder="please insert catatan"></textarea>'
            body += '</div>'
            body += '</div>'
            body += '</div></div>'
            $('.form-layout-ttd-vendor').append(body)
        })
    })
</script>
@endpush