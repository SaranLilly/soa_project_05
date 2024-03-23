@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="mb-3">
                    <form>
                        <div class="mb-3">
                            ชื่อ: <span>{{ $name[0] }}</span><br>
                            นามสกุล: <span>{{ $surname[0] }}</span><br>
                            เบอร์: <span>{{ $tel[0] }}</span><br>
                            อีเมล: <span>{{ $email[0] }}</span><br>
                            ระดับสมาชิก: <span>{{ $member_level[0] }}</span><br>
                            วันที่สมัคร: <span>{{ $date_order[0] }}</span><br>
                            วันหมดอายุ: <span>{{ $date_exp[0] }}</span><br>
                            หมายเหตุ: <span>{{ $note[0] }}</span><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
