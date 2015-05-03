<?=view('header')?>

<div class="page-header">
	<h1>订单登记</h1>
</div>

<form class="form-horizontal" role="form" method="post">
	<div class="form-group">
		<label class="col-sm-2 control-label">订单号</label>
		<div class="col-sm-10">
			<input type="text" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">发货方</label>
		<div class="col-sm-10">
			<input type="text" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">下单时间</label>
		<div class="col-sm-10">
			<input type="date" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">货物描述</label>
		<div class="col-sm-10">
			<textarea class="form-control"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary btn-block btn-lg">提交</button>
		</div>
	</div>
</form>

<?=view('footer')?>