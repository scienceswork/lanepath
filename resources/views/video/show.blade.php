@extends('layouts.base')

@section('title', '视频名称')

@section('body')
    <div class="row">
        <div class="col-md-12">
            {{--面包屑导航--}}
            {!! Breadcrumbs::render('video.index') !!}
        </div>
        <div class="col-md-9">
            <div class="video-player">
                <script type="text/javascript" charset="utf-8" src="http://yuntv.letv.com/player/vod/bcloud.js"></script>
                <script type="text/javascript">
                    var player = new CloudVodPlayer();
                    var letv_player = "fe54ae0481";
                    player.init({"uu":"fkijuzo6np","vu":"6547f145bb","auto_play":0,"gpcflag":1,"lang":"zh_CN" ,"pu":letv_player});
                </script>
            </div>
        </div>
        <div class="col-md-3">
            123
        </div>
        <div class="col-md-12">
            <div class="box" style="margin-top:20px;">
                123
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="xd-font-size-22 xd-pb-10 xd-no-margin">
                        听见火塘
                    </h3>
                    <div class="xd-color-666 xd-pb-15 overflow clearfix">
                        <span class="eg-mr-30 fl">作品类型：纪录片</span>
                    </div>
                    <div class="xd-colo-333">
                        <div class="tj xd-color-333">
                            从北方民族大学毕业后，90后摩梭女孩独玛拉姆先后去过几个大城市，但最后回到了家乡——距离泸沽湖十几公里的者波村。对于外界来说，母系家族和走婚只是神秘的字眼，但于生长在母系家庭中的独玛而言，这不仅是血脉里流淌的民族文化，也意味着她将和长期异地的男友面临不同的婚姻抉择。没有一纸婚书的束缚，情投意合的男女以男方到女方家里“走婚”的方式维持感情且孕育下一代，这便是摩梭人传统的婚姻制度。在独玛家中，无论是祖母、母亲还是小姨都遵循了这一传统。                    </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body xd-mrl-30">
                    <h3 class="xd-title-new xd-mb-10 overflow xd-no-margin">
                        <i class="icon icon-edit" style="font-size: 14px;"></i>
                        评论
                    </h3>
                    <div class="xd-comment form-group">
                        <textarea class="form-control" placeholder="来点评两句吧~" style="height:75px;"></textarea>
                    </div>
                    <div class="overflow form-group">
                        <button type="submit" class="btn btn-primary pull-right">提交</button>
                    </div>
                    {{--全部评论--}}
                    <div class="xd-mb-15">
                        <strong>全部评论（6）</strong>
                    </div>
                    {{--评论--}}
                    <div class="comment">
                        <a href="###" class="avatar">
                            <img src="http://i1.ergengtech.com/wechatunion/comment/f184513794c876dd63113397c725a864.jpg_avatar" alt="">
                        </a>
                        <div class="content">
                            <div class="pull-right text-muted">3 个小时前</div>
                            <div><a href="###">张士超</a></div>
                            <div class="text">今天玩的真开心！~~~~~~</div>
                            <div class="actions">
                                <a href="##">回复</a>
                            </div>
                        </div>
                        <div class="comments-list">
                            <div class="comment">
                                <a href="###" class="avatar">
                                    <img src="http://i1.ergengtech.com/wechatunion/avatar/2017/01/18/85617e77a2a4c2bb59f0d7963a9ac2f5.jpg_avatar" alt="">
                                </a>
                                <div class="content">
                                    <div class="pull-right text-muted">2 个小时前</div>
                                    <div><a href="###">Catouse</a> <span class="text-muted">回复</span> <a href="###">张士超</a></div>
                                    <div class="text">你到底把我家钥匙放哪里了...</div>
                                    <div class="actions">
                                        <a href="##">回复</a>
                                        <a href="##">编辑</a>
                                        <a href="##">删除</a>
                                    </div>
                                </div>
                                <div class="comments-list">
                                    <div class="comment">
                                        <a href="###" class="avatar">
                                            <img src="http://i1.ergengtech.com/wechatunion/comment/b4dee1310db892ba5795f15633a797c3.jpg_avatar" alt="">
                                        </a>
                                        <div class="content">
                                            <div class="pull-right text-muted">1 个小时前</div>
                                            <div><a href="###">门口大爷</a> <span class="text-muted">回复</span> <a href="###">Catouse</a></div>
                                            <div class="text">不在我这儿...</div>
                                            <div class="actions">
                                                <a href="##">回复</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a href="###" class="avatar">
                                            <img src="http://i1.ergengtech.com/wechatunion/comment/f1c6decc01a9acda2aebe1cf4957c597.jpg_avatar" alt="">
                                        </a>
                                        <div class="content">
                                            <div class="pull-right text-muted">1 个小时前</div>
                                            <div><a href="###">队长</a> <span class="text-muted">回复</span> <a href="###">Catouse</a></div>
                                            <div class="text">也不在我这儿...</div>
                                            <div class="actions">
                                                <a href="##">回复</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <a href="###" class="avatar">
                                    <img src="http://i1.ergengtech.com/wechatunion/avatar/2017/01/06/bed68cf3d525235ba5f95cfefd713aee.jpg_avatar" alt="">
                                </a>
                                <div class="content">
                                    <div class="pull-right text-muted">30 分钟前</div>
                                    <div><a href="###">华师大第一美女</a> <span class="text-muted">回复</span> <a href="###">张士超</a></div>
                                    <div class="text">很开心~~~</div>
                                    <div class="actions">
                                        <a href="##">回复</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img src="http://zui.sexy/docs/img/img2.jpg" style="margin: 0 auto;" width="100px" height="100px" class="img-circle" alt="圆形图片">
                    <h3>胡同小巷</h3>
                </div>
            </div>
        </div>
    </div>
@endsection