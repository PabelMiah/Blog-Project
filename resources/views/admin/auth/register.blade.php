@extends('admin.master')

@section('title')
    Logout
@endsection

@section('body')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Register</h5>
                                    <p>Get your account now.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{ asset('/') }}assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="{{ 'dashboard' }}">
                                <div class="avatar-md profile-user-wid mb-4">
                                      <span class="avatar-title rounded-circle bg-light">
                                           <img src="{{ asset('/') }}assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                      </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form class="form-horizontal" action="{{ 'register' }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="name" class="form-control" id="" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <input type="email" name="email" class="form-control" id="" placeholder="Enter email">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" name="password" class="form-control" id="" placeholder="Enter password">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Confirm Password</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Enter password">
                                </div>

                                <div class="mt-4">
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                        Register
                                    </button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="mt-0 text-center">
                    <div>
                        <p>Already have an account ? <a href="{{ 'login' }}" class="font-weight-medium text-primary">Login</a></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
