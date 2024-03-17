<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="myweb";
 $name;
 // Create connection
 $conn = mysqli_connect($servername, $username, $password,$db);
 // Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
 }
 
?>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>my Grades</title>
     
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
     
     </head>
    <body>
    <div class="side-bar">

<div id="close-btn">
   <i class="fas fa-times"></i>
</div>

<div class="profile">
   <img src="images/pic-1.jpg" class="image" alt="">
   <h3 class="name">shaikh anas</h3>
   <p class="role">studen</p>
   <a href="profile.html" class="btn">view profile</a>
</div>

<nav class="navbar">
   <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
   <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
   <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
   <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
   <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
</nav>

</div>
    <div style="    display: flex;justify-content: space-around; margin-bottom: 4%;margin-right: 25%;">
        <a  style="    background-color: #80808024;color: black;" href="playlist.html" class="inline-btn" id="but">course Detals</a>
        <a style="    background-color: #80808024;color: black; " href="playlistGrade.html" class="inline-btn" id="but"> My Grade</a>
     </div>
           
    <form action="" method="post">
        <table>
            <tbody>
                <tr>
                    <td style="border: none; background-color: aliceblue;"></td>
                    <td>Excellent
                        20 pts</td>
                        <td>Good
                            15 pts</td>
                            <td>fair
                                10 pts</td>
                                <td>poor
                                    1 pts</td>

                </tr>
     <tr>
                    <th >Coding Validation
                        25 %</th>
           <?php
                        
    $sql = "SELECT grades, why FROM skills WHERE grades='Excellent'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>Excellent</button><br>There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='good'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>good</button><br>There are 1-3 coding errors on the site as found by me or an online validator.</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='poor'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="poor">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>poor</button><br>There are more than 6 coding errors on the site as.</th>';
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM skills WHERE grades='fair'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>fair</button><br>There are 4-5 coding errors on the site as found by me or an online validator.</th>';
    }
    
?>
        </tr>
                <tr>
                    <th >Layout/Design 25 %	</th>
                        <?php
                        
    $sql = "SELECT grades, why FROM desig WHERE grades='Excellent'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>Excellent</button><br>There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM desig WHERE grades='good'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>good</button><br>There are 1-3 coding errors on the site as found by me or an online validator.</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM desig WHERE grades='fair'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>fair</button><br>There are more than 6 coding errors on the site as.</th>';
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM desig WHERE grades='poor'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="poor">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>poor</button><br>There are 4-5 coding errors on the site as found by me or an online validator.</th>';
    }
    
?>
                </tr>
                    <!-- /////////////////////////////Cascading Style Sheet //////////////////////////////////// -->

                <tr>
                    <th >Cascading Style Sheet 20 %</th>
                        <?php
                        
    $sql = "SELECT grades, why FROM cascading WHERE grades='Excellent'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>Excellent</button><br>There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM cascading WHERE grades='good'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>good</button><br>There are 1-3 coding errors on the site as found by me or an online validator.</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM cascading WHERE grades='fair'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>fair</button><br>There are more than 6 coding errors on the site as.</th>';
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM cascading WHERE grades='poor'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="poor">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>poor</button><br>There are 4-5 coding errors on the site as found by me or an online validator.</th>';
    }
    
?>
 </tr>  
    <!-- /////////////////////////////Graphics//////////////////////////////////// -->
          
                      <tr>
                    <th >Graphics 15 %</th>
                        <?php
                        
    $sql = "SELECT grades, why FROM Graphics WHERE grades='Excellent'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>Excellent</button><br>There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM Graphics WHERE grades='good'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="Excellent">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>good</button><br>There are 1-3 coding errors on the site as found by me or an online validator.</th>';
    }
    /////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM Graphics WHERE grades='fair'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="fair">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>fair</button><br>There are more than 6 coding errors on the site as.</th>';
    }
    ////////////////////////////////////////////////////////////////////
    $sql = "SELECT grades, why FROM Graphics WHERE grades='poor'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo '<th style="background-color: #00800ec2;"><button class="but" name="poor">' . $row["grades"] . '</button><br>' . $row["why"] . '</th>';        }
    } else {
        echo '<th> <button>poor</button><br>There are 4-5 coding errors on the site as found by me or an online validator.</th>';
    }
    
?>
                </tr>
            </tbody>
        </table>
        </form>  
    <style>
            th,tr{
                border: 1px solid black;
            }
            th{
                height: 150px;
                width: 20%;
                border-top-style: none;
  border-left-style: none;
  font-family: 'Open Sans', 'Oxygen', verdana, arial, helvetica, sans-serif;
  font-size: 14px;
  color: #000000ad;      
}
            td{
                border: 1px solid black;
                height: 100px;
                width: 20%;
                text-align: center;
                background-color: #1977c9;
  color: white;

            }
            p{
                font-size: x-large ;
                padding-bottom: 10px;
                color: #000000d4;
            }
            *{
                font-family: "Roboto", Arial, sans-serif;            }
                button{
  border: none;
  padding-bottom: 23;
  font-size: large;                }
  .but{
    background-color: #00800e00;  }
        </style>
    </body>
</html>
