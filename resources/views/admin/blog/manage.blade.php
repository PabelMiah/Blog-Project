@extends('admin.master')

@section('title')
    Manage Blog
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Blog</h4>
                    </div>
                    <div class="card-body">
                        <table class="table" id="dataTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Blog Title</th>
                                <th>Image</th>
                                <th>description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->category->category_name }}</td>
                                    <td>{{ $blog->blog_title }}</td>
                                    <td>
                                        <img src="{{ $blog->blog_image }}" style="height: 100px; width: 100px;" alt="">
                                    </td>
                                    <td>{!! $blog->blog_description !!}</td>
                                    <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td>
                                        <a href="{{ route('edit-blog', ['id' => $blog->id, 'title' => str_replace(' ', '-', $blog->blog_title)]) }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('delete-blog',['id' => $blog->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
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
