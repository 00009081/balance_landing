<?php

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0);

include_once('../common.php');

// 데이터베이스 함수들을 명시적으로 불러오기 (추가!)
include_once(G5_LIB_PATH.'/common.lib.php');  // sql_real_escape_string 등


ini_set('display_errors', 1);
error_reporting(E_ALL);

// POST 값 받아오기
$name = trim($_POST['wr_name']);
$phone = trim($_POST['wr_1']);
$content = trim($_POST['wr_content']);
$agree = isset($_POST['wr_6']) ? $_POST['wr_6'] : '';

if (!$name || !$phone || !$content || !$agree) {
    alert('모든 필수 항목을 입력하고 개인정보 수집 동의를 해주세요.');
}

// 게시판 정보
$bo_table = 'online2';

// 제목은 무조건 '[비용상담] 이름' 형식
$wr_subject = "[비용상담] " . $name;

// 글 등록
$sql = "INSERT INTO {$g5['write_prefix']}{$bo_table}
        SET
        wr_num = 0,
        wr_reply = '',
        wr_comment = 0,
        wr_comment_reply = '',
        wr_is_comment = 0,
        ca_name = '',
        wr_option = '',
        wr_subject = '[비용상담] ".sql_real_escape_string($name)."',
        wr_content = '".sql_real_escape_string($content)."',
        wr_name = '".sql_real_escape_string($name)."',
        wr_password = '".sql_password(G5_TIME_YMDHIS)."',
        wr_email = '',
        wr_homepage = '',
        wr_datetime = '".G5_TIME_YMDHIS."',
        wr_last = '".G5_TIME_YMDHIS."',
        wr_ip = '{$_SERVER['REMOTE_ADDR']}',
        wr_1 = '".sql_real_escape_string($phone)."',
        wr_6 = '".sql_real_escape_string($agree)."',
        mb_id = '{$member['mb_id']}'
";
sql_query($sql);

// 방금 삽입된 글의 wr_id 가져오기
$wr_id = sql_insert_id();

// wr_num = wr_id로 업데이트, wr_parent도 설정
sql_query("UPDATE {$g5['write_prefix']}{$bo_table} SET wr_num = -$wr_id, wr_parent = $wr_id WHERE wr_id = $wr_id");



// 성공 후 안내
alert('빠른전화 상담 신청이 완료되었습니다. 상담 신청 확인 후 자세한 상담을 도와드리기위해 051-809-9677~8 번호로 전화드릴 예정입니다. 감사합니다.', '/');
?>
