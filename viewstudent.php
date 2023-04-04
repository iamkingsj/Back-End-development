<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rishton Academy Primary School</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
      
      <style>
        *{
          margin: 0;
          padding:0;
          font-family: sans-serif;
        }
        .See_students{
                max-width: 800px;
                margin: 100px auto;
                position: relative;
                padding: 30px;
        }
        
        .navbar-expand-sm {
          background:#219ebc;
          box-shadow: 0 6px 10px rgb(255, 255, 255);
        }
        
        .nav-link{
          color: #ffffff;
          margin-right: 70px;
        }
      </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-sm  justify-content-center">
           <ul class="navbar-nav">
           <li><a class="nav-link" href="Index.php">HOME</a></li>
            <li><a class="nav-link" href="Student.php">STUDENT</a></li>
            <li><a class="nav-link" href="Parent.php">PARENT</a></li>
            <li><a class="nav-link" href="Teacher.php">TEACHER</a></li>
            <li><a class="nav-link" href="Year.php">CLASS</a></li>
            <li><a class="nav-link" href="viewparent.php">VIEW PARENT</a></li>
            <li><a class="nav-link" href="viewstudent.php">VIEW STUDENT</a></li>
           </ul> 
        </nav>
      
      
      <?php
      $link = mysqli_connect("sdb-58.hosting.stackcp.net", "student33-35303137332b", "ua92-studentAc", "student33-35303137332b");
      // here it checks the connection
      if ($link === false){
        die("connection failed");
      }
      ?>
   
      <table class=See_students>
        <tr>
          <th width="250px">Student ID<br><hr></th>
          <th width="150px">First Name<br><hr></th>
          <th width="150px">Last Name<br><hr></th>
          <th width="150px">Address<br><hr></th>
          <th width="150px">Medical info<br><hr></th>
        </tr>
        
        <?php
         $sql = mysqli_query($link,"SELECT PUL_ID,fName,lName,Adress,'Medical info' FROM Pupils");
        while($row = $sql->fetch_assoc()){
          echo "
          <tr>
              <th>{$row['PUL_ID']}</th>
              <th>{$row['fName']}</th>
              <th>{$row['lName']}</th>
              <th>{$row['Adress']}</th>
              <th>{$row['Medical info']}</th>
          </tr>";
        }
        ?>
      </table>
        
    </body>
</html>