<?php
require_once 'wrap/lib/data.php';
require_once 'wrap/lib/nda.php';
require_once 'exp/conf.php';
?>

<!DOCTYPE html>
<html>

<head>
  <!-- add the title of the experiment that would be seen in the browser -->
  <title><?php echo $experimentName; ?></title>
  <!-- PHP wrapper libraries -->
  <script type="text/javascript" src="wrap/lib/validate.js"></script>
  <script type="text/javascript" src="wrap/lib/jquery-3.5.1.min.js"></script>
  <!-- jsPsych CDN (content delivery network) libraries -->
  <script src="https://unpkg.com/jspsych@7.3.3"></script>
  <link href="https://unpkg.com/jspsych@7.3.3/css/jspsych.css" rel="stylesheet" type="text/css"/>
  <!-- jsPsych Plugins (add more here) -->
  <script src="https://unpkg.com/@jspsych/plugin-html-keyboard-response@1.1.2"></script>
  <script src="https://unpkg.com/@jspsych/plugin-survey-multi-choice@1.1.3"></script>
  <!-- general styling -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- additional styling -->
  <!-- <link rel="stylesheet" type="text/css" href="css/foo.css"> -->

</head>

<body id='unload' onbeforeunload="return areYouSure()">
<?php
    if (isset($_GET["workerId"]) || isset($_GET["PROLIFIC_PID"]) || isset($_GET["participantId"])) {
      switch ($language) {
        case 'english':
          include_once "wrap/include/consent/english.php";
          break;
  
        case 'french':
          include_once "wrap/include/consent/french.php";
          break;
  
        case 'german':
          include_once "wrap/include/consent/german.php";
          break;
        }
    } else if (isset($_GET["src_subject_id"])) {
      include_once "wrap/include/nda.php";
    } else {
      include_once "wrap/include/intake.php";
    }
  ?>
</body>
<footer>
  <!-- load wrapper dependencies -->
  <script type="text/javascript" src="wrap/exp/fn.js"></script>
  <script type="text/javascript" src="wrap/exp/lang.js"></script>
  <!-- load experiment dependencies -->
  <script type="text/javascript" src="exp/fn.js"></script>
  <script type="text/javascript" src="exp/var.js"></script>
  <script>
    // show page when loaded 
    window.onload = function() {
      $(".loading").css({
        display: "none"
      });
      $(".consent").css({
        display: "block"
      });
      $(".buttonHolder").css({
        display: "block"
      });
    };
  </script>
</footer>

</html>