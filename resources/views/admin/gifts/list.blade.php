@extends('layouts.app')
@section('content')


<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">Gifts Table</strong>
            <button class="btn btn-primary" onclick="location.href='{{route('gifts.create')}}'">Sowgat goş +</button>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gifts as $gift)
                    <tr>
                        <td>{{$gift->name}}</td>
                        <form method="POST" action="{{ route('gifts.destroy', $gift->id) }} ">
                            @csrf
                            @method('DELETE')
                            <td><button class="btn btn-danger"><i class="menu-icon ti-trash"></i></button></td>
                        </form>
                        
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection