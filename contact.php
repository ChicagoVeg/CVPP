<?php
  if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $from = 'CVPP Contact Form'; 
    $to = 'info@chicagoveg.com'; 
    $subject = 'Message from CVPP Contact Form ';
    
    $body ="From: $name\n E-Mail: $email\n Message:\n $message";

    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }
    
    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }
    
    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
  if (mail ($to, $subject, $body, $from)) {
    $result='<div class="alert alert-success">Thank You. We will be in touch</div>';
  } else {
    $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
  }
}
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
     Chicago Veggie Pride Parade- Contact us
    </title>
    
 <!--   
///////////////////////////////////////////////////////////////////////////////////
 Based on: https://github.com/bootstrapbay/contact-form 
///////////////////////////////////////////////////////////////////////////////////
-->

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    
    <script type="text/javascript" charset="utf-8">
      document.addEventListener('DOMContentLoaded', function () {
		var menuCapture = document.getElementById("nav").innerHTML;
      document.getElementById("navmobile").innerHTML = document.getElementById("nav").innerHTML;
	}
                             );
      </script>
      
      <link href="./bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type='text/css' />
        <link href="./styles/main.css" rel="stylesheet" type='text/css' />
      
      
      <link rel="stylesheet" type="text/css" href="http://cdn2.editmysite.com/css/sites.css?buildTime=1234" />
      <link rel="stylesheet" type="text/css" href="http://cdn1.editmysite.com/editor/libraries/fancybox/fancybox.css?1234" />
      <link rel="stylesheet" type="text/css" href="files/main_style.css?1427513509" title="wsite-theme-css" />
      <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
      
      <link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
      <link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
      <link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
      <link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
      <link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
      <style type='text/css'>
        .wsite-elements.wsite-not-footer div.paragraph, .wsite-elements.wsite-not-footer p, .wsite-elements.wsite-not-footer .product-block .product-title, .wsite-elements.wsite-not-footer .product-description, .wsite-elements.wsite-not-footer .wsite-form-field label, .wsite-elements.wsite-not-footer .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {
        }
        #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {
        }
        .wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{
        }
        .wsite-elements.wsite-not-footer h2, .wsite-elements.wsite-not-footer .product-long .product-title, .wsite-elements.wsite-not-footer .product-large .product-title, .wsite-elements.wsite-not-footer .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {
          font-family:"Cantarell" !important;
        }
        #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {
        }
        .wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{
        }
        #wsite-title {
        }
        .wsite-menu-default a {
          font-family:"Cantarell" !important;
          font-size:12px !important;
        }
        .wsite-menu a {
        }
        .wsite-image div, .wsite-caption {
        }
        .galleryCaptionInnerText {
        }
        .fancybox-title {
        }
        .wslide-caption-text {
        }
        .wsite-phone {
        }
        .wsite-headline {
          font-family:"Cantarell" !important;
          font-size:44px !important;
        }
        .wsite-headline-paragraph {
          font-family:"Cantarell" !important;
          font-size:21px !important;
        }
        .wsite-button-inner {
          font-family:"Cantarell" !important;
          font-weight:400 !important;
        }
        .wsite-not-footer blockquote {
        }
        .wsite-footer blockquote {
        }
        .blog-header h2 a {
        }
        #wsite-content h2.wsite-product-title {
        }
        .wsite-product .wsite-product-price a {
        }
        .wsite-button-large .wsite-button-inner {
          font-size:16px !important;
        }
      </style>
      <style>
        .wsite-background {
          background-image: url('./uploads/4/9/8/5/49858617/background-images/685276584.jpeg') !important;
          background-repeat: no-repeat !important;
          background-position: 50% 50% !important;
          background-size: cover !important;
          background-color: transparent !important;
          background: inherit;
        }
        body.wsite-background {
          background-attachment: fixed !important;
        }
      </style>
      <script>
        <!--
          var STATIC_BASE = '//cdn1.editmysite.com/';
        var STYLE_PREFIX = 'wsite';
        //-->
      </script>
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'>
      </script>
      
      <script src="http://cdn2.editmysite.com/js/site/main.js?buildTime=1234">
      </script>
      <script type="text/javascript">
        _W.configDomain = "www.weebly.com";
      </script>
      <script>
        _W.relinquish && _W.relinquish()
      </script>
      <script type="text/javascript">
        <!--
          var IS_ARCHIVE = 1;
        
        (function(jQuery){
          function initFlyouts(){
			initPublishedFlyoutMenus(
              [{"id":"627615439828568202","title":"Home","url":"index.html","target":""}
               ,{"id":"683721072671225464","title":"About","url":"about.html","target":""}
               ,{"id":"169773969134008750","title":"Contact","url":"contact.php","target":""}
              ],
              "683721072671225464",
              "<li class=\"wsite-menu-item-wrap\"><a href=\"#\" data-membership-required=\"\" class=\"wsite-menu-item\">{{title}}<\/a><\/li>",
              'active',
              false,
              {"site\/menu\/submenu-main":"<div class=\"wsite-menu-wrap\" style=\"display:none\">{{! Designer note: \"wsite-menu-wrap\" required on submenu wrapper }}\n\t<ul class=\"wsite-menu\">{{! Designer note: \"wsite-menu\" required on submenu element }}\n\t\t{{#children}}{{> site\/menu\/submenu-item}}{{\/children}}\n\t<\/ul>\n<\/div>\n","site\/menu\/submenu-item":"<li{{#id}} id=\"{
               {id}
              }\"{{\/id}} class=\"wsite-menu-subitem-wrap{
              {#current_page}
              } wsite-nav-current{
              {\/current_page}
              }\">{{! Designer note: id required & \"wsite-menu-subitem-wrap\" required on the item wrap }}\n\t<a href=\"{
              {itemlink}
              }\"{{#target}} target=\"{
              {target}
              }\"{{\/target}} class=\"wsite-menu-subitem\">{{! Designer note: \"wsite-menu-subitem\" required on the item link }}\n\t\t<span class=\"wsite-menu-title\">\n\t\t\t{{{itemtitle}}}\n\t\t<\/span>{{#has_children}}<span class=\"wsite-menu-arrow\">&gt;<\/span>{{\/has_children}}\n\t<\/a>\n\t{{#has_children}}{{> site\/menu\/submenu-main}}{{\/has_children}}\n<\/li>\n","site\/menu\/main":"<ul class=\"wsite-menu-default\">{{> site\/menu\/main-without-wrap}}<\/ul>{{! Designer note: \"wsite-menu-default\" required on menu element }}\n","site\/menu\/main-without-wrap":"{{#links}}{{!\n}}{{#current_page}}{{> site\/menu\/item-current}}{{\/current_page}}{{!\n}}{{^current_page}}{{> site\/menu\/item}}{{\/current_page}}{{!\n}}{{\/links}}\n","site\/menu\/item-current":"<li{{#id}} id=\"{
              {id}
              }\"{{\/id}} class=\"wsite-menu-item-wrap\">{{! Designer note: id required & \"wsite-menu-item-wrap\" required on the item wrapper }}\n\t<a href=\"{
              {itemlink}
              }\"{{#target}} target=\"{
              {target}
              }\"{{\/target}} class=\"wsite-menu-item\">{{! Designer note: \"wsite-menu-item\" required on the item link }}\n\t\t{{{itemtitle}}}\n\t<\/a>\n\t{{#has_children}}{{> site\/menu\/submenu-main}}{{\/has_children}}\n<\/li>\n","site\/menu\/item":"<li{{#id}} id=\"{
              {id}
              }\"{{\/id}} class=\"wsite-menu-item-wrap\">{{! Designer note: id required & \"wsite-menu-item-wrap\" required on the item wrapper }}\n\t<a href=\"{
              {itemlink}
              }\" data-membership-required=\"{
              {membership-required}
              }\"{{#target}} target=\"{
              {target}
              }\"{{\/target}} class=\"wsite-menu-item\">{{! Designer note: \"wsite-menu-item\" required on the item link }}\n\t\t{{{itemtitle}}}\n\t<\/a>\n\t{{#has_children}}{{> site\/menu\/submenu-main}}{{\/has_children}}\n<\/li>\n"}
			)
		}
      if (jQuery) {
        jQuery(document).ready(function() {
          jQuery(initFlyouts);
        }
                              );
      }
      else{
        if (Prototype.Browser.IE) window.onload = initFlyouts;
        else document.observe('dom:loaded', initFlyouts);
      }
	}
    )(window._W && _W.jQuery)
      //-->
      </script>
      
  </head>
  <body class="short-header-page wsite-theme-light  wsite-page-about">
    <div id="wrapper">
      
      <div id="navigation">
        <div id="navigation-wrap">
          <div id="sitename">
            <span class="wsite-logo">
              
               <a href="./index.html">
                <img src="./images/logo.jpg" />
              </a>
              
            </span>
          </div>
          <div id="nav">
            
  	 		<ul class="wsite-menu-default">
              <li id="active" class="wsite-menu-item-wrap">
                <a href="index.html" class="wsite-menu-item">
                  Home
                </a>
                
              </li>
              <li id="pg683721072671225464" class="wsite-menu-item-wrap">
                <a href="about.html" data-membership-required="0" class="wsite-menu-item">
                  About Parade
                </a>
                
              </li>
              <li id="getInvolved" class="wsite-menu-item-wrap">
                <a href="getinvolved.html" data-membership-required="0" class="wsite-menu-item">
                  Get Involved
                </a>
              </li>
              <li id="partners" class="wsite-menu-item-wrap">
                <a href="partners.html" data-membership-required="0" class="wsite-menu-item">
                  Partners
                </a>
              </li>
              <li id="donate" class="wsite-menu-item-wrap">
                <a href="donate.html" data-membership-required="0" class="wsite-menu-item">
                  Donate
                </a>
              </li>
              <li id="organizers" class="wsite-menu-item-wrap">
                <a href="organizers.html" data-membership-required="0" class="wsite-menu-item">
                  Organizers
                </a>
              </li>
              <li id="contact" class="wsite-menu-item-wrap">
                <a href="contact.php" data-membership-required="0" class="wsite-menu-item">
                  Contact Us
                </a>
              </li>
              
          </ul>
      </div>
      <div id="navmobile">
      </div>
      </div>
      <div id="mobile-close">
      </div>
  </div>
  
  
  <div id="main">
    
    <div id="mobile-top">
      <div id="mobile-open">
      </div>
      <div id="sitename">
        <span class="wsite-logo">
          
           <a href="./index.html">
                <img src="./images/logo.jpg" />
              </a>
          
        </span>
      </div>
      
    </div>
    
    <!--
<div id="banner-wrap">
<div id="banner" class="wsite-background wsite-custom-background">
<div id="banner-content">
<h2>
</h2>
</div>
</div>
</div>
-->
  	<div id="content-wrapper">
      <div id="content">
        <div id='wsite-content' class='wsite-elements wsite-not-footer'>
        
<h1 class="text-center lead bold">    
 
        Contact Us
          </h1>

<div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
         
        <form class="form-horizontal" role="form" method="post" action="contact.php">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>  
            </div>
          </div>
        </form> 
      </div>
    </div>
  </div>   


        </div>
      </div>
  	</div>
    
  	<div id="footer">
      <br /> <br />
           <p class="text-center">
          &copy; <a href="http://www.chicagoveg.com">ChicagoVeg</a>. All rights reserved. 
          </p>
    </div>
    
  </div>
  
      </div>
      <script type="text/javascript" src="files/theme/custom.js">
      </script>
      <script type="text/javascript" src="files/theme/mobile.js">
      </script>
      
      
  </body>
</html>
