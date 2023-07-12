<?php include "./Head.php" ?>
    <p class="text">Add New Record</p>
    <div class="add_div">
        <form action="" method="post"> 
         <div class="input"><span class="names">First Name</span> <input name="fname" type="text" value=""></div>
         <div class="input"><span class="names">Last Name</span> <input name="lname" type="text" value=""></div>
         <div class="input"><span class="names">Address</span> <input name="saddress" type="text" value=""></div>
         <div class="input"><span class="names">Class</span> <select name="sclass" id="">
             <?php
         $conn = mysqli_connect("localhost", "root", "", "crud");
         $query = "SELECT * from classes";
         $data = mysqli_query($conn, $query) or die("fail");
         echo "<option value='' selected disable >Select class</option>";
         while ($row = mysqli_fetch_assoc($data)) { ?>
             <option value="<?php echo $row["id"]; ?>"><?php echo $row["cname"]; ?></option>
             <?php } ?>
         </select></div>
        <div class="save_div"><input class="save" name="save" type="submit" value="Save"></div> 
        </form>
    </div>

        <!-- add data coding -->
        <?php
       if (isset($_POST["save"])) {
        $stdnt_fname = $_REQUEST['fname'];
        $stdnt_lname = $_REQUEST['lname'];
        $stdnt_address = $_POST["saddress"];
        $stdnt_class = $_POST["sclass"];
        $query2 = "INSERT INTO students (fname,lname,city,class_id) VALUES ('$stdnt_fname','$stdnt_lname','$stdnt_address','$stdnt_class')";
        $data2 = mysqli_query($conn, $query2) or die("fail");
        if ($data2) {
            ?>
            <script>
                alert("Data saved seccessfully");
                window.open("./INDEX.php","_self")
            </script>
            <?php
        }
    }
    
    ?>