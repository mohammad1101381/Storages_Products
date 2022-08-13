<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            direction: rtl;
        }
    </style>
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/storages/create" method="POST">
        @csrf
        
        <div class="form-group">
          <label for="exampleInputEmail1">نام انبار:</label>
          <input type="text" class="form-control" name="sname" id="sname">
          
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">آیدی استان:</label>
            <input type="number" class="form-control" name="pid" id="pid" >
          </div>
          
        <div class="form-group">
          <label for="exampleInputPassword1">آیدی شهر:</label>
          <input type="number" class="form-control" name="cityid" id="cityid" >
        </div>
        
        <div class="form-group">
            <label for="exampleInputPassword1">آیدی منطقه:</label>
            <input type="number" class="form-control" name="zoneid" id="zoneid" >
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">آدرس:</label>
            <textarea name="location" id="location" cols="30" rows="10" class="form-control"></textarea>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">وضعیت :</label>
            <input type="text" class="form-control" name="status" id="status" >
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">شرح :</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">نام مسئول:</label>
            <input type="text" class="form-control" name="manager" id="manager" >
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">آیدی مسئول:</label>
            <input type="number" class="form-control" name="managerid" id="managerid">
          </div>
          
          <div class="form-group">
            <label for="exampleInputEmail1">متراژ:</label>
            <input type="text" class="form-control" name="meterag" id="meterag" aria-describedby="emailHelp" >
          </div>
          
        <button type="submit" class="btn btn-success">ثبت</button>
      </form>
</body>
</html>