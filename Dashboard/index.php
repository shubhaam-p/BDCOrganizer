<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Organizer Login</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?php include 'headerlinks.php'; ?>
</head>

<body>
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php include 'index-topheader.php'; ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- <?php include 'og-sideheader.php'; ?> -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <section class="login-block" style="background-color: #c6e4fc;">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-sm-12">

                                                                <form class="md-float-material form-material" action="og-check-login.php" method="post" name="oform" onsubmit="return validateForm()">
                                                                    
                                                                    <div class="auth-box card">
                                                                        <div class="card-block">
                                                                            <div class="row m-b-20" >
                                                                                <div class="col-md-12">
                                                                                    <h3 class="text-center txt-primary">Sign In</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row m-b-20">
                                                                                <div class="col-md-6">
                                                                                    <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                                                                </div>
                                                                            </div>
                                                                            <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                                                            <div class="form-group form-primary" id="name">
                                                                                <input type="text" name="fname" class="form-control" required >
                                                                                <span class="formerror"> </span></b>
                                                                                <label class="float-label">Username</label>
                                                                            </div>
                                                                            <div class="form-group form-primary">
                                                                                <input type="password" name="og-pwd" class="form-control" required >
                                                                                <span class="form-bar"></span>
                                                                                <label class="float-label">Password</label>
                                                                            </div>
                                                                            <div class="row m-t-25 text-left">
                                                                                <div class="col-12">
                                                                                    <div class="checkbox-fade fade-in-primary">
                                                                                        <label>
                                                                                            <input type="checkbox" value="">
                                                                                            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                                                            <span class="text-inverse">Remember me</span>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="forgot-phone text-right float-right">
                                                                                        <a href="#" class="text-right f-w-600"> Forgot Password?</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row m-t-30">
                                                                                <div class="col-md-12">
                                                                                    <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" name="login">LOGIN</button>
                                                                                </div>
                                                                            </div>
                                                                            <!-- <p class="text-inverse text-left">Don't have an account?<a href="#"> <b>Register here </b></a>for free!</p> -->
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footerlinks.php'; ?>
</body>

</html>
<script>
    function clearErrors() {
  errors = document.getElementsByClassName("formerror");
  for (let item of errors) {
    item.innerHTML = "";
  }
}

function seterror(id, error) {
  //sets error inside tag of id
  element = document.getElementById(id);
  element.getElementsByClassName("formerror")[0].innerHTML = error;
}

function validateForm() {
  var returnval = true;
  clearErrors();

  //Name
  var name = document.forms["oform"]["fname"].value;

  if (!/^\S{1,}$/.test(name)) {
    seterror("name", "*Can not contain whitespaces");
    returnval = false;
  } else if (!/^[a-zA-Z]+$/.test(name)) {
    seterror("name", "*Only alphabets are allowed");
    returnval = false;
  }
 
 
  return returnval;
}
</script>