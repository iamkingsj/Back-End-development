<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Class</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <style>
              *{
                margin: 0;
                padding:0;
                font-family: sans-serif;
            }
            .nav-link{
                color: #ffffff;
                margin-right: 70px;
            }
            .navbar-expand-sm {
                background:#219ebc;
                box-shadow: 0 6px 10px rgb(255, 255, 255);
            }
            .Add_class{
                max-width: 800px;
                margin: 100px auto;
                position: relative;
                padding: 30px;
                box-shadow: 0 10px 30px 10px #ffffff;
              
            }
            .title{
                text-transform: uppercase;
                text-align: center;
                letter-spacing: 3px;
                font-size: 3em;
                padding-bottom: 20px;
                line-height: 30px;
                color: whitesmoke;
            }
            body{
                background-image: url(media/teacher.jpg);
                background-size: cover;
                background-repeat: no-repeat;
                height: 100vh;
            }
            .submit-btn{
                text-transform: uppercase;
                letter-spacing: 2px;
                font-size: 16px;
                padding: 8px 10px;
                border-radius: 10px;
                border: none;
                width: 100px;
                cursor: pointer;
                background: #219ebc;
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
      
      <form class="Add_class" method="post" action="Year.php">
        <div class="container mt-3">
          <h2 class="title">Add Class</h2>
        </div>
        <div class="input-group mb-3">
                    <span class="input-group-text">Class Name</span>
                    <input type="text" class="form-control "name="ClassName" placeholder="Class Name" required>
                    
                </div>
        
        <div class="input-group mb-3">
                    <span class="input-group-text">Capacity</span>
                    <input type="text" class="form-control "name="Capacity" placeholder="Class Name" required>
                    
                </div>
        
        <div class="input-group mb-3">
                    <button type="submit" class="submit-btn">Submit</button>
                </div>
        
      </form>
      
      <?php
      if($_POST['ClassName']){
        $ClassName = $_POST['ClassName'];
        $Capacity = $_POST['Capacity'];
        $link = mysqli_connect("sdb-58.hosting.stackcp.net", "student33-35303137332b", "ua92-studentAc", "student33-35303137332b");
        // Check connection
        if ($link === false) {
          die("Connection failed: ");
        }
        $sql = "INSERT INTO Classes(className,Capacity) VALUES ('$ClassName','$Capacity')";
        if (mysqli_query($link, $sql)) {
          echo "New record created successfully";
        } else {
          echo "Error adding record ";
        }

      }
      ?>
      
    </body>
</html>