<div id="nav-aside">

    <div class="section-row">
        <ul class="nav-aside-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('contact') }}">Contacts</a></li>
        </ul>
    </div>


    <div class="section-row">
        <h3>Recent Posts</h3>
        @foreach($blogRecent as $blog)
        <div class="post post-widget">
            <a class="post-img" href="{{ route('blog-post',['id'=>$blog->id]) }}"><img src="{{ asset($blog->blog_image) }}" alt=""></a>
            <div class="post-body">
                <h3 class="post-title"><a href="{{ route('blog-post',['id'=>$blog->id]) }}">{{ $blog->blog_title }}</a></h3>
            </div>
        </div>
        @endforeach
    </div>


    <div class="section-row">
        <h3>Follow us</h3>
        <ul class="nav-aside-social">
            <li><a href="https://www.facebook.com/pabelmiah007/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/pabel_mi"><i class="fa fa-twitter"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
        </ul>
    </div>


    <button class="nav-aside-close"><i class="fa fa-times"></i></button>

</div>
