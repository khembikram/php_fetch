<?php
include_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch functions in php</title>
    <style>
        table {
            border: 1px solid rgb(217, 217, 217);
        }

        tr,
        th {
            padding: 8px;
        }

        th,
        td {
            border-left: 1px solid rgb(217, 217, 217);
            border-bottom: 1px solid rgb(217, 217, 217);
            padding: 8px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Email Id</th>
            <th>Mobile</th>
            <th>Photo</th>
        </tr>
        <?php
        $query = mysqli_query($conn, "SELECT * from fetch_data");
        // mysqli_fetch_object
        while ($row = mysqli_fetch_object($query)) {
            ?>
            <tr>
                <td>
                    <?php echo $row->Name; ?>
                </td>
                <td>
                    <?php echo $row->DOB; ?>
                </td>
                <td>
                    <?php echo $row->Email; ?>
                </td>
                <td>
                    <?php echo $row->Mobile; ?>
                </td>
                <td>
                    <?php echo $row->Photo; ?>
                </td>
            </tr>
        <?php } ?>

        <?php
        // mysqli_fetch_row
        $query = mysqli_query($conn, "SELECT * from fetch_data");
        while ($row = mysqli_fetch_row($query)) {
            ;
            ?>
            <tr>
                <td>
                    <?php echo $row[1]; ?>
                </td>
                <td>
                    <?php echo $row[2]; ?>
                </td>
                <td>
                    <?php echo $row[3]; ?>
                </td>
                <td>
                    <?php echo $row[4]; ?>
                </td>
                <td>
                    <?php echo $row[5]; ?>
                </td>
            </tr>
        <?php } ?>
        <?php
        $query = mysqli_query($conn, "SELECT * from fetch_data");
        // mysqli_fetch_assoc
        while ($row = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
                <td>
                    <?php echo $row['Name']; ?>
                </td>
                <td>
                    <?php echo $row['DOB'] ?>
                </td>
                <td>
                    <?php echo $row['Email']; ?>
                </td>
                <td>
                    <?php echo $row['Mobile']; ?>
                </td>
                <td>
                    <?php echo $row['Photo']; ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>