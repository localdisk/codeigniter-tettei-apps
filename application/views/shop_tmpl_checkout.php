<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?=base_url('css/shop.css');?>" type="text/css" />
<title>CIショップ: <?=html_escape($action);?></title>
</head>

<body>
<!-- ヘッダ -->
<div id="header">
	<div class="top_title"></div>
	<div class="navi"></div>
	<div class="top_kage"></div>
</div>
	
<div id="main">
<!-- ショップヘッダ -->
	<div class="header">
		<div class="title_banner">
		<img src="<?=base_url('images/icons/shop_titile.jpg');?>" alt="ショッピング" width="580" height="70" />
		</div>
	</div>
<!-- ショップメイン -->
	<div class="main_checkout"><?=$main?></div>
</div>

<!-- フッタ -->
<?php $this->load->view('ci_footer'); ?>
</body>
</html>
