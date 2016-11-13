<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>

<!-- 로그인 후 아웃로그인 시작 { -->
<link rel="stylesheet" href="<?php echo $outlogin_skin_url ?>/style.css">

<section id="ol_after" class="ol">
    <header id="ol_after_hd" style='width:100%; text-align:center; margin-bottom:5px;'>
        <h2>나의 회원정보</h2>
        <strong style='font-size:11px;'><?php echo $nick ?> 님</strong><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info"><span style='padding-left:5px; font-size:11px; color:#5f6164;'>[내정보]</span></a><span style='padding-left:5px;'><a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout"><img src='<?=$outlogin_skin_url?>/btn_logout.png' border='0' alt='로그아웃' /></a></span>
    </header>
	<div style='wodth:100%; text-align:center; border-top:1px dotted #ccc;'><span class="sound_only">안 읽은 </span>쪽지<a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo"><b style='color:#339900; font-weight:bold; padding:0 10px 0 3px;'><?php echo $memo_not_read ?></b></a>포인트<a href="<?php echo G5_BBS_URL ?>/point.php" target="_blank" id="ol_after_pt" class="win_point"><b style='color:#339900; font-weight:bold; padding:0 10px 0 3px;'><?php echo $point ?></b></a><a href="<?php echo G5_BBS_URL ?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap">스크랩</a></div>
	<?php if ($is_admin == 'super' || $is_auth) {  ?>
	<div style='width:100%; border-top:1px dotted #ccc; text-align:center; padding-top:10px;'><a href="<?php echo G5_ADMIN_URL ?>"><img src='<?=$outlogin_skin_url?>/btn_admin.png' border='0' alt='관리자 모드' /></a></div>
	<?php }  ?>
</section>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
