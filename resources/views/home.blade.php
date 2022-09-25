@extends('base')
@section('content')
    <nav class="navbar navbar-extand-lg text-light bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">Vcard</a>
            <div class="d-flex">
                <form action="{{route('search')}}" method="post" class="d-flex">
                    @csrf
                    <input type="search" name="search" class="form-control">
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
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h3>insert</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit"  class="btn btn-danger bg-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vcard as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->contact}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <a href="{{route('delete',['id'=>$item->id])}}" class="btn btn-danger">X</a>
                                        <a href="{{route('edit',['id'=>$item->id])}}" class="btn btn-danger">update</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                
                </div>          
            </div>
            {{-- <div class="container">
                <div class="col mx-auto">
                    {{$vcard->links()}}
                </div>
            </div> --}}
        </div>
    </div>
@endsection