<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        * {
    direction: rtl;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: right!important;
}

th,
thead,
table,
td,
tr {
    font-size: 15px!important;
}

.font-16 {
    font-size: 16px!important;
}
    </style>
</head>
<body>
    <div class="table-responsive">
        <table id="mytable" class="table table-bordered table-striped m-2">
            <thead>
                <th>آیدی</th>
                <th>نام</th>
                <th>آیدی استان</th>
                <th>آیدی شهر</th>
                <th>آیدی منطقه</th>
                <th>آدرس</th>
                <th>وضعیت</th>
                <th>شرح</th>
                <th>مدیر</th>
                <th>آیدی مدیر</th>
                <th>متراژ</th>
                <th>تاریخ ساخته شدن</th>
                <th>تاریخ آپدیت شدن</th>
            </thead>
            <tbody>
            <tr>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "root";
                $database = "storages";

                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error) {
                    die("Connection failed:" . $connection->connect_error);
                }

                $sql = "SELECT * FROM shop_storages";
                $result = $connection->query($sql);

                if (!$result) {
                    die("Invalid query:" . $connection->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "<td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["province_id"] . "</td>
                <td>" . $row["city_id"] . "</td>
                <td>" . $row["zone_id"] . "</td>
                <td>" . $row["location"] . "</td>
                <td>" . $row["status"] . "</td>
                <td>" . $row["description"] . "</td>
                <td>" . $row["manager"] . "</td>
                <td>" . $row["manager_id"] . "</td>
                <td>" . $row["meterage"] . "</td>
                <td>" . $row["created_at"] . "</td>
                <td>" . $row["updated_at"] . "</td>
                </tr>";
                }


                
                ?>
                
            
            </tbody>
        </table>
    </div>
</body>
</html>