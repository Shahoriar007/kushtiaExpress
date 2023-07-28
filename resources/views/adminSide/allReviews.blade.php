@extends('adminSide.adminMaster')

@section('adminTitle')
<title>All Review</title>
@endsection

@section('adminContent')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Review List</h4>
                    <h6>Manage your Review</h6>
                </div>

                <div class="page-btn">

                <a href="{{ route('addReview') }}" class="btn btn-added"><img src="{{asset('frontendAdmin/assets/img/icons/plus.svg')}}" alt="img">Add Review</a>

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
                                        <input type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Review Text">
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
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Review</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($reviews as $item)

                                    <tr>

                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        {{-- <td class="productimgname">a</td> --}}
                                        <td><img src="{{ asset($item->photo->image_path) }}" alt="Review Photo" width="150px"></td>

                                        <td><a href="#">{{ $item->name }}</a></td>

                                        <td style="word-wrap: break-word; max-width: 200px; white-space: normal;">{{ $item->reviewText }}</td>
                                        <td>



                                            <form action="{{ route('destroyReview', $item->id) }}" method="post">
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


