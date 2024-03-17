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
//     $sql = "CREATE DATABASE myweb";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }
// $sql = "CREATE TABLE grade (
//     username VARCHAR(30) NOT NULL,
//     totalgrade VARCHAR(30) NOT NULL,
//     Quiz VARCHAR(30) NOT NULL,
//     MIDTERM VARCHAR(30) NOT NULL,
//     FINLA VARCHAR(30) NOT NULL,
//     PROJECT VARCHAR(30) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
$r=mysqli_query($conn,"select*from grade");


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Grade</title>
     
        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
     
        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
     </head>
     <body >
     
     <header class="header">
        
        <section class="flex">
     
            <a href="home.html" class="logo">EELU.</a>
      
           </form>
     
           <div class="icons">
              <div id="menu-btn" class="fas fa-bars"></div>
              <div id="search-btn" class="fas fa-search"></div>
              <div id="user-btn" class="fas fa-user"></div>
              <div id="toggle-btn" class="fas fa-sun"></div>
           </div>
     
           <div class="profile">
              <img src="images/pic-1.jpg" class="image" alt="">
              <h3 class="name">shaikh anas</h3>
              <p class="role">student</p>
              <a href="profile.html" class="btn">view profile</a>
              <div class="flex-btn">
                 <a href="login.html" class="option-btn">login</a>
                 <a href="register.html" class="option-btn">register</a>
              </div>
           </div>
     
        </section>
     
     </header>   
     
     <div class="side-bar">
     
        <div id="close-btn">
           <i class="fas fa-times"></i>
        </div>
     
        <div class="profile">
           <img src="images/pic-1.jpg" class="image" alt="">
           <h3 class="name">shaikh anas</h3>
           <p class="role">student</p>
           <a href="profile.html" class="btn">view profile</a>
        </div>
     
        <nav class="navbar">
           <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
           <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
           <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
           <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>Professor</span></a>
           <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
        </nav>
     
     </div>


<body style="position: relative;  " > 
<section class="courses" style="margin: 0;">
   <div style="    display: flex;justify-content: space-around; margin-bottom: 4%;">
      <a style="    background-color: #80808024;color: black;" href="CoursDeatls.html" class="inline-btn">course Details</a>
      <a style="    background-color: #80808024;color: black;" href="courses.html" class="inline-btn">courses</a>
  </div>
  <div class="main" style="position: relative ;width: 100%;" >
        <div id="content"><p id="css2" style="font-size: x-large;"> 50%</p>
          <p id="html2" style="font-size: x-large;"> 20%</p>
          <p id="php2" style="font-size: x-large;"><span> 20% </span></p>
          <p id="javaScript2" style="font-size: x-large;">  5%</p>
          <p id="sql2" style="font-size: x-large;"> 5%</p>
          </div>
      <table style="position: absolute;right: 0;top: 0%;border-spacing: 30px ;" >
      <tr>
        <th id="cs">css</th>
        <th class="final" style="width: 88.5%;">  </th>
      </tr>
       <tr>
        <th id="ht">html</th>
        <th class="mid"> </th>
      </tr>
      <tr>
          <th id="ph">php</th>
          <th class="quiz"></th>
        </tr>
        <tr>
          <th id="sq">sql</th>
          <th class="pro"> </th>
        </tr>
        <tr>
          <th id="jS">js</th>
          <th class="attend"> </th>
         </tr>
     </table>
            
      
      
  </div>


  
