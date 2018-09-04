<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>地址匹配</title>
  <style type="text/css">
  #map {
    width: 600px;
    height: 350px;
    overflow: hidden;
    margin: 0;
    font-family: "微软雅黑";
  }
  </style>
</head>

<body>
  <input id="addr" type="text" oninput="listen()" />
  <div id="map"></div>
</body>
<script src="/Public/js/jquery.min.js"></script>
<script src="/assets/layer/layer.js"></script>
<script src="http://api.map.baidu.com/api?v=2.0&ak=H5RHpSKVlBw3fTq4WOYdhMGGHxiDQG7f"></script>
<script>
//百度地图API
var map = new BMap.Map("map");
var point = new BMap.Point(114.063402, 22.54899);

//监听器标记
var sign = 0;

//更新前的输入值
var oldval = '';

window.onload = function() {
  map.centerAndZoom(point, 13);
  map.enableScrollWheelZoom(); //启用滚轮放大缩小，默认禁用
  map.enableContinuousZoom(); //启用地图惯性拖拽，默认禁用
}

function listen() {
  var val = $('#addr').val();
  if (val == oldval) {
    clearInterval(sign);
    getMap();
  } else {
    oldval = val;
    clearInterval(sign);
    sign = setInterval("listen();", 1500);
  }
}

function getMap() {
  // 创建地址解析器实例
  var myGeo = new BMap.Geocoder();
  // 将地址解析结果显示在地图上,并调整地图视野
  myGeo.getPoint(oldval, function(point) {
    if (point) {
      map.centerAndZoom(point, 14);
      map.clearOverlays();
      map.addOverlay(new BMap.Marker(point));
    } else {
      layer.msg("未匹配到该地址!");
    }
  }, "深圳市");

}
</script>

</html>