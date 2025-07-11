<?php
	include_once('../common.php');
	include_once $_SERVER['DOCUMENT_ROOT']."/html/common/head-v2024.php";	
	//echo "dddd==".$user["mb_id"]; 
	//if(!isLogin()) loginCheck();
	$db->where ('mb_no', $_AUTH['idx'] );
	$user = $db->connection('slave')->getOne('member');

	$ti=time();

	$db->where ('wr_id', $_GET['idx'] );
	$visaInfo = $db->connection('slave')->getOne('write_visa_detail');

	//echo "visa==>".$visaInfo['wr_1'];
	//exit;

	$db->where ('bo_table', 'notice');
	$db->where ('wr_id', $visaInfo['wr_id']);
	$file = $db->connection('slave')->getOne('board_file');

?>
	<section id="container-v2024">
        <style>
            @media (max-width: 769px) {
                #footer{display:none !Important}
            }
        </style>
        <div id="consultation">
<!--             <div class="category"> -->
<!--                 <div class="wrap"> -->
<!--                     <div class="tit">업무선택</div> -->
<!--                     <div class="con"> -->
<!--                         <ul> -->
<!--                             <li class="active"><a href="#"><img src="../resources/img/consultation_category01.png"><p>국제결혼</p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category02.png"><p>이혼비자</p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category03.png"><p>취업비자</p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category04.png"><p>재외동포 비자</p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category05.png"><p>난민신청 <br></p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category06.png"><p>임금체불</p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category07.png"><p>행정심판 및 <br>이의신청</p></a></li> -->
<!--                             <li><a href="#"><img src="../resources/img/consultation_category08.png"><p>체류기간 <br>연장허가</p></a></li> -->
<!--                         </ul> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
            <div class="consultation intro"> 
                <div class="wrap">
                    <div class="box">
                        <div class="title"><?php //echo $visaInfo["wr_subject"];?></div>
						<div class="cont">

<!--                         <div class="text">현재 국제결혼을 진행하고 있는 국내 남성과 여성이 점점 많아지고 있어요. <br>'국제결혼 현황' 자료를 분석한 결과 국제결혼 총 건수가 <br>지난 2016년 2만591건에서 2017년에는 2만835건으로 전년 대비 1.2% 늘어났고 <br>2018년에는 2만2698건으로 전년 같은 기간보다 8.9% 증가했다고 해요.</div> -->
<!--                         <div class="image"><img src="../resources/img/consultation_image.png"></div> -->
<!--                         <div class="info"> -->
<!--                             <dl> -->
<!--                                 <dt>🔎 국제결혼이란?</dt> -->
<!--                                 <dd>한국에서 혼인이 유효하게 성립되어 있고, 우리 국민과 결혼생활을 지속적으로 유지하기 위해 국내에서 체류를 하고자 하는 외국인을 뜻해요</dd> -->
<!--                             </dl> -->
<!--                             <dl> -->
<!--                                 <dt>🔎 국내에서 신청이 가능한 경우</dt> -->
<!--                                 <dd>- 합법체류자로서 외국인등록증을 보유하고 있는 체류 외국인<br>- 임신, 출산, 자녀양육의 사유가 있는 외국인 ( 불법체류자 포함 )<br>- 사증면제(B-1)자격으로 입국한 독일인</dd> -->
<!--                             </dl> -->
<!--                             <dl> -->
<!--                                 <dt>🔎 국내에서 신청이 불가능한 경우</dt> -->
<!--                                 <dd>- 단기사증 소지자<br>- 불법체류자(밀입국자, 위변조 여권소지자)<br>- 출국을 위한 체류기간 연장허가를 받은 사람 ( 출국기한유예를 받은 자는 자격변경 대상이 아님 )<br>- 일반 형사범 ( 단순 벌금은 제외 )<br>- 위의 사유로 인해 기타비자 ( G-1 )을 받은 외국인</dd> -->
<!--                             </dl> -->
<!--                         </div> -->

							<?php if($file['bf_file']){ ?>
	<!-- 						<img src="/data/file/notice/<?php echo $file['bf_file'];?>" style="width:100%"> -->
							<?php } ?>

							<?php echo str_replace("210.114.1.203", "k-visa.co.kr",$visaInfo['wr_content']);?>
						</div>

						<?php
							$mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";
							if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){
							}else{
						?>	
						<div class="button">
                        <a href="tel:1811-1942" class="btn btn_04"><img src="../resources/img/icon_call.png"> 1811-1942</a>
                        <a href="javascript:set_consult()" class="btn btn_01"><img src="../resources/img/icon_consult_white.png"> 맞춤형 비자상담</a>
						</div>
						<?php } ?>

<!--                         <div class="button"> -->
<!-- 						<a href="tel:1811-1942" class="btn btn_04"><img src="../resources/img/icon_call.png"> 빠른 전화상담</a> -->
<!--                         <a href="javascript:set_consult();" class="btn btn_01">무료 견적신청</a> -->

							
<!-- 						<a href="javascript:set_consult()" class="btn btn_04" >무료 비자상담</a> -->
<!-- 						<a href="tel:1811-1942" class="btn btn_01"><img src="../resources/img/icon_call_white.png"> 1811-1942</a> -->
<!-- 							<a href="https://k-visa.channel.io/lounge" target="_blank" class="btn btn_04">실시간 상담</a> -->
<!--                         </div> -->

                    </div>
                </div>
            </div>
			<?php
				$mobile_agent = "/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";
				if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){
			?>	
			<section id="abutton">
				<div class="abutton">
					<a href="javascript:set_consult()" class="btn btn_01">무료 비자상담</a>
					<!--
					<a href="tel:1811-1942" class="btn btn_01"><img src="../resources/img/icon_call_white.png"> 1811-1942</a>
					-->
				</div>
			</section>
			<?php }?>

        </div>

		<div class="modal_container" id="consultation_consult">
            <div class="modal_wrapper">
                <div class="title">한국 비자 전문가에게 <br>무료로 견적 받으세요</div>
                <div class="image"><img src="../resources/img/consultation_consult.png"></div>
                <div class="text">
					<div class="tit">간단한 비자 상담을 원하시면 <br>비자 상담센터로 문의주세요.<br>(1811-1942)</div>
				</div>
                <div class="button">
                    <a href="javascript:goConsult();" class="btn">무료 견적 받기</a>
                </div>
            </div>
        </div>

    </section>
	<script>

	function goConsult()
	{
		$(this).addClass("modal_close");
		$.post("./_proc/set_consult.php",{
			idx: "<?php echo $ti;?>"
		},function(data,status){
			console.log(data);
			location.href='./consultation_step01.php?ti=<?php echo $ti;?>&idx=<?php echo $_GET["idx"];?>';
		});
	}
	function set_consult()
	{
        $(this).addClass("modal_close");
        $.post("./_proc/set_consult.php",{
            idx: "<?php echo $ti;?>"
        },function(data,status){
            console.log(data);
            location.href='./consultation_step01_tmp.php?ti=<?php echo $ti;?>&idx=<?php echo $visaInfo["wr_11"];?>';
        });
        
		//$("#consultation_consult").addClass("show");
		//$("#consultation_consult").attr("style","display:flex");
	}
	</script>
    <?php if(!is_mobile() ) {
		include_once("footer-v2024.php");
	}
	?>
</body>
</html>