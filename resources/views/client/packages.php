<?=view('header')?>

<div class="page-header">
	<h1>我的包裹</h1>
</div>

<form>
<ul class="list-group">
	<li class="list-group-item repo-item" data-id="1">
		<h4>
			奶粉
			<small>
				<i>Amazon</i>
				<span>OD1291238128728634891</span>
				<span class="label label-info">12罐</span>
			</small>
		</h4>
		<span>包裹描述包裹描述包裹描述包裹，描述包裹描述包裹描述包裹描述，描述包裹描述包裹描述包裹描述</span>
		
		<hr>

		<div class="clearfix">
			<div class="pull-left">
				<span class="label label-warning">正在拆分</span>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-default divide-item">拆分 <i class="arrow glyphicon glyphicon-menu-down"></i> <i class="arrow glyphicon glyphicon-menu-up" style="display:none"></i></button>
				<button type="button" class="btn btn-primary">转运</button>
				<button type="button" class="btn btn-primary">确认收货</button>
			</div>
		</div>
		<div class="divide-item-form" style="display:none">
			<form class="form-inline text-left">
				<hr>
				<div class="form-group">
					<label>份数：</label>
					<input type="number" class="form-control">
					<label>说明：</label>
					<textarea class="form-control"></textarea>
				</div>
				<button type="button" class="btn btn-primary">申请拆分</button>
			</form>
		</div>
	</li>
	<li class="list-group-item repo-item" data-id="2">
		<h4>
			iPhone 6 Plus
			<small>
				<i>Apple</i>
				<span>AP191029378912902374113213</span>
				<span class="label label-info">3部</span>
			</small>
		</h4>
		<span>包裹描述包裹描述包裹描述包裹，描述包裹描述包裹描述包裹描述，描述包裹描述包裹描述包裹描述</span>
		
		<hr>

		<div class="clearfix">
			<div class="pull-left">
				<span class="label label-info">待处理</span>
			</div>
			<div class="pull-right">
				<button type="button" class="btn btn-default divide-item">拆分 <i class="arrow glyphicon glyphicon-menu-down"></i> <i class="arrow glyphicon glyphicon-menu-up" style="display:none"></i></button>
				<button type="button" class="btn btn-primary">转运</button>
				<button type="button" class="btn btn-primary">确认收货</button>
			</div>
		</div>
		<div class="divide-item-form" style="display:none">
			<form class="form-inline text-left">
				<hr>
				<div class="form-group">
					<label>份数：</label>
					<input type="number" class="form-control">
					<label>说明：</label>
					<textarea class="form-control"></textarea>
				</div>
				<button type="button" class="btn btn-primary">申请拆分</button>
			</form>
		</div>
	</li>
</ul>

<hr>

<form class="form-inline transfer-items" method="post">
	<button type="submit" class="btn btn-primary btn-block btn-lg">转运选中包裹</button>
</form>

<script type="text/javascript">
jQuery(function($){
	$('button.divide-item').on('click', function(){
		console.log('ha');
		$(this).find('.arrow').toggle();
		$(this).closest('.repo-item').find('.divide-item-form').toggle();
	});
	$('.repo-item').on('click', function(){
		var itemId = $(this).data('id');
		if($(this).is('.active')){
			$('form.transfer-items input[value="' + itemId + '"]').remove();
		}else{
			$('form.transfer-items').append($('<input/>', {type:'hidden', 'name': 'items[]', value: itemId}));
		}
		$(this).toggleClass('active');
	});
	$('button').on('click', function(event){
		event.stopPropagation();
	})
});
</script>

<style type="text/css">
	.active h4 small {
		color: #C6DBF7;
	}
</style>

<?=view('footer')?>