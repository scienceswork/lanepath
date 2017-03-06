@extends('layouts.base')

@section('title', '全部作品')

@section('body')
    {{--面包屑导航--}}
    {!! Breadcrumbs::render('video.index') !!}
    <div class="row">
        <div class="col-md-12">
            <div class="panel pane-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
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
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/061488754704449912.jpg_vcover" alt="">
                                <div class="caption">
                                    吃素的令狐聪
                                </div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">乔争月的“拼图外滩”（下）</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/business/project/2017/03/06/b011bfb36435b67aa7c612f26581a5c7.jpg_vcover"
                                     alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">舞就该这么跳</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488522983893527.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">敲打之美</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488508957684585.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">一年等一回</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/031488507728477946.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">在罗云洞吃饭</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i1.ergengtech.com/media/2017/03/031488507014231615.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">深夜の料理人</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488505828768411.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">乔争月的“拼图外滩”（下）</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/021488422979822489.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">大擂之声</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/061488754704449912.jpg_vcover" alt="">
                                <div class="caption">
                                    吃素的令狐聪
                                </div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">乔争月的“拼图外滩”（下）</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/business/project/2017/03/06/b011bfb36435b67aa7c612f26581a5c7.jpg_vcover"
                                     alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">舞就该这么跳</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488522983893527.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">敲打之美</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488508957684585.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">一年等一回</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/031488507728477946.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">在罗云洞吃饭</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i1.ergengtech.com/media/2017/03/031488507014231615.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">深夜の料理人</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488505828768411.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">乔争月的“拼图外滩”（下）</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/021488422979822489.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">大擂之声</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i1.ergengtech.com/media/2017/03/031488507014231615.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">深夜の料理人</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i2.ergengtech.com/media/2017/03/031488505828768411.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">乔争月的“拼图外滩”（下）</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/021488422979822489.jpg_vcover" alt="">
                                <div class="caption">“良辰美景” 出自《牡丹亭》</div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">大擂之声</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a class="card" href="###">
                                <div class="video-play-btn"></div>
                                <img src="//i3.ergengtech.com/media/2017/03/061488754704449912.jpg_vcover" alt="">
                                <div class="caption">
                                    吃素的令狐聪
                                </div>
                                <div class="card-heading"><strong>后街胡同</strong></div>
                                <div class="card-content text-muted">乔争月的“拼图外滩”（下）</div>
                                <div class="card-actions">
                                    <button type="button" class="btn btn-danger"><i class="icon-heart"></i> 喜欢</button>
                                    <div class="pull-right text-danger"><i class="icon-heart-empty"></i> 520 人喜欢</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row text-center">
                        <ul class="pager pager-pills">
                            <li class="previous"><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="###" data-toggle="pager" data-placement="top">...</a></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#">9</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#">11</a></li>
                            <li class="active"><a href="#">12</a></li>
                            <li class="next disabled"><a href="#">»</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection