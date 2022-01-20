<?
if($_GET['bo_table']=='qa') {$num = 5;$c_title='고객지원';}
else if($_GET['bo_table']=='pro') {$num = 4;$c_title='회사소개';}
else if($_GET['bo_table']=='notice') {$num = 0;$c_title='고객지원';}
?>

<section class="sub_title">
    <h2><?=$title?><?=$board['bo_subject']?></h2>
</section>

<div class="container sub_page">
    <article>
        <h2><?=$title?><?=$board['bo_subject']?> <small> / <?=$c_title?></small></h2>
        