<hr>



        <script>
            let css=document.getElementById('cs')
            let html=document.getElementById('ht')
            let php=document.getElementById('ph')
            let sql=document.getElementById('sq')
            let javaScript=document.getElementById('jS')
            let text1=document.getElementById('css2')
            let text2=document.getElementById('html2')
            let text3=document.getElementById('php2')
            let text4=document.getElementById('sql2')
            let text5=document.getElementById('javaScript2')
        
            let to=document.getElementById('content')
            
                
            html.onmouseover=function mina() {
                to.style.background="conic-gradient(rgba(0, 0, 255, 0.329) 0 20%,var(--light-bg) 20% 40%,var(--light-bg) 40% 60%,var(--light-bg) 40% 60%,var(--light-bg) 60% 80%,var(--light-bg)  80% 100%)"
                text1.innerHTML="";
                text3.innerHTML="";
                text4.innerHTML="";
                text5.innerHTML="";
                text2.innerHTML="";


            }
            html.onmouseout=function mina() {
                to.style.background="conic-gradient(rgba(0, 0, 255, 0.329) 0 20%,rgb(171, 24, 24) 20% 40%,rgb(17, 162, 17) 40% 60%,black 40% 60%,blueviolet 60% 80%,cornflowerblue  80% 100%)"
                text1.innerHTML="40%";
                text3.innerHTML="30%";
                text4.innerHTML="5%";
                text5.innerHTML="10%";text2.innerHTML="15%"
                

            }
             php.onmouseover=function mina() {
                to.style.background="conic-gradient(var(--light-bg) 0 20%,var(--light-bg) 20% 40%,rgb(17, 162, 17) 40% 60%,var(--light-bg) 40% 60%,var(--light-bg) 60% 80%,var(--light-bg)  80% 100%)"
                text2.innerHTML="";
                text3.innerHTML="";

                text1.innerHTML="";
                text4.innerHTML="";
                text5.innerHTML="";
            }
            php.onmouseout=function mina() {
                to.style.background="conic-gradient(rgba(0, 0, 255, 0.329) 0 20%,rgb(171, 24, 24) 20% 40%,rgb(17, 162, 17) 40% 60%,black 40% 60%,blueviolet 60% 80%,cornflowerblue  80% 100%)"
                text1.innerHTML="40%";
                text2.innerHTML="15%";
                text4.innerHTML="5%";
                text5.innerHTML="10%";
                text3.innerHTML="30%";

            }
            sql.onmouseover=function mina() {
                to.style.background="conic-gradient(var(--light-bg) 0 20%,rgb(171, 24, 24) 20% 40%,var(--light-bg) 40% 60%,var(--light-bg) 40% 60%,var(--light-bg) 60% 80%,var(--light-bg)  80% 100%)"
                text2.innerHTML="";
                text1.innerHTML="";
                text3.innerHTML="";
                text4.innerHTML="";
                text5.innerHTML="";

            }
            sql.onmouseout=function mina() {
                to.style.background="conic-gradient(rgba(0, 0, 255, 0.329) 0 20%,rgb(171, 24, 24) 20% 40%,rgb(17, 162, 17) 40% 60%,black 40% 60%,blueviolet 60% 80%,cornflowerblue  80% 100%)"
                text1.innerHTML="40%";
                text2.innerHTML="15%";
                text3.innerHTML="30%";
                text4.innerHTML="5%";
                text5.innerHTML="10%";

            }
            javaScript.onmouseover=function mina() {
                to.style.background="conic-gradient(var(--light-bg) 0 20%,var(--light-bg) 20% 40%,var(--light-bg) 40% 60%,var(--light-bg) 40% 60%,blueviolet 60% 80%,var(--light-bg)  80% 100%)"
                text1.innerHTML="";
                text2.innerHTML="";
                text3.innerHTML="";
                text5.innerHTML="";
                text4.innerHTML="";

            }
            javaScript.onmouseout=function mina() {
                to.style.background="conic-gradient(rgba(0, 0, 255, 0.329) 0 20%,rgb(171, 24, 24) 20% 40%,rgb(17, 162, 17) 40% 60%,black 40% 60%,blueviolet 60% 80%,cornflowerblue  80% 100%)"
                text1.innerHTML="40%";
                text2.innerHTML="15%";
                text3.innerHTML="30%";
                text4.innerText="5%";

                text5.innerText="10%";
            }
            css.onmouseover=function mina() {
                to.style.background="conic-gradient(var(--light-bg) 0 20%,var(--light-bg) 20% 40%,var(--light-bg) 40% 60%,var(--light-bg) 40% 60%,var(--light-bg) 60% 80%,cornflowerblue  80% 100%)"
                text2.innerHTML="";
                text3.innerHTML="";
                text5.innerHTML="";
                text4.innerHTML="";
                text1.innerHTML="";


            }
            css.onmouseout=function mina() {
                to.style.background="conic-gradient(rgba(0, 0, 255, 0.329) 0 20%,rgb(171, 24, 24) 20% 40%,rgb(17, 162, 17) 40% 60%,black 40% 60%,blueviolet 60% 80%,cornflowerblue  80% 100%)"
                text2.innerHTML="15%";
                text3.innerHTML="30%";
                text4.innerHTML="5%";
                text5.innerText="10%";
                text1.innerHTML="40%";

            }
        </script>

