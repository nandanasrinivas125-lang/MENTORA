<?php
include 'adminheader.php';
include 'connection.php';

$qry = "SELECT t.id, t.staff_id, t.full_name, t.email, t.phone_no, t.qualification, t.address, l.status, l.login_id 
        FROM teacherregistration t 
        INNER JOIN login l ON t.id = l.user_id 
        WHERE l.user_type='teacher'";
$res = mysqli_query($conn, $qry);
?>



<br><br><br>
<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Teachers</h2>
    <p>Here are the registered teachers and their details</p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="testimonial-masonry">

      <?php while($row = mysqli_fetch_assoc($res)) { ?>
        <div class="testimonial-item" data-aos="fade-up">
          <div class="testimonial-content">

            <!-- Quote pattern icon (keeps testimonial style) -->
            <div class="quote-pattern">
              <i class="bi bi-quote"></i>
            </div>

            <!-- Teacher details -->
            <p>
              <strong>Name:</strong> <?php echo $row['full_name']; ?><br>
              <strong>Staff ID:</strong> <?php echo $row['staff_id']; ?><br>
              <strong>Email:</strong> <?php echo $row['email']; ?><br>
              <strong>Phone:</strong> <?php echo $row['phone_no']; ?><br>
              <strong>Qualification:</strong> <?php echo $row['qualification']; ?><br>
              <strong>Address:</strong> <?php echo $row['address']; ?><br>
              <strong>Status:</strong> <?php echo ucfirst($row['status']); ?>
            </p>

            <!-- Buttons (inside testimonial card, won't break style) -->
            <div class="client-info">
              <div class="client-details">
                <?php if($row['status'] == 'active'){ ?>
                  <a href="update_teacher_status.php?login_id=<?php echo $row['login_id']; ?>&status=inactive" 
                     class="btn btn-danger btn-sm">Inactive</a>
                <?php } else { ?>
                  <a href="update_teacher_status.php?login_id=<?php echo $row['login_id']; ?>&status=active" 
                     class="btn btn-success btn-sm">Active</a>
                <?php } ?>
              </div>
            </div>

          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</section>
<!-- /Testimonials Section -->

<?php
include 'adminfooter.php';
?>



