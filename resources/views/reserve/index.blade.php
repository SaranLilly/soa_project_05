<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>SOA Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <table class="table">
        <thead>
          <tr>
            <th>วันที่จอง</th>
            <th>เวลาที่จอง</th>
            <th>คลาส</th>
            <th>ผู้สอน</th>
            <th>สถานะ</th>
          </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 2; $i++)
            <tr>
                <td>{{ $date[$i]}}</td>
                <td>{{ $time[$i]}}</td>
                <td>{{ $class[$i]}}</td>
                <td>{{ $teacher[$i]}}</td>
                <td>{{ $status[$i]}}</td>
            </tr> 
            @endfor
            {{-- @foreach ($employees as $employee)
            <tr>
            <td>{{ $employee->empID  }}</td>
            <td>{{ $employee->prefix }}</td>
            <td>{{ $employee->firstName  }}</td>
            <td>{{ $employee->lastName }}</td>
            <td>{{ $employee->phoneNumber  }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->positionName }}</td>
            </tr>
            @endforeach   --}}          
        </tbody>
      </table>
  </body>
</html>