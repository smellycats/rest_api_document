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
      "code": "QT",
      "name": "其他"
    },
    {
      "id": 2,
      "code": "BU",
      "name": "蓝牌"
    },
    {
      "id": 3,
      "code": "YL",
      "name": "黄牌"
    },
    ...
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
      "id": 1,
      "code": "01",
      "name": "大型汽车号牌",
      "hpys": "黄牌",
      "hpys_code": "YL",
      "ps": "黄底黑字"
    },
    {
      "id": 2,
      "code": "02",
      "name": "小型汽车号牌",
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "ps": "蓝底白字"
    },
    {
      "id": 3,
      "code": "03",
      "name": "使馆汽车号牌",
      "hpys": "黑牌",
      "hpys_code": "BK",
      "ps": "黑底白字、红使字"
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
    ...
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
      "code": "QT",
      "name": "其他"
    },
    {
      "id": 2,
      "code": "IN",
      "name": "进城"
    },
    {
      "id": 3,
      "code": "OT",
      "name": "出城"
    },
    ...
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-place">List place</h2>
                <p>获取卡口地点列表<p>
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
    ...
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-kkdd">List kkdd</h2>
                <p>获取卡口地点列表(使用卡口编号)<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/kkdd
                  </div>
                </div>
                <h3 id="kakou-logo-kkdd-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/kkdd
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 4,
  "items": [
    {
      "id": "441323003",
      "name": "淡水海关卡口"
    },
    {
      "id": "441323009",
      "name": "新圩塘吓卡口"
    },
    {
      "id": "441323007",
      "name": "镇隆大路背卡口"
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
  "total_count": 229,
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
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-ppdm2">Get ppdm</h2>
                <p>获取子品牌代码列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/ppdm/:code
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

              <h2 id="kakou-logo-ppdmall">List ppdmall</h2>
                <p>获取所有车辆品牌代码列表<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/ppdmall
                  </div>
                </div>
                <h3 id="kakou-logo-ppdmall-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/ppdmall
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 229,
  "items": [
    {
      "id": 1,
      "code": "001",
      "name": "奥迪",
      "count": 17,
      "items": [
        {
          "id": 1327,
          "code": "001001",
          "name": "奥迪100"
        },
        {
          "id": 1328,
          "code": "001002",
          "name": "奥迪A1"
        },
        ...
      ]
    }
    ...
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-carinfo">Get carinfo</h2>
                <p>获取车辆信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/carinfo/:id
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
  "clpp_dtl": "本田思域-2",
  "place_id": "1",
  "place": "其他",
  "hpys_id": "2",
  "hpys": "蓝牌",
  "hpys_code": "BU",
  "cllx_code": "K31",
  "cllx": "小型普通客车",
  "fxbh_id": "3",
  "fxbh": "出城",
  "fxbh_code": "OT",
  "hpzl_code": "02",
  "csys_code": "B",
  "csys": "灰",
  "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=6",
  "imgurl": "http://127.0.0.1/SpreadDataE/ImageFile/2015/05/26/23/hdk01/23335400099.jpg",
  "kkdd_id": null,
  "kkdd": "其他"
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-carinfo2">Get carinfo2</h2>
                <p>根据cltx表id获取车辆信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/carinfo2/:id
                  </div>
                </div>
                <h3 id="kakou-logo-carinfo2-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/carinfo2/2
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
  "clpp_dtl": "本田思域-2",
  "place_id": "1",
  "place": "其他",
  "hpys_id": "2",
  "hpys": "蓝牌",
  "hpys_code": "BU",
  "cllx_code": "K31",
  "cllx": "小型普通客车",
  "fxbh_id": "3",
  "fxbh": "出城",
  "fxbh_code": "OT",
  "hpzl_code": "02",
  "csys_code": "B",
  "csys": "灰",
  "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=6",
  "imgurl": "http://127.0.0.1/SpreadDataE/ImageFile/2015/05/26/23/hdk01/23335400099.jpg",
  "kkdd_id": null,
  "kkdd": "其他"
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-carinfos">List carinfos</h2>
                <p>根据条件获取车辆信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/carinfos
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
                        <td>查询条件, 第一个参数车牌号码。如果没有号牌号码则留空，例如：
                        http://127.0.0.1/rest_kakou/index.php/v1/logo/carinfos?q=+st:2015-05-26 2012:34:56+et:2015-05-27 2012:34:56+kkdd:441323007+fxbh:IN+hpys:BU+ppdm:114&page=1&per_page=20&sort=ppdm&order=desc
                        或 http://127.0.0.1/rest_kakou/index.php/v1/logo/carinfos?q=null
                      </td>
                      </tr>
                      <tr>
                        <td>page</td>
                        <td>int</td>
                        <td>页数. 大于等于1整数, 默认值1.</td>
                      </tr>
                      <tr>
                        <td>per_page</td>
                        <td>int</td>
                        <td>每页行数. 正整数, 默认值20.</td>
                      </tr>
                      <tr>
                        <td>sort</td>
                        <td>string</td>
                        <td>排序字段. <code>id</code>, <code>ppdm</code>, <code>jgsj</code>中的一个，默认值是<code>id</code>.</td>
                      </tr>
                      <tr>
                        <td>order</td>
                        <td>string</td>
                        <td>排序方向,条件是sort已经设置. <code>asc</code> or <code>desc</code>, 默认值<code>desc</code>.</td>
                      </tr>
                    </tbody>
                  </table>
                  <p>请求参数<span class="label label-primary">q</span>可以是下列组合</p>
                  <ul>
                    <li>
                      <span class="label label-info">st</span>开始时间, 格式为yyyy-mm-dd hh:mm:ss.
                    </li>
                    <li>
                      <span class="label label-info">et</span>结束时间, 格式为yyyy-mm-dd hh:mm:ss.
                    </li>
                    <li>
                      <span class="label label-info">kkdd</span>卡口地点编号,如441323001.此字段和place等价,如果查询条件同时有kkdd和place则系统默认使用kkdd.
                    </li>
                    <li>
                      <span class="label label-info">place</span>卡口地点id,内容是整形数值.
                    </li>
                    <li>
                      <span class="label label-info">fxbh</span>方向,可以是fxbh_id如“2”表示“进城”，也可以使用fxbh_code如“IN”.
                    </li>
                    <li>
                      <span class="label label-info">ppdm</span>品牌代码,例如：031 or 031001.
                    </li>
                    <li>
                      <span class="label label-info">hpys</span>根据号牌颜色查询车辆信息,内容可以是
                      <code>QT</code>, <code>BU</code>, <code>YL</code>, <code>WT</code> or <code>BK</code>.
                      以下是等价的参数
                      <code>other</code>=<code>其他</code>=<code>1</code>=<code>QT</code>,
                      <code>blue</code>=<code>蓝</code>=<code>2</code>=<code>BU</code>,
                      <code>yellow</code>=<code>黄</code>=<code>3</code>=<code>YL</code>,
                      <code>white</code>=<code>白</code>=<code>4</code>=<code>WT</code>,
                      <code>black</code>=<code>黑</code>=<code>5</code>=<code>BK</code>.
                    </li>
                  </ul>
                <h3 id="kakou-logo-carinfos-example">example</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      http://127.0.0.1/rest_kakou/index.php/v1/logo/carinfos?q=粤LD%+st:2015-05-26 2012:34:56+et:2015-05-27 2012:34:56+kkdd:441323007+fxbh:IN+hpys:BU+ppdm:114&page=1&per_page=20&sort=ppdm&order=desc
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 4,
  "items": [
    {
      "id": "13363659",
      "jgsj": "2015-05-26 23:19:23",
      "hphm": "粤LDF127",
      "cltx_id": "188848398",
      "cdbh": "2",
      "ppdm": "114",
      "ppdm2": "114003",
      "kxd": "65",
      "clpp": "五菱",
      "clpp_dtl": "五菱之光-2005款",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "2",
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "cllx_code": "K31",
      "cllx": "小型普通客车",
      "fxbh_id": "2",
      "fxbh": "进城",
      "fxbh_code": "IN",
      "hpzl_code": "02",
      "csys_code": "A",
      "csys": "白",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=13363659",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23192300053.jpg",
      "kkdd_id": "441323007",
      "kkdd": "镇隆大路背卡口"
    },
    {
      "id": "13366038",
      "jgsj": "2015-05-26 23:19:23",
      "hphm": "粤LDF127",
      "cltx_id": "188848398",
      "cdbh": "2",
      "ppdm": "114",
      "ppdm2": "114003",
      "kxd": "65",
      "clpp": "五菱",
      "clpp_dtl": "五菱之光-2005款",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "2",
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "cllx_code": "K31",
      "cllx": "小型普通客车",
      "fxbh_id": "2",
      "fxbh": "进城",
      "fxbh_code": "IN",
      "hpzl_code": "02",
      "csys_code": "A",
      "csys": "白",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=13366038",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23192300053.jpg",
      "kkdd_id": "441323007",
      "kkdd": "镇隆大路背卡口"
    },
    {
      "id": "13364469",
      "jgsj": "2015-05-26 23:43:45",
      "hphm": "粤LD9402",
      "cltx_id": "188849276",
      "cdbh": "2",
      "ppdm": "114",
      "ppdm2": "114003",
      "kxd": "69",
      "clpp": "五菱",
      "clpp_dtl": "五菱之光-2005款",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "2",
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "cllx_code": "K31",
      "cllx": "小型普通客车",
      "fxbh_id": "2",
      "fxbh": "进城",
      "fxbh_code": "IN",
      "hpzl_code": "02",
      "csys_code": "A",
      "csys": "白",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=13364469",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23434500031.jpg",
      "kkdd_id": "441323007",
      "kkdd": "镇隆大路背卡口"
    },
    {
      "id": "13366848",
      "jgsj": "2015-05-26 23:43:45",
      "hphm": "粤LD9402",
      "cltx_id": "188849276",
      "cdbh": "2",
      "ppdm": "114",
      "ppdm2": "114003",
      "kxd": "69",
      "clpp": "五菱",
      "clpp_dtl": "五菱之光-2005款",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "2",
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "cllx_code": "K31",
      "cllx": "小型普通客车",
      "fxbh_id": "2",
      "fxbh": "进城",
      "fxbh_code": "IN",
      "hpzl_code": "02",
      "csys_code": "A",
      "csys": "白",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=13366848",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23434500031.jpg",
      "kkdd_id": "441323007",
      "kkdd": "镇隆大路背卡口"
    }
  ]
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
                      <span class="label label-info">kkdd</span>卡口地点编号,如441323001.此字段和place等价,如果查询条件同时有kkdd和place则系统默认使用kkdd.
                    </li>
                    <li>
                      <span class="label label-info">place</span>卡口地点id,内容是整形数值.
                    </li>
                    <li>
                      <span class="label label-info">fxbh</span>方向,可以是fxbh_id如“2”表示“进城”，也可以使用fxbh_code如“IN”.
                    </li>
                  </ul>
                <h3 id="kakou-logo-fresh-example">example</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/fresh?q=1+kkdd:441323007+fxbh:IN
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
      "clpp_dtl": "其他",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "1",
      "hpys": "其他",
      "hpys_code": "QT",
      "cllx_code": "Q",
      "cllx": "其他",
      "fxbh_id": "2",
      "fxbh": "进城",
      "fxbh_code": "IN",
      "hpzl_code": "99",
      "csys_code": "Z",
      "csys": "其他",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=13367202",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23185800029.jpg",
      "kkdd_id": "441323007",
      "kkdd": "镇隆大路背卡口"
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
      "clpp": "本田",
      "clpp_dtl": "本田CRV-5",
      "place_id": "4",
      "place": "镇隆大路背卡口",
      "hpys_id": "1",
      "hpys": "其他",
      "hpys_code": "QT",
      "cllx_code": "Q",
      "cllx": "其他",
      "fxbh_id": "2",
      "fxbh": "进城",
      "fxbh_code": "IN",
      "hpzl_code": "99",
      "csys_code": "Z",
      "csys": "其他",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=13367201",
      "imgurl": "http://127.0.0.1/SpreadDataH/ImageFile/2015/05/26/23/hdk09/23185700028.jpg",
      "kkdd_id": "441323007",
      "kkdd": "镇隆大路背卡口"
    }
  ]
}
</code></pre>
                  </div>

              <h2 id="kakou-logo-maxid">Get maxid</h2>
                <p>获取carinfo表最大id<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /logo/maxid
                  </div>
                </div>
                <h3 id="kakou-logo-maxid-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/logo/maxid
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "maxid": 456
}
</code></pre>
                  </div>
          </div>

          <div class="bs-docs-section">
            <h1 id="kakou-cltx" class="page-header">车辆查询</h1>

              <h2 id="kakou-cltx-cltx">Get cltx</h2>
                <p>根据id获取cltx表信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /cltx/cltx/:id
                  </div>
                </div>
                <h3 id="kakou-cltx-cltx-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/cltx/cltx/2
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "id": 2,
  "jgsj": "2015-05-21 23:13:35",
  "hphm": "粤L12345",
  "cdbh": 2,
  "hpys": "蓝牌",
  "hpys_code": "BU",
  "fxbh": "出城",
  "fxbh_code": "OT",
  "hpzl_code": "02",
  "clbj": "B",
  "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=2",
  "imgurl": "http://127.0.0.1/SpreadDataE/ImageFile/2015/05/26/23/hdk01/23335400099.jpg",
  "kkdd_id": "441323001",
  "kkdd": "稔山镇（大埔坉）"
}
</code></pre>
                  </div>

              <h2 id="kakou-cltx-cltxs">List cltxs</h2>
                <p>根据id范围获取cltx表信息<p>
                <div class="panel panel-default">
                  <div class="panel-body">
                    GET /cltx/cltx/:id/:last_id
                  </div>
                </div>
                <h3 id="kakou-cltx-cltxs-example">实例</h3>
                  <div class="panel panel-default">
                    <div class="panel-body">
                      https://127.0.0.1/rest_kakou/index.php/v1/cltx/cltx/2/4
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">Status: 200 OK</div>
<pre><code class="json">
{
  "total_count": 2,
  "items": [
    {
      "id": 3,
      "jgsj": "2015-05-21 23:13:35",
      "hphm": "粤L12345",
      "cdbh": 2,
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "fxbh": "出城",
      "fxbh_code": "OT",
      "hpzl_code": "02",
      "clbj": "B",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=3",
      "imgurl": "http://127.0.0.1/SpreadDataE/ImageFile/2015/05/26/23/hdk01/23335400234.jpg",
      "kkdd_id": "441323001",
      "kkdd": "稔山镇（大埔坉）"
    },
    {
      "id": 4,
      "jgsj": "2015-05-21 23:13:40",
      "hphm": "粤L54321",
      "cdbh": 2,
      "hpys": "蓝牌",
      "hpys_code": "BU",
      "fxbh": "出城",
      "fxbh_code": "OT",
      "hpzl_code": "02",
      "clbj": "B",
      "thumb_url": "http://127.0.0.1/rest_kakou/index.php/v1/img/thumb?id=4",
      "imgurl": "http://127.0.0.1/SpreadDataE/ImageFile/2015/05/26/23/hdk01/233354000123.jpg",
      "kkdd_id": "441323001",
      "kkdd": "稔山镇（大埔坉）"
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
                  <li><a href="#kakou-logo-kkdd">List kkdd</a></li>
                  <li><a href="#kakou-logo-ppdm">List ppdm</a></li>
                  <li><a href="#kakou-logo-ppdm2">Get ppdm</a></li>
                  <li><a href="#kakou-logo-ppdmall">List ppdmall</a></li>
                  <li><a href="#kakou-logo-carinfo">Get carinfo</a></li>
                  <li><a href="#kakou-logo-carinfo2">Get carinfo2</a></li>
                  <li><a href="#kakou-logo-carinfos">List carinfos</a></li>
                  <li><a href="#kakou-logo-fresh">Get fresh</a></li>
                  <li><a href="#kakou-logo-maxid">Get maxid</a></li>
                </ul>
                <a href="#kakou-cltx">车辆查询</a>
                <ul class="nav">
                  <li><a href="#kakou-cltx-cltx">Get cltx</a></li>
                  <li><a href="#kakou-cltx-cltxs">List cltxs</a></li>
                  <li><a href="#kakou-cltx-maxid">Get maxid</a></li>
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