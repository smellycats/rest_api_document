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
          <li <?php if ($row['name'] == 'kakou'){echo 'class="active"'; }?>>
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
        <h1>卡口系统</h1>
        <p>卡口管理系统api</p>
        <p class="lead">
          <a class="btn btn-outline-inverse btn-lg" href="https://github.com/smellycats/rest_kakou" role="button">
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
            <h1 id="kakou-logo" class="page-header">车型分析</h1>

              <h2 id="kakou-logo-hpys">List hpys</h2>
                <p>获取号牌颜色列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/hpys
                  </div>
                </div>
                <h3 id="kakou-logo-hpys-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/hpys
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 5,
  "items": [
    {
      "id": 1,
      "name": "其他"
    },
    {
      "id": 2,
      "name": "蓝牌"
    },
    {
      "id": 3,
      "name": "黄牌"
    },
    {
      "id": 4,
      "name": "白牌"
    },
    {
      "id": 5,
      "name": "黑牌"
    }
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-hpzl">List hpzl</h2>
                <p>获取号牌种类列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/hpzl
                  </div>
                </div>
                <h3 id="kakou-logo-hpzl-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/hpzl
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>

<pre><code class="json">
{
  "total_count": 30,
  "items": [
    {
      "id": 18,
      "code": "18",
      "name": "试验汽车号牌",
      "ps": "",
      "hpys": "其他"
    },
    {
      "id": 19,
      "code": "19",
      "name": "试验摩托车号牌",
      "ps": "",
      "hpys": "其他"
    },
    {
      "id": 23,
      "code": "23",
      "name": "警用汽车号牌",
      "ps": "",
      "hpys": "其他"
    },
    ...
  ]
}
</code></pre>
                  </div>


              <h2 id="kakou-logo-csys">List csys</h2>
                <p>获取车身颜色列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/csys
                  </div>
                </div>
                <h3 id="kakou-logo-csys-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/csys
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 11,
  "items": [
    {
      "id": 1,
      "code": "A",
      "name": "白"
    },
    {
      "id": 2,
      "code": "B",
      "name": "灰"
    },
    {
      "id": 3,
      "code": "C",
      "name": "黄"
    },
    {
      "id": 4,
      "code": "D",
      "name": "粉"
    },
    {
      "id": 5,
      "code": "E",
      "name": "红"
    },
    {
      "id": 6,
      "code": "F",
      "name": "紫"
    },
    {
      "id": 7,
      "code": "G",
      "name": "绿"
    },
    {
      "id": 8,
      "code": "H",
      "name": "蓝"
    },
    {
      "id": 9,
      "code": "I",
      "name": "棕"
    },
    {
      "id": 10,
      "code": "J",
      "name": "黑"
    },
    {
      "id": 11,
      "code": "Z",
      "name": "其他"
    }
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-cllx">List cllx</h2>
                <p>获取车辆类型列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/cllx
                  </div>
                </div>
                <h3 id="kakou-logo-cllx-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/cllx
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 128,
  "items": [
    {
      "id": 1,
      "code": "B",
      "name": "半挂车"
    },
    {
      "id": 2,
      "code": "B11",
      "name": "重型普通半挂车"
    },
    {
      "id": 3,
      "code": "B12",
      "name": "重型厢式半挂车"
    },
    ...
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-fxbh">List fxbh</h2>
                <p>获取方向编号<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/fxbh
                  </div>
                </div>
                <h3 id="kakou-logo-fxbh-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/fxbh
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 7,
  "items": [
    {
      "id": 1,
      "name": "其他"
    },
    {
      "id": 2,
      "name": "进城"
    },
    {
      "id": 3,
      "name": "出城"
    },
    {
      "id": 4,
      "name": "由东往西"
    },
    {
      "id": 5,
      "name": "由南往北"
    },
    {
      "id": 6,
      "name": "由西往东"
    },
    {
      "id": 7,
      "name": "由北往南"
    }
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-place">List place</h2>
                <p>获取车辆类型列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/place
                  </div>
                </div>
                <h3 id="kakou-logo-place-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/place
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 4,
  "items": [
    {
      "id": 2,
      "name": "淡水海关卡口",
      "config_id": 2,
      "kkbh": null
    },
    {
      "id": 3,
      "name": "新圩塘吓卡口",
      "config_id": 13,
      "kkbh": null
    },
    {
      "id": 4,
      "name": "镇隆大路背卡口",
      "config_id": 14,
      "kkbh": null
    },
    {
      "id": 5,
      "name": "淡水人民桥",
      "config_id": 15,
      "kkbh": null
    },
    ...
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-ppdm">List ppdm</h2>
                <p>获取品牌代码列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/ppdm
                  </div>
                </div>
                <h3 id="kakou-logo-ppdm-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/ppdm
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 157,
  "items": [
    {
      "id": 1,
      "code": "001",
      "name": "奥迪"
    },
    {
      "id": 2,
      "code": "002",
      "name": "阿尔法罗密欧"
    },
    {
      "id": 3,
      "code": "003",
      "name": "阿斯顿马丁"
    },
    ...
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-ppdm2">Get ppdm</h2>
                <p>获取子品牌代码列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/ppdm/{code}
                  </div>
                </div>
                <h3 id="kakou-logo-ppdm2-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/ppdm/001
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 17,
  "code": "001",
  "items": [
    {
      "code": "001001",
      "name": "奥迪100"
    },
    {
      "code": "001002",
      "name": "奥迪A1"
    },
    {
      "code": "001003",
      "name": "奥迪A3"
    },
    ...
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-carinfo">Get carinfo</h2>
                <p>获取车辆信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/carinfo/{id}
                  </div>
                </div>
                <h3 id="kakou-logo-carinfo-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/carinfo/6
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "id": "6",
  "jgsj": "2015-05-21 23:13:35",
  "hphm": "粤L12345",
  "cltx_id": "2",
  "cdbh": "2",
  "ppdm": "010",
  "ppdm2": "999999",
  "kxd": "0",
  "clpp": "本田",
  "place_id": "1",
  "place": "其他",
  "hpys_id": "2",
  "hpys": "蓝牌",
  "cllx_code": "K31",
  "cllx": "小型普通客车",
  "fxbh_id": "3",
  "fxbh": "出城",
  "hpzl_code": "7",
  "csys_code": "B",
  "csys": "灰",
  "imgurl": "http://127.0.0.1/SpreadDataE/ImageFile/2015/05/26/23/hdk01/23335400099.jpg"
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-fresh">Get fresh</h2>
                <p>获取实时车辆信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/fresh
                  </div>
                </div>
                <h3 id="kakou-logo-fresh-parameters">parameters</h3>
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
                        <td>查询条件，第一个参数为用户id</td>
                      </tr>
                  </table>
                  <p>请求参数<span class="label label-primary">q</span>可以是下列组合</p>
                  <ul>
                    <li>
                      <span class="label label-info">place</span>卡口地点id,内容是整形数值.
                    </li>
                    <li>
                      <span class="label label-info">fxbh</span>方向id,内容是整形数值.
                    </li>
                  </ul>
                <h3 id="kakou-logo-fresh-example">example</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/fresh?q=1+place:4+fxbh:2
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 2,
  "items": [
    {
      "id": "13367202",
      "jgsj": "2015-05-26 23:18:58",
      "hphm": "-",
      "cltx_id": "188848374",
      "cdbh": "2",
      "ppdm": "999",
      "ppdm2": "999999",
      "kxd": "0",
      "clpp": "其他",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "1",
      "hpys": "其他",
      "cllx_code": "Q",
      "cllx": "其他",
      "fxbh_id": "2",
      "fxbh": "进城",
      "hpzl_code": "99",
      "csys_code": "Z",
      "csys": "其他",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23185800029.jpg"
    },
    {
      "id": "13367201",
      "jgsj": "2015-05-26 23:18:57",
      "hphm": "粤L12345",
      "cltx_id": "188848373",
      "cdbh": "2",
      "ppdm": "010",
      "ppdm2": "010014",
      "kxd": "67",
      "clpp": "本田CRV-5",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "1",
      "hpys": "其他",
      "cllx_code": "Q",
      "cllx": "其他",
      "fxbh_id": "2",
      "fxbh": "进城",
      "hpzl_code": "99",
      "csys_code": "Z",
      "csys": "其他",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23185700028.jpg"
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
                <a href="#kakou-logo">车型分析</a>
                <ul class="nav">
                  <li><a href="#kakou-logo-hpys">List hpys</a></li>
                  <li><a href="#kakou-logo-hpzl">List hpzl</a></li>
                  <li><a href="#kakou-logo-csys">List csys</a></li>
                  <li><a href="#kakou-logo-cllx">List cllx</a></li>
                  <li><a href="#kakou-logo-fxbh">List fxbh</a></li>
                  <li><a href="#kakou-logo-place">List place</a></li>
                  <li><a href="#kakou-logo-ppdm">List ppdm</a></li>
                  <li><a href="#kakou-logo-ppdm2">Get ppdm</a></li>
                  <li><a href="#kakou-logo-carinfo">Get carinfo</a></li>
                  <li><a href="#kakou-logo-fresh">Get fresh</a></li>
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