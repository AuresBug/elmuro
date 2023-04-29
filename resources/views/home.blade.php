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

@section('title', 'Inicio')
@section('content')

  @include('home_navbar')

  <div class="container-fluid ">

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card shadow">

          <div class="card-body">
            <div class="card-text">
              <div class="row">

                <div class="col">
                  <a name="" id="" class="btn btn-primary btn-block" href="#" role="button">Publicar
                    anuncio GRATIS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
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
                  <a href="#" class="card-link">Ver mas</a>
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




    </div>
  </div>

@stop
