@extends('master.app')
@section('content')
    <div class="container mt-5">
        <form action="{{ route('user.update',$user) }}" method="POST">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{$user->name}}" placeholder="Enter full name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($user->name && !$errors->has('name'))
                    <div class="valid-feedback d-block">Looks good!</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{$user->email}}" placeholder="example@email.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($user->email && !$errors->has('email'))
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
                @if (old('password') && !$errors->has('password'))
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
                    name="amount" value="{{$user->amount}}">
                @error('amount')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                @if ($user->amount && !$errors->has('amount'))
                    <div class="valid-feedback d-block">Looks good!</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
