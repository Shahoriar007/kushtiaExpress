@extends('adminSide.adminMaster')

@section('adminTitle')
<title>All Products</title>
@endsection

@section('adminContent')



    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Products List</h4>
                    <h6>Manage your Products</h6>
                </div>

                <div class="page-btn">

                <a href="{{ route('products.create') }}" class="btn btn-added"><img src="{{asset('frontendAdmin/assets/img/icons/plus.svg')}}" alt="img">Add Products</a>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">

                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{asset('frontendAdmin/assets/img/icons/search-white.svg')}}" alt="img"></a>
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="checkboxs">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmarks"></span>
                                        </label>
                                    </th>
                                    <th>Name</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Offer Price</th>
                                    <th>Link</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($productItems as $item)

                                    <tr>

                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        {{-- <td class="productimgname">a</td> --}}
                                        <td><a href="#">{{ $item->name }}</a></td>
                                        <td>{{ $item->brand->brandName }}</td>
                                        <td>{{ $item->price }}</td>

                                        @if ($item->offer_price)
                                        <td>{{ $item->offer_price }}</td>
                                        @else
                                        <td>N/A</td>
                                        @endif

                                        @if ($item->link)
                                        <td><a href="{{ $item->link }}">Youtube</a></td>
                                        @else
                                        <td>N/A</td>
                                        @endif

                                        @if($item->availability == 1)
                                        <td>Available</td>
                                        @else
                                        <td>Not Available</td>
                                        @endif

                                        <td>
                                            <!-- Button trigger modal -->
                                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            <img src="{{asset('frontendAdmin/assets/img/icons/edit.svg')}}" alt="img">
                                            </button> --}}

                                            {{-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="update_supplier_lebel">Update Product</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                        <form method="POST" action="" class="d-flex">

                                                        @csrf
                                                                <div class="p-1">
                                                                    <input type="hidden" id="update_productId" name="update_productId" value="{{ $item->id }}">
                                                                    <label for="product_name">Product Name</label>
                                                                    <input type="text" id="product_name" name="update_name" value=""><br><br>
                                                                    <label for="product_price">Product Price</label>
                                                                    <input type="text" id="product_price" name="update_price" value=""><br><br>
                                                                    <label for="category_id">Category</label>
                                                                    <select name="category_id" id="category_id">

                                                                        @foreach ($categoryItems as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->categoryName }}</option>
                                                                        @endforeach

                                                                    </select><br><br>

                                                                    <label for="brand_id">Brand</label>
                                                                    <select name="brand_id" id="brand_id">

                                                                        @foreach ($brandItems as $item)
                                                                        <option value="{{ $item->id }}">{{ $item->brandName }}</option>
                                                                        @endforeach

                                                                    </select><br><br>
                                                                    <label for="bullet_point">Bullet Point</label>
                                                                    <textarea class="ckeditor" name="bullet_point" id="bullet_point" cols="30" rows="10"></textarea><br><br>
                                                                    <label for="availability">Availibility</label>
                                                                    <select name="availability" id="availability">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>

                                                                    </select><br><br>
                                                                    <label for="description">Description</label>
                                                                    <textarea class="ckeditor" name="description" id="description" cols="20" rows="6"></textarea><br><br>
                                                                    <label for="is_new">Is new</label>
                                                                    <select name="is_new" id="is_new">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>

                                                                    </select><br><br>
                                                                    <label for="pre_owned">Pre Owned</label>
                                                                    <select name="pre_owned" id="pre_owned">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>

                                                                    </select><br><br>
                                                                    <label for="top_featured">Top Featured</label>
                                                                    <select name="top_featured" id="top_featured">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>

                                                                    </select>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary btn-update-supplier">Save changes</button>
                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div> --}}

                                            <!-- Modal -->

                                            <form action="{{ route('products.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-delete-supplier"><img src="{{asset('frontendAdmin/assets/img/icons/delete.svg')}}" alt="img"></button>
                                            </form>
                                        </td>

                                    </tr>

                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      $(document).ready(function() {
        // Initialize the modal
        $('#myModal').modal({
            show: false // Hide the modal by default
        });
    });


    </script>


@endsection


