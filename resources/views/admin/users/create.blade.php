@extends('layouts.app')
@section('content')

<div class="content">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">Ulanyjy goş</div>
                    <div class="card-body card-block">
                        <form action="{{ route('users.store') }}" method="post" class="">
                            @csrf
                            @if(session('errors'))
                            <div class="alert alert-danger" style="padding: 1rem 2rem">
                                <ul style="list-style-type: circle">
                                    @foreach($errors->all() as $error)
                                    <li style="font-size: 14px">{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>

                            @endif
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" id="username" name="name" placeholder="Username"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                    <input type="email" id="email" name="email" placeholder="Email"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <input type="password" id="password" name="password" placeholder="Password"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        placeholder="ConfirmPassword" class="form-control">
                                </div>
                            </div>
                            <div class="form-actions form-group"><button type="submit"
                                    class="btn btn-success btn-sm">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- .animated -->
</div><!-- .content -->

@endsection