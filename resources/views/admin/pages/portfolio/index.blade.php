@extends('admin.layouts.master')
@section('title')
   Portfolio
@endsection
@push('css')
    // jquery
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

@endpush
@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Portfolio All</h4>



            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div >
                        <h4 class="card-title col-6 " style="display:inline">All blog Categories </h4>
                        <a href="{{route('admin.portfolios.create')}}" class=" btn btn-info waves-effect waves-light mb-3" style="float: right" >add new Category</a>
                    </div>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Action</th>

                        </thead>


                        <tbody>
                        @php($i = 1)
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td> {{ $i++}} </td>
                                <td> {{ $portfolio->name }} </td>
                                <td> {{ $portfolio->title }} </td>
                                <td> <img src="{{ asset($portfolio->image) }}" style="width: 60px; height: 50px;"> </td>

                                <td>
                                    <a href="{{ route('admin.portfolios.edit',$portfolio->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                                    <form action="{{ route('admin.portfolios.destroy',$portfolio->id) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt">Delete</i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->




@endsection
@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function (e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endpush
