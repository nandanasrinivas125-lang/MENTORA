<?php
include 'adminheader.php';
include 'connection.php';

$qry = "SELECT t.id, t.staff_id, t.full_name, t.email, t.phone_no, t.qualification, t.address, l.status, l.login_id 
        FROM teacherregistration t 
        INNER JOIN login l ON t.id = l.user_id 
        WHERE l.user_type='teacher'";
$res = mysqli_query($conn, $qry);
?>

<div class="container mt-4">
    <h2 class="text-center mb-4">Teacher Details</h2>
    <table class="table table-bordered table-striped text-center align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Staff ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Qualification</th>
                <th>Address</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['staff_id']."</td>";
                echo "<td>".$row['full_name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone_no']."</td>";
                echo "<td>".$row['qualification']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>";
                if($row['status']=='active'){
                    echo "<a href='update_teacher_status.php?login_id=".$row['login_id']."&status=inactive' class='btn btn-danger btn-sm'>Inactive</a>";
                }else{
                    echo "<a href='update_teacher_status.php?login_id=".$row['login_id']."&status=active' class='btn btn-success btn-sm'>Active</a>";
                }
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
include 'adminfooter.php';
?>
