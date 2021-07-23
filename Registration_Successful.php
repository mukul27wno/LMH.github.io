
<html>

<head>
    <title>Registration</title>

    <link rel="stylesheet" href="regs.css">
    <link rel="icon" href="hos1.png" type="image/icon type">
</head>

<body bgcolor="mistyrose">

    <table>
        <tr>
            <td><img src="hos1.png" ></h1></I></td>
            <td style="font-size:50px;">
                <font color="#428bca"> LIFE MATTERS </font>
                <font color="#000"> Hospital</font>
            </td>
        </tr>
    </table>

    <h1 id="myHeader" align="center">

        <table width="100%" align="right">

            <tr>
                <th> <a href="index.html" style="color: white"> HOME </a></th>
                <th> <a href="REGISTRATION1.html" style=" color: white">REGISTRATION </a></th>
                <th> <a href="a.html" style=" color: white">SPECIALIZATION</a> </th>
                <th> <a href="Procedures.html" style=" color: white">PROCEDURES</a></th>
                <th> <a href="LOCATIONS.html" style="color: white"> LOCATIONS </a></th>
                
            </tr>

        </table><br>

        <h1 align="center">Appointment Booked!!</h1>
        <center>
        <big>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        ini_set("display_errors","1");
        error_reporting(E_ALL);
        session_start();
        $conn = mysqli_connect('localhost','root','','project');
        $rr = $_SESSION['referred'];
        $query="SELECT * FROM `doctors` WHERE Referred = '$rr'";
        $result= mysqli_query ($conn,$query);
        $date = date('d')+3;
        $mon = date('M');
        if($result->num_rows>0)
            {
            while($row = $result->fetch_assoc())
            {
        ?>
        <body>
            <div class = "rs1">
                <h3>Name: <?php echo $_SESSION['initial'] ?> <?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['lanme']?>
                </h3>
                <br>
                <h3>Contact : <?php echo $_SESSION['contact'] ?>
                </h3>
                <br>
                <h3>Email : <?php echo $_SESSION['email'] ?>
                </h3>
                <br>
                <h3>Doctor : <?php echo $row['initial'] ?> <?php echo $row['fname'] ?> <?php echo $row['lname']?>     
                </h3>
                <br>
                <h3>Room No. : <?php echo $row['Room'] ?>    
                </h3>
                <br>
                <h3>Date : <?php echo $date?> <?php echo $mon?> <?php echo "8Am"?> 
                <br>
                
            </div>
            <h3></h3>
        </body>
        </big>
        </center>
        <?php
            }}
        ?>
        
        <div class="top">
            <br>
            <div>
                Contact Us +91 96366 20000 / 01 | LifeM@hospital.com
            </div>
        </div>
        
