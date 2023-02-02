<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Form of Organizer</title>
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
                    <!-- <?php include 'sideheader.php'; ?> -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card" style="padding:1em;width:70%">
                                                                        <div class="card-header">
                                                                            <h5>Details Of Organizer</h5>
                                                                            <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <form id="main" method="post" action="form-camp-details.php"     onsubmit="return validateForm()" name="oform">
                                                                                <div class="form-group row" id="name">
                                                                                    <label class="col-sm-2 col-form-label">Enter Your Name</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control" name="fname" placeholder="Name.." required>

                                                                                        <b><span class="formerror"> </span></b>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row" id="phone">
                                                                                    <label class="col-sm-2 col-form-label">Contact Number</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="number" class="form-control" name="fphone" id="numeric" placeholder="Contact Number" required>
                                                                                        <b><span class="formerror"> </span></b>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Email</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="email" class="form-control" id="email" name="fem" placeholder="Enter valid e-mail address">
                                                                                    <span class="messages"></span>
                                                                                </div>
                                                                                </div>
                                                                                <div class="form-group row" id="pass">
                                                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="password" class="form-control fill"  name="fpass" placeholder="Password input">
                                                                                        <b><span class="formerror"> </span></b>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row" id="cpass">
                                                                                    <label class="col-sm-2 col-form-label">Confirm Password</label>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="password" class="form-control fill"  name="fcpass" placeholder="Password input">
                                                                                        <b><span class="formerror"> </span></b>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label class="col-sm-2"></label>
                                                                                    <div class="col-sm-10">
                                                                                        <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
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
                            </div>
                        </div>
                <?php include 'footerlinks.php'; ?>
</body>
<script src="validation.js"></script>
</html>