@extends('layout')
@section('title', 'จอง')
@section('content')
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
                <td><a button type='button' class='btn btn-secondary' href="">{{ $status[$i]}}</a></td>
            </tr> 
            @endfor     
        </tbody>
      </table>
@endsection
