<?php
define('_INDEX_', true);
include_once('./_common.php');

include_once(G5_LIB_PATH.'/latest.lib.php');


if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] != '') {
    header("Location: https://www.balanceps.com/2025_05_landing.php", true, 301);
    exit;
}

?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="expires" content="Tue, 11 Jun 2025 1:00:00 GMT" />

<title>부산 밸런스 성형외과 밸런스성형외과의원</title>
<meta name="description" content="얼굴지방흡입은 밸런스성형외과의원 l 부산성형외과 l 서면성형외과 l 부산 서면 롯데백화점 후문에 위치, 얼굴지방흡입, 이중턱근육묶기, 리프팅, 안면거상, 동안성형, 눈성형, 코성형, 쁘띠 시술 등 전문의가 1:1 맞춤 진료합니다.">
<meta name="keywords" content="서면얼굴지방흡입, 부산얼굴지방흡입, 얼지흡, 서면성형외과, 부산성형외과, 서면안면윤곽, 부산안면윤곽">
<meta property="og:type" content="website">
<meta property="og:title" content="부산 서면 밸런스성형외과 - 부산얼굴지방흡입, 서면성형외과">
<meta property="og:description" content="부산 서면 롯데백화점 후문 3분 거리, 얼굴지방흡입/성형 전문 밸런스성형외과">
<meta property="og:url" content="https://balanceps.com">
<link rel="icon" href="/favicon.png" type="image/png">

<!-- Pretendard 폰트 적용 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">

<!-- ✅ jQuery 먼저 -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- ✅ 그다음 Slick -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css"/>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<!-- 추가 CSS -->
<link rel="stylesheet" href="/landing/2025_landing_style.css">

<!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});
var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
j.async=true; j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5M5FMJVR');
</script>
<!-- End Google Tag Manager -->

<!-- gtag (Google Analytics) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17005127410"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-17005127410');
</script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M5FMJVR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- 랜딩페이지 시작 -->

