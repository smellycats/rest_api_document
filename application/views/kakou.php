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
    {
      "id": 25,
      "code": "25",
      "name": "拖拉机",
      "ps": null,
      "hpys": "其他"
    },
    {
      "id": 26,
      "code": "26",
      "name": "香港入出境车",
      "ps": "",
      "hpys": "其他"
    },
    {
      "id": 27,
      "code": "27",
      "name": "澳门入出境车",
      "ps": "",
      "hpys": "其他"
    },
    {
      "id": 31,
      "code": "31",
      "name": "武警号牌",
      "ps": "",
      "hpys": "其他"
    },
    {
      "id": 99,
      "code": "99",
      "name": "其它号牌",
      "ps": "",
      "hpys": "其他"
    },
    {
      "id": 2,
      "code": "02",
      "name": "小型汽车号牌",
      "ps": "蓝底白字",
      "hpys": "蓝牌"
    },
    {
      "id": 8,
      "code": "08",
      "name": "轻便摩托车号牌",
      "ps": "蓝底白字",
      "hpys": "蓝牌"
    },
    {
      "id": 1,
      "code": "01",
      "name": "大型汽车号牌",
      "ps": "黄底黑字",
      "hpys": "黄牌"
    },
    {
      "id": 7,
      "code": "07",
      "name": "两、三轮摩托号牌",
      "ps": "黄底黑字",
      "hpys": "黄牌"
    },
    {
      "id": 13,
      "code": "13",
      "name": "农用运输车号牌",
      "ps": "黄底黑字黑框线",
      "hpys": "黄牌"
    },
    {
      "id": 14,
      "code": "14",
      "name": "拖拉机号牌",
      "ps": "黄底黑字",
      "hpys": "黄牌"
    },
    {
      "id": 15,
      "code": "15",
      "name": "挂车号牌",
      "ps": "黄底黑字黑框线",
      "hpys": "黄牌"
    },
    {
      "id": 16,
      "code": "16",
      "name": "教练汽车号牌",
      "ps": "黄底黑字黑框线",
      "hpys": "黄牌"
    },
    {
      "id": 17,
      "code": "17",
      "name": "教练摩托车号牌",
      "ps": "黄底黑字黑框线",
      "hpys": "黄牌"
    },
    {
      "id": 20,
      "code": "20",
      "name": "临时入境汽车号牌",
      "ps": "白底红字黑临时入境",
      "hpys": "白牌"
    },
    {
      "id": 21,
      "code": "21",
      "name": "临时入境摩托车号牌",
      "ps": "白底红字黑临时入境",
      "hpys": "白牌"
    },
    {
      "id": 22,
      "code": "22",
      "name": "临时行使车号牌",
      "ps": "白底黑字黑框线",
      "hpys": "白牌"
    },
    {
      "id": 24,
      "code": "24",
      "name": "警用摩托号牌",
      "ps": "",
      "hpys": "白牌"
    },
    {
      "id": 32,
      "code": "32",
      "name": "军队号牌",
      "ps": "",
      "hpys": "白牌"
    },
    {
      "id": 3,
      "code": "03",
      "name": "使馆汽车号牌",
      "ps": "黑底白字、红使字",
      "hpys": "黑牌"
    },
    {
      "id": 4,
      "code": "04",
      "name": "领馆汽车号牌",
      "ps": "黑底白字、红领字",
      "hpys": "黑牌"
    },
    {
      "id": 5,
      "code": "05",
      "name": "境外汽车号牌",
      "ps": "黑底白/红字",
      "hpys": "黑牌"
    },
    {
      "id": 6,
      "code": "06",
      "name": "外籍汽车号牌",
      "ps": "黑底白字",
      "hpys": "黑牌"
    },
    {
      "id": 9,
      "code": "09",
      "name": "使馆摩托车号牌",
      "ps": "黑底白字、红使字",
      "hpys": "黑牌"
    },
    {
      "id": 10,
      "code": "10",
      "name": "领馆摩托车号牌",
      "ps": "黑底白字、红领字",
      "hpys": "黑牌"
    },
    {
      "id": 11,
      "code": "11",
      "name": "境外摩托车号牌",
      "ps": "黑底白字",
      "hpys": "黑牌"
    },
    {
      "id": 12,
      "code": "12",
      "name": "外籍摩托车号牌",
      "ps": "黑底白字",
      "hpys": "黑牌"
    }
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
    {
      "id": 4,
      "code": "B13",
      "name": "重型罐式半挂车"
    },
    {
      "id": 5,
      "code": "B14",
      "name": "重型平板半挂车"
    },
    {
      "id": 6,
      "code": "B15",
      "name": "重型集装箱半挂车"
    },
    {
      "id": 7,
      "code": "B16",
      "name": "重型自卸半挂车"
    },
    {
      "id": 8,
      "code": "B17",
      "name": "重型特殊结构半挂车"
    },
    {
      "id": 9,
      "code": "B21",
      "name": "中型普通半挂车"
    },
    {
      "id": 10,
      "code": "B22",
      "name": "中型厢式半挂车"
    },
    {
      "id": 11,
      "code": "B23",
      "name": "中型罐式半挂车"
    },
    {
      "id": 12,
      "code": "B24",
      "name": "中型平板半挂车"
    },
    {
      "id": 13,
      "code": "B25",
      "name": "中型集装箱半挂车"
    },
    {
      "id": 14,
      "code": "B26",
      "name": "中型自卸半挂车"
    },
    {
      "id": 15,
      "code": "B27",
      "name": "中型特殊结构半挂车"
    },
    {
      "id": 16,
      "code": "B31",
      "name": "轻型普通半挂车"
    },
    {
      "id": 17,
      "code": "B32",
      "name": "轻型厢式半挂车"
    },
    {
      "id": 18,
      "code": "B33",
      "name": "轻型罐式半挂车"
    },
    {
      "id": 19,
      "code": "B34",
      "name": "轻型平板半挂车"
    },
    {
      "id": 20,
      "code": "B35",
      "name": "轻型自卸半挂车"
    },
    {
      "id": 21,
      "code": "B36",
      "name": "轻型集装箱半挂车"
    },
    {
      "id": 22,
      "code": "D",
      "name": "电车"
    },
    {
      "id": 23,
      "code": "D11",
      "name": "无轨电车"
    },
    {
      "id": 24,
      "code": "D12",
      "name": "有轨电车"
    },
    {
      "id": 25,
      "code": "G",
      "name": "全挂车"
    },
    {
      "id": 26,
      "code": "G11",
      "name": "重型普通全挂车"
    },
    {
      "id": 27,
      "code": "G12",
      "name": "重型厢式全挂车"
    },
    {
      "id": 28,
      "code": "G13",
      "name": "重型罐式全挂车"
    },
    {
      "id": 29,
      "code": "G14",
      "name": "重型平板全挂车"
    },
    {
      "id": 30,
      "code": "G15",
      "name": "重型集装箱全挂车"
    },
    {
      "id": 31,
      "code": "G16",
      "name": "重型自卸全挂车"
    },
    {
      "id": 32,
      "code": "G21",
      "name": "中型普通全挂车"
    },
    {
      "id": 33,
      "code": "G22",
      "name": "中型厢式全挂车"
    },
    {
      "id": 34,
      "code": "G23",
      "name": "中型罐式全挂车"
    },
    {
      "id": 35,
      "code": "G24",
      "name": "中型平板全挂车"
    },
    {
      "id": 36,
      "code": "G25",
      "name": "中型集装箱全挂车"
    },
    {
      "id": 37,
      "code": "G26",
      "name": "中型自卸全挂车"
    },
    {
      "id": 38,
      "code": "G31",
      "name": "轻型普通全挂车"
    },
    {
      "id": 39,
      "code": "G32",
      "name": "轻型厢式全挂车"
    },
    {
      "id": 40,
      "code": "G33",
      "name": "轻型罐式全挂车"
    },
    {
      "id": 41,
      "code": "G34",
      "name": "轻型平板全挂车"
    },
    {
      "id": 42,
      "code": "G35",
      "name": "轻型自卸全挂车"
    },
    {
      "id": 43,
      "code": "G36",
      "name": "轻型集装箱全挂车"
    },
    {
      "id": 44,
      "code": "H",
      "name": "货车"
    },
    {
      "id": 45,
      "code": "H11",
      "name": "重型普通货车"
    },
    {
      "id": 46,
      "code": "H12",
      "name": "重型厢式货车"
    },
    {
      "id": 47,
      "code": "H13",
      "name": "重型封闭货车"
    },
    {
      "id": 48,
      "code": "H14",
      "name": "重型罐式货车"
    },
    {
      "id": 49,
      "code": "H15",
      "name": "重型平板货车"
    },
    {
      "id": 50,
      "code": "H16",
      "name": "重型集装厢车"
    },
    {
      "id": 51,
      "code": "H17",
      "name": "重型自卸货车"
    },
    {
      "id": 52,
      "code": "H18",
      "name": "重型特殊结构货车"
    },
    {
      "id": 53,
      "code": "H21",
      "name": "中型普通货车"
    },
    {
      "id": 54,
      "code": "H22",
      "name": "中型厢式货车"
    },
    {
      "id": 55,
      "code": "H23",
      "name": "中型封闭货车"
    },
    {
      "id": 56,
      "code": "H24",
      "name": "中型罐式货车"
    },
    {
      "id": 57,
      "code": "H25",
      "name": "中型平板货车"
    },
    {
      "id": 58,
      "code": "H26",
      "name": "中型集装厢车"
    },
    {
      "id": 59,
      "code": "H27",
      "name": "中型自卸货车"
    },
    {
      "id": 60,
      "code": "H28",
      "name": "中型特殊结构货车"
    },
    {
      "id": 61,
      "code": "H31",
      "name": "轻型普通货车"
    },
    {
      "id": 62,
      "code": "H32",
      "name": "轻型厢式货车"
    },
    {
      "id": 63,
      "code": "H33",
      "name": "轻型封闭货车"
    },
    {
      "id": 64,
      "code": "H34",
      "name": "轻型罐式货车"
    },
    {
      "id": 65,
      "code": "H35",
      "name": "轻型平板货车"
    },
    {
      "id": 66,
      "code": "H37",
      "name": "轻型自卸货车"
    },
    {
      "id": 67,
      "code": "H38",
      "name": "轻型特殊结构货车"
    },
    {
      "id": 68,
      "code": "H41",
      "name": "微型普通货车"
    },
    {
      "id": 69,
      "code": "H42",
      "name": "微型厢式货车"
    },
    {
      "id": 70,
      "code": "H43",
      "name": "微型封闭货车"
    },
    {
      "id": 71,
      "code": "H44",
      "name": "微型罐式货车"
    },
    {
      "id": 72,
      "code": "H45",
      "name": "微型自卸货车"
    },
    {
      "id": 73,
      "code": "H46",
      "name": "微型特殊结构货车"
    },
    {
      "id": 74,
      "code": "H51",
      "name": "低速普通货车"
    },
    {
      "id": 75,
      "code": "H52",
      "name": "低速厢式货车"
    },
    {
      "id": 76,
      "code": "H53",
      "name": "低速罐式货车"
    },
    {
      "id": 77,
      "code": "J",
      "name": "机械"
    },
    {
      "id": 78,
      "code": "J11",
      "name": "轮式装载机械"
    },
    {
      "id": 79,
      "code": "J12",
      "name": "轮式挖掘机械"
    },
    {
      "id": 80,
      "code": "J13",
      "name": "轮式平地机械"
    },
    {
      "id": 81,
      "code": "K",
      "name": "客车"
    },
    {
      "id": 82,
      "code": "K11",
      "name": "大型普通客车"
    },
    {
      "id": 83,
      "code": "K12",
      "name": "大型双层客车"
    },
    {
      "id": 84,
      "code": "K13",
      "name": "大型卧铺客车"
    },
    {
      "id": 85,
      "code": "K14",
      "name": "大型铰接客车"
    },
    {
      "id": 86,
      "code": "K15",
      "name": "大型越野客车"
    },
    {
      "id": 87,
      "code": "K21",
      "name": "中型普通客车"
    },
    {
      "id": 88,
      "code": "K22",
      "name": "中型双层客车"
    },
    {
      "id": 89,
      "code": "K23",
      "name": "中型卧铺客车"
    },
    {
      "id": 90,
      "code": "K24",
      "name": "中型铰接客车"
    },
    {
      "id": 91,
      "code": "K25",
      "name": "中型越野客车"
    },
    {
      "id": 92,
      "code": "K31",
      "name": "小型普通客车"
    },
    {
      "id": 93,
      "code": "K32",
      "name": "小型越野客车"
    },
    {
      "id": 94,
      "code": "K33",
      "name": "轿车"
    },
    {
      "id": 95,
      "code": "K41",
      "name": "微型普通客车"
    },
    {
      "id": 96,
      "code": "K42",
      "name": "微型越野客车"
    },
    {
      "id": 97,
      "code": "K43",
      "name": "微型轿车"
    },
    {
      "id": 98,
      "code": "M",
      "name": "摩托车"
    },
    {
      "id": 99,
      "code": "M11",
      "name": "普通正三轮摩托车"
    },
    {
      "id": 100,
      "code": "M12",
      "name": "轻便正三轮摩托车"
    },
    {
      "id": 101,
      "code": "M13",
      "name": "正三轮载客摩托车"
    },
    {
      "id": 102,
      "code": "M14",
      "name": "正三轮载货摩托车"
    },
    {
      "id": 103,
      "code": "M15",
      "name": "侧三轮摩托车"
    },
    {
      "id": 104,
      "code": "M21",
      "name": "普通二轮摩托车"
    },
    {
      "id": 105,
      "code": "M22",
      "name": "轻便二轮摩托车"
    },
    {
      "id": 106,
      "code": "N",
      "name": "农用车"
    },
    {
      "id": 107,
      "code": "N11",
      "name": "三轮农用运输车"
    },
    {
      "id": 108,
      "code": "N21",
      "name": "四轮农用普通货车"
    },
    {
      "id": 109,
      "code": "N22",
      "name": "四轮农用厢式货车"
    },
    {
      "id": 110,
      "code": "N23",
      "name": "四轮农用罐式货车"
    },
    {
      "id": 111,
      "code": "N24",
      "name": "四轮农用自卸货车"
    },
    {
      "id": 112,
      "code": "Q",
      "name": "牵引车"
    },
    {
      "id": 113,
      "code": "Q11",
      "name": "重型半挂牵引车"
    },
    {
      "id": 114,
      "code": "Q21",
      "name": "中型半挂牵引车"
    },
    {
      "id": 115,
      "code": "Q31",
      "name": "轻型半挂牵引车"
    },
    {
      "id": 116,
      "code": "T",
      "name": "拖拉机"
    },
    {
      "id": 117,
      "code": "T11",
      "name": "大型轮式拖拉机"
    },
    {
      "id": 118,
      "code": "T21",
      "name": "小型轮式拖拉机"
    },
    {
      "id": 119,
      "code": "T22",
      "name": "手扶拖拉机"
    },
    {
      "id": 120,
      "code": "T23",
      "name": "手扶变形运输机"
    },
    {
      "id": 121,
      "code": "X99",
      "name": "其它"
    },
    {
      "id": 122,
      "code": "Z",
      "name": "作业车"
    },
    {
      "id": 123,
      "code": "Z11",
      "name": "大型专项作业车"
    },
    {
      "id": 124,
      "code": "Z21",
      "name": "中型专项作业车"
    },
    {
      "id": 125,
      "code": "Z31",
      "name": "小型专项作业车"
    },
    {
      "id": 126,
      "code": "Z41",
      "name": "微型专项作业车"
    },
    {
      "id": 127,
      "code": "Z51",
      "name": "重型专项作业车"
    },
    {
      "id": 128,
      "code": "Z71",
      "name": "轻型专项作业车"
    }
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
    }
  ]
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
                <p>获取最新车辆信息<p>
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