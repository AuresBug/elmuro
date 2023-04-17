@extends('layouts.app')

@section('css')
  <style>
    body {
      padding-top: 5rem;
    }

    .starter-template {
      padding: 3rem 1.5rem;
      text-align: center;
    }
  </style>
@stop
@section('content')

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <div class="container ">

    <div class="card-columns">

      @forelse ($posts as $post)
        <div class="card mb-5 shadow-lg">
          @if (rand(0, 1))
            <img class="card-img-top rounded-top" src="https://picsum.photos/id/{{ $post->id }}/640/480"
              alt="">
          @endif

          <div class="card-body">
            <h4 class="card-title text-bold text-left mb-2">{{ $post->title }}</h4>
            <p class="card-text text-justify">{{ $post->small_content }}
              <a name="view" id="view" class="btn btn-link " href="#" role="button">Ver
                mas</a>
            </p>

          </div>
          <div class="card-footer">
            <div class="row">
              <div class="col">
                <div class="text-left"> <i class="fa fa-fw fa-thumbs-up" aria-hidden="true"></i>
                  {{ number_format($post->likes) }}</div>
              </div>
              <div class="col ml-auto">
                <div class="text-right"> {{ $post->created_at->diffForHumans() }}</div>
              </div>
            </div>
          </div>
        </div>
      @empty
        <h1> Sin posts para mostrar</h1>
      @endforelse



    </div>
  </div>

@stop
