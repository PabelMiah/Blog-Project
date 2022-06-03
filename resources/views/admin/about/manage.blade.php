@extends('admin.master')

@section('title')
    Manage About
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage About</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Upper Description</th>
                                <th>Image</th>
                                <th>Lower Description</th>
                                <th>Mission Description</th>
                                <th>Mission 1</th>
                                <th>Mission 2</th>
                                <th>Mission 3</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{!! $about->upper_description !!}</td>
                                    <td>
                                        <img src="{{ $about->about_image }}" style="height: 100px; width: 100px;" alt="">
                                    </td>
                                    <td>{!! $about->lower_description !!}</td>
                                    <td>{!! $about->mission_description !!}</td>
                                    <td>{{ $about->mission_1 }}</td>
                                    <td>{{ $about->mission_2 }}</td>
                                    <td>{{ $about->mission_3 }}</td>
                                    <td>
                                        <a href="{{ route('edit-about', ['id' => $about->id]) }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('delete-about',['id' => $about->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
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
@endsection
