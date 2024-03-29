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

                <a href="{{ route('products.create') }}" class="btn btn-added"><img src="{{asset('frontendAdmin/assets/img/icons/plus.svg')}}" alt="img">Add Accessories</a>

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

                                        @if($item->availability == 1)
                                        <td>Available</td>
                                        @else
                                        <td>Not Available</td>
                                        @endif

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            <img src="{{asset('frontendAdmin/assets/img/icons/edit.svg')}}" alt="img">
                                            </button>

                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="update_supplier_lebel">Update Supplier</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                        <form method="POST" action="" class="d-flex">

                                                        <form method="POST" action="" class="d-flex">

                                                        @csrf
                                                                <div class="p-1">
                                                                    <input type="hidden" id="update_supplierId" name="update_supplierId" value="">
                                                                    <input type="text" id="update_name" name="update_name" value=""><br><br>
                                                                    <input type="email" id="update_email" name="update_email" value=""><br><br>
                                                                    <input type="text" id="update_phone" name="update_phone" value=""><br><br>
                                                                    <input type="text" id="update_address" name="update_address" value=""><br><br>
                                                                    <input type="text" id="update_company" name="update_company" value=""><br><br>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary btn-update-supplier">Save changes</button>
                                                                </div>

                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

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


