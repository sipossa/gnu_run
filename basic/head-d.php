<?
if($_GET['bo_table']=='qa') {$num = 5;$c_title='고객지원';}
else if($_GET['bo_table']=='pro') {$num = 4;$c_title='회사소개';}
else if($_GET['bo_table']=='notice') {$num = 0;$c_title='고객지원';}

$snum = ($num % 3) +1;
?>
<style>
.sub_title {background:url(<?php echo G5_THEME_URL ?>/img/slide0<?=$snum?>.jpg) center center/cover;}
</style>
<section class="sub_title">
    <h2><?=$title?><?=$board['bo_subject']?></h2>
</section>

<div class="container sub_page">
    <article>
        <h2><?=$title?><?=$board['bo_subject']?> <small> / <?=$c_title?></small></h2>
        