<div id="landing-page" class="landing-wrap">

    <!-- 하단 퀵바 -->
    <div class="landing_2025_quickbar">
        <ul class="landing_2025_quickbar_inner">
            <li>
                <a href="tel:051-809-9677" class="landing_2025_quick_item">
                    <img src="/landing/img/2025/quick_call.png" alt="">
                    <span>전화 상담<br> <strong>바로 신청</strong></span>
                </a>
            </li>
            <li>
                <a href="https://www.balanceps.com/bbs/board.php?bo_table=qna" class="landing_2025_quick_item">
                    <img src="/landing/img/2025/quick_online.png" alt="">
                    <span>무료 상담<br> <strong>바로 신청</strong></span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="landing_2025_quick_item openConsultPopup">
                    <img src="/landing/img/2025/quick_price.png" alt="">
                    <span>고민 부위<br> <strong>비용 안내</strong></span>
                </a>
            </li>
        </ul>
    </div>

    <!-- 메인이미지 -->
    <section class="landing-main">
        <div class="landing-main-inner">
            <div class="landing_2025_main-text main-text-left">
                <p class="landing_2025_main-subtitle">안 빠지는 볼살, 이중턱으로</p>
                <p class="landing_2025_main-title" style="margin: 0;">
                    <span class="bold-purple">얼굴 라인</span>이<br>
                    <span class="bold-purple">고민</span>이라면?
                </p>
            </div>
            <div class="landing_2025_main-text main-text-right">
                <p class="landing_2025_main-desc">얼굴지방흡입으로<br>밸런스 잡고 <strong class="font-inklipquid bold-purple">V라인</strong> 한 스푼</p>
            </div>
        </div>
        <img src="/landing/img/2025/landing_2025_main_signature.png" alt="Balance Line Project" class="landing_2025_main-signature">
    </section>

    <!-- 섹션 구분용 라인 -->
    <section class="landing-marquee">
        <div class="marquee-track">
            <div class="marquee-content">
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
            </div>
        </div>
    </section>

    <!-- 바비V지흡 -->
    <section class="landing_2025_section landing_2025_bbvzh">
        <div class="landing_2025_content_inner">

            <!-- 왼쪽 슬라이드 영역 -->
            <div class="landing_2025_section_left">
                <div class="landing_2025_section-title landing_2025_section-title_bbvzh_bg">
                    <div>
                        <p>볼살과 이중턱, 밸런스 잡고 싶을 때</p>
                        <span class="bold-bbvzh">바비V지흡</span>
                        <a class="landing_2025_bna_more landing_2025_bna_more_bbvzh" href="https://balanceps.com/bbs/board.php?bo_table=bna">전후사진 더보기</a>
                    </div>
                    <div class="swiper-pagination landing_2025_pagination landing_2025_bbvzh-pagination"></div>
                </div>

                <?php
                $bbvzh_images = array(
                    array('before' => '/landing/img/2025/bbvzh_before1.png', 'after' => '/landing/img/2025/bbvzh_after1.png', 'after_text' => '1M'),
                    array('before' => '/landing/img/2025/bbvzh_before2.png', 'after' => '/landing/img/2025/bbvzh_after2.png', 'after_text' => '1M'),
                    array('before' => '/landing/img/2025/bbvzh_before3.png', 'after' => '/landing/img/2025/bbvzh_after3.png', 'after_text' => '1M'),
                );
                ?>

                <div class="swiper landing_2025_swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($bbvzh_images as $img) { ?>
                        <div class="swiper-slide">
                            <div class="landing_2025_before-box">
                                <div class="before-text">
                                    <!-- <div class="before-text-login">
                                        밸런스성형외과는<br>의료법을 준수합니다.<br>자세한 후기는 홈페이지 로그인 후<br>확인하실 수 있습니다.
                                    </div> -->
                                    <div class="before-text-bottom bna-text-bottom">BEFORE</div>
                                </div>
                                <img src="<?php echo $img['before']; ?>" alt="Before Image">
                            </div>

                            <div class="landing_2025_arrow landing_2025_bbvzh-arrow"></div>

                            <div class="landing_2025_after-box">
                                <div class="after-text-bottom bna-text-bottom after-text-bottom-bbvzh">
                                    AFTER&nbsp;<span class="after-sub-text"><?php echo $img['after_text']; ?></span>
                                </div>
                                <img src="<?php echo $img['after']; ?>" alt="After Image">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <!-- 오른쪽 고정 이미지 -->
            <div class="landing_2025_section_right landing_2025_section_right_bbvzh">
                <p class="landing_2025_right-desc">어?</p>
                <p class="landing_2025_right-title">나 V라인이 있었네?</p>
            </div>

        </div>
    </section>

    <!-- 바비V지흡 얼지흡 비용 확인 팝업 버튼 구간 -->
    <div class="landing_2025_consult_btn_wrap landing_2025_consult_btn_wrap_bbvzh">
        <button type="button" class="landing_2025_consult_btn landing_2025_consult_btn_bbvzh openConsultPopup">
            <img src="/landing/img/2025/Like-icon-3d.png" alt="like-icon">
            <span style="font-weight: 800;">고민 부위별</span> 얼지흡 비용 확인!
            <img src="/landing/img/2025/Like-icon-3d.png" alt="like-icon">
        </button>
    </div>



    <!-- 바비턱,볼지흡 -->
    <section class="landing_2025_section landing_2025_bbtjzh">
        <div class="landing_2025_content_inner landing_2025_content_inner_reverse">
        
            <!-- 왼쪽 슬라이드 영역 -->
            <div class="landing_2025_section_left">
                <div class="landing_2025_section-title landing_2025_section-title_bbtjzh_bg">
                    <div>
                        <p>빼고싶은 얼굴 지방이 있을 때</p>
                        <span class="bold-bbtjzh">바비턱지흡/바비볼지흡</span>
                        <a class="landing_2025_bna_more landing_2025_bna_more_bbtjzh" href="https://balanceps.com/bbs/board.php?bo_table=bna">전후사진 더보기</a>
                    </div>
                    <div class="swiper-pagination landing_2025_pagination landing_2025_bbtjzh-pagination"></div>
                </div>

                <?php
                $bbtjzh_images = array(
                    array('before' => '/landing/img/2025/bbtjzh_before1.png', 'after' => '/landing/img/2025/bbtjzh_after1.png', 'after_text1' => '바비턱지흡', 'after_text2' => '1M'),
                    array('before' => '/landing/img/2025/bbtjzh_before2.png', 'after' => '/landing/img/2025/bbtjzh_after2.png', 'after_text1' => '바비볼지흡', 'after_text2' => '1M'),
                    array('before' => '/landing/img/2025/bbtjzh_before3.png', 'after' => '/landing/img/2025/bbtjzh_after3.png', 'after_text1' => '바비턱지흡', 'after_text2' => '1M'),
                    array('before' => '/landing/img/2025/bbtjzh_before4.png', 'after' => '/landing/img/2025/bbtjzh_after4.png', 'after_text1' => '바비볼지흡', 'after_text2' => '1M')
                );
                ?>

                <div class="swiper landing_2025_swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($bbtjzh_images as $img) { ?>
                        <div class="swiper-slide">
                            <div class="landing_2025_before-box">
                                <div class="before-text">
                                    <!-- <div class="before-text-login">
                                        밸런스성형외과는<br>의료법을 준수합니다.<br>자세한 후기는 홈페이지 로그인 후<br>확인하실 수 있습니다.
                                    </div> -->
                                    <div class="before-text-bottom bna-text-bottom">BEFORE</div>
                                </div>
                                <img src="<?php echo $img['before']; ?>" alt="Before Image">
                            </div>

                            <div class="landing_2025_arrow landing_2025_bbtjzh-arrow"></div>

                            <div class="landing_2025_after-box">
                                <div class="after-text-bottom bna-text-bottom after-text-bottom-bbtjzh">
                                    <?php echo $img['after_text1']; ?> AFTER&nbsp;<span class="after-sub-text"><?php echo $img['after_text2']; ?></span>
                                </div>
                                <img src="<?php echo $img['after']; ?>" alt="After Image">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <!-- 오른쪽 고정 이미지 -->
            <div class="landing_2025_section_right landing_2025_section_right_bbtjzh">
                <p class="landing_2025_right-desc">몰랐었어</p>
                <p class="landing_2025_right-title">내 얼굴에도 V가 있는지</p>
            </div>


        </div>
    </section>
    
    <!-- 바비턱,볼지흡 얼지흡 비용 확인 팝업 버튼 구간 -->
    <div class="landing_2025_consult_btn_wrap landing_2025_consult_btn_wrap_bbtjzh">
        <button type="button" class="landing_2025_consult_btn landing_2025_consult_btn_bbtjzh openConsultPopup">
            <img src="/landing/img/2025/Like-icon-3d.png" alt="like-icon">
            <span style="font-weight: 800;">고민 부위별</span> 얼지흡 비용 확인!
            <img src="/landing/img/2025/Like-icon-3d.png" alt="like-icon">
        </button>
    </div>

    <!-- 근본이중턱묶기 -->
    <section class="landing_2025_section landing_2025_gmbrft">
        <div class="landing_2025_content_inner">

            <!-- 왼쪽 슬라이드 영역 -->
            <div class="landing_2025_section_left">
                <div class="landing_2025_section-title landing_2025_section-title_gmbrft_bg">
                    <div>
                        <p>자연스럽고 견고하게 V라인을 원할 때</p>
                        <span class="bold-gmbrft">근본 이중턱 리프팅</span>
                        <a class="landing_2025_bna_more landing_2025_bna_more_gmbrft" href="https://balanceps.com/bbs/board.php?bo_table=bna">전후사진 더보기</a>
                    </div>
                    <div class="swiper-pagination landing_2025_pagination landing_2025_gmbrft-pagination"></div>
                </div>

                <?php
                $gmbrft_images = array(
                    array('before' => '/landing/img/2025/gmbrft_before1.png', 'after' => '/landing/img/2025/gmbrft_after1.png', 'after_text' => '1M'),
                    array('before' => '/landing/img/2025/gmbrft_before2.png', 'after' => '/landing/img/2025/gmbrft_after2.png', 'after_text' => '1M'),
                    array('before' => '/landing/img/2025/gmbrft_before3.png', 'after' => '/landing/img/2025/gmbrft_after3.png', 'after_text' => '1M'),
                );
                ?>

                <div class="swiper landing_2025_swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($gmbrft_images as $img) { ?>
                        <div class="swiper-slide">
                            <div class="landing_2025_before-box">
                                <div class="before-text">
                                    <!-- <div class="before-text-login">
                                        밸런스성형외과는<br>의료법을 준수합니다.<br>자세한 후기는 홈페이지 로그인 후<br>확인하실 수 있습니다.
                                    </div> -->
                                    <div class="before-text-bottom bna-text-bottom">BEFORE</div>
                                </div>
                                <img src="<?php echo $img['before']; ?>" alt="Before Image">
                            </div>

                            <div class="landing_2025_arrow landing_2025_gmbrft-arrow"></div>

                            <div class="landing_2025_after-box">
                                <div class="after-text-bottom bna-text-bottom after-text-bottom-gmbrft">
                                    AFTER&nbsp;<span class="after-sub-text"><?php echo $img['after_text']; ?></span>
                                </div>
                                <img src="<?php echo $img['after']; ?>" alt="After Image">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>

            <!-- 오른쪽 고정 이미지 -->
            <div class="landing_2025_section_right landing_2025_section_right_gmbrft">
                <p class="landing_2025_right-desc">다이어트도 소용없는 <br>이중턱?</p>
                <p class="landing_2025_right-title">나도 이제 갸름한 <br>턱라인과 길어진 목선!</p>
            </div>

        </div>
    </section>

    <!-- 근본이중턱묶기 얼지흡 비용 확인 팝업 버튼 구간 -->
    <div class="landing_2025_consult_btn_wrap landing_2025_consult_btn_wrap_gmbrft">
        <button type="button" class="landing_2025_consult_btn landing_2025_consult_btn_gmbrft openConsultPopup">
            <img src="/landing/img/2025/Like-icon-3d.png" alt="like-icon">
            <span style="font-weight: 800;">고민 부위별</span> 얼지흡 비용 확인!
            <img src="/landing/img/2025/Like-icon-3d.png" alt="like-icon">
        </button>
    </div>

    <!-- why 슬라이드 -->
    <section class="landing_2025_why_wrap">
        <div class="landing_2025_why">
            <div class="landing_2025_why_left">
                <img src="/landing/img/2025/why-icon.png" alt="icon">
                <p class="landing_2025_why_title_sub">얼지흡 병원은 <span class="landing_2025_why_title_sub_line">Why,</span></p> 
                <h2 class="landing_2025_why_title_main"> <span class="text_bold">밸런스</span>인가요?</h2>

                <div class="landing_2025_why_check_box">
                    <p class="landing_2025_why_check_label">CHECK 1</p>
                    <div class="landing_2025_why_check_text">좋은 후기 많으면 뭐다?</div>
                    <div class="landing_2025_why_check_text_main"><span class="text_bold color_lavender">수술 결과가 좋아야</span> 입소문도 나지!</div>
                    <p class="landing_2025_why_check_desc">
                        1인 원장 전담 진료상담, 수술, 후 관리
                        <span class="text_bold color_lavender">One 스텝 시스템,</span><br>
                        <span class="text_bold color_lavender">혼자서 3천건 이상</span>의 후기 (지금도 쌓여가는 후기들)
                    </p>
                </div>

                <div class="landing_2025_why_check_box">
                    <p class="landing_2025_why_check_label">CHECK 2</p>
                    <div class="landing_2025_why_check_text">수술도 중요한데 후관리는?</div>
                    <div class="landing_2025_why_check_text_main">얼지흡 수술 후 <span class="text_bold color_lavender">애프터 케어는 못 참지!</span></div>
                    <p class="landing_2025_why_check_desc">
                        <span class="text_bold color_lavender">체계적</span>인 수술 후 케어,<br>
                        전문 의료기기로<span class="text_bold color_lavender"> 맞춤 후 관리</span>
                    </p>
                </div>
            </div>

            <?php
            $reviews = array(
                array(
                    array(
                        'name' => '아니그래가지고',
                        'date' => '04.24. 목',
                        'text' => '라인 예쁘게 만들어준다해서 소개 받고 내원했는데 상담도 심플한데 자세하게 알려주셨고 원장님 손..진짜 미쳤어요ㅠㅠㅠ 말은 부드럽게 하시면서 시술 꼼꼼 지혈까지 손에 힘 장난없으세욬ㅋㅋㅋㅋ 라인 너무 만족해영!!! 잘 유지해 볼게요'
                        // 'image' => 'after1.jpg'
                    ),
                    array(
                        'name' => '화명동불주먹',
                        'date' => '05.03. 토',
                        'text' => '입술 처음 맞아봤는데 역시 너무 잘 해주세요! 처음 보여준 사진은 너무 과하다며 지금 원래 모양에서 자연스럽게 볼륨도 채워주시고 , 입꼬리도 자연스럽게 해주셨어요. ! 오랫동안 유지 되었으면 좋겠네요~~ 첫 입술 만족합니다 !'
                        // 'image' => 'after2.jpg'
                    ),
                    array(
                        'name' => '지2237',
                        'date' => '04.29. 화',
                        'text' => '낮은코는 아니여서 코끝보다는 콧대가 고민이었는데 상담받고 미스코로 하기로 결정!! 안했으면 진짜 후회할뻔했어요 노필터 기카로 찍은 사진인데 콧등에 메부리가 살짝있는 편이었는데 원장님께서 메부리 높이에 맞게 콧대와 코끝 예쁘게 올려주셨어요 만족 코를 좀 더 얇게 하고싶은 마음이었으나 제 코뼈가 두꺼운걸 탓하며,,ㅎ 지금 이상태도 너무너무 만족합니다 상담실장님께서도 다른시술도 원하는저에게 할 필요 없으시다며 권유보다는 오히려 말리셨고 친절하시기까지,, 미스코 하나보고 여기까지 왔는데 후회없어요 다음에또 방문하겠습니다!!'
                        // 'image' => 'after3.jpg'
                    )
                ),
                array(
                    array(
                        'name' => '어닝닝',
                        'date' => '04.16. 수',
                        'text' => '바비코 3년전쯤 받았었는데 만족도가 높았었어서 재시술 받았어요 살쪄서 볼살 부자됨+ 프로필사진촬영 해야되서 볼살에 아큐주사랑 바비코 했는데 중요한 일정있기 2.3주전에 이렇게 시술받으면 너무 좋은것같아요 성형수술하기 힘든 사람들이 얼태기 왔을때도 한번씩 받아보시면 단기간 내로 회복기간 없이 예뻐지기 좋아용'
                        // 'image' => 'after4.jpg'
                    ),
                    array(
                        'name' => 'MMiinn',
                        'date' => '04.19. 토',
                        'text' => '당일에 전화하고 왔는데 너무 다 친절하시고 좋아요😆 턱끝랑 아큐주사 같이 맞아서 부어있지만 턱이 너무 짧았어서 만족해용 시술중에도 원장님이 분위기 잘 풀어주셔서 더 잘 참을 수 있는 거 같아요 추천합니당👍☺️'
                        // 'image' => 'after4.jpg'
                    ),
                    array(
                        'name' => '짱구흰둥이욤',
                        'date' => '04.14. 월',
                        'text' => '살짝매부리끼도있고 얼굴에비해서 작은코가 고민이었는데 너무만족스러워용!!! 데스크분들도 넘친절하셔서 다음엔 아큐주사맞으러올게용💛'
                        // 'image' => 'after4.jpg'
                    ),
                    array(
                        'name' => '반짝단짝75',
                        'date' => '04.10. 목',
                        'text' => '거의3년? 만에 맞으러왔어요 아직 안꺼졌는데 ㅋㅋ 윗입술이 마니꺼졌구 제입술모양이 삐뚤빼뚤 해서  모양예쁘게 다듬고싶어서 왔어오 ㅠㅠ 사실 전 첨부터 밸런스원장님께 맞았던터라 만족x1000 중으로 다른곳옮길생각두없구요  원장님만 믿슴니다. 입술이랑 턱 맞고 광명찾았서용'
                        // 'image' => 'after4.jpg'
                    )
                )
            );
            ?>

            <div class="landing_2025_why_right">
                <div class="landing_2025_why_scroll_wrapper">
                    <?php foreach ($reviews as $index => $column): ?>
                    <ul class="landing_2025_why_scroll_list <?= $index === 0 ? 'scroll-left' : 'scroll-right' ?>">
                        <?php foreach ($column as $review): ?>
                        <li class="landing_2025_why_scroll_item">
                            <div class="landing_2025_why_scroll_item_profile_box">
                                <img src="landing/img/2025/review/why-profile.png" alt="profile">
                                <div class="landing_2025_why_scroll_profile">
                                    <p class="landing_2025_why_scroll_text_name"><?= htmlspecialchars($review['name']) ?></p>
                                    <p class="landing_2025_why_scroll_text_time"><?= htmlspecialchars($review['date']) ?></p>
                                </div>
                            </div>
                            <div class="landing_2025_why_scroll_content_box">
                                <p class="landing_2025_why_scroll_content_text"><?= nl2br(htmlspecialchars($review['text'])) ?></p>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endforeach; ?>
                </div>
            </div>

            
        </div>
    </section>

    <!-- 섹션 구분용 라인 -->
    <section class="landing-marquee">
        <div class="marquee-track">
            <div class="marquee-content">
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
                <p>BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY&nbsp;&nbsp;&nbsp;&nbsp;BALANCE PLASTIC SURGERY</p>
            </div>
        </div>
    </section>

    <!-- slogan -->
    <section class="landing_2025_cta">
        <div class="landing_2025_cta_icon">
            <img src="/landing/img/2025/slogan-img.png" alt="점선선">
            <img src="/landing/img/2025/spoon.png" alt="예쁨한스푼">
        </div>
        <p class="landing_2025_cta_text">
            <p class="landing_2025_cta_text_sub">
                <span class="text_bold color_lavender">V라인이 고민</span>이라면
            </p>
            <p class="landing_2025_cta_text_main">
                밸런스 잡고 <span class="text_bold color_lavender">예쁨 한 스푼</span> 어때요?
            </p>
        </p>
    </section>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- 메인페이지 전후사진 슬라이드 -->
    <section class="landing_2025_bna_review">

        <!-- 카카오&네이버 -->
        <div class="landing_2025_cta_buttons">
            <a href="https://pf.kakao.com/_IZxhxiM" class="landing_2025_btn_kakao">
                <img src="/landing/img/2025/kakao-icon.png" alt="카카오 아이콘">    
                카카오 상담
            </a>
            <a href="https://booking.naver.com/booking/13/bizes/1010742?theme=place&lang=ko&area=pll" class="landing_2025_btn_naver">
                <img src="/landing/img/2025/naver-icon.png" alt="네이버 아이콘">
                네이버 간편예약
            </a>
        </div>

        <!-- 리얼후기 -->
        <div class="main_2025_bna_bg">
            <div class="main_2025_bna_slogan_wrap" style="margin: 0 auto 45px; width:100%; max-width:1190px; padding-left:65px;">
                <p class="main_2025_bna_slogan" style="font-size: 25px; color: #333; letter-spacing:-1.2px">
                    부위별 밸런스 잡은 BNA 확인하기!
                    <span style="font-size: 40px; color:#333; display:block;">
                        <strong style="color: #b48cff;">찾았다 내 예쁨!</strong>
                    밸런스 잡았을 뿐인데 이게 맞아?</span>
                </p>
            </div>
            <div class="main_2025_bna_wrap">
                
                <div class="main_2025_title_top">
                    <div class="main_2025_title">BEST <b>REVIEW</b></div>
                    <div class="main_2025_titlepd"></div>
                    <div class="main_2025_stitle">
                        3000건 이상의 전후사진과 후기를 만나보세요!
                    </div>
                </div>
                <img src="/skin/latest/2025_main_bna/img/bna_model.png" alt="model" class="main_2025_bna_model">
                <div>
                    <?php echo latest('2025_landing_bna', 'ps', 5, 15); ?>
                </div>

            </div>
        </div>
        <div style="clear: both"></div>
        <!-- 리얼후기 -->

    </section>



    <!-- 얼지흡 비용 확인 팝업창 -->
    <div class="landing_2025_popup_overlay" id="consultPopup">
        <div class="landing_2025_popup_form">
            <button type="button" class="landing_2025_popup_close" id="closeConsultPopup">×</button>
            
            <div class="landing_2025_popup_top">
                <div class="landing_2025_popup_text">
                    <p class="landing_2025_popup_subtitle">비용이 궁금해?</p>
                    <p class="landing_2025_popup_title"> <span>비용 확인</span>하고<br><span>예약 상담 신청!</span></p>
                    <p class="landing_2025_popup_desc">신청 남겨주시면 확인 후 상담 안내 드릴 예정입니다.</p>
                </div>
            </div>

            <form id="consultForm" method="POST" action="/landing/landing_consult_submit.php?v=20250611" onsubmit="return validateConsultForm();" class="landing_2025_popup_fields">
                <div class="landing_2025_input_wrap">
                    <label>이름</label>
                    <input type="text" name="wr_name" placeholder="이름을 입력해주세요.">
                </div>
                <div class="landing_2025_input_wrap">
                    <label>휴대폰 번호</label>
                    <input type="text" name="wr_1" maxlength="11" placeholder="휴대폰 번호를 입력해주세요.">
                </div>
                <div class="landing_2025_input_wrap">
                    <label>고민 부위</label>
                    <input type="text" name="wr_content" placeholder="고민 부위를 입력해주세요.">
                </div>

                <div class="landing_2025_agree_wrap">
                    <input type="checkbox" id="agree" name="wr_6">
                    <label for="agree">개인정보처리방침 동의 <a href="https://www.balanceps.com/info.php">[자세히보기]</a></label>
                </div>

                <button type="submit" class="landing_2025_submit_btn">신청하기</button>
            </form>


        </div>
    </div>


