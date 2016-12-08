<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Webkurn technologies</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <!-- CSS reset -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Gem style -->
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <!-- Gem style -->
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <!-- Modernizr -->
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script> -->
    <script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
    <script src="js/index.js"></script>
    <script src="js/carousel.js"></script>

    <!--scrolling animation-->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>



</head>
<body>
    <div>

        <nav role="navigation" class="navbar navbar-default navbar-fixed-top" style="background-color: black; margin-bottom: 0px;">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand" style="font-size: 30px; color: white; font-stretch: wider; font-weight: 600;">A C C U</a>
                </div>

                <div id="navbarCollapse" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#Home" style="color: white;font-weight: bold;">首頁</a></li>
                        <li><a href="#WhoWeAre" style="font-weight: bold;">關於</a></li>
                        <li><a href="#What_We_Offer" style="font-weight: bold;">製程能力</a></li>
                        <li><a href="#Gallary" style="font-weight: bold;">Gallary</a></li>
                        <li><a href="#Contact_us" style="font-weight: bold;">聯絡我們</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div>
            <a id="Home"></a>
            <div class="bs-example">
                <div id="myCarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li class="slide-one active"></li>
                        <li class="slide-two"></li>
                        <li class="slide-three"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                        <div class="active item" style="background-image: url('{{ asset('img/slide1.jpg')}}');
                        background-repeat:no-repeat;background-position:center;">
                            <div class="wow pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                <h2>Slide 1</h2>
                            </div>
                            <div class="carousel-caption">
                                <div class="wow slideInRight">
                                    <h3>First slide label</h3>
                                </div>
                                <div class="wow slideInLeft">
                                    <p>We help to make your business better. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background-image: url('img/slide2.jpg');background-repeat:no-repeat;background-position:center;">
                            <div class="wow pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                <h2>Slide 2</h2>
                            </div>
                            <div class="carousel-caption">
                                <div class="wow slideInRight">
                                    <h3>Second slide label</h3>
                                </div>
                                <div class="wow slideInLeft">
                                    <p>We build brands</p>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background-image: url('img/slide3.jpg');background-repeat:no-repeat;background-position:center;">
                            <div class="wow pulse animated" data-wow-delay="300ms" data-wow-iteration="infinite" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                                <h2>Slide 3</h2>
                            </div>
                            <div class="carousel-caption">
                                <div class="wow slideInRight">
                                    <h3>Third slide label</h3>
                                </div>
                                <div class="wow slideInLeft">
                                    <p>We help to make your business better. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel nav -->
                    <a class="carousel-control left">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="carousel-control right">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
         <div class="row">

         <div class="wow bounceInUp">
            <main>
        <!--<a name="WhoWeAre"></a>-->
                <a id="WhoWeAre"></a>
                  <section id="cd-team" class="cd-section whoweare">
                     <div class="cd-container" >
                        <h3>全興電子有限公司/利橋電子有限公司
<br>ACCU ELECTRONICS CORPORATION
</h3>
                        <ul>
                           <li>
                           <a href="#0" data-type="member-1">
                              <figure>
                                 <img src="{{ asset('img/i18.jpg') }}" alt="Team member 1" style="width:372px;height:358.5px;">
                                 <div class="cd-img-overlay"><span>View Bio</span></div>
                              </figure>

                              <div class="cd-member-info">
                                 關於 <span>全興電子有公司..</span>
                              </div> <!-- cd-member-info -->
                           </a>
                           </li>

                           <li>
                           <a href="#0" data-type="member-2">
                              <figure>
                                 <img src="img/letter-a18.png" alt="Team member 1" style="width:372px;height:358.5px;">
                                 <div class="cd-img-overlay"><span>View Bio</span></div>
                              </figure>

                              <div class="cd-member-info">
                                 公司沿革 <span>印刷電路板製造廠..</span>
                              </div> <!-- cd-member-info -->
                           </a>
                           </li>

                           <li>
                           <a href="#0" data-type="member-3">
                              <figure>
                                 <img src="img/letter-p25.png" alt="Team member 1" style="width:372px;height:358.5px;">
                                 <div class="cd-img-overlay"><span>View Bio</span></div>
                              </figure>

                              <div class="cd-member-info">
                                 經營方針 <span>高品質無缺點..</span>
                              </div> <!-- cd-member-info -->
                           </a>
                           </li>
                        </ul>
                     </div> <!-- cd-container -->
                  </section> <!-- cd-team -->

                  <div class="cd-overlay"></div>
                  </main>
               </div>
               
               
               <div class="cd-member-bio member-1">
                  <div class="cd-member-bio-pict">
                     <img src="img/member-bio-img-1.jpg" alt="Member Bio image">
                  </div>
                  <!-- cd-member-bio-pict -->
                  
                  <div class="cd-bio-content">
                     <h1>關於</h1>
