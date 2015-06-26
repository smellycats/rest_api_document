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
          <li>
            <a href="<?php echo site_url('carrecg'); ?>">车型识别</a>
          </li>
          <li class="active">
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
            <h1 id="package" class="page-header">图片打包</h1>

              <h2 id="package-create">Create a package</h2>
                <p>创建一个图片包裹.需要Basic Auth权限认证.</p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    POST /v1/package
                  </div>
                </div>
                <h3 id="package-create-parameters">Parameters</h3>
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
                        <td>urls</td>
                        <td>array of string</td>
                        <td>The img URL</td>
                      </tr>
                  </table>
                <h3 id="package-create-input">Input</h3>
<pre>
{
  "urls": [
    "http://localhost/imgareaselect/imgs/1.jpg",
    "http://localhost/imgareaselect/imgs/2.jpg"
  ]
}
</pre>
                <h3 id="package-create-response">Response</h3>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 201 Created</div>
<pre>
{
  "package": "0186c3b12fb9aa935c42586d371cca48.zip"
}
</pre>
                  </div>
          </div>
        </div>

        <div class="col-md-4" role="complementary">
          <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
            <ul class="nav bs-docs-sidenav">
              <li>
                <a href="#package">图片打包</a>
                <ul class="nav">
                  <li><a href="#package-create">Create a package</a></li>
                </ul>
            </li>
          </ul>
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