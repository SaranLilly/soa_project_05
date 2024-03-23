<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>profile</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
</head>
<body>
    <form>
        ชื่อ: <span>{{ $name[0] }}</span><br>
        นามสกุล: <span>{{ $surname[0] }}</span><br>
        เบอร์: <span>{{ $tel[0] }}</span><br>
        อีเมล: <span>{{ $email[0] }}</span><br>
        ระดับสมาชิก: <span>{{ $member_level[0] }}</span><br>
        วันที่สมัคร: <span>{{ $date_order[0] }}</span><br>
        วันหมดอายุ: <span>{{ $date_exp[0] }}</span><br>
        หมายเหตุ: <span>{{ $note[0] }}</span><br>
    </form>
    
    
</body>
</html>