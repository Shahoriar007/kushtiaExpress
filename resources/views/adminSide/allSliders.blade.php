@extends('adminSide.adminMaster')

@section('adminTitle')
<title>All Slider</title>
@endsection

@section('adminContent')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Slider List</h4>
                    <h6>Manage your Slider</h6>
                </div>

                <div class="page-btn">

                <a href="{{ route('addSlider') }}" class="btn btn-added"><img src="{{asset('frontendAdmin/assets/img/icons/plus.svg')}}" alt="img">Add Slider</a>

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
                                        <input type="text" placeholder="Enter Title">
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
                                    <th>Title</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sliders as $item)

                                    <tr>

                                        <td>
                                            <label class="checkboxs">
                                                <input type="checkbox">
                                                <span class="checkmarks"></span>
                                            </label>
                                        </td>
                                        {{-- <td class="productimgname">a</td> --}}
                                        <td><a href="#">{{ $item->title }}</a></td>
                                        <td><img src="{{ asset($item->photo->image_path) }}" alt="Slider Photo" width="150px"></td>


                                        <td>



                                            <form action="{{ route('destroySlider', $item->id) }}" method="post">
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


