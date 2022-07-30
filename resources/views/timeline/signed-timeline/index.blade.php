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
                            <h5 class="header-title mt-0 mb-1">List Timeline Signed</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <button type="button" class="create-timeline d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Upload Timeline Signed
                                </button>
                            </p>
                        </div>
                    </div>
                    <table id="datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Judul Upload Signed</th>
                                <th>Upload By</th>
                                <th>Signed By</th>
                                <th>Upload Date</th>
                                <th>File</th>
                                <th>Keterangan</th>
                                <!-- <th></th> -->
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
<div class="modal fade" id="modal-timeline" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Upload Timeline</h5>
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
                                <label for="exampleInputEmail1" class="font-weight-bold">Judul Upload Signed</label>
                                <!-- <div id="summernote-editor">
                                    <p>Uraian Details</p>
                                </div> end summernote-editor -->
                                <textarea name="judul_pengadaan" class="form-control" placeholder="Please insert judul pengadaan"></textarea>
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bold">Signed By</label>
                                <select class="form-control" name="beban_biaya">
                                    <option value="CUG">CUG</option>
                                    <option value="PLT_CUG">PLT. CUG</option>
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
                        <div class="col-md-6">
                            <h5 class="header-title" class="font-weight-bold">Upload Timeline Signed</h5>
                            <div class="fallback">
                                <input name="file[]" type="file" id="file" multiple />
                            </div>
                            <div class="dz-message needsclick">
                                <i class="h1 text-muted  uil-cloud-upload"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="save" id="save" value="">
                        <div class="col-md-12 d-flex justify-content-end">
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
            columns: [
                {
                    data: 'judul_pengadaan'
                },
                {
                    data: 'no_pengadaan'
                },
                {
                    data: 'nilai_pr'
                },
                
                {
                    data: 'beban_biaya'
                },
                {
                    data: 'jenis_kontrak'
                },
                {
                    data: 'start_date_pengadaan'
                }
                // {
                //     data: 'action',
                //     name: 'action',
                //     orderable: false,
                //     searchable: false
                // },
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
                $(".nilai-tax").show()
                //$(".nilai-tax-value").val('11')
                $(".nilai-tax-value").val(tax)
                //$(".nilai-tax-insert").val('11')
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
    })
</script>
@endpush