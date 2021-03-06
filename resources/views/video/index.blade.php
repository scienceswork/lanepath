@extends('layouts.base')

@section('title', '全部作品')

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form action="#" class="col-md-6" method="get" novalidate="" style="">
                            {{ csrf_field() }}
                            <div class="form-group input-group no-margin">
                                <input name="q" type="text" class="form-control" placeholder="按作品标题、简介、创作人搜索">
                                <span class="input-group-btn">
                                <button type="submit" class="btn btn-success">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                            </div>
                        </form>
                    </div>
                    <div class="xd-text-select clearfix">
                        <span class="fl">
                            <strong>分类：</strong>
                        </span>
                        <span class="fl on">
                            <a href="#">全部</a>
                        </span>
                        <span class="fl">
                            <a href="#">美食</a>
                        </span>
                        <span class="fl">
                            <a href="#">旅游</a>
                        </span>
                        <span class="fl">
                            <a href="#">品书</a>
                        </span>
                    </div>
                    <hr>
                    <div class="row course-list">
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="course-item">
                                <div class="course-img">
                                    <a href="#">
                                        <div class="video-play-btn"></div>
                                        <img class="img-responsive"
                                             src="http://i3.ergengtech.com/media/2017/03/141489486265854585.jpg_vcover" alt="">
                                        <span class="video-times">04:38</span>
                                    </a>
                                </div>
                                <div class="course-info">
                                    <div class="title">
                                        <a class="link-dark" href="#">
                                            假如和女儿生活在一起假如和女儿生活在一起假如和女儿生活在一起
                                        </a>
                                    </div>
                                    <div class="metas clearfix">
                        <span class="num">
                            <i class="glyphicon glyphicon-eye-open"></i>
                            11346
                        </span>
                                        <span class="comment">
                            <i class="glyphicon glyphicon-comment"></i>
                            142
                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer text-center">
                    <nav aria-label="page navigation">
                        <ul class="pagination">
                            <li class="disabled">
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
    </div>
@endsection