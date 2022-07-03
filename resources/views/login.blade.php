@extends('layout.main')

@section('container')

    <div class="container" style="padding-top: 100px">
        <form action="/login" method="POST">
            @csrf

                      <div class="form-floating" style="padding-bottom: 30px">
                        <input type="email" name="email" class="form-control rounded @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback" style="text-align: left">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>
                      <div class="form-floating" style="padding-bottom: 50px">
                        <input type="password" name="password" class="form-control rounded" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                      </div>
                      <div style="padding-bottom: 10px;">
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                      </div>

        </form>
    </div>

@endsection
