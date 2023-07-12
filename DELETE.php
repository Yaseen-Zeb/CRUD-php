<?php
         $id = $_GET["id"];
         $conn = mysqli_connect("localhost", "root", "", "crud");
         $query = "DELETE FROM students WHERE id='$id'";
         $data = mysqli_query($conn, $query) or die("fail");
         $close = mysqli_close($conn);
?>
<script>
    confirm("Are you sure to DELETE this record");
    window.open("./INDEX.php", "_self")
</script>