<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>sistem pakar DempsterShafer</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <link rel="stylesheet" href="css/templatemo_main.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var namauser;
            var password;
            $("#txtuser").val("");
            $("#txtpass").val("");
            $("#txtuser").focus();
            // ketika tombol login diklik
            $("#btnlogin").click(function(e){
                e.preventDefault(); // Mencegah pengiriman form secara default
                namauser = $("#txtuser").val();
                password = $("#txtpass").val();

                if (namauser == '') {
                    alert("Masukkan Username Anda..!");
                    $("#txtuser").focus();
                    return false;
                }
                if (password == '') {
                    alert("Masukkan Password Anda..!");
                    $("#txtpass").focus();
                    return false;
                }

                //Cek data base ke file cekuser.php
                var datanya = "&namauser=" + encodeURIComponent(namauser) + "&password=" + encodeURIComponent(password);
                $.ajax({
                    url: "cekuser.php",
                    type: "POST",
                    data: datanya,
                    cache: false,
                    success: function(msg) {
                        alert(msg);
                        if (msg == "usersalah") {
                            $("#lbluser").show();
                            $("#txtuser").focus();
                        } else if (msg == "passwordsalah") {
                            $("#lbluser").hide();
                            $("#lblpassword").show();
                        } else if (msg == "sukses") {
                            $("#form1").submit();
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
    <div id="main-wrapper">
        <div class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <div class="logo"><h1>Dashboard - Admin Template</h1></div>
            </div>   
        </div>
        <div class="template-page-wrapper">
            <form class="form-horizontal templatemo-signin-form" id="form1" role="form" method="post" action="dologin.php">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtuser" placeholder="Username">
                        </div>
                        <div id="lbluser" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            Username salah..!
                        </div>
                    </div>              
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="txtpass" placeholder="Password">
                        </div>
                        <div id="lblpassword" style="display:none;" class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            Password salah..!
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" value="Sign in" id="btnlogin" class="btn btn-default">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
