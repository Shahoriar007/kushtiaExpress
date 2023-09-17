@extends('adminSide.adminMaster')

@section('adminTitle')
    <title>Add Products</title>
@endsection

@section('adminContent')
    <div class="page-wrapper cardhead">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Add Products</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Products</h5>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-0 row">
                                    <label class="col-form-label col-md-2">Input Product Name</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">

                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mb-0 row">
                                    <label class="col-form-label col-md-2">Input Product Price</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">

                                            <input type="number" name="price" id="price" class="form-control"
                                                placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mb-0 row">
                                    <label class="col-form-label col-md-2">Input Product Offer Price</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">

                                            <input type="number" name="offer_price" id="offer_price" class="form-control"
                                                placeholder="offer price" aria-label="offer_price" aria-describedby="basic-addon1">
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Select Category</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <select name="category_id" id="category_id">

                                                @foreach ($categoryItems as $item)
                                                <option value="{{ $item->id }}">{{ $item->categoryName }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row">

                                    <label class="col-form-label col-md-2">Select Brand Name</label>
                                    <div class="col-md-10">
                                        <div class="input-group mb-3">
                                            <select name="brand_id" id="brand_id">
                                                @foreach ($brandItems as $item)
                                                <option value="{{ $item->id }}">{{ $item->brandName }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>
                                </div>



                                    <div class="form-group mb-0 row">
                                        <label class="col-form-label col-md-2">Input Product Photos</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <input type="file" name="photo1" id="photo1" class="form-control"
                                                    accept="image/*" multiple>
                                                <input type="file" name="photo2" id="photo2" class="form-control"
                                                    accept="image/*" multiple>
                                                <input type="file" name="photo3" id="photo3" class="form-control"
                                                    accept="image/*" multiple>
                                                    <input type="file" name="photo4" id="photo4" class="form-control"
                                                    accept="image/*" multiple>
                                                    <input type="file" name="photo5" id="photo5" class="form-control"
                                                    accept="image/*" multiple>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 row">
                                        <label class="col-form-label col-md-2">Input Video link</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">

                                                <input type="text" name="link" id="link" class="form-control"
                                                    placeholder="Video Link" aria-label="link" aria-describedby="basic-addon1">
                                            </div>
                                        </div>

                                    </div>



                                    <div class="form-group mb-0 row">

                                        <label class="col-form-label col-md-2">Input Bullet point</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <textarea class="ckeditor" name="bulletPoint" id="bulletPoint" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-0 row">

                                        <label class="col-form-label col-md-2">Input Product Availability</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <select name="availability" id="availability">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 row">

                                        <label class="col-form-label col-md-2">Input Product Description</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <textarea class="ckeditor" name="description" id="description" cols="20" rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 row">

                                        <label class="col-form-label col-md-2">Is New</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <select name="is_new" id="is_new">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 row">

                                        <label class="col-form-label col-md-2">Pre Owned</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <select name="pre_owned" id="pre_owned">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 row">

                                        <label class="col-form-label col-md-2">Top Selling</label>
                                        <div class="col-md-10">
                                            <div class="input-group mb-3">
                                                <select name="top_featured" id="top_featured">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>

                                                </select>
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


    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
