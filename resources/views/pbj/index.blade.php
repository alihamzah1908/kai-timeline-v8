@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">List PBJ</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <p class="sub-header">
                                <button type="button" class="create-timeline d-flex justify-content-end btn btn-success btn-sm btn-rounded">
                                    <i class="uil-plus"></i> &nbsp; Create Timeline
                                </button>
                            </p>
                        </div>
                    </div>
                    <table id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Directorate</th>
                                <th>Division</th>
                                <th>Department</th>
                                <th>Judul Pengadaan</th>
                                <th>No Pengadaan</th>
                                <th>Sumber Dana</th>
                                <th>Nilai PR</th>
                                <th>Type Tax</th>
                                <th>Nilai TAX</th>
                                <th>PBJ</th>
                                <th>Beban Biaya</th>
                                <th>Jenis Kontrak</th>
                                <th>Start Pengadaan</th>
                                <th>End Pengadaan</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CT</td>
                                <td>CTI</td>
                                <td>CTIO</td>
                                <td>TEST</td>
                                <td>OP/CTI/2022/30</td>
                                <td>RKAP 2022</td>
                                <td>10,000</td>
                                <td>Pajak Tidak Dipungut</td>
                                <td>Nilai TAX</td>
                                <td>Sarana</td>
                                <td>CAPEX</td>
                                <td>SINGLE YEAR</td>
                                <td>20 Jul 2022</td>
                                <td>20 Jul 2022</td>
                                <td>
                                    <badges class="badge badge-success">Approved Timeline</badges>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm btn-rounded detail">Show Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> <!-- container-fluid -->
<div class="modal fade" id="modal-pbj" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Detail PBJ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="header-title mb-3 mt-0">Nav Tabs</h5>

                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a href="#home" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <span class="d-block d-sm-none"><i class="uil-home-alt"></i></span>
                                            <span class="d-none d-sm-block">Home</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                            <span class="d-block d-sm-none"><i class="uil-user"></i></span>
                                            <span class="d-none d-sm-block">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#messages" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            <span class="d-block d-sm-none"><i class="uil-envelope"></i></span>
                                            <span class="d-none d-sm-block">Messages</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane" id="home">
                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                            Nulla consequat massa quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                            consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane show active" id="profile">
                                        <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
                                            In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
                                            Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras
                                            dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                                            tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
                                            ac, enim.</p>
                                        <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                                            natoque penatibus et magnis dis parturient montes, nascetur
                                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                            pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean
                                            commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                                            penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                            Nulla consequat massa quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate
                                            eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                            justo. Nullam dictum felis eu pede mollis pretium. Integer
                                            tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean
                                            vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                                            consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('body').on('click','.detail', function(){
            $("#modal-pbj").modal('show')
        })
    })
</script>
@endpush