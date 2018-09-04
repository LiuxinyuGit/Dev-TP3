<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
  <title>jQuery左右文字双向列表选择器插件</title>
  <!-- 需要引用的CSS -->
  <link type="text/css" rel="stylesheet" href="/Public/css/bootstrap.css">
  <link type="text/css" rel="stylesheet" href="/Public/css/doublebox-bootstrap.css">
  <style type="text/css">
  .ue-container {
    width: 60%;
    margin: 0 auto;
    margin-top: 3%;
    padding: 20px 40px;
    border: 1px solid #ddd;
    background: #fff;
  }
  </style>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body style="">
  <!-- 页面结构 -->
  <div class="ue-container">
    <div class="bootstrap-duallistbox-container row">
      <div class="box1 col-md-5">
        <label for="bootstrap-duallistbox-nonselected-list_doublebox">愿望清单一</label> <span class="info-container">     <span class="info"></span>
        <button type="button" class="btn clear1 pull-right btn-default btn-xs">show all</button>
        </span>
        <input class="filter form-control ue-form" type="text" placeholder="输入内容可筛选">
        <select multiple="multiple" id="bootstrap-duallistbox-nonselected-list_doublebox" class="form-control" name="doublebox_helper1" style="height: 172px;">
          <option value="1">健康</option>
          <option value="2">快乐</option>
          <option value="3">财富</option>
        </select>
      </div>
      <div class="btn-box col-md-1">
        <button type="button" class="btn db-btn move btn-default" title="Move selected"> <i class="glyphicon glyphicon-arrow-right"></i> </button>
        <button type="button" class="btn db-btn moveall btn-default" title="Move all"> <i class="glyphicon glyphicon-arrow-right"></i> <i class="glyphicon glyphicon-arrow-right"></i> </button>
        <p class="clearfix" style="margin-bottom:20px"></p>
        <button type="button" class="btn db-btn remove btn-default" title="Remove selected"> <i class="glyphicon glyphicon-arrow-left"></i> </button>
        <button type="button" class="btn db-btn removeall btn-default" title="Remove all"> <i class="glyphicon glyphicon-arrow-left"></i> <i class="glyphicon glyphicon-arrow-left"></i> </button>
      </div>
      <div class="box2 col-md-5">
        <label for="bootstrap-duallistbox-selected-list_doublebox">愿望清单二</label> <span class="info-container">     <span class="info"></span>
        <button type="button" class="btn clear2 pull-right btn-default btn-xs">show all</button>
        </span>
        <input class="filter form-control ue-form" type="text" placeholder="输入内容可筛选">
        <select multiple="multiple" id="bootstrap-duallistbox-selected-list_doublebox" class="form-control" name="doublebox_helper2" style="height: 172px;">
          <option value="4" selected="">自由</option>
          <option value="5" selected="">幸福</option>
          <option value="6" selected="">感恩</option>
        </select>
      </div>
      <div class="settingUp-btns">
        <button class="btn db-btn upBtn btn-default"> <i class="glyphicon glyphicon-arrow-up"></i> </button>
        <button class="btn db-btn downBtn btn-default"> <i class="glyphicon glyphicon-arrow-down"></i> </button>
      </div>
    </div>
    <select multiple="multiple" size="10" name="doublebox" class="demo" style="display: none;">
      <option value="1">健康</option>
      <option value="2">快乐</option>
      <option value="3">财富</option>
      <option value="4" selected="">自由</option>
      <option value="5" selected="">幸福</option>
      <option value="6" selected="">感恩</option>
    </select>
  </div>
  <!-- 需要引用的JS -->
  <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
  <script type="text/javascript" src="/Public/js/bootstrap.js"></script>
  <script type="text/javascript" src="/Public/js/doublebox-bootstrap.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    var demo2 = $('.demo').doublebox({
      nonSelectedListLabel: '愿望清单一',
      selectedListLabel: '愿望清单二',
      preserveSelectionOnMove: 'moved',
      moveOnSelect: false,
      nonSelectedList: [{ "roleId": "1", "roleName": "健康" }, { "roleId": "2", "roleName": "快乐" }, { "roleId": "3", "roleName": "财富" }],
      selectedList: [{ "roleId": "4", "roleName": "自由" }, { "roleId": "5", "roleName": "幸福" }, { "roleId": "6", "roleName": "感恩" }],
      optionValue: "roleId",
      optionText: "roleName",
      doubleMove: true,
    });
  })
  </script>
</body>

</html>