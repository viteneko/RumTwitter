<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: #e6e6ff"> 
	<!--навигация-->
	<div class="header">
		<div class="container-fluid" style="background: white; border-radius: 15px">
			いつか僕らの上をスレスレに
通りすぎていったあの飛行機を
不思議なくらいに憶えてる
意味もないのに なぜか

不甲斐なくて泣いた日の夜に
ただ強くなりたいと願ってた
そのために必要な勇気を 探し求めていた

残酷な運命が定まっているとして
それがいつの日か僕の前に現れるとして
ただ一瞬 この一瞬 息ができるなら
どうでもいいと思えた その心を

もう一度 遠くへ行け 遠くへ行けと
僕の中で誰かが歌う
どうしようもないほど熱烈に
いつだって目を腫らした君が二度と
悲しまないように笑える
そんなヒーローになるための歌

さらば掲げろ ピースサイン
転がっていくストーリーを
		</div> 
	</div>
	<div class="content">
		<div class="container">
				<div class="row mt-4">
				<div class="col-3" style="background: white; border-radius: 15px">
				<form method="POST" action="LOLKEK.php">
							<?php echo '<input type="hidden" name="id" value="' . $row['id'] . '">'?>
							<?php echo '<input type="" name="text_lol">'?>

							<button>Опубликовать</button>
						</form>
				</div>

			<div class="col-6 pl-2 row" >

<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'daiaana_pn_09');
	$query = mysqli_query($connect, 'SELECT * FROM tweet ORDER BY id DESC');
	for($i=0; $i < $query->num_rows; $i++){

	 $row = $query->fetch_assoc(); 
	 ?>
					<div class="col-2">
						<a href=""><?php echo '<img style = "width:50px; height:50px" src ="' . $row['logo_lol'] . '">'; ?></a>
					</div>
					<div class="col-10">
						<div class="d-flex">
							<h2> <a href=""><?php echo $row['title_lol']; ?></a></h2>
						</div>
						<div>
							<p><a href=""><?php echo $row['text_lol']; ?></a></p>
						</div>
						<div>
							<a href="" ><?php echo '<img style = "width:400px; height:250px" src ="' . $row['img_lol'] . '" >'; ?></a>
						</div>
						<div class="d-flex">
							<div class="col-xl-3"><img src="images/comment.png"></div>
							<div class="col-xl-3"><img src="images/retweet.png"></div>
							<div class="col-xl-3"><img src="images/like.png"></div>
							<div class="col-xl-3"><img src="images/envelope.png"></div>
						</div>
						<form method="GET" action="keklol.php">
							
							<?php echo '<input name="id" value="' . $row['id'] . '" style="display:none">'; ?>
							
							<button>Удалить</button>
						</form>
						<form method="POST" action="change.php">
							<?php echo '<input type="hidden" name="id" value="' . $row['id'] . '">'?>
							<?php echo '<input type="hidden" name="text_lol" value="' . $row['text_lol'] . '">'?>
							
							<button>Редактировать</button>
						</form>
					</div>
					<?php
				}
					?>

				</div>
				
				<div class="col-3 pl-2" style="background: white; border-radius: 15px">
					躯中の細胞に火を熾すように
					目一杯に空気を吸い込んだ
					血と汗を贄に　憧れを聖火に
					最大音量で叫べよ

					光あれ

					未来への祈りを合図に火蓋を切る

					光あれ
					行け　闇を滑走路にして
					己の道を敬虔に駆けろ
					光あれ
					一寸先の絶望へ
					二寸先の栄光を信じて

					光あれ
					大地を蹴る理由は唯一つ
					もっと眩く俺は飛べる
					光あれ
					君の今日の輝きが
					迷える友の明日を照らすよ

					夢　十字架のように背負い
					楽園を目指す戦士達に

					聳え立つ壁に　不安喰らう魔物に
					希望という風穴　穿つのは
					僅かな可能性　信じ抜く勇気だ
					最大音量で叫べよ

					光あれ　行け　影と歩幅合わせ
					己と戦う日々に幸あれ
					歪曲らず屈折せず　理想を追い続ける
					その覚悟を「光」と呼ぼう

					光あれ
					行け　闇を滑走路にして
					己の道を敬虔に駆けろ
					光あれ
					一寸先の絶望へ
					二寸先の栄光を信じて
			
					光あれ
					天空翔ける流れ星は今夜
					命を触媒に燃える
					光あれ
					君の今日の輝きが
					迷える友の明日を照らすよ

					未来への祈りを合図に火蓋を切る
					無限大の夢　十字架のように背負い
					楽園を目指す戦士達に光あれ
				</div>
				</div>
			</div>
		</div>
</body>
</html>