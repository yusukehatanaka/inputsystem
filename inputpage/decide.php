<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>inputPage</title>
<!-- css -->
<link rel="stylesheet" href="./input.css">
</head>
<?php 
$file='../memorize.txt';
if (file_exists($file)){
	$board=json_decode(file_get_contents($file));
}
unset($board); 
?>
<body>

<!----------------- [[[[ baseArea ]]]] ----------------->
<div class="base_area">

<header class="header_area">
<h1>入力ページタイトル</h1>
</header><!-- /.header_area -->

<!----------------- [[[ contentArea ]]] ----------------->
<div class="content_area">

<h2 class="heading2_01">決定ページ</h2>

<article class="article_1">
<h3 class="heading3_01">以下のテキストに差し替えました。</h3>

<p class="decided_txt"><?php echo $_REQUEST['message'] ?></p>

<ul class="btn_list">
<li><div class="btn_01 back"><a href="index.html">再入力</a></div></li>
<li><div class="btn_01 btn_red next"><a href="../index.html">表示確認</a></div></li>
</ul>

<?php
$board[]=$_REQUEST['message'];
file_put_contents($file, json_encode($board));
?>

</article>

</div><!-- /.content_area -->
<!-------- [[[ contentArea / end ]]] -------->

</div><!-- /.base_area -->
<!-------- [[[[ baseArea / end ]]]] -------->
</body>

</html>

