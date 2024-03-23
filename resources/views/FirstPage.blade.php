@extends('layout')
@section('title', 'หน้าแรก')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>SOA Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <table class="table">
        <thead>
          <tr>
            <th>Picture</th>
            <th>Title</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 3; $i++)
            <tr>
                {{-- @if ($i == 1) --}}
                <th><img width="100" height="100" src="data:image/png;base64,{{ base64_encode($picture[$i]) }}" alt="Pixel Image"></th>
                {{-- @elseif ($i == 2)
                <th><img src="data:image/png;base64,{{ base64_encode($picture1) }}" alt="Pixel Image"></th>
                @else
                <th><img src="data:image/png;base64,{{ base64_encode($picture2) }}" alt="Pixel Image"></th>
                @endif --}}
                <th>{{ $title[$i]}}</th>
                <th>{{ $detail[$i]}}</th>
            </tr> 
            @endfor       
        </tbody>
      </table>
  </body>
</html>
@endsection
