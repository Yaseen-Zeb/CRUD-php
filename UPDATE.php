 <?php include "./Head.php"; ?>
    <p class="text">Edit Record</p>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "crud");
    ?>

    <div class="add_div">
        <form action="" method="post"> 
        <div class="input"><span class="names">Id</span> <input name="sid" type="number" value=""></div>
        <div id="i" class="save_div"><input type="submit" value="Show" name="showbtn" class="save"></div> 
        </form>
        </div>
        <?php 
            

        if (isset($_POST["showbtn"])) {
            $stuid = $_POST["sid"];
            $query3 = "SELECT * FROM students WHERE id = '$stuid'";
            $data3 = mysqli_query($conn, $query3);
            if (mysqli_num_rows($data3) > 0) {
                while ($row = mysqli_fetch_assoc($data3)) {
        ?>
        <div class="add_div second">
        <form action="" method="post">
        <div class="input"><span class="names"></span> <input name="ssid" type="hidden" value="<?php echo "$stuid"?>"></div>
         <div class="input"><span class="names">First Name</span> <input name="fname" type="text" value="<?php echo $row["fname"]; ?>"></div>
         <div class="input"><span class="names">Last Name</span> <input name="lname" type="text" value="<?php echo $row["lname"]; ?>"></div>
         <div class="input"><span class="names">Address</span> <input name="saddress" type="text" value="<?php echo $row["city"]; ?>"></div>
         
        <div class="input"><span class="names">Class</span> <select name="sclass" name="sclass" id="">
        <?php
         $query1 = "SELECT * FROM classes";
         $data1 = mysqli_query($conn,$query1);
         if (mysqli_num_rows($data1) > 0) {
             while ($row1 = mysqli_fetch_assoc($data1)) {
                $select = $row["class_id"] === $row1["id"] ? "selected" : "" ; ?>
             <option <?php $select ?> value="<?php echo $row1['id'] ?>"><?php echo $row1['cname'] ?></option>
           <?php } }; ?>
         </select></div>
        <div class="save_div"><input name="update" class="save" type="submit" value="Update"></div> 
<?php
                }
?>
        </form>
    </div>
<?php
}else{?>
<div class="add_div alert">
    <h2>No record id mached!</h2>
</div>
<script>
    setTimeout(()=>{
        document.querySelector(".alert").style.display = "none";
    },5000)
</script>
<?php
}
}      
?>
<?php
if (isset($_POST["update"])) {
    $stdnt_fname = $_POST['fname'];
    $stdnt_lname = $_POST['lname'];
    $stdnt_address = $_POST["saddress"];
    $stdnt_class = $_POST["sclass"];
    $stu = $_POST["ssid"];
    $query2 = "UPDATE students SET fname='$stdnt_fname',lname='$stdnt_lname', city='$stdnt_address', class_id='$stdnt_class ' WHERE id = '$stu' ";
    
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
       

