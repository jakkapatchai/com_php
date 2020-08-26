<!DOCTYPE html>
<html lang="">
<head>
<title>Jakkapat</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay light" style="background-image:url('back.jpg');"> 
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <ul class="nospace">
        <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="#" title="Call Us"><i class="fa fa-phone"></i></a></li>
        <li><a href="#" title="Send a Mail"><i class="fa fa-envelope-o"></i></a></li>
        <li><a href="#" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
      </ul>
    </div>
  </div>
  
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Jakkapat</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" href="#">Work</a>
            <ul>
              <li><a href="one.php">one</a></li>
              <li><a href="two.php">two</a></li>
              <li><a href="three.php">three</a></li>
            </ul>
          </li>
          <li><a href="com_all.php">Pyramid</a></li>
          <li><a href="one.php">PHPInfo</a></li>
          <li><a href="three.php">Iframe</a></li>
        </ul>
      </nav> 
    </header>
  </div>
<body>
<style>
    @font-face
        {
            font-family:TLWGTypewriter;
            src:url('rsp_tlwgtypewriter.ttf');

        }
    </style>
    <pre style="font-family:TLWGTypewriter;font-size:50px;">
        <?php echo "\n";
            for ($com=1; $com <= 5; $com++)
            {
                echo ($com);
                for ($jakkapat=1; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }
                for ($jakkapat=2; $jakkapat <= $com; $jakkapat++)
                {
                    echo ("*");
                }
                for ($jakkapat=5; $jakkapat >= $com; $jakkapat--)
                {
                    echo ($com);
                }
                for ($jakkapat=5; $jakkapat >= $com; $jakkapat--)
                {
                    echo ($com);
                }               
            echo ("\n");
            }
        ?>
    </pre>
</body>