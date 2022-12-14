@extends('layouts.auth')
@section('content')

<!-- Page Content  -->
<div id="content">
    <div class="container">
        {{-- @if($errors->any())
        <div class="jumbotron">
            <div class="row">
                <div class="col">
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                        <ul>
                            <li>
                                {{$error}}
                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif --}}
        <div class="row">
            <div class="col">
                <h2>Register</h2>
                <div class="jumbotron">
                    <form action="/users" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="name" placeholder="Enter Name" value="{{old('name')}}">
                                @error('name')
                                    <p class="text-danger mt-2">{{$message}}</p>
                                @enderror
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" name="email" value="{{old('email')}}">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                                @error('email')
                                    <p class="text-danger mt-2">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                placeholder="Password" value="{{old('password')}}">
                                @error('password')
                                    <p class="text-danger mt-2">{{$message}}</p>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2"
                                name="password_confirmation" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
                                @error('password_confirmation')
                                    <p class="text-danger mt-2">{{$message}}</p>
                                @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                        <a href="/login">
                            <p  class="text">Have an account? <span class="text-primary">Login</span></p></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
