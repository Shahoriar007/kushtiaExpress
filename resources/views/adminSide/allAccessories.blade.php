@extends('adminSide.adminMaster')

@section('adminTitle')
    <title>All Accessories</title>
@endsection

@section('adminContent')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Accessories List</h4>
                    <h6>Manage your Accessories</h6>
                </div>

                <div class="page-btn">

                    <a href="{{ route('accessories.create') }}" class="btn btn-added"><img
                            src="{{ asset('frontendAdmin/assets/img/icons/plus.svg') }}" alt="img">Add Accessories</a>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{ asset('frontendAdmin/assets/img/icons/filter.svg') }}" alt="img">
                                    <span><img src="{{ asset('frontendAdmin/assets/img/icons/closes.svg') }}"
                                            alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img
                                        src="{{ asset('frontendAdmin/assets/img/icons/search-white.svg') }}"
                                        alt="img"></a>
                            </div>
                        </div>

                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Supplier Code">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Supplier">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                                    <div class="form-group">
                                        <a class="btn btn-filters ms-auto"><img
                                                src="{{ asset('frontendAdmin/assets/img/icons/search-whites.svg') }}"
                                                alt="img"></a>
                                    </div>
                                </div>
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
                                    <th>Price</th>
                                    <th>Availability</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($accessoryItems as $item)
                                    <tr>

                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        {{-- <td class="productimgname">a</td> --}}
                                        <td><a href="#">{{ $item->name }}</a></td>
                                        <td>{{ $item->price }}</td>

                                        @if ($item->availability == 1)
                                            <td>Available</td>
                                        @else
                                            <td>Not Available</td>
                                        @endif

                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#myModal">
                                                <img src="{{ asset('frontendAdmin/assets/img/icons/edit.svg') }}"
                                                    alt="img">
                                            </button>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                                aria-labelledby="update_product_lebel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="update_supplier_lebel">Update Accessory</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form method="POST" action="" class="d-flex">

                                                                @csrf

                                                                <div class="p-1">
                                                                    <input type="hidden" id="update_accessoryId"
                                                                        name="update_accessoryId"
                                                                        value="{{ $item->id }}">
                                                                    <label for="accessory_name">Accessory Name</label>
                                                                    <input type="text" id="accessory_name"
                                                                        name="accessory_name" value=""><br><br>
                                                                    <label for="accessory_price">Accessory Price</label>
                                                                    <input type="text" id="accessory_price"
                                                                        name="accessory_price" value=""><br><br>

                                                                    <label for="bullet_point">Bullet Point</label>
                                                                    <textarea class="ckeditor" name="bullet_point" id="bullet_point" cols="30" rows="10"></textarea><br><br>
                                                                    <label for="availability">Availibility</label>
                                                                    <select name="availability" id="availability">
                                                                        <option value="1">Yes</option>
                                                                        <option value="0">No</option>

                                                                    </select><br><br>
                                                                    <label for="description">Description</label>
                                                                    <textarea class="ckeditor" name="description" id="description" cols="20" rows="6"></textarea><br><br>



                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary btn-update-supplier">Save
                                                                        changes</button>
                                                                </div>

                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal -->

                                            <form action="{{ route('accessories.destroy', $item->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-delete-supplier"><img
                                                        src="{{ asset('frontendAdmin/assets/img/icons/delete.svg') }}"
                                                        alt="img"></button>
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
