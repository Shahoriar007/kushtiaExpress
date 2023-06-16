@extends('adminSide.adminMaster')

@section('adminTitle')
<title>Header Slider</title>
@endsection

@section('adminContent')

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Category Name Inputs</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Category Name Inputs</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Course Category Name Inputs</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="">
                            @csrf
                            
                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-md-2">Input Category Name</label>
                                <div class="col-md-10">
                                    <div class="input-group mb-3">
                                        
                                        <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Category Name"
                                            aria-label="Category Name" aria-describedby="basic-addon1">

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