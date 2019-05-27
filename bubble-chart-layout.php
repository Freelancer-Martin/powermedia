<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PowerMedia &mdash; Your tool for bespoke data visualization.</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Your tool for making data speak." />
  <meta name="keywords" content="data visualization, statistics, media" />
  <meta name="author" content="PowerMedia" />



    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Album example for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/back-end-style-dashboard.css" rel="stylesheet">
    <link href="css/back-end-style-select-chart.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">

  </head>
  <style>
      .viz-card
      {
          float: left;
            width: 50%;
            padding: .75rem;
            margin-bottom: 2rem;
            border: 0;
      }
  </style>
  <body>
    
  
  
  <div id="page">
      <nav class="fh5co-nav" role="navigation">
    <div class="container-wrap">
      <div class="top-menu">
        <div class="row">
          <div class="col-xs-2">
            <div id="fh5co-logo"><a href="index.html"><IMG SRC="images/logo_powermedia.jpg" ALT="PowerMedia" WIDTH=60 HEIGHT=40></a></div>
          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
              <li class="active"><a href="index.html">Home</a></li>
              <li><a href="work.html">About</a></li>
              <li> <a href="blog.html">Documentation</a></li>
              <li><a href="about.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </nav>


    <div class="container-wrap">
    <main class="col-sm-10  col-md-12">
              
    
    
              <section class="row text-center placeholders">
                  <?php
                   
                  $dataPoints = array(
                    array("name" => "2008", "x" => 2.5, "y" => 40, "z" => 200),
                    array("name" => "2009", "x" => 2, "y" => 12, "z" => 250),
                    array("name" => "2010", "x" => 13.5, "y" => 10, "z" => 124),
                    array("name" => "2011", "x" => 16, "y" => 28, "z" => 112),
                    array("name" => "2012", "x" => 1, "y" => 32, "z" => 90),
                    array("name" => "2013", "x" => 4.6, "y" => 26, "z" => 68),
                    array("name" => "2014", "x" => 7.8, "y" => 19, "z" => 321),
                    array("name" => "2015", "x" => 6, "y" => 15, "z" => 111),
                    array("name" => "2016", "x" => 9, "y" => 12, "z" => 45),
                    array("name" => "2017", "x" => 8.4, "y" => 16, "z" => 68),
                    array("name" => "2018", "x" => 7.5, "y" => 22, "z" => 72),
                    array("name" => "2019", "x" => 8, "y" => 28, "z" => 180),
                    
                  );
                   
                  ?>
                  
                  <script>
                  window.onload = function () {
                   
                  var chart = new CanvasJS.Chart("chartContainer", {
                    title: {
                      text: "Brand Growth vs Market Shares and Sales"
                    },
                    axisX: {
                      title: "Growth",
                      suffix: "%"
                    },
                    axisY: {
                      title: "Market Share",
                      suffix: "%"
                    },
                    data: [{
                      type: "bubble",
                      toolTipContent: "<b>{name}</b><br><b>Growth: </b> {x}%<br><b>Market Share: </b>{y}%<br><b>Sales :</b> ${z}k ",
                      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                  });
                  chart.render();
                   
                  }
                  </script>
                
                  <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                    
                 
              </section>
    
              <h2 style="text-align: center;" >Rendered Data</h2>
              <div class="row" >
              <div style="padding-left: 15%;" class="table-responsiv col-sm-10  col-md-12e">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                      <th>Header</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1,001</td>
                      <td>Lorem</td>
                      <td>ipsum</td>
                      <td>dolor</td>
                      <td>sit</td>
                    </tr>
                    <tr>
                      <td>1,002</td>
                      <td>amet</td>
                      <td>consectetur</td>
                      <td>adipiscing</td>
                      <td>elit</td>
                    </tr>
                    <tr>
                      <td>1,003</td>
                      <td>Integer</td>
                      <td>nec</td>
                      <td>odio</td>
                      <td>Praesent</td>
                    </tr>
                    <tr>
                      <td>1,003</td>
                      <td>libero</td>
                      <td>Sed</td>
                      <td>cursus</td>
                      <td>ante</td>
                    </tr>
                    <tr>
                      <td>1,004</td>
                      <td>dapibus</td>
                      <td>diam</td>
                      <td>Sed</td>
                      <td>nisi</td>
                    </tr>
                    <tr>
                      <td>1,005</td>
                      <td>Nulla</td>
                      <td>quis</td>
                      <td>sem</td>
                      <td>at</td>
                    </tr>
                    <tr>
                      <td>1,006</td>
                      <td>nibh</td>
                      <td>elementum</td>
                      <td>imperdiet</td>
                      <td>Duis</td>
                    </tr>
                    <tr>
                      <td>1,007</td>
                      <td>sagittis</td>
                      <td>ipsum</td>
                      <td>Praesent</td>
                      <td>mauris</td>
                    </tr>
                    <tr>
                      <td>1,008</td>
                      <td>Fusce</td>
                      <td>nec</td>
                      <td>tellus</td>
                      <td>sed</td>
                    </tr>
                    <tr>
                      <td>1,009</td>
                      <td>augue</td>
                      <td>semper</td>
                      <td>porta</td>
                      <td>Mauris</td>
                    </tr>
                    <tr>
                      <td>1,010</td>
                      <td>massa</td>
                      <td>Vestibulum</td>
                      <td>lacinia</td>
                      <td>arcu</td>
                    </tr>
                    <tr>
                      <td>1,011</td>
                      <td>eget</td>
                      <td>nulla</td>
                      <td>Class</td>
                      <td>aptent</td>
                    </tr>
                    <tr>
                      <td>1,012</td>
                      <td>taciti</td>
                      <td>sociosqu</td>
                      <td>ad</td>
                      <td>litora</td>
                    </tr>
                    <tr>
                      <td>1,013</td>
                      <td>torquent</td>
                      <td>per</td>
                      <td>conubia</td>
                      <td>nostra</td>
                    </tr>
                    <tr>
                      <td>1,014</td>
                      <td>per</td>
                      <td>inceptos</td>
                      <td>himenaeos</td>
                      <td>Curabitur</td>
                    </tr>
                    <tr>
                      <td>1,015</td>
                      <td>sodales</td>
                      <td>ligula</td>
                      <td>in</td>
                      <td>libero</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
            </main>
     <div>       
  <div class="container-wrap">
    <footer id="fh5co-footer" role="contentinfo">
      <div class="row">
        <div class="col-md-3 fh5co-widget">
          <h4>About Powermedia</h4>
          <p>We've created this tool with data in our hearts. This tool powers your stories by giving you an easy and convenient way to create visualized data form our selected datasets.</p>
        </div>
        <div class="col-md-3 col-md-push-1">
          <h4>Links</h4>
          <ul class="fh5co-footer-links">
            <li><a href="#">Data sources</a></li>
            <li><a href="#">Useful resources</a></li>
            <li><a href="#">Dowload documentation</a></li>
            <li><a href="#">Our partners</a></li>
            <li><a href="#">Sponsor us</a></li>
          </ul>
        </div>

        <div class="col-md-3 col-md-push-1">
          <h4>Links</h4>
          <ul class="fh5co-footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Documentation</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>

        <div class="col-md-3">
          <h4>Contact Information</h4>
          <ul class="fh5co-footer-links">
            <li>Palo Alto Club <br> Telliskivi, Tallinn, Estonia</li>
            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
            <li><a href="mailto:info@yoursite.com">hello@ypowermedia.world</a></li>
            <li><a href="http://gettemplates.co">powermedia.world</a></li>
          </ul>
        </div>

      </div>

      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p>
            <small class="block">&copy; Powermedia 2019.</small> 
            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">Powermedia</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
          </p>
          <p>
            <ul class="fh5co-social-icons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-linkedin"></i></a></li>
              <li><a href="#"><i class="icon-dribbble"></i></a></li>
            </ul>
          </p>
        </div>
      </div>
    </footer>
  </div><!-- END container-wrap -->
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Counters -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>

