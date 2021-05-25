<?php $this->load->view('vhead')  ?>

<body data-spy="scroll" data-offset="80">

  <!-- Preloader -->
  <!-- <div class="animationload">
    <div class="loader">
        Mohon Tunggu
    </div>
  </div>  -->
  <!-- End Preloader -->


  <nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Fuminati</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#home">Beranda</a></li>
          <li><a href="#services">Layanan</a></li>
          <li><a href="#twitter_tweet">Testimoni</a></li>
          <li><a href="#contact">Hubungi</a></li>
          <li><a href="#login">Login Customer</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>

    <!-- /HOME -->
    <section class="main-home" id="home">
      <div class="home-page-photo"></div> <!-- Background image -->
      <div class="home__header-content">
        <div id="main-home-carousel" class="owl-carousel">
          <form role="form" name="ajax-form" id="ajax-form" action="php/contact.php" method="post" class="form-main">
              <div class="col-xs-6">
                <div class="row">            
                  <h3>Masuk Customer Fumigasi</h3>
                  <div class="form-group col-xs-12">
                    <input class="form-control" id="email2" name="email" type="text" onfocus="if(this.value == 'E-mail') this.value='';" onblur="if(this.value == '') this.value='E-mail';" value="E-mail">
                    <div class="error" id="err-emailvld" style="display: none;">E-mail is not a valid format</div> 
                  </div>
                  <div class="form-group col-xs-12">
                    <input class="form-control" id="password" name="password" onblur="if(this.value == '') this.value='Password'" onfocus="if(this.value == 'Name') this.value=''" type="text" value="Password">
                    <div class="error" id="err-name" style="display: none;">Please enter password</div>
                  </div>
                </div>
                <div class="row">            
                  <div class="col-xs-12 text-center">
                    <div id="ajaxsuccess">Berhasil.</div>
                    <div class="error" id="err-form" style="display: none;">There was a problem validating the form please check!</div>
                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                    <div class="error" id="err-state"></div>
                    <button type="submit" class="btn btn-custom" id="send">Masuk</button>
                  </div>
                </div>
              </div>  
            </form>
          <!-- <div>
            <h1 class="intro-title">Fumigasi</h1>
            <p class="intro-text">Melakukan fumigasi terhadap kontainer merupakan syarat standar di banyak negara <br/>yaitu untuk memastikan hama tidak masuk ke negara mereka serta membawa penyakit</p>
            <a class="btn btn-custom" href="#">Pesan</a>
          </div --><!--slide item like paragraph-->

          <!-- <div>
            <h1 class="intro-title">Sterilkan Produk Ekspor</h1>
            <p class="intro-text">Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies <br/>  pelentesque tempor justo a scelerisque placerat sit amet magna e.</p>
            <a class="btn btn-custom" href="#">Pesan</a>
          </div --><!--slide item like paragraph-->

          <!-- <div>
            <h1 class="intro-title">Kami Ahlinya & Berpengalaman</h1>
            <p class="intro-text">Lorem ipsum dolor sit amet consectetur adictum piscing elit fusce sit amet inerdum neque ultra icies <br/>  pelentesque tempor justo a scelerisque placerat sit amet magna e.</p>
            <a class="btn btn-custom" href="#">Pesan</a>
          </div> --><!--slide item like paragraph-->
        </div>
      </div>
    </section>
    <!-- /End HOME -->

            
          </div> <!-- end col-md-12 -->
        </div> <!-- end row -->
      </div> <!-- container -->
    </section>
    <!-- End CONTACT -->

    <!-- FOOTER begings -->
    <footer id="footer">    
      <div class="footer-widgets-wrap">
        <div class="container text-center">    
          <div class="row">
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>KEEP IN TOUCH</h4>
                <div class="footer-socials">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>Alamat</h4>
                <p>Jl IAIN No I<br>
                Medan Timur, Other</p>
                <p>+0 123-456-7890<br>
                <a href="#">fuminati</a><br>
                contoh@fuminati.com</p>
              </div> <!-- end footer-content -->
            </div> <!-- end col-sm-4 -->
            <div class="col-sm-4 col-md-4">
              <div class="footer-content">
                <h4>Pesanan</h4>
                <p>Masuk kembali untuk melihat pesanan</p>
                <p><button type="button" class="btn btn-custom-sm"><a href="#">Pesan</a></button></p>
              </div>  <!-- end footer-content -->   
            </div> <!-- end col-sm-4 -->
          </div> <!-- end row -->
        </div> <!-- container -->
      </div>
      <div class="footer-bottom text-center"> <!-- Footer-copyright -->
        <p>©2021<a href="">Fuminati</a></p>
      </div>
    </footer>
    <!-- End footer begings -->


    <!-- Scroll top -->
    <a href="#" class="back-to-top"> <i class="fa fa-chevron-up"> </i> </a>


    <!-- Style switcher -->
        
        <!-- <div class="bottom">
            <a href="#" class="settings"><i class="fa fa-refresh fa-spin"></i></a>
        </div> -->
    </div>
    <!-- end Style switcher --> 


    <!-- JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <!-- initialize jQuery Library -->
     <script src="http://localhost/fuminati/as/js/jquery.min.js"></script>
     <!-- jquery easing -->
     <script src="http://localhost/fuminati/as/js/jquery.easing.min.js"></script>
     <!-- Bootstrap -->
     <script src="http://localhost/fuminati/as/js/bootstrap.min.js"></script>
     <!-- modal-effect -->
     <script src="http://localhost/fuminati/as/js/classie.js"></script>
     <script src="http://localhost/fuminati/as/js/modalEffects.js"></script>
     <!-- Counter-up -->
     <script src="http://localhost/fuminati/as/js/waypoints.min.js" type="text/javascript"></script>
     <script src="http://localhost/fuminati/as/js/jquery.counterup.min.js" type="text/javascript"></script>
     <!-- SmoothScroll -->
     <script src="http://localhost/fuminati/as/js/SmoothScroll.js"></script>
     <!-- Parallax -->
     <script src="http://localhost/fuminati/as/js/jquery.stellar.min.js"></script>
     <!-- Jquery-Nav -->
     <script src="http://localhost/fuminati/as/js/jquery.nav.js"></script>
     <!-- Owl carousel -->                                                      
     <script type="text/javascript" src="http://localhost/fuminati/as/js/owl.carousel.min.js"></script>
     <!-- App JS -->
     <script src="http://localhost/fuminati/as/js/app.js"></script>

     <!-- Switcher script for demo only -->
    <script type="text/javascript" src="js/switcher.js"></script>


  </body>
</html>
