@extends('layout')

@section('content')
<div class="container">
    <br>
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

                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">SL NO</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ROLE</th>
                            <th scope="col">ACTIONS</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $k=1;
                            @endphp
                            @foreach ($users as $u)
                                <tr>
                                    <th scope="row">{{ $k }}</th>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>
                                        @if ($u->role == 1)
                                        <div class="btn btn-sm btn-outline-primary" role="alert">
                                            Admin
                                          </div>
                                        @endif
                                        @if ($u->role == 2)
                                        <div class="btn btn-sm btn-outline-success" role="alert">
                                            Customer
                                          </div>
                                        @endif
                                        {{-- {{$u->role}} --}}

                                    </td>
                                    <td><a href="{{ url('edituser/'.$u->id) }}"><button class="btn btn-sm btn-info">Edit</button></a></td>
                                </tr>
                            @php
                                $k++
                            @endphp
                            @endforeach


                        </tbody>
                      </table>

                      {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
