<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<!-- 로그인 전 아웃로그인 시작 { -->
<link rel="stylesheet" href="<?php echo $outlogin_skin_url ?>/style.css">

<section id="ol_before" class="ol">
    <h2>회원로그인</h2>
    <form name="foutlogin" action="<?php echo $outlogin_action_url ?>" onsubmit="return fhead_submit(this);" method="post" autocomplete="off">
	<div class='ol_top'>
		<div class='ol_join'><a href="<?php echo G5_BBS_URL ?>/register.php">회원가입</a></div>
		<div class='ol_password'><a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost">아이디/비밀번호 찾기</a></div>
	</div>
    <fieldset>
		<div class='ol_area'>
			<div class='Left'>
				<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">
				<label for="ol_id" id="ol_idlabel">아이디<strong class="sound_only">필수</strong></label>
				<input type="text" id="ol_id" name="mb_id" required class="required" maxlength="20">
				<label for="ol_pw" id="ol_pwlabel">비밀번호<strong class="sound_only">필수</strong></label>
				<input type="password" name="mb_password" id="ol_pw" required class="required" maxlength="20">
			</div>
			<div class='Right'><input type="image" src="<?=$outlogin_skin_url?>/btn_login.png" border='0' /></div>
		</div>
        <div id="ol_auto">
            <input type="checkbox" name="auto_login" value="1" id="auto_login">
            <label for="auto_login" id="auto_login_label">자동로그인</label>
        </div>
    </fieldset>
    </form>
</section>

<script>
$omi = $('#ol_id');
$omi.css('display','inline-block').css('width',110);
$omp = $('#ol_pw');
$omp.css('display','inline-block').css('width',110);
$omi_label = $('#ol_idlabel');
$omi_label.addClass('ol_idlabel');
$omp_label = $('#ol_pwlabel');
$omp_label.addClass('ol_pwlabel');

$(function() {
    $omi.focus(function() {
        $omi_label.css('visibility','hidden');
    });
    $omp.focus(function() {
        $omp_label.css('visibility','hidden');
    });
    $omi.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_id" && $this.attr('value') == "") $omi_label.css('visibility','visible');
    });
    $omp.blur(function() {
        $this = $(this);
        if($this.attr('id') == "ol_pw" && $this.attr('value') == "") $omp_label.css('visibility','visible');
    });

    $("#auto_login").click(function(){
        if ($(this).is(":checked")) {
            if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
        }
    });
});

function fhead_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 전 아웃로그인 끝 -->
