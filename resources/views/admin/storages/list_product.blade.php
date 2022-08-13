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
        <th>آیدی انبار</th>
        <th>آیدی محصول</th>
        <th>تعداد</th>
        <th>شرح</th>
        <th>وضعیت</th>
        <th>تاریخ ساخته شدن</th>
        <th>تاریخ آپدیت شدن</th>
        <th>ویرایش</th>

        </thead>
        <tbody>
        <tr>
        <?php

        $users = DB::table('shop_storage_products')->select('id','storage_id' , 'product_id' , 'quantity', 'description', 'status' , 'created_at','updated_at')->get();
        ?>
        @foreach($users as $value)

            <tr>

                <td>{{ $value->id }}</td>
                <td>{{ $value->storage_id }}</td>
                <td>{{ $value->product_id }}</td>
                <td>{{ $value->quantity }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->status }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->updated_at }}</td>
                <td><a href="http://localhost:8000/admin/storages/{{ $value->id }}/editproduct"><button class="btn btn-secondary">ویرایش</button></a></td>
            </tr>

        @endforeach

        </tbody>
    </table>
</div>
</body>
</html>