<?php include "./Head.php"; ?>
        <p class="text">All Records</p>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "crud");
         $query = "SELECT students.id as sid,students.fname,students.lname,students.city,students.class_id,classes.* from students inner join classes  on students.class_id = classes.id ORDER BY sid" ;
         $data = mysqli_query($conn, $query) or die("fail");

         if (mysqli_num_rows($data) > 0) {
         ?>
    <table class="table_div">
        <tr>
            <th class="id">ID</th>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>CLASS</th>
            <th>ACTION</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($data)) { ?>
        <tr>
            <td><?php echo $row["sid"]; ?></td>
            <td><?php echo $row["fname"]." ".$row["lname"]  ?></td>
            <td><?php echo $row["city"]; ?></td>
            <td><?php echo $row["cname"]; ?></td>
            <td class="btns">
                <a href="EDIT.php?id=<?php echo $row['sid']; ?>" class="Edit">Edit</a>
                <a href="DELETE.php?id=<?php echo $row['sid']; ?>" class="Delete">Delete</a>
            </td>
        </tr>
        <?php 
        } 
        ?>
    </table>
      <?php 
        }else{
            echo "<h1> No Record Found </h2>";
        }
        $close=mysqli_close($conn);
        ?>
<?php
    
