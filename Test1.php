<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
       <style>
        < <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }






</head>
<body>
<?php
$data = array(
    array("1", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("2", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("3", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("4", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("5", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("6", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("7", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("8", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("9", "วชิรวิชญ์", "ตะเภาทอง","6/10"),
    array("10", "วชิรวิชญ์", "ตะเภาทอง","6/10"),

);


echo "<table>";
echo "<tr><th>No.</th><th>ชื่อ</th><th>นามสกุล</th><th>ห้อง</th></tr>";

foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}

echo "</table>";

    ?>
</body>
</html>