<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<title>確認ページ</title>
<!-- css -->
<link rel="stylesheet" href="./input.css">
</head>

<body>

<!----------------- [[[[ baseArea ]]]] ----------------->
<div class="base_area">

<header class="header_area">
<h1>入力ページタイトル</h1>
</header><!-- /.header_area -->

<!----------------- [[[ contentArea ]]] ----------------->
<div class="content_area">

<h2 class="heading2_01">確認ページ</h2>

<article class="article_1">
<h3 class="heading3_01">以下のテキストに差し替えます。</h3>

<div class="confirm_box">
	<div class="confirm_box_txt">
	<p class="confirm_txt"><?php echo nl2br($_REQUEST['message']); ?></p>
	</div>
</div><!-- /.confirm_box -->

<p class="note_txt">※テキスト内容を確認してください。</p>


<form action="decide.php" method="post">

<textarea readonly name="message" style="visibility:hidden; height:0;" >
<?php echo nl2br($_REQUEST['message']) ?>
</textarea>

<ul class="btn_list">
<li><div class="btn_01 back"><a href="index.html">再入力</a></div></li>
<li><div class="next"><input type="submit" value="決定" class="decide btn_red"></div></li>
</ul>

</form>

</article>

</div><!-- /.content_area -->
<!-------- [[[ contentArea / end ]]] -------->

</div><!-- /.base_area -->
<!-------- [[[[ baseArea / end ]]]] -------->
</body>
</html>