@extends('front.master')

@section('title')
    Home
@endsection

@section('body')
    <div class="section">

        <div class="container">

            <div class="row">
                @foreach($blogRecent as $key =>$blog)
                 @if($key<2)
                <div class="col-md-6">
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route('blog-post',['id'=>$blog->id]) }}"><img src="{{ $blog->category->category_image }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->category->category_name }}</a>
                                <span class="post-date">{{ $blog->created_at->format('M d, Y') }}</span>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->blog_title }}</a></h3>
                        </div>
                    </div>
                </div>
                 @endif
                @endforeach

            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Recent Posts</h2>
                    </div>
                </div>
                @foreach($blogRecent as $blog)
                    <div class="col-md-4">
                        <div class="post">
                            <a class="post-img" href="{{ route('blog-post',['id'=>$blog->id]) }}"><img src="{{ $blog->blog_image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-1"
                                       href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->category->category_name }}</a>
                                    <span class="post-date">{{ $blog->created_at->format('M d, Y') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->blog_title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>

    </div>


    <div class="section section-grey">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Featured Posts</h2>
                    </div>
                </div>
                @foreach($blogFeature as  $key =>$blog)

                    @if( $key== 3)
                        <div class="clearfix visible-md visible-lg"></div>
                    @endif

                    <div class="col-md-4">
                        <div class="post">
                            <a class="post-img" href="{{ route('blog-post',['id'=>$blog->id]) }}"><img src="{{ $blog->blog_image }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2"
                                       href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->category->category_name }}</a>
                                    <span class="post-date">{{ $blog->created_at->format('M d, Y') }}</span>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blog-post',['id'=>$blog->id]) }}"> {{ $blog->blog_title }}  </a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>


@endsection
