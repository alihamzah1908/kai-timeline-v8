@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h4 class="header-title mt-0 mb-1">List Roles</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <a href="{{ route('roles.create') }}">
                                <button type="button" class="d-flex justify-content-end btn btn-success btn-sm btn-rounded"><i class="uil-plus"></i> &nbsp; Add Roles</button>
                            </a>
                        </div>
                    </div>
                    <table id="basic-datatable" class="table m-0 nowrap">
                        <thead>
                            <tr>
                                <th>Roles Name</th>
                                <th width="20px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $key => $val)
                            <tr>
                                <td>{{ ucfirst($val->name) }}</td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <button class="btn btn-sm btn-primary btn-rounded"><i class="uil uil-edit-alt"></i></button>
                                    </a>
                                    <a class="delete" data-bind="{{ $val->id }}" href="javascript:void(0)"> 
                                        <button class="btn btn-sm btn-primary btn-rounded"><i class="uil uil-trash-alt"></i></button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
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
        $('body').on('click', '.delete', function() {
            Swal.fire({
                title: 'Are you sure delete roles?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete'
            }).then((result) => {
                if (result.isConfirmed) {
                    var id = $(this).attr('data-bind');
                    var url = "{{ route('roles.delete',':id') }}";
                    url = url.replace(':id', id)
                    $.ajax({
                        url: url,
                        dataType: 'json',
                        method: 'GET',
                    }).done(function(response) {
                        if (response.status == 200) {
                            location.reload()
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Your roles failed delete.',
                                'error'
                            )
                        }
                    })
                }
            })
        })
    })
</script>
@endpush