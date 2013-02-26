<body>
<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link href="<?php echo Yii::app()->baseUrl; ?>/assets/js/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php echo Yii::app()->baseUrl; ?>/assets/css/main.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <!-- header { -->
        <div id="header">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="brand" href="#">TeaConf</a>
                        <ul class="nav pull-right">
                            <li><a href="#" class="name">likai</a></li>
                            <li><a href="#">提醒</a></li>
                            <li><a href="#">设置</a></li>
                            <!--<li><img src="http://placekitten.com/40/40" /></li>-->
                            <li><a href="?modal" data-toggle="modal">登录</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- } header -->

        <!-- wrapper { -->
        <div id="wrapper">
            <div class="container" id="container">
                <div class="toolbar clearfix">
                    <ul class="nav nav-pills pull-left">
                        <li class="active"><a href="#">热议</a></li>
                        <li><a href="#">最新</a></li>
                        <li><a href="#">关注</a></li>
                        <li><a href="#">推荐</a></li>
                        <li><a href="?node" data-toggle="modal">节点</a></li>
                    </ul>
                    <a href="?create" class="btn btn-default pull-right" data-toggle="modal">
                        <i class="icon icon-plus"></i>
                        创建主题
                    </a>
                </div>
                <div class="row">
                    <div class="main">
                        <section class="box">
                            <div class="topics">
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/51da/85a3/3557_normal.png?m=1330351261" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#/topic/a" class="title">Probability theory 概率率论：完全可能性的理论与现实图景 </a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">二手交易</a>
                                                    <a href="#" class="author">李恺</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/231e/b5a2/14580_normal.png?m=1335106729" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Test::Unit + Capybara 怎么跑不起来呢</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">单元测试</a>
                                                    <a href="#" class="author">aisensiy</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/f41b/a39d/18119_normal.png?m=1343397231" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Rspec中有没有post delete等方法？</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">问与答</a>
                                                    <a href="#" class="author">Vincent178</a>
                                                    最后由
                                                    <a href="#">likai</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/a8fb/c857/33274_normal.png?m=1360677490" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">[招聘][深圳软件园] 电商团队招聘Pythoner，一起做Web Service，Ruby粉亦可</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">招聘</a>
                                                    <a href="#" class="author">vividlee2010</a>
                                                    最后由
                                                    <a href="#">Vincent178</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/51da/85a3/3557_normal.png?m=1330351261" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Probability theory 概率率论：完全可能性的理论与现实图景 </a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">二手交易</a>
                                                    <a href="#" class="author">李恺</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/231e/b5a2/14580_normal.png?m=1335106729" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Test::Unit + Capybara 怎么跑不起来呢</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">单元测试</a>
                                                    <a href="#" class="author">aisensiy</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/f41b/a39d/18119_normal.png?m=1343397231" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Rspec中有没有post delete等方法？</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">问与答</a>
                                                    <a href="#" class="author">Vincent178</a>
                                                    最后由
                                                    <a href="#">likai</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/a8fb/c857/33274_normal.png?m=1360677490" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">[招聘][深圳软件园] 电商团队招聘Pythoner，一起做Web Service，Ruby粉亦可</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">招聘</a>
                                                    <a href="#" class="author">vividlee2010</a>
                                                    最后由
                                                    <a href="#">Vincent178</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/51da/85a3/3557_normal.png?m=1330351261" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Probability theory 概率率论：完全可能性的理论与现实图景 </a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">二手交易</a>
                                                    <a href="#" class="author">李恺</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/231e/b5a2/14580_normal.png?m=1335106729" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Test::Unit + Capybara 怎么跑不起来呢</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">单元测试</a>
                                                    <a href="#" class="author">aisensiy</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/f41b/a39d/18119_normal.png?m=1343397231" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Rspec中有没有post delete等方法？</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">问与答</a>
                                                    <a href="#" class="author">Vincent178</a>
                                                    最后由
                                                    <a href="#">likai</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/a8fb/c857/33274_normal.png?m=1360677490" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">[招聘][深圳软件园] 电商团队招聘Pythoner，一起做Web Service，Ruby粉亦可</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">招聘</a>
                                                    <a href="#" class="author">vividlee2010</a>
                                                    最后由
                                                    <a href="#">Vincent178</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/51da/85a3/3557_normal.png?m=1330351261" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Probability theory 概率率论：完全可能性的理论与现实图景 </a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">二手交易</a>
                                                    <a href="#" class="author">李恺</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/231e/b5a2/14580_normal.png?m=1335106729" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Test::Unit + Capybara 怎么跑不起来呢</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">单元测试</a>
                                                    <a href="#" class="author">aisensiy</a>
                                                    最后由
                                                    <a href="#">ruchee</a>
                                                    于17分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/f41b/a39d/18119_normal.png?m=1343397231" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">Rspec中有没有post delete等方法？</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">问与答</a>
                                                    <a href="#" class="author">Vincent178</a>
                                                    最后由
                                                    <a href="#">likai</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">10</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="topic inner">
                                    <table width="100%">
                                        <tr>
                                            <td class="avatar"><a href="#"><img src="http://cdn.v2ex.com/avatar/a8fb/c857/33274_normal.png?m=1360677490" alt="" /></a></td>
                                            <td class="summary">
                                                <a href="#" class="title">[招聘][深圳软件园] 电商团队招聘Pythoner，一起做Web Service，Ruby粉亦可</a>
                                                <div class="sep5"></div>
                                                <div class="info">
                                                    <a href="#" class="node">招聘</a>
                                                    <a href="#" class="author">vividlee2010</a>
                                                    最后由
                                                    <a href="#">Vincent178</a>
                                                    于20分钟前回复
                                                </div>
                                            </td>
                                            <td class="right">
                                                <a href="#" class="count likes">5</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="sidebar">
                        <section class="box">
                            <h2 class="inner subject">招聘</h2>
                            <div class="inner describe">
                                分享好职位信息，招人的，你还等什么！这里有这么多 Ruby 开发者。发布招聘信息时，标题请以"[公司地址]"开头，比如[北京]，[上海]，[杭州]等，以方便求职者检索。请注明联系方式，请写上待遇。
                            </div>
                        </section>
                        <section class="box">
                            <h2 class="inner subject">系统推荐</h2>
                            <ul class="inner topics" id="suggest_topics">
                                <li><a href="#">Ruby 语言二十岁生日，如果你采访Matz，你会问什么？</a></li>
                                <li><a href="#">Teahour.fm 第3期，除夕特别版发布 :-)</a></li>
                                <li><a href="#">谁能推荐一款人体工学的椅子。</a></li>
                                <li><a href="#">Teahour.fm 第3期，除夕特别版发布 :-)</a></li>
                                <li><a href="#">Ruby 语言二十岁生日，如果你采访Matz，你会问什么？</a></li>
                                <li><a href="#">谁能推荐一款人体工学的椅子。</a></li>
                            </ul>
                        </section>
                        <section class="box">
                            <h2 class="inner subject">好评如潮</h2>
                            <ul class="inner topics" id="likes_topics">
                                <li><a href="#">Teahour.fm 第3期，除夕特别版发布 :-)</a></li>
                                <li><a href="#">谁能推荐一款人体工学的椅子。</a></li>
                                <li><a href="#">Teahour.fm 第3期，除夕特别版发布 :-)</a></li>
                                <li><a href="#">Ruby 语言二十岁生日，如果你采访Matz，你会问什么？</a></li>
                                <li><a href="#">谁能推荐一款人体工学的椅子。</a></li>
                            </ul>
                        </section>
                        <section class="box">
                            <h2 class="inner subject">无人问津</h2>
                            <ul class="inner topics" id="noreply_topics">
                                <li><a href="#">Ruby 语言二十岁生日，如果你采访Matz，你会问什么？</a></li>
                                <li><a href="#">Teahour.fm 第3期，除夕特别版发布 :-)</a></li>
                                <li><a href="#">谁能推荐一款人体工学的椅子。</a></li>
                                <li><a href="#">Teahour.fm 第3期，除夕特别版发布 :-)</a></li>
                                <li><a href="#">Ruby 语言二十岁生日，如果你采访Matz，你会问什么？</a></li>
                                <li><a href="#">谁能推荐一款人体工学的椅子。</a></li>
                            </ul>
                        </section>
                    </div>
                </div>

            </div>
        </div>
        <!-- } wrapper -->

        <div id="footer">
            <div class="container">
                <div class="links pull-left">
                    <a href="#">关于</a>
                    <a href="#">合作</a>
                    <a href="#">反馈</a>
                    <a href="#">源码</a>
                </div>
                <div class="pull-right">
                    <a href="#">TeaConf.com</a> Made By <a href="#">YouYuGe.com</a>
                </div>
            </div>
        </div>
        <script data-main="<?php echo Yii::app()->baseUrl; ?>/assets/js/main" src="<?php echo Yii::app()->baseUrl; ?>/assets/js/libs/requirejs/require.js"></script>
    </body>
</html>
