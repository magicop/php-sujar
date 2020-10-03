 <?php

// php populate html table from mysql database

$hostname = "localhost";
$username = "kodingcl_sujar";
$password = "sujar123";
$databaseName = "kodingcl_koding";

// connect to mysql
$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query

$query = "SELECT * FROM `usuarios";


// result for method one
$result1 = mysqli_query($connect, $query);

// result for method two 
$result2 = mysqli_query($connect, $query);

echo mysqli_fetch_array($result2);
$dataRow = "";

while($row2 = mysqli_fetch_array($result2))
{
    $dataRow = $dataRow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td></tr>";
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>PHP DATA ROW TABLE FROM DATABASE</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>

            table,th,tr,td
            {
                border: 1px solid black;
            }

        </style>

    </head>

    <body>

<!-- Table One -->
        <table style="background-color: red;">

            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <tr>
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
            </tr>
            <?php endwhile;?>

        </table>

        <br><br>


 <!-- Table Two -->
        <table style="background-color: green;">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
            </tr>
            
            <?php echo $dataRow;?>

        </table>

    </body>

</html>