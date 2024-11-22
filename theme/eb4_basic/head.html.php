<?php
/**
 * theme file : /theme/THEME_NAME/head.html.php
 */
if (!defined('_EYOOM_')) exit;

add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/style.css?ver='.G5_CSS_VER.'">',0);
add_stylesheet('<link rel="stylesheet" href="'.EYOOM_THEME_URL.'/css/custom.css?ver='.G5_CSS_VER.'">',0);

/**
 * 로고 타입 : 'image' || 'text'
 */
$logo = 'image';

/**
 * 메뉴바 전체 메뉴 출력 : 'yes' || 'no'
 */
$is_megamenu = 'yes';
?>

<?php if (!$wmode) { ?>
<?php /*----- wrapper 시작 -----*/ ?>
<div class="wrapper">
    <h1 id="hd-h1"><?php echo $g5['title'] ?></h1>
    <div class="to-content"><a href="#container">본문 바로가기</a></div>
    <?php
    // 팝업창
    if (defined('_INDEX_') && $newwin_contents) { // index에서만 실행
        echo $newwin_contents;
    }
    ?>

    <?php /*----- header 시작 -----*/ ?>
    <header class="header-wrap-new">
        <div class="top-header-new">
            <img src="<?php echo G5_IMG_URL ?>/newLogo.png" alt="Logo" />
            <span class="top-header-nav-other">P2U내역</span>
            <div class="top-header-nav-new">
                <ul>
                    <li><span>홍길동님</span> 11,181,887 P2U</li>
                    <li>장바구니</li>
                    <li>마이페이지</li>
                    <li>로그아웃</li>
                    <li id="top-menu">더보기 <img src="<?php echo G5_IMG_URL ?>/chevron-down.svg"/></li>
                    <li>
                        <form>
                            <div>
                                <input type="search" name="search" id="" placeholder="상품명 검색">
                                <img src="<?php echo G5_IMG_URL ?>/sch_btn.png" alt="">
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="top-nav-menu">
                <ul>
                    <li><a href="">장바구니</a></li>
                    <li><a href="">위시리스트</a></li>
                    <li><a href="">주문/배송조회</a></li>
                    <li><a href="">이벤트</a></li>
                    <li><a href="">개인결제</a></li>
                    <li><a href="">사용후기</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">1:1문의</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-header-new">
            <div class="bottom-header-nav-new">
                <ul>
                    <li id="bottom-menu2"><span><img src="<?php echo G5_IMG_URL ?>/menu-01.svg" alt="">전체상품</span></li>
                    <li><span>P2U소개</span></li>
                    <li><span>히트상품</span></li>
                    <li><span>브랜드관</span></li>
                    <li><span>추석선물</span></li>
                    <li><span>이벤트</span></li>
                    <li><span>공모전</span></li>
                </ul>
            </div>
        </div>
        <div class="bottom-header-menu">
            <div class="bottom-nav-menu">
                <div>
                    <ul>
                        <li><a href=""><span>뷰티/피부</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>신선푸드</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>가공푸드</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>패션잡화</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>디지털 가전</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>생활/건강</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>가구/인테리어</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>자동차/공구</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>취미/여행</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>추석선물</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href=""><span>스킨케어</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>메이크업</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>헤어/바디</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>남성전용 화장품</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>향수</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                        <li><a href=""><span>뷰티기기/소품</span><img src="<?php echo G5_IMG_URL ?>/chevron-down.svg" alt=""></a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><a href=""><span>클렌징</span></a></li>
                        <li><a href=""><span>스킨/토너/미스트</span></a></li>
                        <li><a href=""><span>로션/에멀젼</span></a></li>
                        <li><a href=""><span>에센스/세럼</span></a></li>
                        <li><a href=""><span>크림/오일</span></a></li>
                        <li><a href=""><span>마스크/팩/스틱제품</span></a></li>
                        <li><a href=""><span>선케어(자외선차단)</span></a></li>
                        <li><a href=""><span>화장품세트</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <?php /*----- header 끝 -----*/ ?>

    <?php if(!defined('_INDEX_')) { // 메인이 아닐때 ?>
    <?php /*----- page title 시작 -----*/ ?>
    <div class="page-title-wrap">
        <div class="container">
        <?php if (!defined('_EYOOM_MYPAGE_')) { ?>
            <h2>
                <?php if (!$it_id) { ?>
                <i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?>
                <?php } else { ?>
                <span class="f-s-14r"><i class="fas fa-arrow-alt-circle-right m-r-10"></i><?php echo $subinfo['title']; ?></span>
                <?php } ?>
            </h2>
            <?php if (!$it_id) { ?>
            <div class="sub-breadcrumb-wrap">
                <ul class="sub-breadcrumb hidden-xs">
                    <?php echo $subinfo['path']; ?>
                </ul>
            </div>
            <?php } ?>
        <?php } else { ?>
            <h2><i class="fas fa-arrow-alt-circle-right"></i> 마이페이지</h2>
        <?php } ?>
        </div>
    </div>
    <?php /*----- page title 끝 -----*/ ?>
    <?php } ?>

    <div class="basic-body <?php if(!defined('_INDEX_')) { ?>page-body<?php } ?>">
        <?php if(defined('_INDEX_')) { ?>
        <div class="main-slider-top">
            <?php /* EB슬라이더 - basic */ ?>
            <?php echo eb_slider('1516512257'); ?>
        </div>
        <?php } ?>
        <div class="container">
            <?php if ($side_layout['use'] == 'yes') { ?>
            <div class="main-wrap">
                <?php
                if ($side_layout['pos'] == 'left') {
                    /* 사이드영역 시작 */
                    include_once(EYOOM_THEME_PATH . '/side.html.php');
                    /* 사이드영역 끝 */
                }
                ?>
                <main class="basic-body-main <?php if ($side_layout['pos'] == 'left') { echo 'right'; } else { echo 'left'; }?>-main">
            <?php } else { ?>
            <div class="main-wrap">
                <main class="basic-body-main">
            <?php } ?>
<?php } // !$wmode ?>

<script src="<?php echo G5_JS_URL; ?>/custom.js?ver=<?php echo G5_JS_VER; ?>"></script>