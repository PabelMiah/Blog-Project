@extends('front.master')

@section('body')

    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post">
                                <h3>{{ $blog->blog_title }}</h3>
                                <p> {!! $blog->blog_description !!} </p>

                                <figure class="figure-img">
                                    <img class="img-responsive" src="{{ asset($blog->blog_image) }}" alt="">
                                </figure>
                        </div>
                    </div>

                    <div class="section-row text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive" src="{{ asset('/') }}front-assets/img/xad-2.jpg.pagespeed.ic.bUoDgOb5IT.jpg" alt="">
                        </a>
                    </div>

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

                        @foreach($blogFeature as $key =>$blog)
                        @if($key<4)
                        <div class="post post-widget">
                            <a class="post-img" href="{{ route('blog-post',['id'=>$blog->id]) }}"><img src="{{ asset($blog->blog_image) }}" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->blog_title }}</a></h3>
                            </div>
                        </div>
                        @endif
                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
