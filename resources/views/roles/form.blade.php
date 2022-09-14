@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3 header-title mt-0">Create Roles</h5>
                    <p class="sub-header">
                        Please insert user with form available
                    </p>
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter role name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Permission</label> <br />
                        </div>
                        @php
                        $trx = DB::select('SELECT sub_menu FROM permissions GROUP BY sub_menu ORDER BY sub_menu ASC');
                        @endphp
                        <div class="form-group">
                            @foreach($trx as $val2)
                            <h6>{{ $val2->sub_menu }}</h6>
                            @php
                            $permissions = DB::select("SELECT id, name FROM permissions WHERE sub_menu='$val2->sub_menu'");
                            @endphp
                            @foreach($permissions as $val)
                            <div class="ml-4 mb-3">
                                <input type="checkbox" name="permission[]" value="{{ $val->id }}"> {{ $val->name }}
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded btn-sm">Save</button>
                    </form>
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div> <!-- container-fluid -->
@endsection