<p>全興電子有公司自成立以來秉持著不斷創新的精神，突破國內外PCB技術，追求高品質的產品來符合客戶需求。</p>
<p>本公司主要業務為電子零件及印刷電路板之相關製造、買賣等業務，產品分為2層、4層、6層…12層印刷電路板、鋁板、LED照明及太陽能相關PCB、HI POWER板等。</p>
<p>本公司工作人員擁有多年PCB製成規畫以及豐富PCB Layout經驗，由工程人員親自接洽，為客戶製品需求進行最完善的工程設計，有任何工程問題皆能即時反應。</p>
<p>在品質管理方面，以有效控管方式，堅持各製程內轉出製品皆零缺點方為轉出，如在各個製成間製品出現問題皆及時解決。</p>
<p>為確保製品皆能滿足甚至高出客戶對商品的需求，本公司在產出與投入間，堅持資源最佳化使用，以相對最大效益與效能來產出高技術、高品質之產品，同時提升公司素質與成效，使企業效能不斷提升並能隨著全球化的市場趨勢持續成長。</p>
<p>全興電子公司</p>
                  </div>
                  <!-- cd-bio-content -->
               </div>
               <!-- cd-member-bio -->
               
               <div class="cd-member-bio member-2">
                  <div class="cd-member-bio-pict">
                     <img src="img/member-bio-img-2.jpg" alt="Member Bio image">
                  </div>
                  <!-- cd-member-bio-pict -->
                  
                  <div class="cd-bio-content">
                     <h1>公司沿革</h1>
<p>本公司為印刷電路板製造廠，於1989年7月創建於桃園縣龜山鄉民生北路一段482號，於1998年5月遷移至桃園市春日路1651巷24弄5號新廠至今。</p>
<p>累積多年生產經驗，本場以專業的生產技術和完善生產設備，致力於高品質印刷電路板製造。</p>
<p>本公司多年來的堅持為以專業的技術、精良的流程管制、即時迅速的交貨，提供客戶最可靠、滿意的服務。</p>

                  </div>
                  <!-- cd-bio-content -->
               </div>
               <!-- cd-member-bio -->
               
               <div class="cd-member-bio member-3">
                  <div class="cd-member-bio-pict">
                     <img src="img/member-bio-img-3.jpg" alt="Member Bio image">
                  </div>
                  <!-- cd-member-bio-pict -->
                  
                  <div class="cd-bio-content">
                     <h1>經營方針</h1>
<p>為確保高品質無缺點的製品目標，除了在既有製程上持續推動在合理範圍內的自動化、管理資訊電腦化，在公司內部推行全面品質管理，提升製品品質信賴度、員工生產能力，降低成本、增加利潤，各項工作重點如下：</p>
<p>(1)完成及時庫存系統，降低庫存成本。</p>
<p>(2)強化現有海內外銷售網路，強化客戶連絡管理。</p>
<p>(3)持續提升自動化生產效率，資源使用最佳化，降低生產成本，維持生產優勢。</p>
<p>(4)加強員工訓練，落實合理化管理制度。</p>
                  </div>
                  <!-- cd-bio-content -->
               </div>
               <!-- cd-member-bio -->
               <a href="#0" class="cd-member-bio-close">Close</a>
               <!-- close the author bio section -->
               
               <script src="{{ asset('js/main.js') }}"></script>
               <!-- Gem jQuery -->
               
            </div>
            
            
            
            <a id="What_We_Offer"></a>
            <div class="row" id="WhatWeOffer" style="height:700px;">
               <div class="container">
                  <div class="wow slideInLeft">
                     <div class="row">
                        <div class="wow pulse animated" data-wow-delay="300ms" data-wow-duration="2s" style="visibility: visible; -webkit-animation-duration: 2s; -webkit-animation-delay: 300ms; -webkit-animation-iteration-count: infinite;">
                           <div class="product_head">製程能力</div>
                        </div>
                        <div class="col-md-4 col-sm-6 products ">
                           <h2>
                              <a><span class="glyphicon glyphicon-stats"></span></a>&nbsp;&nbsp;層數Layer Count</h2>
                           <p>
