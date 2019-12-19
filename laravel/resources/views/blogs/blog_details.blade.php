<!DOCTYPE html>
<html lang="en">
    <title>Blog Details</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="/abc/js/modernizer.js"></script>
</head>
</head>
<body>

    @if(Session::has('user')) 
    @include('common.user_header')
    @else
    @include('common.header')
    @endif
     

    <div id="wrapper">
        <div class="section">
            <div class="container">
                <div class="row m45">
                    <div class="col-md-12">

                        @foreach($blog as $b)
                        <div class="widget">
                            <div class="blog-single">
                                <div class="post-media wow fadeIn">
                                    <img src="{{$b->image}}" alt="" class="img-responsive">
                                </div>

                                <div class="blog-meta">
                                    <small>{{$b->date}}</small>
                                    <small>by <a href="">{{$b->name}}</a></small>
                                    <small class="hidden-xs">{{$b->catagory}}</small>
                                </div>

                                <div class="blog-desc">
                                    <h3 class="post-title">{{$b->title}}</h3>
                                    <p class="lead">

                                    <p class="drop-cap"> 
                                        {{$b->description}}
                                </div>
                            </div>
                         @endforeach
                        </div>


                        <div class="row">
                            <div class="col-md-12 text-center wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                                <div class="portfolio-share">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fab fa-facebook-f"></i> Like it</a></li>
                                        <li><a href=""><i class="far fa-save"></i></i> Pin it</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        

                        <hr class="invis">

                        <div class="comment-widget clearfix">
                            <div class="contact-widget">
                                <h4>Comments</h4>
                                <hr>
                            </div>
                
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-info">
                                        <div class="panel-body comments">

                                            <ul class="media-list">
                                                <li class="media">
                                        
                                                    <div class="comment">
                                                        <a href="" class="pull-left">
                                                          
                                                            <img src="/images/team_01.jpg" alt="" class="img-circle">
                                                        </a>
                                                        <div class="media-body">
                                                            <strong class="text">name</strong>
                                                            <span class="text-muted"><small class="text-muted">date</small></span>
                                                            
                                                            <p>
                                                               text
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                
                                                

                        @if(Session::has('user'))
               
                        <hr class="invis">
                        <div class="comment-widget clearfix">
                            <div class="contact-widget">
                                <h4>Leave a Comment</h4>
                                <hr>
                            </div>

                            <div class="contact_form comment-form">
                                <form class="row" method="post" action="/blog/comment/<%=blog.id%>">
                                    <div class="col-md-12 col-sm-12">
                                        <label>Comment <span class="required"></span></label>
                                        <textarea class="form-control" id="comment" name="comment" placeholder=""></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <input type="submit" value="Send Comment" class="btn btn-primary" />
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/all.js"></script>
</body>
</html>