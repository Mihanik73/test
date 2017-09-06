<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../js/parallax.min.js"></script>
</head>
<body>
<div class="main-wrapper">
    <div class="header">
        <p>Driftvideo</p>
    </div>
    <div class="content">
    <div class="items">
     <?php foreach ($posts as $post): ?>
            <div class="item-container">
                    
                 <div class="item">
                     <a href="<?php $this->route('/episode/'.$post['code']);?>"><img src="//img.youtube.com/vi/<?=$post['url'];?>/mqdefault.jpg" width="320" height="180"></a>
                     <h3><a href="<?php $this->route('/episode/'.$post['code']);?>"><?=$post['name'];?></a></h3>
                 </div>
         
                </div>
                <?php endforeach;?>
        </div>
        </div>
    
    <div class="footer">
    <a href="http://mih3.codabra.tech/about">О сайте<a>
    </div></div>
</body>
</html>