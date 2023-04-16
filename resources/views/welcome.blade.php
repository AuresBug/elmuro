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
      <div class="card">
        <img class="card-img-top rounded-top" src="https://picsum.photos/360" alt="">
        <div class="card-body">
          <h4 class="card-title">Title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, rem. Nam eveniet unde
            numquam, cupiditate ratione quisquam fuga ut error similique soluta adipisci tempore. Est tempora perspiciatis
            corrupti dignissimos suscipit.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top rounded-top" src="https://picsum.photos/360" alt="">
        <div class="card-body">
          <h4 class="card-title">Title</h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, rem. Nam eveniet unde
            numquam, cupiditate ratione quisquam fuga ut error similique soluta adipisci tempore. Est tempora perspiciatis
            corrupti dignissimos suscipit.</p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top rounded-top" src="https://picsum.photos/360" alt="">
        <div class="card-body">
          <h4 class="card-title">Title</h4>
          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit obcaecati quo consequatur
            deleniti reprehenderit labore cumque iure ad tempore accusantium eveniet, ut cupiditate numquam, voluptatum,
            quisquam illo veniam aliquam laborum!


            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro maiores voluptatibus nisi temporibus nobis
            repellat perspiciatis cumque rerum, fuga cum earum animi repellendus molestiae numquam corrupti! Ea unde est
            nisi.
          </p>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top rounded-top" src="https://picsum.photos/360" alt="">
        <div class="card-body">
          <h4 class="card-title">Title</h4>
          <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Impedit obcaecati quo consequatur
            deleniti reprehenderit labore cumque iure ad tempore accusantium eveniet, ut cupiditate numquam, voluptatum,
            quisquam illo veniam aliquam laborum!


            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro maiores voluptatibus nisi temporibus nobis
            repellat perspiciatis cumque rerum, fuga cum earum animi repellendus molestiae numquam corrupti! Ea unde est
            nisi.
          </p>
        </div>
      </div>
    </div>
  </div>

@stop
