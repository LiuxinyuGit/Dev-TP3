<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>charts</title>
  <style>
  	body>div{
  		float: left;
  	}
  </style>
</head>

<body>
  <div>
    <div id="c1" style="width: 35rem; height: 30rem;"></div>
    <div id="c2" style="width: 35rem; height: 30rem;"></div>
  </div>
  <div>
    <div id="c3" style="width: 35rem; height: 30rem;"></div>
    <div id="c4" style="width: 35rem; height: 30rem;"></div>
  </div>
</body>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/echarts.common.min.js"></script>
<script>
var mychart1 = echarts.init(document.getElementById('c1'));
var mychart2 = echarts.init(document.getElementById('c2'));
var mychart3 = echarts.init(document.getElementById('c3'));
var mychart4 = echarts.init(document.getElementById('c4'));

mychart1.showLoading();
mychart2.showLoading();
mychart3.showLoading();
mychart4.showLoading();

var option = {
  title: {
    text: '示例'
  },
  tooltip: {},
  legend: {
    data: ['销量']
  },
  xAxis: {
    type: 'category',
    boundaryGap: false,
    data: ["衬衫", "羊毛衫", "雪纺衫", "裤子", "高跟鞋", "袜子"],
    name: '商品',
  },
  yAxis: {
    type: 'value'
  },
  series: [{
    name: '销量',
    type: 'line',
    data: [5, 20, 36, 10, 10, 20],
    areaStyle: {
      color: "#adadad"
    }
  }]
};
// setTimeout(function() {
  mychart1.hideLoading();
  mychart1.setOption(option);
  mychart2.hideLoading();
  mychart2.setOption(option);
  mychart3.hideLoading();
  mychart3.setOption(option);
  mychart4.hideLoading();
  mychart4.setOption(option);
// }, 1500);
</script>

</html>