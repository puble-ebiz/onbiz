<?php
include_once("./common/main_top.php");

//임대신청내역확인 레이어
include "./rent/layer_view.php";
?>

<?php if(city == "평택" || city == "아산" || city == "강릉"){ ?>
<style type="text/css">
	.not-pag { display:none; }
</style>
<?php } ?>
<body <?php if($_GET["if"] == "on") { echo "style='overflow-x:hidden; overflow-y:auto; '"; } ?>>
	<h1 class="hidden"><?=SITE_TITLE?></h1>

    <!-- 190111 리코딩 -->
	<div id="wrap">
	    <!-- header -->
        <header id="header_new" class="main-header clr">
            <div class="top-area clr">
               <!--  <a href="http://hobiz.co.kr/" class="bn-link"><img src="<?=base_img?>/banner/bn_link_hobiz.png" alt="호비즈오피스 GO"></a> -->
                <h2 class="in">
                    <a href="/"><img src="<?=base_img?>/<?=SITE_LOGO?>" alt="온비즈오피스로고"/></a>
                </h2>
                <ul class="top-nav clr">
                    <li class="nth-1"><a href="/info/guide_new.php"><em><!-- 비상주 사무실<br> -->임대신청하기</em></a></li>
                    <li class="nth-2"><a href="/info/cowork.php"><em>코워킹 스페이스<br>임대신청하기</em></a></li>
                    <li class="nth-3"><a href="javascript:;" onclick="layer_on('loginWraper');"><em>임대신청내역 확인<span>&gt;</span></em></a></li>
                    <li class="nth-4"><a href="/affiliate/"><em>가맹점 모집<span>&gt;</span><br>010-4429-3013</em></a></li>
                </ul>
            </div>
            
            <div class="link-menu">
                <div class="link-box clr">
                    <p class="txt-adr">온비즈 지점</p>
                    <ul class="until-list">
                        <!-- 해당 지정사이트에서는 li에 on -->
                        <li class="nth-1 <?php echo (city == "강남") ? "on" : ""; ?>"><a href="http://onbiz.co.kr/" target="_blank"><span class="s-1">강남본점</span><span class="s-2">010-4429-3013</span></a></li>
                        <li class="nth-2 <?php echo (city == "성수") ? "on" : ""; ?>"><a href="http://hobiz.co.kr/" target="_blank"><span class="s-1">성수점</span><span class="s-2">010-4429-3023</span></a></li>
                        <li class="nth-3 <?php echo (city == "아산") ? "on" : ""; ?>"><a href="http://onbiz2.co.kr/" target="_blank"><span class="s-1">아산점</span><span class="s-2">010-4429-3023</span></a></li>
                        <li class="nth-4 <?php echo (city == "인천") ? "on" : ""; ?>"><a href="http://onbiz3.co.kr/" target="_blank"><span class="s-1">인천점</span><span class="s-2">010-4429-3023</span></a></li>
                        <li class="nth-5 <?php echo (city == "강릉") ? "on" : ""; ?>"><a href="http://onbiz4.co.kr/" target="_blank"><span class="s-1">강릉점</span><span class="s-2">010-4429-3019</span></a></li>
                        <li class="nth-6 <?php echo (city == "평택") ? "on" : ""; ?>"><a href="http://onbiz1.co.kr/" target="_blank"><span class="s-1">평택점</span><span class="s-2">010-4429-3019</span></a></li>
                    </ul>
                    <p class="txt-last">가맹점 모집<br>010-4429-3013</p>
                </div>
            </div>
            
            <nav class="main-gnb">
               <div class="menu-box clr">
                    <ul class="menu-list clr">
                        <li class="nth-1"><a href="#mainTop">홈</a></li>
                        <li class="nth-2"><a href="#about">소개</a></li>
                        <li class="nth-3"><a href="#service">서비스</a></li>
                        <li class="nth-4 not_onbiz"><a href="#moving">입주사</a></li>
                        <li class="nth-5"><a href="#view">둘러보기</a></li>
                        <!--<li class="nth-6"><a href="#office">층별보기</a></li>
                        <li class="nth-7"><a href="#review">REAL REVIEW</a></li>-->
                        <li class="nth-8"><a href="#way">오시는길</a></li>
                    </ul>
                    <a href="/info/guide_new.php" class="btn-apply"><em><!-- 가상오피스 --> 임대신청<span>&gt;</span></em></a>
               </div>
            </nav>
            
        </header>
	    <!--// header -->
        
        <!-- left menu -->
        <div class="menu-l">
            <ul class="menu-list">
                <li class="nth-1 on"><a href="#mainTop"><span class="menu-ico"></span><span class="menu-txt">홈</span></a></li>
                <li class="nth-2"><a href="#about"><span class="menu-ico"></span><span class="menu-txt">소개</span></a></li>
                <li class="nth-3"><a href="#service"><span class="menu-ico"></span><span class="menu-txt">서비스</span></a></li>
                <li class="nth-4"><a href="#moving"><span class="menu-ico"></span><span class="menu-txt">입주사</span></a></li>
                <li class="nth-5"><a href="#view"><span class="menu-ico"></span><span class="menu-txt">둘러보기</span></a></li>
                <li class="nth-6"><a href="#office"><span class="menu-ico"></span><span class="menu-txt">층별보기</span></a></li>
                <li class="nth-7"><a href="#review"><span class="menu-ico"></span><span class="menu-txt">REAL REVIEW</span></a></li>
                <li class="nth-8"><a href="#way"><span class="menu-ico"></span><span class="menu-txt">오시는길</span></a></li>
            </ul>
        </div>
        <!--// left menu -->

        <!-- contents -->
		<div id="contents" class="main-contents">
            <!-- 홈 -->
            <section id="mainTop" class="top-sec">
                <div class="container">
                    <h2 class="tit"><?=SITE_BIG_ADDR?></h2>
                    
                    <div class="apply-area clr">
                        <div class="apply-box vioffice">
                            <!-- <p class="appy-tit">가상오피스<span>(비상주사무실)</span></p> -->
                            <!-- <p class="appy-tit">오피스<span>(사무실)</span></p> -->
                            <p class="appy-tit">가상오피스<span>(사무실)</span></p>
                            <a href="/info/guide_new.php" class="btn-apply">임대신청하기</a>
                            <ul class="apply-list">
                                <li>영업활동이 사무실 보다 외부 업무가 많은 업종</li>
                                <li>오프라인 보다 온라인의 영업활동이 많은 업종</li>
                                <li>전자상거래 업무가 위주인 업종</li>
                                <li>사업자주소가 자택이 아닌 <?=city?>이 필요한 업종</li>
                                <li><?=city?>에서 사업자 주소를 두고 영업하실 경우</li>
                                <li>사업자주소를 주거지에 등록하기 부담스럽거나 이전을 위해 잠시 주소와 짐을 보관할 경우</li>
                                <li>해외에 거주 중 국내사업에서 사업을 하기 위해 사업자 등록증이 필요한 경우</li>
                                <li>프리랜서, 투잡 용도로 사업자등록이 필요한 경우</li>
                                <li class="not-pag">주소제공 외 업무공간 제공</li>
                                <li class="not-pag">회의실, 접견실, 카페테리아 제공</li>
                                <li class="not-pag">복합기, 무선인터넷 제공</li>
                            </ul>
                            <p class="p-as mt-30">일부 품목은 비용이 발생할 수 있습니다.</p>
                        </div>
                        <div class="apply-box cospace">
							<?php if(city == "성수"){ ?>
                            <p class="appy-tit">코워킹스페이스<span>(지정석)</span></p>
							<?php }else{ ?>
							<p class="appy-tit">코워킹스페이스<span>(비지정석)</span></p>
							<?php } ?>
                            <!-- <a href="/info/cowork.php" class="btn-apply">임대신청하기</a> -->
                            <a href="javascript:;" class="btn-apply">전화문의하기</a>
                            <ul class="apply-list">
                                <li>공동사무실(공유사무실)로, 다양한 분야의 작업을 하는 사람들이지만 하나의 공간을 함께 사용하면서 서로의 의견을 나누며 시너지효과를 얻을 수 있도록 조성된 공간</li>
                                <!-- <li class="not_onbiz">가상오피스(비상주사무실)과 함께 이용 시, 할인 혜택제공</li> -->
                                <li class="not_onbiz">자유롭게 좌석 선택 후, 이용가능</li>
                                <li>와이파이 및 유선인터넷 제공</li>
                                <li class="not-pag">복사기 및 사무집기 이용가능</li>
                                <li class="not-pag">커피 및 각종 차 제공</li>
                                <li class="not_onbiz">주차 월15만원</li>
                                <li>최소 6개월부터 사용가능</li>
                                <li class="not_onbiz">출입카드제공</li>
                                <li class="not-pag">회의실 이용가능 (예약필수)</li>
                                <li class="not_onbiz">사물함 이용가능</li>
                            </ul>
                            <!-- //임대문의 전화번호 -->
                            <div class="rent-question-box">
                                <p class="txt-box"><span class="span-txt-first">임대문의</span><span class="span-phone-num"> 010-4429-3023</span></p>
                            </div>
                            <!-- //임대문의 전화번호 -->
                        </div>
                        <div class="apply-box reoffice">
                            <p class="appy-tit">상주사무실<span>(소호 및 맞춤형 사무실)</span></p>
							<?php if(city == ""){ ?>
							<p class="btn-apply">
								<a href="/info/guide_new.php"><span>이 모든 서비스 </span>5만원<span>부터</span></a>
							</p>
							<?php }else{ ?>
							<p class="btn-apply"><span>이 모든 서비스 </span>5만원<span>부터</span></p>
							<?php } ?>
                            <ul class="apply-list">
                                <li>1인실 ~ 多인 이상을 수용할 수 있는 다양한 독립 사무실</li>
                                <li>유 무선 인터넷 서비스 제공</li>
                                <li class="not-pag">커피 / 음료 / 관리비 무료</li>
                                <li>우편물 접수 및 전달</li>
                                <li class="not-pag">모든 시설의 사용권한 (카페테리아, 회의실, 주차공간)</li>
                                <li class="not-pag">모든 사무집기 제공</li>
                                <li>1일 부터 사용자가 원하는 임대기간 맞춤 제공</li>
                                <!-- <li>매일 신문 및 주간경제지 제공</li> -->
                                <li>쾌적한 냉난방 24시간 제공</li>
                                <li><?=city?> 최고급 시설</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--// 홈 -->
            
            <!-- 소개 -->
            <section id="about" class="about-sec">
                <div class="container">
                    <h2 class="tit">우리는 무엇이든 제공할 수 있습니다.<br>문의 주세요.</h2>
                    
                    <ul class="about-list clr">
                        <li class="nth-1"><span>보안 서비스</span></li>
                        <li class="nth-2"><span>접수 서비스</span></li>
                        <li class="nth-3"><span>소셜 네트워킹</span></li>
                        <li class="nth-4"><span>무료 초고속 인터넷</span></li>
                        <li class="nth-5"><span>우편함 서비스</span></li>
                        <li class="nth-6"><span>지문인식 보안</span></li>
                        <li class="nth-7"><span>24시간 오픈</span></li>
                        <li class="nth-8"><span>창업 지원</span></li>
                    </ul>
                    
                    <div class="about-area clr">
                        <dl class="about-box">
                            <dt class="about-tit"><?=NAME_E?> 를 왜 선택 해야 하나요?</dt>
                            <dd class="about-txt-box">
                                <p>이제 사업을 시작하시는 소규모 창업자들에게 적은 비용으로 사업을 시작하실 수 있도록, 사무실을 제공해드립니다.</p>
                                <p><em><?=NAME_E?></em>는 비용부담을 최소화시킬 뿐 아니라, 파트너사와의 연결을 통해, 사업을 영위하면서 발생하는 문제를 처리할 수 있도록 부탁드립니다.</p>
                                <p><em><?=NAME_E?></em>를 선택한다면 사업확장으로 인한 직원확충 시, 추가 공간이용이 가능합니다</p>
                                <p><em><?=NAME_E?></em>를 선택하신 대표님들은 최소비용으로 최대의 이윤을 내실 준비가 되어있으신 분이라고 생각됩니다.</p>
                                <p><em><?=NAME_E?></em>에 좀더 궁금하신 부분이 있으신 분은 <?=SITE_TEL?> 으로 문의바랍니다.</p>
                            </dd>
                        </dl>
                        <dl class="about-box">
                            <dt class="about-tit"><?=NAME_E?> 는 무엇을 서비스하고 있나요?</dt>
                            <dd class="about-txt-box">
                                <p>스타트업 부터 중간 규모의 기업까지, 개인사업자부터 법인사업자까지 1인실부터 多인실까지 필요하신 다양한 사무실을 제공 하고 있습니다.</p>
                                <?php if(city == "성수"){ ?>
								<p class="not-pag">독립된 공간, 오픈데스크, 초고속 인터넷, 사무집기 및 PC, 카페테리아 등 다양한 서비스를 이용하실 수 있습니다.</p>
								<?php }else{ ?>
								<p class="not-pag">독립된 공간, 오픈데스크, 초고속 인터넷, 사무집기 및 PC, 카페테리아, 법무 · 세무 · 노무자문, 건물 내에 위치한 식당 및 휘트니스 할인가 이용 등 다양한 서비스를 이용하실 수 있습니다.</p>
								<?php } ?>
                                <p>이외에도 다양한 서비스 및 시설이 준비되어 있습니다.</p>
                                <p><em><?=NAME_E?></em>에 좀더 궁금하신 부분이 있으신 분은 <?=SITE_TEL?> 으로 문의바랍니다.</p>
								<?php if(city == "성수"){ ?>
								<p>*성수지점(성동구, 광진구 전체)</p>
								<?php } ?>
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
            <!--// 소개 -->
            
            <!-- 서비스 -->
            <section id="service" class="service-sec">
                <div class="container">
                    <h2 class="tit">서비스</h2>
                    
                    <ul class="service-list clr">
                       <li class="service-box">
                            <p class="service-tit">재무 자문 서비스</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>사업운영자금 상담 및 지원</li>
                                    <li>금융기관 연계</li>
                                    <li>정책자금 지원 연결</li>
                                </ul>
                            </div>
                       </li>
                       <!-- 오른쪽 정렬 right -->
                       <li class="service-box right">
                            <p class="service-tit">광고대행 서비스</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>홈페이지 제작</li>
                                    <li>바이럴 광고</li>
                                    <li>블로그 제작 및 관리</li>
                                    <li>블로그 운영대행</li>
                                    <li>카페 제작 및 관리 / 운영대행</li>
                                    <li>언론 홍보 대행 (제품 및 서비스)</li>
                                    <li>메신저, 이메일계정 사용 옵션</li>
                                </ul>
                            </div>
                       </li>
                       <li class="service-box">
                            <p class="service-tit">세무 자문 서비스 연결</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>세무회계 자문</li>
                                    <li>세무기장 대행</li>
                                    <li>세무조정 대행</li>
                                    <li>부가세 신고대행</li>
                                </ul>
                            </div>
                       </li>
                       <li class="service-box right">
                            <p class="service-tit">기타 서비스</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li class="not_onbiz">매일 신문 및 주간경제지 제공</li>
                                    <li class="not-pag">회의실 사용(4~8인 수용가능)</li>
                                    <li class="not_onbiz">1층 건물 입주사 사용 구내 식당 운영</li>
                                    <li class="not_onbiz">지하 1층 고품격 휘트니스 운영</li>
                                    <li class="not-pag">입주사 입구명판 제공</li>
                                    <li>우편물 보관 및 발송 서비스</li>
                                    <li>쾌적한 냉난방 24시간 제공</li>
                                    <li class="not_onbiz">프리미엄 원두커피 및 각종 차 제공</li>
                                    <li class="not-pag">복합기 보안출력 서비스 제공</li>
                                    <li>ADT 캡스 지문인식 출입 보안 제공</li>
                                    <li>초고속 GIGA 인터넷 제공</li>
                                </ul>
                            </div>
                       </li>
                       <li class="service-box">
                            <p class="service-tit">법률 자문 서비스 연결</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>법률자문 서비스</li>
                                    <li>특허 출원 및 등록 자문 서비스</li>
                                </ul>
                            </div>
                       </li>
                       <li class="service-box">
                            <p class="service-tit">노무 업무 서비스</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>급여 지급 및 관리 업무</li>
                                    <li>원천세 신고</li>
                                    <li>연말정산 신고 및 지급조서 신고</li>
                                    <li>4대보험 신고</li>
                                </ul>
                            </div>
                       </li>
                       <!-- 초기화 후 왼쪽 정렬 -->
                       <li class="service-box cl-left">
                            <p class="service-tit">총무 업무 서비스</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>법인 설립 및 사업자 등록</li>
                                    <li>각종 인허가 대행</li>
                                    <li>기술연구소 및 벤처인증 업무</li>
                                </ul>
                            </div>
                       </li>
                       <li class="service-box right fc-yellow">
                            <p class="service-tit">할인혜택</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li>상주오피스 1년 계약시 최대 30% 할인</li>
                                </ul>
                            </div>
                       </li>
                       <!-- 전체정렬 all -->
                       <li class="service-box all">
                            <p class="service-tit"><!-- 가상오피스 --> 서비스</p>
                            <div class="service-txt-box">
                                <ul class="service-txt-list">
                                    <li><!-- 가상사무실,  -->비상주사무실, 버츄얼오피스, 비상주 서비스, 비상주 소호사무실, 비상주 사업자개설, 비상주 사업자등록 코워킹사무실, 비즈니스센터, 사업자등록주소임대, 사업자주소파킹, <!-- 가상 주소지, --> 주소임대, 우편물 관리서비스</li>
                                </ul>
                            </div>
                       </li>
                    </ul>
                    
                    <p class="service-txt">일부 옵션은 저렴한 비용이 추가 될 수 있습니다.</p>
                    <p class="service-txt">제시되지 않은 서비스가 있을 수 있습니다 문의 바랍니다.</p>
                </div>
            </section>
            <!--// 서비스 -->
            
            <!-- 입주사 -->
            <section id="moving" class="moving-sec">
                <!-- 1~16F -->
                <div class="floor-sec not_onbiz">
                    <div class="floor-bg"></div>
                    <div class="container">
                        <h2 class="tit"><?=NAME_E?> 는 <?=building?> 와 함께 합니다</h2>
                        
                        <ul class="floor-list">
                            <li>16F - 옥상정원</li>
                            <li>14F ~ 15F - 소프트웨어 개발업체 등</li>
                            <li>13F - 투자전문법인</li>
                            <li>12F - 롯데 계열사</li>
                            <li>11F - <?=NAME_E?></li>
                            <li>10F - <?=NAME_E?></li>
                            <li>9F - <?=NAME_E?> 관리실 / 도소매업체</li>
                            <li>8F - 소프트웨어 (증강현실 솔루션) 개발업체</li>
                            <li>7F - 디지털컨텐츠 제작업체</li>
                            <li>6F - <?=NAME_E?></li>
                            <li>5F - <?=NAME_E?></li>
                            <li>4F - <?=NAME_E?></li>
                            <li>3F - <?=NAME_E?></li>
                            <li>1F ~ 2F - 점심식당 및 저녁주점</li>
                            <li>B1 - "저스트 핏" 휘트니스</li>
                        </ul>
                    </div>
                </div>
                
                <div class="room-sec">
                    <div class="container">
                        <ul class="room-list clr">
                            <li class="not-pag">
                                <em>1인실</em>
                                <span>약1.7평</span>
                            </li>
                            <li class="not-pag">
                                <em>2인실</em>
                                <span>약2.6평</span>
                            </li>
                            <li class="not-pag">
                                <em>3인실</em>
                                <span>약3.5평</span>
                            </li>
                            <li class="not_onbiz">
                                <em>7인실</em>
                                <span>약8평</span>
                            </li>
                            <li class="not_onbiz">
                                <em>10인실</em>
                                <span>약20평</span>
                            </li>
                            <li class="not_onbiz">
                                <em>40평</em>
                                <span>20명 이상 수용</span>
                            </li>
                            <li class="not_onbiz">
                                <em>80평</em>
                                <span>40명 이상 수용</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--// 입주사 -->
            
            <!-- 둘러보기 -->
            <section id="view" class="view-sec">
                <div class="container">
                    <h2 class="tit"><?=NAME_E?></h2>
                    
                    <div class="view-box">
                        <img src="<?=GALL_WEB?>" alt="<?=NAME_K?> 둘러보기"> 
                    </div>
                </div>
            </section>
            <!--// 둘러보기 -->
            
            <!-- 층별보기 -->
            <section id="office" class="office-sec not-pag">
                <div class="container">
                    <h2 class="tit"><?=building?></h2>
                    
                    <ul class="office-list">
                        <li class="clr">
                            <a href="javascript:;" onclick="floorPop(830, 580, '<?=drawing?>');" class="btn-img" title="자세히보기"><span class="ico-img"></span><img src="http://img.ditower.co.kr/<?=drawing?>" alt="1인실~3인실 도면"></a>
                            <div class="office-txt-box">
                                <p class="office-tit">1인실 ~ 3인실</p>
                                <ul class="office-txt-list">
                                    <li>
                                        <em>규모</em>
                                        <span>1.7평(5.45㎡) ~ 3.5평(11.27㎡)</span>
                                    </li>
                                    <li>
                                        <em>수용인원</em>
                                        <span>1명 ~ 최대 3명 사용 가능</span>
                                    </li>
                                    <li>
                                        <em>제공서비스</em>
                                        <span>별도 회의실 제공, 냉난방기, 사무집기 일체 제공 등 모든 서비스 제공 및 이용 가능</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="clr not_onbiz">
                            <a href="javascript:;" onclick="floorPop(830, 580, 'plan_20.jpg');" class="btn-img" title="자세히보기"><span class="ico-img"></span><img src="http://img.ditower.co.kr/plan_20.jpg" alt="20평 도면"></a>
                            <div class="office-txt-box">
                                <p class="office-tit">20평</p>
                                <ul class="office-txt-list">
                                    <li>
                                        <em>규모</em>
                                        <span>임대면적 20평 / 67㎡ 전용면적 14평 / 47㎡</span>
                                    </li>
                                    <li>
                                        <em>수용인원</em>
                                        <span>8명 ~ 최대 12명 사용 가능</span>
                                    </li>
                                    <li>
                                        <em>제공서비스</em>
                                        <span>별도 회의실 제공, 사무집기 일체 제공 등 모든 서비스 제공 및 이용 가능</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="clr not_onbiz">
                            <a href="javascript:;" onclick="floorPop(830, 580, 'plan_40.jpg');" class="btn-img" title="자세히보기"><span class="ico-img"></span><img src="http://img.ditower.co.kr/plan_40.jpg" alt="40평 도면"></a>
                            <div class="office-txt-box">
                                <p class="office-tit">40평</p>
                                <ul class="office-txt-list">
                                    <li>
                                        <em>규모</em>
                                        <span>임대면적 40평 / 133㎡ 전용면적 28평 / 93㎡</span>
                                    </li>
                                    <li>
                                        <em>수용인원</em>
                                        <span>18명 ~ 최대 23명 사용 가능</span>
                                    </li>
                                </ul>
                                <div class="office-btn-box clr">
                                    <a href="javascript:;" class="btn-office-view"><span>사무실 구경하기</span></a>
                                    <!--<a href="javascript:;" class="btn-office-contact"><span>사무실 임차문의</span></a>-->
                                </div>
                            </div>
                        </li>
                        <li class="clr not_onbiz">
                            <a href="javascript:;" onclick="floorPop(830, 580, 'plan_80.jpg');" class="btn-img" title="자세히보기"><span class="ico-img"></span><img src="http://img.ditower.co.kr/plan_80.jpg" alt="80평 도면"></a>
                            <div class="office-txt-box">
                                <p class="office-tit">80평</p>
                                <ul class="office-txt-list">
                                    <li>
                                        <em>규모</em>
                                        <span>임대면적 80평 / 266㎡ 전용면적 56평 / 186㎡</span>
                                    </li>
                                    <li>
                                        <em>수용인원</em>
                                        <span>40명 ~ 최대 60명 사용 가능</span>
                                    </li>
                                </ul>
                                <div class="office-btn-box clr">
                                    <a href="javascript:;" class="btn-office-view"><span>사무실 구경하기</span></a>
                                    <!--<a href="javascript:;" class="btn-office-contact"><span>사무실 임차문의</span></a>-->
                                </div>
                            </div>
                        </li>
                        <li class="clr not_onbiz">
                            <a href="javascript:;" onclick="floorPop(830, 580, 'plan_4.jpg');" class="btn-img" title="자세히보기"><span class="ico-img"></span><img src="http://img.ditower.co.kr/plan_4.jpg" alt="4인 회의실 도면"></a>
                            <div class="office-txt-box">
                                <p class="office-tit">4인 회의실</p>
                                <ul class="office-txt-list">
                                    <li>
                                        <em>수용인원</em>
                                        <span>최대 5인</span>
                                    </li>
                                    <li>
                                        <em>제공서비스</em>
                                        <span>회의용 노트북, 냉난방기 제공</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="clr">
                            <a href="javascript:;" onclick="floorPop(830, 580, 'plan_8.jpg');" class="btn-img" title="자세히보기"><span class="ico-img"></span><img src="http://img.ditower.co.kr/plan_8.jpg" alt="8인 회의실 도면"></a>
                            <div class="office-txt-box">
                                <p class="office-tit">8인 회의실</p>
                                <ul class="office-txt-list">
                                    <li>
                                        <em>수용인원</em>
                                        <span>최대 10인</span>
                                    </li>
                                    <li>
                                        <em>제공서비스</em>
                                        <span>회의용 PC, 냉난방기 제공, 빔프로젝트 제공</span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!--// 층별보기 -->
            
            <!-- REAL REVIEW -->
            <section id="review" class="review-sec">
                <!-- side -->
                <div class="side-bg"></div>
                <!-- review -->
                <div class="real-sec not_onbiz">
                    <div class="container">
                        <h2 class="tit"><span>REAL</span> REVIEW</h2>
                        <p class="sub-tit">실사용 중인 분들의 후기입니다. 소중한 후기 다시 한번 감사 드립니다.</p>
                        
                        <div class="review-box">
                            <ul class="review-list clr">
                                <li>
                                    <p class="review-tit">오아시스(이*욱님)<span>2인실 사용</span></p>
                                    <p class="review-txt">
                                        강남구 테헤란로에 저렴한 가격으로 독립된 사무실 공간을 사용할 수 있어, 너무 좋습니다! 또 무료로 커피랑 차를 마실 수 있는 카페테리아 공간이 있어 잠깐 휴식시간을 즐길 수 있어서, 업무효율이 높아집니다!
                                    </p>
                                </li>
                                <li>
                                    <p class="review-tit">㈜청인건축사사무소<span>2인실, 7인실 사용</span></p>
                                    <p class="review-txt">다른 소호사무실과는 다르게, 개별로 냉난방기조작이 가능 하다는 것과, 창문개폐가 가능하다는 것이 <?=NAME_K?> 이용자로써 가장 큰 장점이라 생각됩니다.</p>
                                </li>
                                <li>
                                    <p class="review-tit">아트나인(김*린님)</p>
                                    <p class="review-txt">사무실을 하루만 빌리거나, 회의실을 사용할 수 있는 등 고객맞춤형서비스를 다양하게 제공해 주셔서, 불필요한 지출 없이 이용할 수 있어 너무 좋아요!!</p>
                                </li>
                                <li>
                                    <p class="review-tit">부동산업(최*용님)</p>
                                    <p class="review-txt">방문하지 않고 24시간 언제든지 계약을 체결할 수 있다는 점이 <?=NAME_K?>의 가장 큰 강점이라 생각합니다. 너무 편리하게 이용할 수 있도록 해주셔서 감사합니다!</p>
                                </li>
                                <li>
                                    <p class="review-tit">고코투어(김*환님)<span>80평 사용</span></p>
                                    <p class="review-txt">먼저, 건물의 수려한 건물외관에 반해 사용하게 되었는데요. 장점을 하나만 꼽자면, 전기용량이 높아서 shut-down의 염려 가 없다는 것입니다.</p>
                                </li>
                                <li>
                                    <p class="review-tit">여행업(김*배님)<span>40평 사용</span></p>
                                    <p class="review-txt">인원충원으로 사무실확장을 할 때, 디아이타워 내에서 가능하기에 너무 좋습니다! 1인실,2인실,3인실,7인실,20평,40평,80 평까지 골라쓰는 즐거움이 있는 디아이타워네요.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--// REAL REVIEW -->
            
            <!-- 오시는 길 -->
            <section id="way" class="way-sec">
               <div class="way-txt-sec">
                    <div class="container">
                        <h2 class="tit">오시는길</h2>
                        
                        <div class="way-area clr">
                            <div class="way-box">
                                <p class="way-tit"><?=NAME_E?> 주소</p>
                                <div class="way-address">
                                    <p><?=SITE_ADDR_OLD?></p>
									<p>사업자 주소지 제공: "<?=SITE_ADDR_FULL?><br>***호" 로 표시 됩니다.</p><br>

                                    <p>onbiz@ebiznetworks.co.kr</p>
                                    <p>TEL : <?=SITE_TEL?> <?=SITE_TEL2?></p><br>

									<p class="last"><?=ANOTHER_ADDR?></p>
                                </div>
                            </div>
                            <div class="way-link-box">
                                <p><a href="<?=MAP_NAVER?>" target="_blank" class="btn-naver"><span></span>네이버 지도</a></p>
                                <p><a href="<?=MAP_DAUM?>" target="_blank" class="btn-daum"><span></span>다음 지도</a></p>
                            </div>
                        </div>
                    </div>
               </div>
               <div id="map" style="width:100%;height:555px;"></div>

				<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=<?=MAP_API_KEY?>"></script>
				<script type="text/javascript">

				var container = document.getElementById('map');
				var options = {
					center: new daum.maps.LatLng(<?=SITE_X?>, <?=SITE_Y?>),
					level: 4,
					draggable:false //마우스로 이동안되도록 설정
				};

				var map = new daum.maps.Map(container, options);
				// 마우스 휠과 모바일 터치를 이용한 지도 확대, 축소를 막는다
				//map.setZoomable(false);   

				// 지도에 확대 축소 컨트롤을 생성한다
				var zoomControl = new daum.maps.ZoomControl();

				// 지도의 우측에 확대 축소 컨트롤을 추가한다
				map.addControl(zoomControl, daum.maps.ControlPosition.RIGHT);

				// 지도에 마커를 생성하고 표시한다
				var marker = new daum.maps.Marker({
					position: new daum.maps.LatLng(<?=SITE_X?>, <?=SITE_Y?>), // 마커의 좌표
					map: map // 마커를 표시할 지도 객체
				});
				// 마커 위에 표시할 인포윈도우를 생성한다
				var infowindow = new daum.maps.InfoWindow({
					content : '<div style=" font-size:10px; padding:5px 18px;"><?=SITE_ADDR_SHORT?></div>' // 인포윈도우에 표시할 내용
				});

				// 인포윈도우를 지도에 표시한다
				infowindow.open(map, marker);
				</script>
            </section>
            <!--// 오시는 길 -->
            
        </div>
        <!--// contents -->
        
        <!-- 좌측배너 -->
        <div id="" class="bn-left-wrap">
            <a href="<?=base_url?>/info/guide_new.php" class="btn-faq">
				<?php if(city == "강남"){ ?>
				<p class="p-0"><?=SNAME_L?> <!-- 가상오피스 (비상주) --></p>
				<?php }else{ ?>
				<p class="p-0"><?=SNAME_L?> 가상오피스 (비상주)</p>
				<?php } ?>
                <p class="faq-txt">
                    <span class="s-1">FAQ로 궁금증 해결하세요!</span>
                    <span class="faq-link-txt">자주묻는질문<br>FAQ보기<span>&gt;</span></span>
                </p>
            </a>
        </div>
        <!--// 좌측배너 -->
        
        <!-- 우측배너 -->
        <div id="" class="bn-right-wrap">
			<?php 
				$bannering = array(
					array("강남","http://onbiz.co.kr/", "bn_link_gangnam.png",	"온비즈 강남점으로 바로가기"),
					array("성수","http://hobiz.co.kr/", "bn_link_seongsu.png",	"온비즈 성수점으로 바로가기"),
					array("아산","http://onbiz2.co.kr/","bn_link_asan.png",		"온비즈 아산점으로 바로가기"),
					array("인천","http://onbiz3.co.kr/","bn_link_nonhyeon.png",	"온비즈 인천점으로 바로가기"),
					array("강릉","http://onbiz4.co.kr/","bn_link_gangneung.png",	"온비즈 강릉점으로 바로가기"),
					array("평택","http://onbiz1.co.kr/","bn_link_pyeongtaek.png","온비즈 평택점으로 바로가기"),
				);

				for($b=0; $b<count($bannering); $b++) {
					if($bannering[$b][0] == city){
						array_splice($bannering, $b, 1);
					}
				}
				for($b=0; $b<count($bannering); $b++){ ?>
				<a href="<?=$bannering[$b][1]?>" class="bn-link"><img src="<?=base_img?>/banner/<?=$bannering[$b][2]?>" alt="<?=$bannering[$b][3]?>"></a>
				<?php  } 
			?>

            <!-- 문의 폼 -->
            <div class="form-area">
                <div class="input-area">
                    <form name="fixed_inquiry" id="fixed_form" action="/web-home/action.php" method="post">
						<input type="hidden" name="pid" value="<?=$pid?>"/>
                        <input type="text" name="Name" class="ip-w" placeholder="이름">
                        <input type="text" name="Email" class="ip-w" placeholder="이메일">
                        <div class="ip-call-box clr">
                            <input type="tel" name="Phone1" class="ip-w" maxlength="3" placeholder="휴대폰">
                            <input type="tel" name="Phone2" class="ip-w" maxlength="4" placeholder="">
                            <input type="tel" name="Phone3" class="ip-w" maxlength="4" placeholder="">
                        </div>
                        <textarea name="Message" class="msg-box" placeholder=""></textarea>
                    </form>
                </div>
                <div class="form-txt-area clr">
                    <div class="txt-box">
                        <p class="fc-red">문의전화</p>
                        <p style="font-size: 18px;"><?=SITE_TEL?></p>
                        <p><?=SITE_TEL2?></p>
                    </div>
                    <p class="btn-box">
						<input type="button" onclick="formSubmit();" class="btn-submit" value="전송">
                    </p>
                </div>
            </div>
            
            <!-- 임대차계약서 신청하기 -->
            <a href="<?=base_url?>/info/guide_new.php" class="btn-apply-area">
                <p class="apply-txt">
                    <em>월5만원</em>
                    <span>사업영위를 위한 사업자등록에 필요한 임대차계약서</span>
                </p>
                <p class="apply-link">
                    <span class="s-1">365일! 24시간!<br>전.국.어.디.서.든</span>
                    <span class="s-2">무방문! 무서류!</span>
                    <em class="s-3">즉.시.신.청.<br>발.급.가.능.</em>
                    <span class="txt-apply">신청하기<span>▶</span></span>
                </p>
            </a>
        </div>
        <!--// 우측배너 -->
        
        <!-- 팝업 : 사무실 구경하기 -->
        <div id="popView" class="pop-bg pop-view" style="display: none;">
            <div class="pop-wrap">
                <div class="pop-contents">
                    <div class="pop-bx-box">
                        <ul class="bx-list clr">
                            <?php 
								for($i=1; $i <=20; $i++){
									echo "<li><img src='http://img.ditower.co.kr/".$i.".jpg' alt='<?=NAME_K?> 이미지 ".$i."'></li>";
								}	
							?>
                        </ul>
                    </div>
                </div>
                <p class="btn-close-box"><a href="javascript:;" class="btn-close" title="닫기"></a></p>
            </div>
        </div>
		<?php
			include_once("./common/main_bottom.php");
		?>