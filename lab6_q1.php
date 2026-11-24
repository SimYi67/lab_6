<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>
    <?php
        $name = "Tan Sim Yi";
        $matric_number = "AI240006";
        $course = "Bachelor of Computer Science (Software Engineering)";
        $year_of_study = "Year 3";
        $address = "Parit Raja, Batu Pahat, Johor";
    ?>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>