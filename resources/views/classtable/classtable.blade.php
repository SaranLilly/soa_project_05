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
    <style>
      .calendar {
          width: 300px;
          margin: 0 auto;
      }
      .calendar table {
          width: 100%;
          border-collapse: collapse;
      }
      .calendar th, .calendar td {
          border: 1px solid #ddd;
          padding: 8px;
          text-align: center;
      }
      .selected {
          background-color: #ffffcc;
      }
  </style>
</head>
<body>
  <div class="calendar">
    <?php
    // กำหนดวันที่เริ่มต้นและสิ้นสุดของเดือน
    $currentMonth = date('m');
    $currentYear = date('Y');
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

    // ตั้งค่าโซนเวลา
    date_default_timezone_set('Asia/Bangkok');

    // วันที่ปัจจุบัน
    $currentDay = date('d');

    // สร้างปฎิทิน
    echo '<table>';
    echo '<tr><th>จันทร์</th><th>อังคาร</th><th>พุธ</th><th>พฤหัสบดี</th><th>ศุกร์</th><th>เสาร์</th><th>อาทิตย์</th></tr>';
    echo '<tr>';

    // หาวันแรกของเดือน
    $firstDayOfMonth = date('N', strtotime("$currentYear-$currentMonth-01"));

    // เพิ่มช่องว่างถ้าจำเป็น
    for ($i = 1; $i < $firstDayOfMonth; $i++) {
        echo '<td></td>';
    }

    // เริ่มวันที่และวันเสาร์
    for ($day = 1; $day <= $daysInMonth; $day++) {
        if ($day == $currentDay) {
            echo '<td class="selected">' . $day . '</td>';
        } else {
            // เพิ่มการตรวจสอบเพื่อให้วันที่ผ่านมาไม่สามารถคลิกได้
            if ($day >= $currentDay) {
                echo '<td><a href="?day=' . $day . '">' . $day . '</a></td>';
            } else {
                echo '<td>' . $day . '</td>';
            }
        }
        if (date('N', strtotime("$currentYear-$currentMonth-$day")) == 7) {
            echo '</tr>';
            if ($day < $daysInMonth) {
                echo '<tr>';
            }
        }
    }

    // เพิ่มช่องว่างถ้าจำเป็น
    for ($i = date('N', strtotime("$currentYear-$currentMonth-$daysInMonth")) + 1; $i <= 7; $i++) {
        echo '<td></td>';
    }

    echo '</tr>';
    echo '</table>';
    ?>
</div>




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