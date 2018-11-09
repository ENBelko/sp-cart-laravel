@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">Sign Up</div>
                <div class="card-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    <form action="{{ route('user.signup') }}" method="post">
                        <div class="form-group">
                            <label for="email" class="form-control-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="email@doman.ru"
                                   class="form-control " value="">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password"
                                   class="form-control">
                            <span class="help-block"></span>
                        </div>
                        <button type="submit" class="btn">Sign up</button>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection