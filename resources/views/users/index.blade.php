@extends('master.app')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if ($users->isNotEmpty())
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->amount }}</td>
                        <td class="d-flex gap-1">
                            <a href="{{ route('user.edit', $user) }}"><button type="button"
                                    class="btn btn-secondary btn-sm">Edit</button></a>

                            <button
                                onclick="if(confirm('Are you sure want to delete?')) document.getElementById('user_delete_form_{{ $user->id }}').submit()"
                                type="button" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <form class="d-none" id="user_delete_form_{{ $user->id }}"
                        action="{{ route('user.destroy', $user->id) }}" method="post">@csrf @method('DELETE')</form>
                @endforeach
            </tbody>
        </table>
        <div style="display: flex;justify-content:center">{{ $users->links('pagination::simple-bootstrap-4') }}</div>
    @else
        <div class="alert alert-info" role="alert">
            NO DATA!
        </div>
    @endif
@endsection
