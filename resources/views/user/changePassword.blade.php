@extends('base')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <h2 class="h4 mb-3">Change password</h2>
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors)
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            @endif
                            <form  method="POST" action="">
                               @csrf
                                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">Current Password</label>

                                    <div class="mb-3">
                                        <input id="current-password" type="password" class="form-control"
                                            name="current-password" required>

                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                    <label for="new-password" class="col-md-4 control-label">New Password</label>

                                    <div class="mb-3">
                                        <input id="new-password" type="password" class="form-control" name="new-password"
                                            required>

                                        @if ($errors->has('new-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('new-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new-password-confirm" class="col-md-4 control-label">Confirm New
                                        Password</label>

                                    <div class="mb-3">
                                        <input id="new-password-confirm" type="password" class="form-control"
                                            name="new-password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary" style="background-color: blue">
                                            Change Password
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
