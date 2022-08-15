@extends('layouts.app')



@section('content')

<div class="content">
    <div class="animated fadeIn">


        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <form action="{{ route('gifts.store') }}" method="post" class="">
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
                        <div class="card-header"><strong>Gift</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <div class="form-group"><label for="gift" class=" form-control-label">Gift Name</label>
                                <input type="text" id="gift" name="name" placeholder="Gift name" class="form-control">
                            </div>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">User Select</strong>
                        </div>
                        <div class="card-body">

                            <select data-placeholder="Choose a Country..." name="userId" class="standardSelect"
                                tabindex="1">
                                <option value="">default</option>
                                @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-header">
                            <strong class="card-title">Gift Select</strong>
                        </div>
                        <div class="card-body">

                            <select data-placeholder="Choose a country..." name="giftId"
                                class="standardSelect">
                                <option value="">default</option>

                                @foreach($gifts as $gift)
                                <option value="{{$gift->id}}">{{$gift->name}}</option>
                                @endforeach
                            </select>

                        </div>

                        <div style="margin-left: 25px;" class="form-actions form-group"><button type="submit"
                                class="btn btn-success btn-sm">Submit</button></div>
                    </form>
                </div>
            </div>



        </div><!-- .animated -->
    </div><!-- .content -->

    @endsection