<?php
define('_INDEX_', true);
include_once('./_common.php'); // g5 상수 필요하면 유지
?>
<!doctype html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <title>밸런스성형외과 비용이 궁금해?</title>
  <meta name="description" content="얼굴지방흡입은 밸런스성형외과의원 l 부산성형외과 l 서면성형외과 l 부산 서면 롯데백화점 후문에 위치, 얼굴지방흡입, 이중턱근육묶기, 리프팅, 안면거상, 동안성형, 눈성형, 코성형, 필러, 보톡스등 전문의가 1:1 맞춤 진료합니다.">
  <meta name="keywords" content="서면얼굴지방흡입, 부산얼굴지방흡입, 얼지흡, 서면성형외과, 부산성형외과, 서면안면윤곽, 부산안면윤곽">
  <meta property="og:type" content="website">
  <meta property="og:title" content="부산 서면 밸런스성형외과 - 부산얼굴지방흡입, 서면성형외과">
  <meta property="og:description" content="부산 서면 롯데백화점 후문 3분 거리, 얼굴지방흡입/성형 전문 밸런스성형외과">
  <meta property="og:url" content="https://balanceps.com">
  <link rel="icon" href="/favicon.png" type="image/png">

  <!-- Pretendard 폰트 적용 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard/dist/web/static/pretendard.css">

  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="/landing/2025_landing_style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body style="margin:0; background:#000000a0; display:flex; justify-content:center; align-items:center; height:100vh;">

<!-- 팝업 HTML 그대로 -->
<div class="landing_2025_popup_overlay" style="display:flex;" id="consultPopup">
  <div class="landing_2025_popup_form">
    <button type="button" class="landing_2025_popup_close" id="closeConsultPopup">×</button>

    <div class="landing_2025_popup_top">
      <div class="landing_2025_popup_text">
        <p class="landing_2025_popup_subtitle">비용이 궁금해?</p>
        <p class="landing_2025_popup_title">
          <span>비용 확인</span>하고<br><span>예약 상담 신청!</span>
        </p>
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
        <label for="agree">개인정보처리방침 동의 <a href="/info.php" target="_blank">[자세히보기]</a></label>
      </div>

      <button type="submit" class="landing_2025_submit_btn">신청하기</button>
    </form>
  </div>
</div>

<script>
  document.getElementById('closeConsultPopup')?.addEventListener('click', () => {
    window.close(); // 단독창이면 닫기, 안되면 숨기기
    document.getElementById('consultPopup').style.display = 'none';
  });

  function validateConsultForm() {
    const form = document.getElementById('consultForm');
    const name = form.wr_name.value.trim();
    const phone = form.wr_1.value.trim();
    const concern = form.wr_content.value.trim();
    const agree = form.wr_6.checked;

    const phonePattern = /^010\d{8}$/;
    if (!name) { alert('이름을 입력해주세요.'); return false; }
    if (!phonePattern.test(phone)) { alert('휴대폰 번호는 010으로 시작하는 11자리 숫자여야 합니다.'); return false; }
    if (!concern) { alert('고민 부위를 입력해주세요.'); return false; }
    if (!agree) { alert('개인정보 수집 및 이용에 동의해 주세요.'); return false; }

    return true;
  }
</script>

</body>
</html>
