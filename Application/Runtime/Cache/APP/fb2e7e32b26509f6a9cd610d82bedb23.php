<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>

<head>
  <title>列表选择</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/Public/css/style.css">
  <link rel="stylesheet" href="/Public/css/bootstrap.min.css">
</head>

<body>
  <div id="selectTitle" class="list-select">
    <div class="list-title">title</div>
    <div class="list-body">
      <div class="item-box left-box">
        <!-- 左边框初始化待选项 -->
        <ul class="item-list">
          <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><li class="item" data-id="<?php echo ($item["id"]); ?>" data-price="<?php echo ($item["price"]); ?>" data-name="<?php echo ($item["name"]); ?>"><?php echo ($item["name"]); ?>
              <div class="item-act">
                <!-- <button class="btn btn-default btn-sm item-btn" type="button">添加</button> -->
                <div class="item-input input-group input-group-sm">
                  <span class="input-group-addon minus">-</span>
                  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="0">
                  <!-- <span class="input-group-addon plus" onclick="plus(this)">+</span> -->
                  <span class="input-group-addon plus">+</span>
                </div>
                <h6>￥<small><?php echo ($item["price"]); ?></small></h6>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="center-box">
        <button class="add-one" title="添加选中项">添加</button>
        <button class="remove-all" title="移除全部">清空</button>
      </div>
      <div class="item-box right-box">
        <!-- 右边框存放已选项 -->
      </div>
    </div>
    <!-- <div class="list-footer">
      <button>Success</button>
    </div> -->
  </div>
</body>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/js/bootstrap.min.js"></script>
<script src="/assets/layer/layer.js"></script>
<script>

	$('.plus').on('click',function(){
		var ipt = $(this).prev();
		ipt.val(Number(ipt.val())+1);
	});

	$('.minus').on('click',function(){
		var ipt = $(this).next();
		var val = Number(ipt.val())-1;
		ipt.val((val>0)?val:0);
	});

	$('.add-one').click(function(){
		layer.load();
		var list = [];
		var SumPrice = 0;
		var html = '<p>显示内容：</p><div><ul class="item-list">';
		$('input').each(function(){
			var num = $(this).val();
			if(num != 0){
				var id = $(this).parents('li:first').attr('data-id');
				var price = $(this).parents('li:first').attr('data-price');
				var name = $(this).parents('li:first').attr('data-name');
				html += '<li class="item">'+name+'<label class="list-label">'+num+'&nbsp;份</label>';
				html += '<label class="list-label">'+(num*price).toFixed(2)+'￥</label></li>';
				list.push(id + ':' + num);
				SumPrice = Number(SumPrice) + num*price;
			}
		});
		html += '</ul></div><p>显示内容：'+SumPrice.toFixed(2)+'</p>';
		layer.closeAll('loading');
		$('.right-box').html(html);

		var order = list.join('|');
		console.log(order);
	});
</script>

</html>