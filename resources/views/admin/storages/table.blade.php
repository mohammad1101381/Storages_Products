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
<div class="table table-bordered">
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
        <th>ویرایش</th>
        </thead>
        <tbody>
        <tr>
        <?php

        $users = DB::table('shop_storages')->select('id','name' , 'province_id' , 'city_id', 'zone_id', 'location' , 'status' , 'description' , 'manager', 'manager_id','meterage','created_at','updated_at')->get();
        ?>
        @foreach($users as $value)

            <tr>

                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->province_id }}</td>
                <td>{{ $value->city_id }}</td>
                <td>{{ $value->zone_id }}</td>
                <td>{{ $value->location }}</td>
                <td>{{ $value->status }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->manager }}</td>
                <td>{{ $value->manager_id }}</td>
                <td>{{ $value->meterage }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td><a href="http://localhost:8000/admin/storages/{{ $value->id }}/edit"><button class="btn btn-secondary">ویرایش</button></a></td>



            </tr>

        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>