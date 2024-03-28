@extends('adminlayout')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-0">
                            <div class="bd-example">
                                {{-- <form method="POST" action="{{ route('classtable.create') }}"> --}}
                                <form method="POST" action="{{ route('classtable.create') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="classname" class="form-label">class</label>
                                        <select class="form-select" id="classname" name="classname">
                                            <option selected></option>
                                            @foreach ($classname as $classex)
                                                <option value="{{ $classex->id_class }}">{{ $classex->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">วัน</label>
                                        <input type="date" class="form-control" id="date" name="date">
                                        
                                    </div>
                                    <div class="mb-3">
                                        <label for="time_start" class="form-label">เวลาเพิรม้</label>
                                        <input type="time" class="form-control" id="time_start" name="time_start">
                                    </div>
                                    <div class="mb-3">
                                        <label for="time_end" class="form-label">เวลาสิ้นสุด</label>
                                        <input type="time" class="form-control" id="time_end" name="time_end">
                                    </div>
                            
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="" class="btn btn-danger ">Back</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