</div>

<!-- 랜딩페이지 끝 -->

<script>
    function syncWhyHeight() {
        const left = document.querySelector('.landing_2025_why_left');
        const right = document.querySelector('.landing_2025_why_right .landing_2025_why_scroll_wrapper');
        if (left && right) {
            const leftHeight = left.offsetHeight;
            right.style.height = leftHeight + 'px';
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        // ✅ 슬라이더 초기화
        document.querySelectorAll('.landing_2025_swiper').forEach((swiperEl) => {
            new Swiper(swiperEl, {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: swiperEl.closest('.landing_2025_section_left')?.querySelector('.landing_2025_pagination'),
                    clickable: true,
                },
            });
        });

        // ✅ 팝업 열고 닫기
        const openPopupBtns = document.querySelectorAll('.openConsultPopup');
        const closePopupBtn = document.getElementById('closeConsultPopup');
        const popupOverlay = document.getElementById('consultPopup');

        openPopupBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                popupOverlay.style.display = 'flex';
            });
        });

        closePopupBtn?.addEventListener('click', () => {
            popupOverlay.style.display = 'none';
        });

        popupOverlay?.addEventListener('click', (e) => {
            if (e.target === popupOverlay) {
                popupOverlay.style.display = 'none';
            }
        });

        // ✅ WHY 높이 동기화
        syncWhyHeight();

        // ✅ WHY 후기 슬라이드 복제
        const list = document.querySelector('.landing_2025_why_scroll_item');
        if (list) {
            const clone = list.cloneNode(true);
            list.parentNode.appendChild(clone);
        }
    });

    // ✅ 이미지 로딩 후 swiper 업데이트
    window.addEventListener('load', function () {
        document.querySelectorAll('.landing_2025_swiper').forEach(container => {
            const imgs = container.querySelectorAll('img');
            let loaded = 0;
            const total = imgs.length;

            if (total === 0 && container.swiper) {
                container.swiper.update();
                return;
            }

            imgs.forEach(img => {
                if (img.complete) {
                    loaded++;
                    if (loaded === total && container.swiper) {
                        container.swiper.update();
                    }
                } else {
                    img.addEventListener('load', () => {
                        loaded++;
                        if (loaded === total && container.swiper) {
                            container.swiper.update();
                        }
                    });
                }
            });
        });

        // ✅ 이미지 로드 후에도 높이 동기화
        syncWhyHeight();
    });

    // ✅ 브라우저 리사이즈 시 높이 다시 맞춤
    window.addEventListener('resize', syncWhyHeight);

    // ✅ 폼 유효성 검사

    function validateConsultForm() {
        const form = document.getElementById('consultForm');
        const name = form.querySelector('input[name="wr_name"]').value.trim();
        const phone = form.querySelector('input[name="wr_1"]').value.trim();
        const concern = form.querySelector('input[name="wr_content"]').value.trim();
        const agree = form.querySelector('input[name="wr_6"]').checked;

        const phonePattern = /^010\d{8}$/;
        if (!phonePattern.test(phone)) {
            alert('휴대폰 번호는 010으로 시작하는 11자리 숫자여야 합니다.');
            return false;
        }


        if (!name) {
            alert('이름을 입력해주세요.');
            return false;
        }
        if (!phone) {
            alert('휴대폰 번호를 입력해주세요.');
            return false;
        }
        if (!concern) {
            alert('고민 부위를 입력해주세요.');
            return false;
        }
        if (!agree) {
            alert('개인정보 수집 및 이용에 동의해 주세요.');
            return false;
        }
        return true;
    }

 
  $(document).ready(function () {
  $('.tab-content').hide();
  $('#fat').show();

  $('.tab-btn').on('click', function () {
    var target = $(this).data('tab');

    $('.tab-btn').removeClass('active');
    $(this).addClass('active');

    $('.tab-content').hide();
    $('#' + target).show();

    // 탭 변경 후 슬라이더 재정렬
    $('.main_2025_bna_' + target).slick('setPosition');
  });

  // 슬릭 슬라이더 초기화 (버튼 포함)
  $('.tab-content .slider').each(function (index, el) {
    $(el).slick({
      autoplay: true,
      autoplaySpeed: 3000,
      speed: 300,
      dots: false,
      arrows: true,
      slidesToShow: 1,
      adaptiveHeight: true,
      prevArrow: '<button type="button" class="slick-prev-custom">&#10094;</button>',
      nextArrow: '<button type="button" class="slick-next-custom">&#10095;</button>'
    });
  });
});

</script>


<?php
include_once(G5_PATH.'/tail_landing.php');
?>
