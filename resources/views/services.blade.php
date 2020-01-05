@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <h1 class="text-center"><h1>Services</h1></h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('img/about/1.jpg') }}" class="d-block img-fluid ml-auto mr-auto w-75" alt="Mountain">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/about/2.jpg') }}" class="d-block img-fluid ml-auto mr-auto w-75" alt="Aeroplane">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('img/about/3.jpg') }}" class="d-block img-fluid ml-auto mr-auto w-75" alt="Computer">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="card bg-dark mt-5">
          <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et inventore
            necessitatibus nobis
            perferendis quas quisquam sunt veniam! Dolore dolorem hic laudantium velit! Assumenda iusto, magnam
            modi neque quam rerum!
          </div>
          <div class="card-body">Architecto, atque blanditiis cumque cupiditate dolores harum itaque iusto laborum
            libero minima nam
            natus neque nesciunt non omnis pariatur praesentium quasi quibusdam quisquam quod quos ratione
            repellat tenetur voluptate voluptates?
          </div>
          <div class="card-body">Consectetur culpa ducimus eveniet minus nam, reprehenderit tempore ullam? A alias
            aliquid animi
            debitis, eos, et excepturi, expedita illo ipsum labore magni natus nulla odio perspiciatis qui quia
            reprehenderit voluptatem!
          </div>
          <div class="card-body">Autem dolorem dolorum error molestias officiis. Ab at earum, eius enim eum eveniet id
            inventore
            itaque laboriosam laudantium maiores necessitatibus nihil nulla provident quisquam quod, quos
            repudiandae sint veritatis voluptates.
          </div>
          <div class="card-body">Asperiores cum dignissimos illum nemo, obcaecati officia voluptatibus! Illo veritatis,
            vero.
            Aliquid animi asperiores culpa dignissimos distinctio dolor ducimus esse est excepturi iste modi
            perferendis quia rerum sed ullam, voluptas?
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
