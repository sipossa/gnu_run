<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
}
?>

<div class="wrap">
        <header class="header">
            <div class="hd_top">
                <div class="container">
                    <div class="left">(주)동산텍스 : 에어 샌드위치메쉬 및 면직물(canvas) 전문 생산업체 신발원단, 가방지, 스크린골프장 스크린메쉬원단, 산업용 원단 주문생산
                    </div>
                    <div class="right">
                        <a href="/bbs/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="hd">
                <div class="container">
                    <h1>
                        <a href="/">
                            <img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="">
                        </a>
                    </h1>
                    <nav class="gnb">
                        <ul>
                            <li><a href="#">에어 샌드위치메쉬</a></li>
                            <li><a href="#">면직물(CANVAS)</a></li>
                            <li><a href="#">회사소개</a></li>
                            <li><a href="#">보유장비</a></li>
                            <li><a href="/bbs/board.php?bo_table=qa">고객문의</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
<?php 
if(!defined('_INDEX_')) {
    include_once(G5_THEME_PATH.'/head-d.php');
}
?>
