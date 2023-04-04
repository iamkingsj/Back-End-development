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
        .See_parents{
                max-width: 800px;
                margin: 100px auto;
                position: relative;
                padding: 30px;
        }
        .title{
          max-width:700px;
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
        <nav class="navbar navbar-expand-sm justify-content-center">
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
   
      <table class=See_parents>
        <tr>
          <th width="150px">Parent ID<br><hr></th>
          <th width="250px">Parent Name<br><hr></th>
          <th width="150px">Address<br><hr></th>
          <th width="150px">Telephone<br><hr></th>
          <th width="150px">Email<br><hr></th>
        </tr>
        
        <?php
         $sql = mysqli_query($link,"SELECT PAR_ID,parentName,Adress,Telephone,Email FROM Parent");
        while($row = $sql->fetch_assoc()){
          echo "
          <tr>
              <th>{$row['PAR_ID']}</th>
              <th>{$row['parentName']}</th>
              <th>{$row['Adress']}</th>
              <th>{$row['Telephone']}</th>
              <th>{$row['Email']}</th>
          </tr>";
        }
        ?>
      </table>
        
    </body>
</html>