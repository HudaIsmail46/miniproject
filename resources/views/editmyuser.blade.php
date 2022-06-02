@extends('app')
@section('page title', 'Edit User')
@section('content')

    <div class="container m-0">
        <div class="col-6">

            @if ($user)
                <form action="useredit?rid={{ $user->id }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="InputName" class="form-label">Full Name</label>
                        <input type="text" name="fullname" class="form-control" maxlength="100" value="{{ $user->name }}"
                            id="InputName" required>
                        <div class="invalid-feedback">
                            Name is required.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-control" maxlength="100" value="{{ $user->email }}"
                            id="InputEmail" required>
                        <div class="invalid-feedback">
                            Email is required.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" maxlength="10"
                            value="{{ $user->password }}" id="InputPassword" required>
                        <div class="invalid-feedback">
                            Password is required.
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-dark me-2">Update</button>
                    <button type="button" class="btn btn-primary" onclick="javascript:history.back()">Cancel</button>

                </form>
        </div>
    </div>
@else
    no record found
    @endif
@endsection
