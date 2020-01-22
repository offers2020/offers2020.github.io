<?php
require_once __DIR__ . '/include/Class.Processing.php';
$processing = new PROCESSING();

//save tracking params to cookie
$aff = $processing->get_save_tracking_parameter($processing::$url_aff);
$cid = $processing->get_save_tracking_parameter($processing::$url_cid);
$network = $processing->get_save_tracking_parameter($processing::$url_net);
$sid = $processing->get_save_tracking_parameter($processing::$url_sid);
//save tracking params to cookie

$product = 'silentsnore';
$processing->save_data_to_cookie($processing->COOKIE_PRODUCT, $product);

$main_url = 'https://hyperstech.com/intl/';
$order_url = $main_url.'order2.php?prod='.$product.'&net='.$network.'&aff='.$aff.'&sid='.$sid.'&cid='.$cid;

$scheme = 'http';
if(!empty($_SERVER['HTTP_X_FORWARDED_PROTO'])){
  $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO'];
}else{
  $scheme = !empty($_SERVER['HTTPS']) ? "https" : "http";
}
$img_to_share = $scheme.'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/img/content_img_1.jpg';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs    ================================================== -->
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="<?php echo $img_to_share; ?>">
  <title>Silicone Snoring Stopper, Anti Snore Nose Clip Device, Sleeping Aid Prevent Snoring And Help Breathing</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <!-- Stylesheet      ================================================== -->
  <link rel="stylesheet" type="text/css"  href="./css/fontello.css">
  <link rel="stylesheet" type="text/css"  href="./css/style.css">
  <link rel="icon" type="image/png" href="./img/favicon.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <header class="header">
    <!-- Navigation        ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $order_url; ?>" target="_blank"><img class="img-logo" src="./img/logo.png" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo $order_url; ?>" target="_blank">Home</a></li>
            <li><a href="<?php echo $main_url; ?>legal/contact-us.php?prod=<?php echo $product; ?>" target="_blank">Contact Us</a></li><!--  class="active" -->
            <li><a href="<?php echo $main_url; ?>legal/policy.php?prod=<?php echo $product; ?>" target="_blank">Privacy Policy</a></li>
            <li><a href="<?php echo $main_url; ?>legal/term.php?prod=<?php echo $product; ?>" target="_blank">Terms of Business</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>
  <div class="wrapper_header_img">
    <div class="container">
      <div class="wrapper_top_block">
        <div class="inner_top_block">
          <div class="row">
            <div class="col-md-12">
              <div class="top_block">
                <h1 class="h1"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Is The Incredible<br class="mob-none"><span class="fw-300 d-inline-block">Snore Reduction Aid</span></h1>
                <div class="advert">
                  <div class="item_advert"><img class="mr-10" src="./img/img-1.png" alt=""><span class="date">John Lewis</span></div>
                  <div class="item_advert"><img class="mr-10" src="./img/img-2.png" alt=""><span class="category">Technology</span></div>
                  <div class="item_advert"><img class="mr-10" src="./img/img-3.png" alt=""><span class="name"><?php echo date('d.m.Y'); ?></span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header_img">
        <a href="<?php echo $order_url; ?>" target="_blank"><img class="top_img img_radius img-responsive" src="./img/top_img.jpg" alt="top_img"></a>
      </div>
    </div>
  </div>

  <!-- Home Section      ==========================================-->
  <div class="wrapper-content">
    <div class="container">
      <div class="row">
        <div class="col-md-8 pr-20">
          <div class="content">
            <div class="top_icons">
              <div class="row">
                <div class="col-sm-4">
                  <a href="javascript:void(0);" class="btn btn-transparent btn-transparent-facebook"><i class="demo-icon icon-facebook"></i></a>
                </div>
                <div class="col-sm-4">
                  <a href="javascript:void(0);" class="btn btn-transparent btn-transparent-twitter"><i class="demo-icon icon-twitter"></i></a>
                </div>
                <div class="col-sm-4">
                  <button type="button" class="btn btn-transparent btn-transparent-link" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Link copied!">
                    <i class="demo-icon icon-link"></i><span class="social_text">Copy</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="quiet">Proven to work, it has been giving partners a good night sleep and improved the breathing of habitual snorers for a long time</div>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-35 mb-50" src="./img/content_img_1.jpg" alt="content_img_1"></a>
            <p class="text">Snoring can be the reason behind so many arguments. It has even been known to cause partners to split. Everyone needs a good night's sleep, and being deprived of it can have disastrous consequences. Luckily, for the millions of people that snore, there is a solution.</p>
            <p class="text"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> is a proven answer to the problem that is snoring. It doesn't matter how severe, this is a product that gets rid of snoring.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_2.jpg" alt="content_img_2"></a>
            <p class="text">Most people believe that snoring is harmless, an annoyance at the worst. However, it is actually more severe, snoring can be bad for your health. Of course, everyone needs a good night's sleep to rest their body in order to lead a healthy life, but the bad news doesn't stop there.</p>
            <p class="text">Snoring occurs when the airways are partially blocked which makes that irritating sound. A simple, yet effective solution is available, <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a>.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_3.jpg" alt="content_img_3"></a>
            <h2 class="h2">How Does <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Work?</h2>
            <p class="text">Unlike other products on the market that can be too tight, <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> uses a soft, yet effective approach to widen the nostrils which allows air to flow without blockages.</p>
            <p class="text">The faster-flowing air communicates with your body, encouraging it to adopt nasal breathing which leads to a healthier sleep cycle.</p>
            <p class="text">Just push it into your nasal opening, and the magnets keep it in place, allowing you to rest in the way you should.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_4.jpg" alt="content_img_4"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Is Easy To Use</h2>
            <p class="text">There are different methods used to prevent snoring. Some people try turning over, changing their diet, even consulting their doctor. The most effective method is using <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a>. A simple silicone ring that is pushed into the nose, it reduces snoring from the first use.</p>
            <p class="text">It is a lot easier than other methods which use chin straps and can be incredibly uncomfortable. <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> takes a second to place into the right position.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_5.jpg" alt="content_img_5"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Is Comfortable</h2>
            <p class="text">Some people think that putting something into their nose will feel uncomfortable, and will stop them from falling asleep as easily.</p>
            <p class="text">This isn't the case. <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> is not intrusive and fits comfortably in your nose. Because of the therapeutic magnets, it won't fall out and will stimulate the sensory nerves which can lead to a peaceful nights rest.</p>
            <p class="text">The silicone ring is soft, light when in use and will vastly improve your breathing in the night.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_6.jpg" alt="content_img_6"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Helps With Deep Sleep</h2>
            <p class="text">For many people, a state of deep sleep is short lived. This is also the case for anyone next to the person snoring.</p>
            <p class="text">Deep sleep helps your body to recover, repair, build muscle tissues, and replace cells among other things. <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> helps your body to stay in this state for the time your body needs it to. The same goes for your partner.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_7.jpg" alt="content_img_7"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Is Good For Your Health</h2>
            <p class="text">Without the right level of sleep, your body will not be able to function at optimal levels. For many people, consecutive nights without the right amount of sleep can start to be detrimental to their health.</p>
            <p class="text">So if you or your partner snores, you could be impacting health levels, for both of you.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_8.jpg" alt="content_img_8"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Is Hygienic</h2>
            <p class="text">Of course, anything you insert into your nose will need to be kept in a clean place. <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> comes with a reusable plastic case with this in mind. It is somewhere you can store it hygienically and keep it away from dust.</p>
            <p class="text">The plastic case is sterile, and useful because it fits conveniently in your bag so it can be used when traveling. <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> can be soaked in hot water before the initial use, and any other time after.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_9.jpg" alt="content_img_9"></a>
            <h2 class="h2">It Is Made From Quality Materials</h2>
            <p class="text">The silicone is of high quality and is nontoxic. Its soft texture means it is not intrusive and after a single use, you will barely know it is there.</p>
            <p class="text">The same goes for the plastic box. It is intended to last for a long time so only the best materials are used to create the most important purchase you will make this year. Because it is durable, you can take it anywhere. When staying at a friends house, or hotel, you want to make sure you can take a snoring aid with you.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_10.jpg" alt="content_img_10"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Is Suitable For All</h2>
            <p class="text">A question people always ask about sleep aids is will it fit?</p>
            <p class="text">The good news is that <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> is a one size fits all product and will be just as comfortable for men and women who snore. There is no smell meaning the user will not notice it is there during the night, and anyone can enjoy wearing it.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_11.jpg" alt="content_img_11"></a>
            <h2 class="h2"><a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> Can Be Used During Exercise</h2>
            <p class="text">A lot of people struggle to breathe at optimal levels during exercise.</p>
            <p class="text">To help the flow of air get to your lungs when you need it, <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> can be used during exercise. To give yourself an advantage on the court, or wherever you are playing, it is a product that can give you that extra push when you most need it.</p>
            <a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive img_radius mt-50 mb-50" src="./img/content_img_12.jpg" alt="content_img_12"></a>
            <h2 class="h2">By opening the airways it will really improve performance.</h2>
            <p class="text">For optimal health, you need a good night sleep. If you are one of the many people who live in a household with someone who snores, <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> is a product you should not live without.</p>
            <div class="wrapper_ultra_boost">
              <div class="ultra_boost">
                <div class="ultra_boost_title">How can I buy the <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a>?</div>
                <p class="text mb-0">The <a href="<?php echo $order_url; ?>" target="_blank">SilentSnore</a> is available for a limited time only, with exclusive offers and free shipping. <span class="wrapper_blue">Ordering is quick and easy</span>, so take advantage of the great price by ordering yours today.</p>
              </div>
            </div>
            <div class="wrapper_ofer">
              <div class="offer">
                <div class="row d-flex align-items-center">
                  <div class="col-md-4 text_offer">Special Offer:</div>
                  <div class="col-md-4 center_block">
                    <span class="fw-700 ml-5 mr-25 fs-32 color-white">$49</span>
                    <span class="color-white fs-20 line-through ml-10 mt-5"> $98</span>
                  </div>
                  <div class="col-md-4"><span class="right_text_offer">available online only and while supplies last.</span> </div>
                </div>
              </div>
              <a href="<?php echo $order_url; ?>" target="_blank" class="btn btn-white btn-white-dop">Get yours now with 50% discount and free shipping worldwide!</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 pl-20">
          <div class="wrapper-right-block">
            <div id="aside1" class="">
              <div class="right-block">
                <div class="close">X</div>
                <div class="wrapper_right-img"><a href="<?php echo $order_url; ?>" target="_blank"><img class="img-responsive right-img" src="./img/right-img.png" alt="right-img"></a></div>
                <div class="inner-right_block">
                  <h3 class="mt-0 lh-14 color-white">How can I buy the <a href="<?php echo $order_url; ?>" target="_blank"><span class="color-white fw-300">SilentSnore</span></a>?</h3>
                  <p class="text color-white"><a href="<?php echo $order_url; ?>" target="_blank"><span class="color-white">SilentSnore</span></a> is available from the official website and for the Best Price!</p>
                  <a href="<?php echo $order_url; ?>" target="_blank" class="btn btn-white btn-white-dop pulse"><span class="ring"></span><span class="circle"></span>Сheck availability</a>
                </div>
                <div class="valid_block"><img src="./img/valid.png"></div>
              </div>
            </div>
          </div>
          <div class="flouting btn-pulse">
            <span class="ring"></span>
            <span class="circle"></span>
            <i class="demo-icon icon-basket color-light-blue"></i>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /Home Section -->

  <footer id="footer">
    <div class="top_footer">
      <div class="container">
        <div class="wrapper_nav">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $order_url; ?>" target="_blank">Home</a></li>
            <li><a href="<?php echo $main_url; ?>legal/contact-us.php?prod=<?php echo $product; ?>" target="_blank">Contact</a></li>
            <li><a href="<?php echo $main_url; ?>legal/policy.php?prod=<?php echo $product; ?>" target="_blank">Privacy Policy</a></li>
            <li><a href="<?php echo $main_url; ?>legal/term.php?prod=<?php echo $product; ?>" target="_blank">Terms of Business</a></li>
          </ul>
        </div>
        <div class="copyright">&copy; 2010 - <?php echo date('Y'); ?></div>
      </div>
    </div>
    <div class="container">
      <div class="wrapper_logo_footer">
        <a  href="<?php echo $order_url; ?>" target="_blank"><img src="./img/logo.png" alt="logo"></a>
      </div>
    </div>
  </footer>

  <a id="totop" href="#totop"><i class="demo-icon icon-angle-up"></i></a>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Javascripts ================================================== -->
  <script src="./js/main.js"></script>
  <script src="./js/jquery.social.sharing.js"></script>
  <script>
    (function(){
      var a = document.querySelector('#aside1'), b = null, P = 0;  // если ноль заменить на число, то блок будет прилипать до того, как верхний край окна браузера дойдёт до верхнего края элемента. Может быть отрицательным числом
      window.addEventListener('load', Ascroll, false);
      window.addEventListener('resize', Ascroll, false);
      window.addEventListener('scroll', Ascroll, false);
      document.body.addEventListener('load', Ascroll, false);
      document.body.addEventListener('resize', Ascroll, false);
      document.body.addEventListener('scroll', Ascroll, false);
      function Ascroll() {
        if (b == null) {
          var Sa = getComputedStyle(a, ''), s = '';
          for (var i = 0; i < Sa.length; i++) {
            if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
              s += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
            }
          }
          b = document.createElement('div');
          var text_offsetWidth = (a.offsetWidth == 0)?'auto':a.offsetWidth + 'px;'
          b.style.cssText = s + ' box-sizing: border-box; width: ' + text_offsetWidth;
          a.insertBefore(b, a.firstChild);
          var l = a.childNodes.length;
          for (var i = 1; i < l; i++) {
            b.appendChild(a.childNodes[1]);
          }
          a.style.height = b.getBoundingClientRect().height + 'px';
          a.style.padding = '0';
          a.style.border = '0';
        }
        var Ra = a.getBoundingClientRect(),
        R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('footer').getBoundingClientRect().top + 0);  // селектор блока, при достижении верхнего края которого нужно открепить прилипающий элемент;  Math.round() только для IE; если ноль заменить на число, то блок будет прилипать до того, как нижний край элемента дойдёт до футера
        if ((Ra.top - P) <= 0 && document.querySelector('.wrapper-right-block').scrollTop==0) {
          if ((Ra.top - P) <= R) {
            b.className = 'stop';
            b.style.top = - R +'px';
          } else {
            b.className = 'sticky';
            b.style.top = P + 'px';
          }
        } else {
          b.className = '';
          b.style.top = '';
        }
        window.addEventListener('resize', function() {
          a.children[0].style.width = getComputedStyle(a, '').width
        }, false);
      }
    })()
  </script>
</body>
</html>