2~12  Layers
                           </p>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 products ">
                           <h2>
                              <a><span class="glyphicon glyphicon-road"></span></a>&nbsp;&nbsp;材質 Materia</h2>
<p>FR4-Standard</p>
<p>Tg150C, Tg170C, Tg180C</p>
<p>Aluminum</p>
<p>最大尺寸Max. Board Size：</p>
<p>&nbsp;&nbsp;20”*24”</p>
<p>厚度PCB-Thickness：</p>
<p>&nbsp;&nbsp;0.008”~0.2”(0.2mm~5.08mm)</p>
<p>最小孔徑Min. Plated Holes：</p>
<p>&nbsp;&nbsp;0.008”(0.2mm)</p>
<p>銅厚Final Copper：</p>
<p>&nbsp;&nbsp;1/2 oz to 4 oz(17 μm~150 μm)</p>
<p>線寬/線距Min. Trace Width/Space：</p>
<p>&nbsp;&nbsp;0.003” / 0.004” (101 μm / 101 μm)</p>
<p>成品板厚公差</p>
<p>L/Layers Reg.Tolerance：± 0.003”</p>
<p style="font-size:15px;">成型公差Routing Tolerance：± 0.004”</p>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 products  ">
                           <h2>
                              <a><span class="glyphicon glyphicon-refresh"></span></a>&nbsp;&nbsp;後處理<b style="font-size: 28px;">Finish/Options</b></h2>
<p>噴錫HASL</p>
<p>化金Entek</p>
<p>電鍍金Immersion Gold</p>
<p>電鍍錫Immersion Tin</p>
<p>電鍍銀Immersion Silver</p>
<p>金手指 Gold Finger</p>
<p>可剝膠Peelable Mask</p>
<p>阻抗Impedance</p>
<p>Carbon Ink</p>
<p>Controlled Impedance</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <a id="Gallary"></a>
         <div class="wow slideInRight">
            <div class="row gallary">
               <h3>Gallary At Glance</h3>
                <iframe src="gallary" width="100%" height="650" frameborder="0" style="border: 0"></iframe>
            </div>
         </div>
         
         <a id="Contact_us"></a>
         <div class="contact_us">
            <div class="wow swing center animated">
               <h3>聯絡我們</h3>
               <address>
                  33051  桃園市桃園區春日路1651巷24弄5號<br>
No.5, Aly. 24, Ln. 1651, Tsuen Jih Rd.
Taoyuan Dist., Taoyuan City 33051
Taiwan (R.O.C.)<br>
                  TEL：(03)346-5045<br>
                  FAX：(03)346-5005<br>
                  E-mail：accu.accu@msa.hinet.net<br>
                           accu1998@ms26.hinet.net
               </address>
            </div>
         </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.237587647151!2d121.30252015096785!3d25.02600994468625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681fca4d71a3c7%3A0xbe114c48d1b83fe9!2zMzMw5qGD5ZyS5biC5qGD5ZyS5Y2A5pil5pel6LevMTY1MeW3tzI05byENeiZnw!5e0!3m2!1szh-TW!2stw!4v1481173119610" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
         
         
         <div class="p_footer">
            <div class="col-sm-12 t_right">
               &copy; 2014 Webkurn Technologies. <a href="http://Webkurn.com/"></a>
            </div>
            
            
         </div>
      </div>
      
      </body>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
      <script src="js/main1.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      
      
      </html>
