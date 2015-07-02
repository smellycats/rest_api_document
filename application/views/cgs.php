<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $this->config->item('title'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/bootstrap-theme.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('bootstrap/css/docs.min.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('highlight/styles/github.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('jquery/jquery-1.11.3.min.js'); ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/docs.min.js'); ?>"></script>

    <script src="<?php echo base_url('highlight/highlight.pack.js'); ?>"></script>
    <script>hljs.initHighlightingOnLoad();</script>
  </head>

  <body>

    <!-- Docs master nav -->
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo site_url(); ?>" class="navbar-brand">Documents</a>
      </div>
      <nav id="bs-navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="<?php echo site_url('cgs'); ?>">车辆管理</a>
          </li>
          <li>
            <a href="<?php echo site_url('carrecg'); ?>">车型识别</a>
          </li>
          <li>
            <a href="<?php echo site_url('imgpackage'); ?>">图片打包</a>
          </li>
          <li>
            <a href="<?php echo site_url('kakou'); ?>">卡口</a>
          </li>
        </ul>
      </nav>
    </div>
    </header>

    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content" tabindex="-1">
      <div class="container">
        <h1>车辆管理</h1>
        <p>车辆号牌,型号,颜色,类型,所有人等车辆信息</p>
        <p class="lead">
          <a class="btn btn-outline-inverse btn-lg" href="https://github.com/smellycats/rest_cgs" role="button">
            <i class="fa fa-github fa-lg"></i>
            GitHub
          </a>
        </p>
        <p style="font-size:14px;">Version 0.1.0 . Created by SmellyCat</p>
      </div>
    </div>

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-8" role="main">
          <div class="bs-docs-section">
            <h1 id="cgs" class="page-header">车辆管理</h1>

              <h2 id="cgs-vehicle">Get vehicle</h2>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /cgs/vehicles
                  </div>
                </div>
                <h3 id="cgs-vehicle-paramters">参数</h3>
                  <table class="table table-bordered">
                    <colgroup>
                      <col class="col-xs-1">
                      <col class="col-xs-1">
                      <col class="col-xs-6">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>名称</th>
                        <th>类型</th>
                        <th>描述</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>q</td>
                        <td>string</td>
                        <td>查询条件</td>
                      </tr>
                  </table>
                  <p>请求参数<span class="label label-primary">q</span>可以是下列组合</p>
                  <ul>
                    <li>
                      <span class="label label-info">hpys</span>根据号牌颜色查询车辆信息,内容可以是
                      <span class="label label-default">blue</span>,<span class="label label-default">yellow</span>,<span class="label label-default">white</span>or<span class="label label-default">black</span>.
                      以下是等价的参数
                      <span class="label label-default">blue</span>=<span class="label label-default">蓝</span>=<span class="label label-default">2</span>,
                      <span class="label label-default">yellow</span>=<span class="label label-default">黄</span>=<span class="label label-default">3</span>,
                      <span class="label label-default">white</span>=<span class="label label-default">白</span>=<span class="label label-default">4</span>,
                      <span class="label label-default">black</span>=<span class="label label-default">黑</span>=<span class="label label-default">5</span>.
                    </li>
                  </ul>
                <h3 id="cgs-vehicle-example">实例</h3>
                  假设你要查询车牌为粤L12345,号牌颜色为蓝的车辆信息
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_cgs/index.php/v2/cgs/vehicles?q=粤L12345+hpys:blue
                    </div>
                  </div>

                    <div class="panel panel-default">
                      <div class="panel-heading">Status: 200OK</div>

<pre><code class="json">
{
  "total_count": 1,
  "items": [
    {
      "id": 10,
      "hpzl": 2,
      "hphm": "粤L12345",
      "clpp1": "本田",
      "clpp2": "本田",
      "clxh": "CC1234567",
      "zzcmc": "本田汽车股份有限公司",
      "clsbdh": "LGWEF123456789",
      "fdjh": 1301234567,
      "cllx": "K33",
      "csys": "A",
      "syr": "匿名",
      "fzrq": "2013-11-18 12:34:56"
    }
  ]
}
</code></pre>

                    </div>
          </div>
        </div>

        <div class="col-md-4" role="complementary">
          <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
            <ul class="nav bs-docs-sidenav">
              <li>
                <a href="#cgs">车辆管理</a>
                <ul class="nav">
                  <li><a href="#cgs-vehicle">Get vehicle</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    <!-- Footer================================================== -->
    <footer class="bs-docs-footer" role="contentinfo">
      <div class="container">

        <ul class="bs-docs-footer-links text-muted">
          <li>当前版本： <?php echo $this->config->item('version'); ?></li>
          <li>&middot;</li>
          <li><a href="https://github.com/smellycats">GitHub 仓库</a></li>
        </ul>
      </div>
    </footer>
  </body>
</html>