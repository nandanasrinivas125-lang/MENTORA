<?php
session_start();
include("./commonheader.php");
include("./connection.php");

?>

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/education/showcase-1.webp);">
      <div class="container position-relative">
        <h1>Login</h1>
        <p>Welcome back! Please login to access your account.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Login</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Login Form Section -->
    <section id="login" class="contact section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <div class="contact-form-wrapper">
              <h2 class="text-center mb-4">Login</h2>  
              <form action="" method="post" class="">
                <div class="row g-3">
                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                      <i class="bi bi-person-circle"></i>
                      <input type="text" name="user_name" class="form-control" placeholder="User Name" required>
                    </div>
                  </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="input-with-icon">
                     <i class="bi bi-lock"></i>
                      <input type="password" name="password" class="form-control" placeholder="Password"  required="" >
              
                    </div>
                  </div>
                  </div>
                  <div class="col-12 text-center">
                    <button type="submit" name="sub" class="btn btn-primary btn-submit">LOGIN</button>
                  </div>
                </div>
              </form>
              <div class="text-center mt-3">
                <p>Don't have an account? <a href="Registration.php">Register here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

<?php
include("./commonfooter.php");
?>

<?php
    if(isset($_REQUEST['sub'])){
        $username=$_REQUEST['user_name'];
        $password=$_REQUEST['password'];
        $qry="select * from login where user_name = '$username' and password = '$password'";
        echo $qry;
        $result=mysqli_query($conn,$qry);
        $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);
        if($count==0){
            echo "<script>alert('Invalid Username! ')</script>";
        }
        else{
            if($row['password']==$password){
                if($row['status']=='active'){
                    $_SESSION['user_id']=$row['user_id'];
                    if($row['user_type']=='admin'){
                        // echo "<script>alert('Success')</script>";
                        echo "<script>location.href='adminHome.php'</script>";
                    }
                    elseif($row['user_type']=='student'){
                        // echo "<script>alert('Success')</script>";
                        echo "<script>location.href='studentHome.php'</script>";
                    }
                    elseif($row['user_type']=='teacher'){
                        // echo "<script>alert('Success')</script>";
                        echo "<script>location.href='teacherHome.php'</script>";
                    }

                }
                else{
                    echo "<script>alert('Not Aproved by admin')</script>";
                }
            }
            else{
                echo "<script>alert('Incorrect password!')</script>";
            }
        }

    }
?>
