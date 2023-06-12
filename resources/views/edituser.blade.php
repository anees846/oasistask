@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-header">{{ __('Users') }}</div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- You are Logged In --}}
                    <form action="{{ route('edituser.post') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input type="hidden" id="id" class="form-control"  value="{{ $user->id }}" name="id" required>
                                <input type="text" id="name" class="form-control"  value="{{ $user->name }}" name="name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="text" id="email_address" class="form-control" value="{{ $user->email }}" name="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" >
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
