<?php include 'header.php';?>

    <body id="page-top">
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <!-- ========== Navigation ========== -->

        <header class="page-title pt-small pt-dark">
          <div class="container">
            <div class="row">
              <h1 class="col-sm-6">Registrations</h1>
              <ol class="col-sm-6 text-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Registrations</a></li>
              </ol>
            </div>
          </div>
        </header>
                
        <!-- ========== Forms ========== -->
  
        <section class="container section" style="margin-top: 1pc;
    margin-bottom: 1pc;
    background: black;
    opacity: 0.8;
    border-radius: 10px;
    width: 80vw; padding-top:10px;">
          <div style="width:fit-content; margin:auto;"><h1 style="color:white;">Register</h1></div>
          <form id="registration-form" action="registrations.php" method="post">

            <div class="row ws-m">
              <div class="col-md-offset-2 col-md-4">
                <!-- Name -->
                <div class="form-group">
                  <input type="name" class="form-control" id="name" placeholder="Enter your name">
                  <label for="name">Name</label>
                </div>
                <!-- Email -->
                <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter your email">
                  <label for="email">Email</label>
                </div>
                <!-- Password -->
                <div class="form-group">
                  <input type="number" class="form-control" id="phone" placeholder="Enter your Ph. No.">
                  <label for="phone">Contact No.</label>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="city" placeholder="City Name">
                  <label for="city">City Name</label>
                </div>
              </div><!-- / .col-md-4 -->

              <div class="col-md-4">
                <!-- Textarea -->
                <div class="form-group">
                  <select class="form-control" id="type">
                    <option>Student</option>
                    <option>Startup</option>
                    <option>Corporate</option>
                    <option>Others</option>
                  </select>
                  <label for="select-form">Profession</label>
                </div> 
                <div class="form-group">
                  <input type="text" class="form-control" id="institution" placeholder="College/ Startup/ Organisation Name">
                  <label for="institution">Organisation</label>
                </div>
                <div class="form-group">
                  <select class="form-control" id="participant_source" onchange="select_option(this);">
                    <option>Website</option>
                    <option>Mailer</option>
                    <option>Campus Ambassador</option>
                    <option>Facebook</option>
                    <option>Twitter</option>
                    <option>Instagram</option>
                    <option>LinkedIn</option>
                  </select>
                  <label for="participant_source">How did you come to know about us?</label>
                </div>
                <div class="form-group eca-code" id="eca-code">
                  <input type="text" class="form-control" id="inpt-ECA" placeholder="Enter ECA Code">
                  <label for="inpt-ECA">ECA Code</label>
                </div>
              </div><!-- / .col-md-4 -->
            </div><!-- / .row -->
              <div class="row"><button class="btn-ghost-light btn-round" type="submit" style="margin:auto; display:block;">Submit</button></div>
            <p id="err" style="color:red"></p>
            <p id="succ" style="color:green"></p>
        </section><!-- / .container -->



        <!-- ========== Footer ========== -->

        <footer>
          <div class="copyright">
            <div class="container">
              <div class="row">
                
                <div class="col-md-6">
                  <small>&copy; Eximius 2018. Made by <a class="no-style-link" href="http://themeforest.net/user/octarinethemes" target="_blank">ENI, IIM Bangalore</a></small>
                </div>

                <div class="col-md-6">
                  <small><a href="#page-top" class="pull-right to-the-top">To the top<i class="fa fa-angle-up"></i></a></small>
                </div>

              </div><!-- / .row -->
            </div><!-- / .container -->
          </div><!-- / .copyright -->
        </footer>

    

        <!-- ========== Scripts ========== -->
        
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/vendor/google-fonts.js"></script>
        <script src="assets/js/vendor/jquery.easing.js"></script>
        <script src="assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/vendor/smoothscroll.js"></script>
        <script src="assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="assets/js/vendor/jquery.parallax.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="assets/js/vendor/countup.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script>

          function select_option(obj) {
            if(obj.value=="Campus Ambassador") {
              $("#eca-code").css({ 'display' : 'block'});
            }
            else {
              $("#eca-code").css({ 'display' : 'none'});
            }
          }
        </script>
        <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script>
        <script type="text/javascript">



  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBY2YVqIxUB2jwu00G0ThBeE9y4Fe4amxM",
    authDomain: "zapiertest-5f9b6.firebaseapp.com",
    databaseURL: "https://zapiertest-5f9b6.firebaseio.com",
    projectId: "zapiertest-5f9b6",
    storageBucket: "zapiertest-5f9b6.appspot.com",
    messagingSenderId: "775105722454"
  };

  firebase.initializeApp(config);
  var ref = firebase.database().ref('cur_id');
  var user_ref = firebase.database().ref('users');

  function registerUser(name,type,college,email,phone,participant_source,eca_code) {
    console.log(name,type);
    if(!eca_code) {
      eca_code = "None";
    }
    ref.transaction(function(oldPin) {
        console.log(oldPin);
        if (oldPin != null) {
            var newPin = ++oldPin;
            return newPin;
        } else {
            return 0;
        }
    }, function(error, committed, snapshot) {
        if (error) {
            console.log("error in transaction");
        } else if (!committed) {
            console.log("transaction not committed");
        } else {
            console.log("Transaction Committed");
            firebase.database().ref('users/' + snapshot.val()).set({
              name: name,
              type: type,
              institution: college,
              email: email,
              phone: phone,
              participant_source: participant_source,
              eca_code: eca_code
            },function(error){
              $.post("https://hooks.zapier.com/hooks/catch/2407658/5zwbkn/",{
                userID:snapshot.val(),
                name: name,
                institution: college,
                email: email,
                phone: phone,
                participant_source: participant_source,
                eca_code: eca_code
              }).done(function(){
                $('#succ').html('Congratulations, you have successfully registered for Eximius 2017. Please check your mail for the confirmation. Your registration ID is: '+snapshot.val());
                $('#submit-button').disabled=false;
              }).fail(function(){
                $('#err').html('An Error has occurred. Please contact the administrator');
                $('#submit-button').disabled=false;
              });
            });

        }
    }, true);
  }


        $(document).ready(function(){
          $( "#registration-form" ).submit(function( event ) {
            $('#submit-button').disabled=true
            $('#err').html('');
            $('#succ').html('Please wait...');
            event.preventDefault();
            registerUser($("#name").val(),$("#type").val(),$("#institution").val(),$("#email").val(),$("#phone").val(),$("#participant_source").val(),$("#inpt-ECA").val());
          });
        });


    </script>
        
        <!-- Definity JS -->
        <script src="/assets/js/main.js"></script>
        <style>
          .eca-code {
            display: none;
          }
        </style>
    </body>
</html>
