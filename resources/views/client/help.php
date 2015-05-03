<?=view('header')?>
<div class="page-header">
	<h1>帮助和引导</h1>
</div>
<ul class="nav nav-pills nav-stacked">
	<li class="active"><a href="#">网站购物</a></li>
	<li><a href="<?=url('order')?>">本站订单登记</a></li>
	<li><a href="<?=url('packages')?>">到货通知和查询</a></li>
	<li><a href="<?=url('process')?>">转运操作</a></li>
	<li><a href="<?=url('packages')?>">收货确认</a></li>
</ul>
<?=view('footer')?>