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
          <?php foreach($this->config->item('menu') as $row): ?>
          <li>
            <a href="<?php echo site_url($row['name']); ?>"><?php echo $row['cname']; ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
    </header>

    <!-- Docs page layout -->
    <div class="bs-docs-header" id="content" tabindex="-1">
      <div class="container">
        <h1>概览</h1>
        <p>这是一个RESTful API 的设计描述</p>
      </div>
    </div>

    <div class="container bs-docs-container">
      <div class="row">
        <div class="col-md-8" role="main">
          <div class="bs-docs-section">
            <h1 id="rest" class="page-header">REST API 规范</h1>

              <h2 id="rest-dc">HTTP动词</h2>
                <table class="table table-bordered">
                  <colgroup>
                    <col class="col-xs-1">
                    <col class="col-xs-7">
                  </colgroup>
                  <thead>
                    <tr>
                      <th>动词</th>
                      <th>描述</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>HEAD</td>
                      <td>请求用于获取某个资源的元数据(metadata)–比如,该资源是否存在,该资源的内容长度是多少等等.</td>
                    </tr>
                    <tr>
                      <td>GET</td>
                      <td>获取资源（一项或多项）.</td>
                    </tr>
                    <tr>
                      <td>POST</td>
                      <td>创建资源.</td>
                    </tr>
                    <tr>
                      <td>PATCH</td>
                      <td>更新资源（客户端提供改变的属性）.</td>
                    </tr>
                    <tr>
                      <td>PUT</td>
                      <td>更新资源（客户端提供改变后的完整资源）.</td>
                    </tr>
                    <tr>
                      <td>DELETE</td>
                      <td>删除资源.</td>
                    </tr>
                </table>

              <h2 id="rest-status">HTTP状态码</h2>
                <p>服务器向用户返回的状态码和提示信息.</p>
                <ul>
                  <li>200 OK: 服务器成功返回用户请求的资源，该操作是幂等的。</li>
                  <li>201 Created: 创建资源成功。</li>
                  <li>202 Accepted: 表示一个请求已经进入后台队列（异步任务）。</li>
                  <li>204 No Content: 删除资源成功。</li>
                  <li>400 Bad Request: 用户发出的请求有错误，服务器没有进行新建或修改数据的操作，该操作是幂等的。</li>
                  <li>401 Unauthorized: 表示用户没有权限（令牌、用户名、密码错误）。</li>
                  <li>403 Forbidden: 表示用户得到授权（与401错误相对），但是访问是被禁止的。</li>
                  <li>404 Not Found: 用户发出的请求针对的是不存在的记录，服务器没有进行操作，该操作是幂等的。</li>
                  <li>408 Request Timeout: 请求超时。 </li>
                  <li>422 Unprocessable Entity: 请求格式正确，但是由于含有语义错误，无法响应。</li>
                  <li>500 Internal Server Error: 服务器发生错误，用户将无法判断发出的请求是否成功。</li>
                </ul>
          </div>
        </div>

        <div class="col-md-4" role="complementary">
          <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm">
            <ul class="nav bs-docs-sidenav">
              <li>
                <a href="#rest">REST API 规范</a>
                <ul class="nav">
                  <li><a href="#rest-dc">HTTP动词</a></li>
                  <li><a href="#rest-status">HTTP状态码</a></li>
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