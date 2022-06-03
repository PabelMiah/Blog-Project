@extends('front.master')

@section('title')
    About
@endsection
@section('body')
    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    @foreach($abouts as $about)
                    <div class="section-row">
                        <p>{!! $about->upper_description !!}</p>
                        <figure class="figure-img">
                            <img class="img-responsive" src="{{ asset($about->about_image) }}" alt="">
                        </figure>
                        <p>{!! $about->lower_description !!}</p>
                    </div>
                            <h3>Our Mission</h3>
                            <p>{!! $about->mission_description !!}</p>
                            <ul class="list-style">
                                <li>
                                    <p>{{ $about->mission_1 }}</p>
                                </li>
                                <li>
                                    <p>{{ $about->mission_2 }}</p>
                                </li>
                                <li>
                                    <p>{{ $about->mission_3 }}</p>
                                </li>
                            </ul>
                    @endforeach
                </div>

                <div class="col-md-4">

                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="{{ asset('/') }}front-assets/img/xad-1.jpg.pagespeed.ic.C1dNWPxojd.jpg" alt="">
                        </a>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Recent Post</h2>
                        </div>
                        @foreach($blogRecent as $blog)
                        <div class="post post-widget">
                            <a class="post-img" href="{{ route('blog-post',['id'=>$blog->id]) }}"><img src="{{ asset($blog->blog_image) }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->blog_title }}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
