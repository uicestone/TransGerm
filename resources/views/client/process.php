<?=view('header')?>

<div class="page-header">
	<h1>转运处理</h1>
</div>

<button type="button" id="new-address" class="btn btn-primary btn-small">新增地址</button>
<span>或选择常用地址</span>
<br><br>
<ul class="list-group address-list">
	<li class="list-group-item" data-id="1">
		<ol class="breadcrumb address">
			<li>上海市</li>
			<li>宝山区</li>
			<li>韶山路348弄28号602室</li>
			<li>陆秋石</li>
			<li>13641926334</li>
		</ol>
	</li>
	<li class="list-group-item" data-id="2">
		<ol class="breadcrumb address">
			<li>上海市</li>
			<li>长宁区</li>
			<li>红宝石路500号东银中心裙楼2楼克莱斯勒</li>
			<li>陆秋石</li>
			<li>13641926334</li>
		</ol>
	</li>
</ul>
<input type="hidden" id="address" name="address_id">
<hr>

<h2>运费 <small>¥698.00</small></h2>
<button class="btn btn-primary btn-block btn-lg" id="payment">微信支付</button>

<script type="text/javascript">
jQuery(function($){
	$('.address-list>li').on('click', function(){
		var addressId = $(this).data('id');
		$(this).siblings().removeClass('active');
		$(this).toggleClass('active');
		$('input#address').val(addressId);
	});
	$('button#new-address').on('click', function(){
		alert('调用微信收获地址选择界面');
	});
	$('button#payment').on('click', function(){
		alert('调用微信支付界面');
	});
});
</script>

<style type="text/css">
	.breadcrumb.address {
		margin-bottom: 0;
		background: none;
	}
</style>

<?=view('footer')?>