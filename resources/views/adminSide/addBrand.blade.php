@extends('adminSide.adminMaster')

@section('adminTitle')
<title>Add Brands</title>
@endsection

@section('adminContent')

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Add Brands</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Brands</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Brands</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('createBrand') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-md-2">Input Brand Name</label>
                                <div class="col-md-10">
                                    <div class="input-group mb-3">

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            aria-label="Name" aria-describedby="basic-addon1">



                                    </div>
                                </div>



                                <div class="input-group mb-3">
                                    <button class="btn btn-primary" type="submit">Save</button>

                                </div>
                            </div>
                    </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
</div>



@endsection
