@extends('home.layout.master')
@section('title') Đông Phương Spa - Chi tiết tin tức @endsection
@section('index')
    <div class="banner-about text-center" style="background: linear-gradient(rgba(139, 139, 139, 0.56), rgba(121, 121, 121, 0.53)),url({{asset('images/images_index')}}/parallax-6.jpg) no-repeat;background-size: cover; background-position: bottom;">
        <h1>News</h1>
    </div>


    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="row">
                    <div class="ed-news--1 ed-news-detail--2">
                        <a href="{{url('chi-tiet-tin-tuc.html')}}"><img src="{{asset('images/images_index')}}/blog-5-1024x576.jpg" class="img-responsive"></a>
                        <div>
                            <h4>DECEMBER 1</h4>
                            <a href="{{url('chi-tiet-tin-tuc.html')}}"><h2>Special Guest Gill Cooper</h2></a>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>

                            <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                @include('home.layout.banner_right')
            </div>
        </div>
    </div>
@endsection