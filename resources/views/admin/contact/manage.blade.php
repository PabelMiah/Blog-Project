@extends('admin.master')

@section('title')
    Manage Contact
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Manage Contact</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <table class="table" id="dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Description</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $contacts as $contact )
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{!! $contact->description !!} </td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->address }}</td>
                                            <td>
                                                <a href="{{ route('edit-contact', ['id' => $contact->id]) }}" class="btn btn-sm btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="{{ route('delete-contact',['id' => $contact->id]) }}" onclick="return confirm('Are you sure to delete this?');" class="btn btn-sm btn-danger"> <i class="fa-solid fa-trash"></i></a>
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
        </div>
    </section>
@endsection
