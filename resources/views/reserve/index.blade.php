@extends('layout')

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
          @foreach ($reserveList as $item)
          <tr>
            <td>{{ $item->date}}</td>
            <td>{{ $item->time}}</td>
            <td>{{ $item->class}}</td>
            <td>{{ $item->name}}</td>
            <td>
              <form method="POST" action="{{route('reserve.delete',['reserveList'=> $item->id]) }}">
                  @csrf
                  @method('delete')
                  <input type="submit" value="{{$item->status}}" class="btn btn-danger">
              </form>
            </td>
          </tr> 
          @endforeach 
        </tbody>
      </table>
@endsection
