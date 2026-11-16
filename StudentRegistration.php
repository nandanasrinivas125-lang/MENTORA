<?php
session_start();
include("./teachercommonheader.php");
include("./connection.php");

$teacher_id=$_SESSION['user_id'];
if($teacher_id){
  echo "<script>alert('Registration successfull')</script>";
}
else{
        echo "<script>alert('$teacher_id')</script>"; 
    }

echo $teacher_id;
?>

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
      <div class="container position-relative">
        <h1>Student Registration</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Registration</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Contact Info Boxes -->
        <!-- <div class="row gy-4 mb-5"> 
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="info-content">
                <h4>Our Address</h4>
                <p>1842 Maple Avenue, Portland, Oregon 97204</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="info-content">
                <h4>Email Address</h4>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="contact-info-box">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <div class="info-content">
                <h4>Hours of Operation</h4>
                <p>Sunday-Fri: 9 AM - 6 PM</p>
                <p>Saturday: 9 AM - 4 PM</p>
              </div>
            </div>
          </div>
        </div>

      </div> -->

      <!-- Google Maps (Full Width) -->
      <div class="map-section" data-aos="fade-up" data-aos-delay="200">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <!-- Registration Form Section (Overlapping) -->
      <div class="container form-container-overlap">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-10">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Registration</h2>

              <form action="" method="post" class="">
                <div class="row g-3">
                  <div class="form-group">
                      <div class="input-with-icon">
                      <i class="bi bi-person-circle"></i>
                      <input type="text" name="rollno" class="form-control" placeholder="Student RollNo" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-person"></i>
                        <input type="text" class="form-control" name="name" placeholder="Full Name" required="" pattern="[A-Za-z]{,}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                       <i class="bi bi-telephone"></i>
                        <input type="tel" class="form-control" name="phone" placeholder="Phone No" required="" maxlength="10" pattern="[6789][0-9]{9}">
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="input-with-icon">
                       <i class="bi bi-lock"></i> 
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                      </div>
                    </div>
                  </div>

                  <!-- <div class="col-md-12"> 
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-text-left"></i>
                        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                      </div>
                    </div>
                   </div> -->



                   <div class="col-md-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                       <i class="bi bi-journal-bookmark"></i> 
                        <input type="text" class="form-control" name="department" placeholder="Department" required="">
                      </div>
                    </div>
                  </div>

                  <!-- <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                        <i class="bi bi-geo-alt" style="position:absolute; top:25px; left:8px; font-size:1.2rem;"></i>
                        <textarea class="form-control" name="address" placeholder="Address" style="height: 180px" required=""></textarea>
                      </div>
                    </div>
                  </div> -->


                  <!-- <div class="col-12"> 
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div> -->

                  <div class="col-12 text-center">
                    <button type="submit" name="register" class="btn btn-primary btn-submit">SUBMIT</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php
include("commonfooter.php");
?>

<?php
if (isset($_REQUEST['register'])){
  // $staffid=$_REQUEST['id'];
  $rollno=$_REQUEST['rollno'];
  $name=$_REQUEST['name'];
  $email=$_REQUEST['email'];
  $phone=$_REQUEST['phone'];
  $password=$_REQUEST['password'];
  $department=$_REQUEST['department'];

  

  $q="select count(*) as cnt from `studentregistration` where `email`='$email'";
  // echo $q;
  $e=mysqli_query($conn,$q);
  $f=mysqli_fetch_array($e);
  $count=mysqli_num_rows($e);
  if ($f['cnt']>0){
    echo "<script>alert('Username alerady Exist!')</script>";
    // echo "location.href='studentReg.php'";
  }
  else{
    $qry="INSERT INTO studentregistration(staff_id,student_rollno,full_name, email, phone,department) VALUES ('$teacher_id','$rollno','$name','$email','$phone','$department')";
    // echo $qry;
    $res=mysqli_query($conn,$qry);
    $qryLog = "INSERT INTO login(user_id,user_name,password,user_type,status) VALUES ((SELECT MAX(id) FROM studentregistration), '$email','$password','student','active')";
    // echo $qryLog;
    $res2 = mysqli_query($conn,$qryLog);
    if($res && $res2){
        echo "<script>alert('Registration successful')</script>";
    }else{
        echo "<script>alert('Error Occured')</script>"; 
    }
  }
}
?>