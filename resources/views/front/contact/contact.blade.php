@extends('front.master')

@section('title')
    Contact
@endsection
@section('body')
    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="section-row">
                        <h3>Contact Information</h3>
                        @foreach($contacts as $contact)
                        <p>{!! $contact->description !!}</p>

                        <ul class="list-style">
                            <li>
                                <p><strong>Email:</strong> <a href="#"><span class="__cf_email__" data-cfemail="efb88a8d828e88af8a828e8683c18c8082"> {{ $contact->email }}</span></a>
                                </p>
                            </li>
                            <li>
                                <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                            </li>
                            <li>
                                <p><strong>Address:</strong> {{ $contact->address }}</p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
{{--                <div class="col-md-5 col-md-offset-1">--}}
{{--                    <div class="section-row">--}}
{{--                        <h3>Send A Message</h3>--}}
{{--                        <form>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-7">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <span>Email</span>--}}
{{--                                        <input class="input" type="email" name="email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-7">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <span>Subject</span>--}}
{{--                                        <input class="input" type="text" name="subject">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <textarea class="input" name="message" placeholder="Message"></textarea>--}}
{{--                                    </div>--}}
{{--                                    <button class="primary-button">Submit</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>

    </div>
@endsection
