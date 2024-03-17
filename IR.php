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
 if (isset($_POST['Excellent'])) {
    $deleteSql = "DELETE FROM skills";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO skills (grades, why)
    VALUES ('Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.th{background-color:#00800e;}</style>'; // Embed inline style
        // $exe"<style>.th{background-color:#00800e;}</style>";
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }

 }

 if (isset($_POST['good'])){

    $deleteSql = "DELETE FROM skills";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (grades, why)
    VALUES ('good','There are 1-3 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.td{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['fair'])){
    $deleteSql = "DELETE FROM skills";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (grades, why)
    VALUES ('Fair','There are 4-5 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.fair{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 }
 if (isset($_POST['poor'])){
    $deleteSql = "DELETE FROM skills";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  skills  (grades, why)
    VALUES ('poor','There are more than 6 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.poor{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 }
 if (isset($_POST['ExcellentDesign'])) {
    $deleteSql = "DELETE FROM Desig";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO Desig (grades, why)
    VALUES ('Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.ExcellentDesign{background-color:#00800e;}</style>'; // Embed inline style
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}if (isset($_POST['goodDesign'])){

    $deleteSql = "DELETE FROM Desig";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  Desig  (grades, why)
    VALUES ('good','There are 1-3 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.goodDesign{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }if (isset($_POST['goodGraphics'])){

    $deleteSql = "DELETE FROM Graphics";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  Graphics  (grades, why)
    VALUES ('good','There are 1-3 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.goodGraphics{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['goodCascading'])){

    $deleteSql = "DELETE FROM cascading";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  cascading  (grades, why)
    VALUES ('good','There are 1-3 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.goodCascading{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }
 if (isset($_POST['ExelentCascading'])) {
    $deleteSql = "DELETE FROM cascading";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO cascading (grades, why)
    VALUES ('Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.ExelentCascading{background-color:#00800e;}</style>'; // Embed inline style
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}if (isset($_POST['ExcellentGraphics'])) {
    $deleteSql = "DELETE FROM Graphics";
    $conn->query($deleteSql);
    $insertSql = "INSERT INTO Graphics (grades, why)
    VALUES ('Excellent', 'There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.')";
    if ($conn->query($insertSql) === TRUE) {
        echo "New record created successfully";
        echo '<style type="text/css">.ExcellentGraphics{background-color:#00800e;}</style>'; // Embed inline style
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }
}
 if (isset($_POST['fairDesign'])){

    $deleteSql = "DELETE FROM Desig";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  Desig  (grades, why)
    VALUES ('Fair','There are 4-5 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.fairDesign{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['fairCascading'])){

    $deleteSql = "DELETE FROM cascading";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  cascading  (grades, why)
    VALUES ('Fair','There are 4-5 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.fairCascading{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
}if (isset($_POST['fairGraphics'])){

    $deleteSql = "DELETE FROM Graphics";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  Graphics  (grades, why)
    VALUES ('Fair','There are 4-5 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.fairGraphics{background-color:#00800e;}</style>'; // Embed inline style

    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (isset($_POST['poorDesign'])){
    $deleteSql = "DELETE FROM Desig";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  Desig  (grades, why)
    VALUES ('poor','There are more than 6 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.poorDesign{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 } if (isset($_POST['poorCascading'])){
    $deleteSql = "DELETE FROM cascading";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  cascading  (grades, why)
    VALUES ('poor','There are more than 6 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.poorCascading{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 } if (isset($_POST['poorGraphics'])){
    $deleteSql = "DELETE FROM Graphics";
    $conn->query($deleteSql);
    $sql = "INSERT INTO  Graphics  (grades, why)
    VALUES ('poor','There are more than 6 coding errors on the site as found by me or an online validator.')";
    if ($conn->query($sql) === TRUE) {
       echo "New record created successfully";
       echo '<style type="text/css">.poorGraphics{background-color:#00800e;}</style>'; // Embed inline style
    } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
    } 
 }

?>
<html>
    <head>
    </head>
    <body>
    <form action="" method="post">
        <table>
            <tbody>
                <tr>
                    <td style="border: none; background-color: aliceblue;"></td>
                    <td id='color'>Excellent
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
                        <th class='th' >
                            <button  name="Excellent" id='Exelent' class='th'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='td' >
                            <button  name="good" id='good' class='td'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fair'>
                                <button  name="fair" id='fair' class='fair'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poor'> 
                                    <button  name="poor" id='poor' class='poor'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr>
                <tr>
                    <th>Layout/Design
                        25 %
                        <th class='ExcellentDesign' >
                            <button  name="ExcellentDesign" id='ExcellentDesign' class='ExcellentDesign'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='goodDesign' >
                            <button  name="goodDesign" id='goodDesign' class='goodDesign'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fairDesign'>
                                <button  name="fairDesign" id='fairDesign' class='fairDesign'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poorDesign'> 
                                    <button  name="poorDesign" id='poorDesign' class='poorDesign'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr><tr>
                    <th>Cascading Style Sheet
                        20 %</th>
                        <th class='ExelentCascading' >
                            <button  name="ExelentCascading" id='ExelentCascading' class='ExelentCascading'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='goodCascading' >
                            <button  name="goodCascading" id='goodCascading' class='goodCascading'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fairCascading'>
                                <button  name="fairCascading" id='fairCascading' class='fairCascading'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poorCascading'> 
                                    <button  name="poorCascading" id='poorCascading' class='poorCascading'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr><tr>
                    <th>Graphics
                        15 %</th>
                        <th class='ExcellentGraphics' >
                            <button  name="ExcellentGraphics" id='ExelentGraphics' class='ExcellentGraphics'> Excellent</button><br>
                            There are no errors in the HTML, CSS or other coding on the site as found by me or an online validator.
                            </th>
                            <th class='goodGraphics' >
                            <button  name="goodGraphics" id='goodGraphics' class='goodGraphics'> good</button><br>
                                There are 1-3 coding errors on the site as found by me or an online validator.
                                </th>
                                <th class='fairGraphics'>
                                <button  name="fairGraphics" id='fairGraphics' class='fairGraphics'> fair</button><br>
                                    There are 4-5 coding errors on the site as found by me or an online validator.
                                    </th>
                                    <th class='poorGraphics'> 
                                    <button  name="poorGraphics" id='poorGraphics' class='poorGraphics'> poor</button><br>
                                        There are more than 6 coding errors on the site as found by me or an online validator.
                                        </th>
                </tr>
            </tbody>
        </table>
        <button name="submit"> submit</button>
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
                    cursor: pointer;
                    background-color: white;
  border: none;
  padding-bottom: 23;
  font-size: large;                }
  .but{
    background-color:blue;
  }
  .white{
    background-color:black;

  }
        </style>
    </body>
</html>
