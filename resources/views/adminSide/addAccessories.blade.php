@extends('adminSide.adminMaster')

@section('adminTitle')
<title>Add Accessories</title>
@endsection

@section('adminContent')

<div class="page-wrapper cardhead">
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Add Accessories</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Accessories</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Accessories</h5>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('accessories.store') }}">
                            @csrf

                            <div class="form-group mb-0 row">
                                <label class="col-form-label col-md-2">Input Accessory Name</label>
                                <div class="col-md-10">
                                    <div class="input-group mb-3">

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                            aria-label="Name" aria-describedby="basic-addon1">



                                    </div>
                                </div>
                                <!-- <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Input Accessory Photos</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <input type="file" name="photos[]" id="photo" class="form-control"
                                                placeholder="upload photo" aria-label="photo" multiple>
                                        </div>
                                    </div>
                                </div> -->





                                <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Input Accessory price</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <input type="number" name="price" id="price" class="form-control"
                                                aria-label="price" multiple>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Input Accessory Availability</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <select name="availability" id="availability">
                                                <option value="1">Available</option>
                                                <option value="0">Not Available</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Input BulletPoint</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <textarea class="ckeditor" name="bullet_point" id="bullet_point" cols="20"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Input Accessory Description</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <textarea class="ckeditor" name="description" id="description" cols="20"
                                                rows="6"></textarea>
                                        </div>
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


@section('ckeditor')
<script type="text/javascript">
$(document).ready(function() {
    $('.ckeditor').ckeditor();
});
</script>
@endsection



@endsection