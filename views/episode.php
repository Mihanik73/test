<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/parallax.min.js"></script>
</head>
<body>
<div class="main-wrapper" data-parallax="scroll" data-image-src="../css/bg.jpg">>
    <div class="header">
        <p>Driftvideo</p>
    </div>
    <div class="content">
    <h1><?=$post['name'];?></h1>
    <iframe width="784" height="441"  src="https://www.youtube.com/embed/<?=$post['url'];?>" frameborder="0" allowfullscreen style="margin: 0 auto"></iframe>
        <h2>
            <?=$post['description'];?>
        </h2>
</div>
   
<div class="footer" style="position: absolute;">
    <a href="http://mih3.codabra.tech/about">О сайте<a>
</div>
</div> 
</body>
</html>