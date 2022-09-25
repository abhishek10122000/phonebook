@extends('base')
@section('content')
<nav class="navbar navbar-extand-lg text-light bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">Vcard</a>
        <div class="d-flex">
            <form action="{{route('search')}}" method="post" class="d-flex">
                @csrf
                <input type="search" name="contact" class="form-control">
                <input type="submit" class="btn btn-success">
            </form>
        </div>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="" class="nav-link">home</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>insert</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('update',['id'=>$vcard->id])}}" method="post">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$vcard->name}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Contact</label>
                            <input type="text" name="contact"  value="{{$vcard->contact}}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <input type="submit"  class="btn btn-danger bg-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection