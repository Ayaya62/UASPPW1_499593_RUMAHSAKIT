<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/registration.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Registration</title>
</head>

<body>
    <section class="vh-100 bg-image" style="background-image: url(image/hero-bg.jpeg)">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Register Your Name</h2>

                                <form>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="yourName" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                            name="birthDate" aria-placeholder="DD-MM-YYYY" />
                                        <label class="form-label" for="form3Example3cg">Birth
                                            Date</label>
                                    </div>

                                    <div class=" form-outline mb-4">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                            name="phoneNumber" />
                                        <label class="form-label" for="form3Example3cg">Phone Number</label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-dark btn-block btn-lg gradient-custom-4" "
                                            name=" regist">Register</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php
    include "conn.php";
    
    if(isset($_POST['regist'])){
      mysqli_query($conn, "insert into barang set
      nama = '$_POST[yourName]',
      tanggal_lahir = '$_POST[birthDate]',
      nomor_telepon = '$_POST[phoneNumber]',");

      echo "Your data already saved";
    }

  ?>