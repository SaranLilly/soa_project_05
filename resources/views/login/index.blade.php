<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
    <form method="POST" action="{{ route('login.listofname') }}">
        @csrf
        @method('post')
    <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            {{-- <h1 class="my-5 display-3 fw-bold ls-tight">
              The best offer <br />
              <span class="text-primary">for your business</span>
            </h1>
            <p style="color: hsl(217, 10%, 50.8%)">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Eveniet, itaque accusantium odio, soluta, corrupti aliquam
              quibusdam tempora at cupiditate quis eum maiores libero
              veritatis? Dicta facilis sint aliquid ipsum atque?
            </p> --}}
          </div>
  
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="card">
              <div class="card-body py-5 px-md-5">
                <form>
                  {{-- <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1"name="name" class="form-control" />
                        
                        <label class="form-label" for="form3Example1">First name</label>

                       
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example2"name="surname" class="form-control" />
                        <label class="form-label" for="form3Example2">Last name</label>
                      </div>
                    </div>
                  </div> --}}
  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3"name="email" class="form-control" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4"name="password" class="form-control" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
                  {{-- <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2"name="tel" class="form-control" />
                      <label class="form-label" for="form3Example2">tel</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2"name="role" class="form-control" />
                      <label class="form-label" for="form3Example2">role</label>
                    </div>
                  </div> --}}
  
                  <!-- Checkbox -->
                  {{-- <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div> --}}
  
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                    Sign up
                  </button>
  
                  <!-- Register buttons -->
                  {{-- <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>
  
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->
    </form>
</body>
</html>

{{-- @extends('layout')
@section('title', 'จอง')
@section('content')
    <table class="table">
        <thead>
          <tr>
            <th>name</th>
            <th>surname</th>
            <th>tel</th>
            <th>email</th>
            <th>password</th>
            <th>role</th>
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
@endsection --}}
