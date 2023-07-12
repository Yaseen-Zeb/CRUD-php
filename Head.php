
<!DOCTYPE html>
<html lang="en">

<head>
    
    <style>
      * {
        transition: 1s;
    padding: 0px;
    margin: 0px;
    box-sizing: border-box;
    font-family: monospace;
}
.active {
    transition: 3s;
    text-decoration: underline;
    color: #7a7aff;
}
    .header {
     background-color: #7a7aff;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 55px;
    font-size: 50px;
    box-shadow: 0 0 12px black;
    font-weight: 900;
    color: white;
    font-family: monospace;
}
.navbar a {
    text-decoration: none;
    color: black;
    font-size: 16px;
    font-family: sans-serif;
    font-size: 20px;
    font-weight: 600;
    padding: 3.5px 60px;
}
.navbar a:hover {
    background: black;
    color: white;
}
.navbar{
    background-color: #cacaca;
    display: flex;
    align-items: center;
    height: 30px;
    justify-content:center;
}
.active{ 
    background: black !important;
    color: white !important;
}

.text {
    color: black;
    font-family: system-ui;
    font-weight: 700;
    margin: auto;
    width: 800px;
    margin-top: 11px;
    font-size: 30px;
    margin-bottom: 7px;
}

table{
    margin: auto;
    width: 800px;
    box-shadow: 0 0 4px black;
}

table,
tr,
th,
td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 0px;
}


th {
    background-color: #cacaca;
    width: 100px;
    font-size: 27px;
    padding: 4px 0px;
}

td {
    text-align: start;
    height: 0px;
    font-size: 22px;
    padding: 6px 3px;
    font-weight: 600;
    text-align: center;
}


.Edit {
    background-color: blue;
}

.Delete {
    background-color: red;
}

.btns a{
    font-size: 16px;
    padding: 3px;
    border-radius: 4px;
    padding: 1px 8px;
    cursor: pointer;
    font-weight: 600;
    color: white;
    text-decoration: none;
}

form{
    width:100%;
}
.input{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 18px;
}
input , select{
    width: 329px;
    height: 33px;
    border: 1px solid black;
    margin-right: 1px;
    border-radius: 4px;
    outline: none;
    font-size: 18px;
    font-weight: 900;
    padding: 0 3px;
}
.names {
    font-weight: 900;
    font-size: 22px;
    word-spacing: -5px;
}
.save {
    background-color: gray;
    border: none;
    border: 1px solid;
    font-size: 21px;
    color: black;
    font-weight: 700;
    text-align: center;
    border-radius: 3px;
    padding: 2px 4px;
    cursor: pointer;
    width:188px;
}
.save:hover{
    color:white;
    background-color: black;
}
.save_div{
    text-align:center;
}
#i{
    margin-top: -9px;
    margin-bottom: 5px;
}

.second {
    margin-top: 21px;
}
.add_div{
    background-color: #cacaca;
    left: 40%;
    margin: auto auto;
    width: 500px;
    height: auto;
    font-size: smaller;
    border-radius: 5px;
    box-shadow: 0 0 9px black;
    border: 1px solid;
    padding: 15px;
    margin-top: 22px;
}
    </style>
</head>
<body>
   
    <div class="header">CRUD IN PHP</div>
    <div class="navbar">
        <a  href="INDEX.php" class="a home <?php echo basename($_SERVER["PHP_SELF"]) === 'INDEX.php' ? 'active' : '' ?>">HOME</a>
        <a href="ADD.php" class="a add <?php echo basename($_SERVER["PHP_SELF"]) === 'ADD.php' ? 'active' : '' ?>">ADD</a>
        <a href="UPDATE.php" class="a update <?php echo basename($_SERVER["PHP_SELF"]) === 'UPDATE.php' ? 'active' : '' ?>">UPDATE</a>
    </div>
