@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">โปรไฟล์ผู้ใช้</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ชื่อ: <span>{{ $profile[0]->name }}</span></li>
                        <li class="list-group-item">นามสกุล: <span>{{ $profile[0]->surname }}</span></li>
                        <li class="list-group-item">เบอร์โทร: <span>{{ $profile[0]->tel }}</span></li>
                        <li class="list-group-item">อีเมล: <span>{{ $profile[0]->email }}</span></li>
                        <li class="list-group-item">
                            ระดับสมาชิก: <div style="display: inline;">{{ $profile[0]->leveltype }}</div>
                            <div style="display: inline;">({{ $profile[0]->status }})</div>
                        </li>   
                        <li class="list-group-item">วันที่สมัคร: <span>{{ $profile[0]->date_order }}</span></li>
                        <li class="list-group-item">วันหมดอายุ: <span>{{ $profile[0]->date_exp }}</span></li>
                        <li class="list-group-item">หมายเหตุ: <span>{{ $profile[0]->note }}</span></li>
                    </ul>
                </div>

                {{-- user number 2 --}}
                {{-- <div class="card-body">
                    <h5 class="card-title">โปรไฟล์ผู้ใช้</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">ชื่อ: <span>{{ $profile[1]->name }}</span></li>
                        <li class="list-group-item">นามสกุล: <span>{{ $profile[1]->surname }}</span></li>
                        <li class="list-group-item">เบอร์โทร: <span>{{ $profile[1]->tel }}</span></li>
                        <li class="list-group-item">อีเมล: <span>{{ $profile[1]->email }}</span></li>
                        <li class="list-group-item">
                            ระดับสมาชิก: <div style="display: inline;">{{ $profile[1]->leveltype }}</div>
                            <div style="display: inline;">({{ $profile[0]->status }})</div>
                        </li>   
                        <li class="list-group-item">วันที่สมัคร: <span>{{ $profile[1]->date_order }}</span></li>
                        <li class="list-group-item">วันหมดอายุ: <span>{{ $profile[1]->date_exp }}</span></li>
                        <li class="list-group-item">หมายเหตุ: <span>{{ $profile[1]->note }}</span></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
