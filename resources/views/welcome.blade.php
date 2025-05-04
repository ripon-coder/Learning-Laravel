<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name') }}" placeholder="Enter full name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if(old('name') && !$errors->has('name'))
                <div class="valid-feedback d-block">Looks good!</div> 
                @endif           
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email') }}" placeholder="example@email.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if(old('email') && !$errors->has('email'))
                <div class="valid-feedback d-block">Looks good!</div> 
                @endif  
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if(old('password') && !$errors->has('password'))
                <div class="valid-feedback d-block">Looks good!</div> 
                @endif  
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>

            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" class="form-control @error('amount') is-invalid @enderror" id="amount"
                    name="amount" value="{{ old('amount') }}">
                @error('amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if(old('amount') && !$errors->has('amount'))
                <div class="valid-feedback d-block">Looks good!</div> 
                @endif  
            </div>

            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>


    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
