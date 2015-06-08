<?php include("../../../includes/variables.php");?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>ENK INTERNATIONAL | Coterie</title>
  <meta name="description" content="An International fashion exhibition in the U.S. featuring contemporary to traditional women’s ready-to-wear.  
                    Twice a year in NYC, concurrent with Sole Commerce and TMRW">
  <meta name="keywords" content="Fashion Coterie, Coterie, womens trade show, womans trade show, international fashion trade show, sole commerce, tmrw, javits fashion, javits" />
  <meta name="author" content="ENK International">
  <meta name="viewport" content="width=940">
  <meta name="format-detection" content="telephone=no">
  

  <link rel="stylesheet" href="<?php echo BASE; ?>/css/enk.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo BASE; ?>/css/form.css">

    <script src="../../../js/jquery-1.2.3.pack.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js?onload=captchaCallback&render=explicit" async defer></script>
    <script>
      var captchaCallback = function() {
        $(document).ready(function() {
          $('.enkCaptcha').each(function() {
            grecaptcha.render($(this).attr('id'), {
              'sitekey' : '6LfnCQgTAAAAAO6APlJyI2q9z7ADVkusKSEaZban', //Replace this with your Site key
              'theme' : 'light'
            });          
          });
        });
      };
    </script>
</head>