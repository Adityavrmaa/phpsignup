

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container register bg-warning mt-5 p-5 ">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a href="table.php " type="button" class="btn btn-outline-dark mt-4">View Table</a><br/>
                    </div>
                    <div class="col-md-9 register-right">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading text-dander display-4 pb-4"><i>Apply as a details</i></h3>
                                <form action="" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="fname" class="form-control" placeholder="First Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="course" class="form-control" placeholder="Course *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="age" class="form-control"  placeholder="age*" value="" required/>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name *" value="" required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="phone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" required/>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="college" class="form-control" placeholder="Your College *" value="" required />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="language" class="form-control" placeholder="Language *" value="" required />
                                        </div>

                                        <input type="Submit" name="Submit" class="btn btn-success "  value="Submit"/>
                                    </div>
                                </div>
                                </form>
                            </div>

                       </div>
                </div>
          </div>
    </div>
</body>
</html>



<?php
include 'conn.php ';
if(isset($_POST['Submit'])){
     $fname = mysqli_real_escape_string($conn, $_POST['fname']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);
     $course = mysqli_real_escape_string($conn,$_POST['course']);
     $age = mysqli_real_escape_string($conn,$_POST['age']);
     $lname = mysqli_real_escape_string($conn,$_POST['lname']);
     $phone = mysqli_real_escape_string($conn,$_POST['phone']);
     $college = mysqli_real_escape_string($conn,$_POST['college']);
     $lang = mysqli_real_escape_string($conn,$_POST['language']);


     $insertquery = "INSERT INTO signup( fname, email, course, age, lname, phone, college, language ) VALUES(
        '$fname', ' $email',  '$course',   '$age',  '$lname','$phone','$college', '$lang')";

       $addquery = mysqli_query($conn,$insertquery);


if( $addquery){
    echo '<script>alert("data create successfully")</script>';
}
else{
    echo '<script>alert("data not create successfully)"</script>';

}
}

?>
