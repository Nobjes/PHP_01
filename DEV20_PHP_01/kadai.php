<!-- htmlで呼び出すphpを指定 -->
<?php

$titlea = "SLAMDUNK";
$titleb = "シュートチャレンジ";
$texta = "シュートを決めて山王を逆転しよう！" ;
$textb = "湘北の選手が揃えばシュート成功して逆転勝利、";
$textc ="山王工業の選手が出現すると山王工業に敗北するぞ！";

$shoots = "桜木がシュート";
$shootr = "流川がシュート";
$shootm = "三井がシュート";

$ok = "湘北がシュートを決めた！";
$ng = "山王工業に得点を許す・・・";

?>

<!-- ここからhtml -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<!-- CSSの紐付け -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/reset.css">

<!-- jQueryを入れる -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- タイトル -->  
<!-- PHPでテキストを書いてhtmlに吐き出す -->  
<title><?php echo $titlea;?><?php echo $titleb; ?></title>
</head>

<body>

<header class="title">
    <h1><?php echo $titlea; ?><br><?php echo $titleb; ?></h1>
    <img src="img/観客席.jpeg" alt="観客席">
</header>

<main>

    <div class="text">
    <?php echo $texta; ?><br>
    <?php echo $textb; ?><br>
    <?php echo $textc; ?><br>
    </div>

<!-- // シュートするphpで表示     -->

<div class="f-container">
    <div class="shoot_me">
            
    <?php 
    $me = mt_rand(1,5);

    if ($me == 1){
    echo '<img src="img/桜木シュート.jpeg">'."<br>";
    echo $shoots;
    } 

    if ($me == 2){
    echo '<img src="img/桜木シュート.jpeg">'."<br>";
    echo $shoots;
    } 

    if ($me == 3){
    echo '<img src="img/流川シュート.jpeg">'."<br>";
    echo $shootr;
    } 

    if ($me == 4){
    echo '<img src="img/三井シュート.jpeg">'."<br>";
    echo $shootm;
    } 

    if ($me == 5){
    echo '<img src="img/三井シュート.jpeg">'."<br>";
    echo $shootm;
    } 
    ?>
    </div>

<!-- 相手のディフェンス結果をphpで表示 -->
    <div class="shoot_com">
            
    <?php 
    $com = mt_rand(1,5);

    if ($com == 1){
    echo '<img src="img/桜木成功.jpeg">'."<br>";
    echo $ok;
    } 

    if ($com == 2){
    echo '<img src="img/桜木成功.jpeg">'."<br>";
    echo $ok;
    } 

    if ($com == 3){
    echo '<img src="img/三井成功.jpeg">'."<br>";
    echo $ok;
    } 

    if ($com == 4){
    echo '<img src="img/河田ブロック.jpeg">'."<br>";
    echo $ng;
    } 

    if ($com == 5){
    echo '<img src="img/沢北ディフェンス.jpeg">'."<br>";
    echo $ng;
    } 
    ?>

    </div>
</div><br><br>


<!-- 結果を表示する -->

<div class="result">
        <?php

        if($me ==1 && $com == 1 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==1 && $com == 2 ){
            $result = "湘北が逆転勝利！！";
    }else if($$me ==1 && $com == 3 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==1 && $com == 4 ){
            $result = "山王工業に敗北・・・";
    }else if($me ==1 && $com == 5 ){
            $result = "山王工業に敗北・・・";

    }else if($me ==2 && $com == 1 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==2 && $com == 2 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==2 && $com == 3 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==2 && $com == 4 ){
            $result = "山王工業に敗北・・・";
    }else if($me ==2 && $com == 5 ){
            $result = "山王工業に敗北・・・";

    }else if($me ==3 && $com == 1 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==3 && $com == 2 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==3 && $com == 3 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==3 && $com == 4 ){
            $result = "山王工業に敗北・・・";
    }else if($me ==3 && $com == 5 ){
            $result = "山王工業に敗北・・・";

    }else if($me ==4 && $com == 1 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==4 && $com == 2 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==4 && $com == 3 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==4 && $com == 4 ){
            $result = "山王工業に敗北・・・";
    }else if($me ==4 && $com == 5 ){
            $result = "山王工業に敗北・・・";

    }else if($me ==5 && $com == 1 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==5 && $com == 2 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==5 && $com == 3 ){
            $result = "湘北が逆転勝利！！";
    }else if($me ==5 && $com == 4 ){
            $result = "山王工業に敗北・・・";
    }else if($me ==5 && $com == 5 ){
            $result = "山王工業に敗北・・・";
        }
        ?>

    <div class="winlose text">
        <?php echo $result; ?>
    </div><br><br>


</div>

</main>


<div class="footer"><footer>SLAM DUNK All Rights Reserved</footer></div>

</body>
</html>