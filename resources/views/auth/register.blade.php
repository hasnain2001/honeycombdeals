<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
      <link rel="icon" href="{{ asset('front/assets/images/icons.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 20px 20px 0 0;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-link {
            color: #007bff;
            font-weight: bold;
        }

        .btn-link:hover {
            color: #0056b3;
            text-decoration: none;
        }
    </style>
</head>
<body>

{{-- <div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h4 class="mb-0">Create an Account</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" class="form-control" type="text" name="" value="{{ old('name') }}" required autofocus autocomplete="name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" class="form-control" type="email" name="" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" class="form-control" type="password" name="" required autocomplete="new-password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="form-control" type="password" name="" required autocomplete="new-password">
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <a href="{{ route('login') }}" class="btn btn-link">{{ __('Already registered?') }}</a>
                </div>

                <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
            </form>
        </div>
    </div>
</div> --}}

</body>
</html>
