@extends('adminSide.adminMaster')

@section('adminTitle')
<title>All Categories</title>
@endsection

@section('adminContent')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Categories List</h4>
                    <h6>Manage your Categories</h6>
                </div>

                <div class="page-btn">

                <a href="{{ route('addCategory') }}" class="btn btn-added"><img src="{{asset('frontendAdmin/assets/img/icons/plus.svg')}}" alt="img">Add Categories</a>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="{{asset('frontendAdmin/assets/img/icons/filter.svg')}}" alt="img">
                                    <span><img src="{{asset('frontendAdmin/assets/img/icons/closes.svg')}}" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset"><img src="{{asset('frontendAdmin/assets/img/icons/search-white.svg')}}" alt="img"></a>
                            </div>
                        </div>

                    </div>

                    <div class="card" id="filter_inputs">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Category Name">
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

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categoryItems as $item)

                                    <tr>

                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        {{-- <td class="productimgname">a</td> --}}
                                        <td><a href="#">{{ $item->categoryName }}</a></td>


                                        <td>
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            <img src="{{asset('frontendAdmin/assets/img/icons/edit.svg')}}" alt="img">
                                            </button>

                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="update_supplier_lebel">Update Category </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                        <form method="POST" action="{{ route('updateCategory') }}" class="d-flex">

                                                        @csrf
                                                                <div class="p-1">
                                                                    <input type="hidden" id="update_categoryId" name="update_categoryId" value="{{ $item->id }}">
                                                                    <input type="text" id="update_name" name="update_name" value=""><br><br>

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

                                            <form action="{{ route('destroyCategory', $item->id) }}" method="post">
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


