
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Blood Bank System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav navbar-right">

      
              <?php
           if(isset($_SESSION['email'])){
             echo '<a class="nav-link" href="receiver_option.php"><span class="fa fa-heartbeat"></span> Request for blood samples</a></li>';
         


              echo '<a class="nav-link" href="settings1.php"><span class="fa fa-edit"></span> Settings</a></li>';

              echo '<a class="nav-link" href="logout.php"><span class="fa fa-sign-out"></span> Logout</a></li>';

            }
            else{
             echo '<li class="nav-item">
        <a class="nav-link" href="receiver_register.php"><span class="fa fa-sign-in"></span> Sign Up</a></li>';
     echo  '<li class="nav-item">
        <a class="nav-link" href="receiver_login.php"><span class="fa fa-user"></span> Login</a></li>';
            }

        ?>

      
    </ul>
  </div>   


</nav>