<form action="" method="post" >
    <table class="shet" style="width: 100%;height: 200px;margin-top: 4%;">
       <tr class="tr">
       <th class="th">QuizeOne :10</th>
       <th class="th"> QuizeTwo:10</th>
       <th class="th"> Assignment one:5</th>
       <th class="th"> Assignment two:5</th>
       <th class="th">midterm :20</th>
       <th class="th">final :50</th>
       <th class="th">Project :10</th></tr>
   <?php
       $selectQuery = "SELECT * FROM grades ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($conn, $selectQuery);

    while ($row = mysqli_fetch_array($result)) {
        echo '<tr class="tr">';
        echo '<td class="td">' . $row['QuizOne'] . '</td>';
        echo '<td class="td">' . $row['QuizTwo'] . '</td>';
        echo '<td class="td">' . $row['AssignmentOne'] . '</td>';
        echo '<td class="td">' . $row['AssignmentTwo'] . '</td>';
        echo '<td class="td">' . $row['midterm'] . '</td>';
        echo '<td class="td">' . $row['Final'] . '</td>';
        echo '<td class="td">' . $row['Project'] . '</td>';
        echo '</tr>';
    }

    mysqli_close($conn);
?>
           
   </table>
   </form>
   <style>
      
      th{
          font-size: x-large;
      }
  .final {
          border: 1px #f000 solid;
          width: 78%;
          height: 23px;
          background: linear-gradient(to right, cornflowerblue 50%, #80808036 30%);
          
  }
  .mid {
          border: 1px #f000 solid;
          width: 25%;
          height: 23px;
          background: linear-gradient(to right,rgba(0, 0, 255, 0.329)20%, #80808036 20%);
          
  }  .quiz {
          border: 1px #f000 solid;
          width: 25%;
          height: 23px;
          background: linear-gradient(to right,rgb(17, 162, 17)  20%, #80808036 20%);
          
  }  
  .pro {
          border: 1px #f000 solid;
          width: 25%;
          height: 23px;
          background: linear-gradient(to right,rgb(171, 24, 24)  5%, #80808036 5%);
          
  }  .attend {
          border: 1px #f000 solid;
          width: 25%;
          height: 23px;
          background: linear-gradient(to right, blueviolet 5%, #80808036 5%);
          
  }
      </style>
      <STyle>
          .td,.shet{
              border: 1px #00000070  solid;
              border-collapse: collapse;
              text-align: center;
              padding: 0;
              font-size: x-large;
  
  
          }
      </STyle>
      <style>
          #content{
              width: 340px;
              height: 340px;
              background: conic-gradient(
                  rgba(0, 0, 255, 0.329) 0 20%,
                  rgb(171, 24, 24) 20% 40%,
                  rgb(17, 162, 17) 40% 60%,
                  black 40% 60%,
                  blueviolet 60% 80%,
                  cornflowerblue  80% 100%
      
                  
              );
      border-radius: 50%;
      margin-top: 7%;
          }
             #content{
              width: 340px;
              height: 340px;
              background: conic-gradient(
                  rgba(0, 0, 255, 0.329) 0 20%,
                  rgb(171, 24, 24) 20% 40%,
                  rgb(17, 162, 17) 40% 60%,
                  black 40% 60%,
                  blueviolet 60% 80%,
                  cornflowerblue  80% 100%
      
                  
              );
      border-radius: 50%;
      margin-top: 7%;
          }
      #css2{
              position: relative;
              left: 21%;
              top: 23%;
      
          }
          #html2{
              position: relative;
              left: 63%;
              top: 13%;
      
          }
          #php2{
              position: relative;
              left: 39%;
              top: 52%;
      
      
          }
          #sql2{
              position: relative;
                left:  12%;
                 bottom: -14%;
      
          }
          #javaScript2{
              position: relative;
               left: 67%;
               top: 22%;
      }
         
      
          .p{
              display: block;
          }
          td{
              padding-bottom: 18%;
          }
          .gl-accordion{
              
              cursor: pointer;
              border: solid #00000029;
  height: 79px;
  margin-top: 42px;
  background-color: white;
  font-style: italic;
  font-size: large;
  padding: 22px;
  padding-left: 11px;
  padding-left: 72px;
  width: 68%;
  margin-left: 3%;
  box-shadow: 0 8px 40px 0 rgba(0,0,0,.1) !important;
  }
  @media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}
      </style>
</body>
</html>
