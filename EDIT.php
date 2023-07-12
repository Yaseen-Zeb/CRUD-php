<?php include "./Head.php"; ?>
    <p class="text">Edit Record</p>
    <?php
$id = $_REQUEST['id'];
    $conn = mysqli_connect("localhost", "root", "", "crud");
         $query = "SELECT * from students WHERE id = '$id'";
         $data = mysqli_query($conn, $query) or die("fail");
         if (mysqli_num_rows($data) > 0) {
    while ($row = mysqli_fetch_assoc($data)) {
         ?>
    <div class="add_div">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> 
        <div class="input"><span class="names"></span> <input name="sid" type="hidden" value="<?php echo $row["id"]; ?>"></div> 
      
        <div class="input"><span class="names">First Name</span> <input name="fname" type="text" value="<?php echo $row["fname"]; ?>"></div>
        <div class="input"><span class="names">Last Name</span> <input name="lname" type="text" value="<?php echo $row["lname"]; ?>"></div>
        <div class="input"><span class="names">Address</span> <input name="saddress" type="text" value="<?php echo $row["city"]; ?>"></div>
        <div class="input"><span class="names">Class</span> <select name="sclass" value="<?php echo $row["name"]; ?>" name="sclass" id="">
        <?php
         $query1 = "SELECT * FROM classes";
         $data1 = mysqli_query($conn,$query1);
         if (mysqli_num_rows($data1) > 0) {
             while ($row1 = mysqli_fetch_assoc($data1)) {
              $select = $row["class_id"] === $row1["id"] ? "selected" : "" ;
         ?>
         
             <option <?php echo $select ?> value="<?php echo $row1['id'] ?>"><?php echo $row1['cname'] ?></option>
           <?php  
          } };
          ?>
         </select></div>
        <div class="save_div"><input name="update" class="save" type="submit" value="Update"></div> 
         <?php
    };   
         ?>
        </form>
    </div>
<?php
};
         
?>
<?php
if (isset($_POST["update"])) {
    $stdnt_fname = $_POST['fname'];
    $stdnt_lname = $_POST['lname'];
    $stdnt_address = $_POST["saddress"];
    $stdnt_class = $_POST["sclass"];

    $query2 = "UPDATE students SET fname='$stdnt_fname',lname='$stdnt_lname', city='$stdnt_address', class_id='$stdnt_class'  WHERE id = '$id' ";
    
    $data2 = mysqli_query($conn, $query2) or die("fail");
    
    if ($data2) {
        ?>
         <script>
             alert("Data Updated seccessfully"); 
            window.open("./INDEX.php","_self")
        </script> 
        <?php

}
}
?>