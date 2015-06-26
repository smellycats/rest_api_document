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
          <li>
            <a href="<?php echo site_url('cgs'); ?>">车管所</a>
          </li>
          <li class="active">
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

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-8" role="main">
          <div class="bs-docs-section">
            <h1 id="overview" class="page-header">概述</h1>
              <h2 id="errors">Errors</h2>
                <p>以下是所有错误响应情况</p>
                <p><span class="label label-primary">1</span>服务器繁忙<p>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 449 Retry With</div>
<pre>
{
  "message": "Server is busy"
}
</pre>
                </div>

                <p><span class="label label-primary">2</span>等待超时(默认5s)<p>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 408 Request Timeout</div>
<pre>
{
  "message": "Timeout"
}
</pre>
                </div>

                <p><span class="label label-primary">3</span>URL 路径错误<p>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 400 Bad Request</div>
<pre>
{
  "message": "URL error"
}
</pre>
                </div>
          </div>

          <div class="bs-docs-section">
            <h1 id="carrecg" class="page-header">车型识别</h1>

              <h2 id="carrecg-create">Create a carrecg</h2>
                <p>post图片地址获取识别信息.需要Basic Auth权限认证.</p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    POST /v1/recg
                  </div>
                </div>
                <h3 id="carrecg-create-parameters">Parameters</h3>
                  <table class="table table-bordered">
                    <colgroup>
                      <col class="col-xs-1">
                      <col class="col-xs-1">
                      <col class="col-xs-6">
                    </colgroup>
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>imgurl</td>
                        <td>string</td>
                        <td>The img URL</td>
                      </tr>
                      <tr>
                        <td>coord</td>
                        <td>array of number</td>
                        <td>Recognition area of the img.</td>
                      </tr>
                  </table>
                <h3 id="carrecg-create-input">Input</h3>
<pre>
{
  "imgurl": "http://localhost/imgareaselect/imgs/1.jpg",
  "coord": [
    100,
    50,
    1200,
    900
  ]
}
</pre>
                <h3 id="carrecg-create-response">Response</h3>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 201 Created</div>
<pre>
{
  "imgurl": "http://localhost/imgareaselect/imgs/1.jpg",
  "coord": [
    100,
    50,
    1200,
    900
  ], 
  "recginfo": [
    {
      "ywhp": 1,
      "jcsj": "2015-06-26 13:48:50",
      "ppdm": "010",
      "clpp": "本田CRV-1",
      "kxd": 89,
      "ywcl": 1,
      "hpzl": "02",
      "csys": "J",
      "cllx": "K32",
      "hphm": "粤L12345"
    }
  ]
}
</pre>
                  </div>
          </div>
        </div>

        <div class="col-md-4" role="complementary">
          <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
            <ul class="nav bs-docs-sidenav">
              <li>
                <a href="#overview">概述</a>
                <ul class="nav">
                  <li><a href="#errors">Errors</a></li>
                </ul>
              </li>
              <li>
                <a href="#carrecg">车型识别</a>
                <ul class="nav">
                  <li><a href="#carrecg-create">Create a carrecg</a></li>
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