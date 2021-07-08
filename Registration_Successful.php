<html>

<head>
    <title>Registration</title>

    <link rel="stylesheet" href="external1.css">
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
                <th> SEARCH </th>


            </tr>

        </table><br>
        


        <h1 align="center">Registration Successful!!</h1>
        <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        ini_set("display_errors","1");
        error_reporting(E_ALL);

        include_once('registration.php');
        $query="select * from Doctors";

        ?>
        <div class="top">
            <br>
            <div>
                Contact Us +91 96366 20000 / 01 | LifeM@hospital.com
            </div>
        </div>
        </form>

</body>

</html>