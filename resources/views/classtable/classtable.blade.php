@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>ClassTable</title>
</head>
<body>
    <p>spam error</p>
    <table class="table">
        <thead>
          <tr>
            <th>เวลาเริ่ม</th>
            <th>เวลาจบ</th>
            <th>คลาส</th>
            <th>ผู้สอน</th>
            <th>จอง</th>
          </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 2; $i++)
            <tr>
                <td>{{ $timeS[$i]}}</td>
                <td>{{ $timeE[$i]}}</td>
                <td>{{ $class[$i]}}</td>
                <td>{{ $trainer[$i]}}</td>
                <td><a button type='button' class='btn btn-secondary' href="">จอง</a></td>
            </tr> 
            @endfor      
        </tbody>
      </table>
</body>
</html>
@endsection