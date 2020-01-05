@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-dark">
          <div class="card-header"><h1>Team</h1></div>
          <div class="card-body">

            <div class="media">
              <img src="{{ asset('img/team/2.jpg') }}" class="mr-3" width="50%" alt="Team member 1"></a>
              <div class="media-body">
                <h5 class="mt-0">Team member 1</h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et inventore
                necessitatibus nobis
                perferendis quas quisquam sunt veniam! Dolore dolorem hic laudantium velit! Assumenda iusto, magnam
                modi neque quam rerum!
              </div>
            </div>

            <div class="media mt-3">
              <div class="media-body">
                <h5 class="mt-0">Team member 2</h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et inventore
                necessitatibus nobis
                perferendis quas quisquam sunt veniam! Dolore dolorem hic laudantium velit! Assumenda iusto, magnam
                modi neque quam rerum!
              </div>
              <img src="{{ asset('img/team/1.jpg') }}" class="mr-3" width="50%" alt="Team member 2"></a>
            </div>

            <div class="media mt-3">
              <img src="{{ asset('img/team/3.jpg') }}" class="mr-3" width="50%" alt="Team member 3"></a>
              <div class="media-body">
                <h5 class="mt-0">Team member 3</h5>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius et inventore
                necessitatibus nobis
                perferendis quas quisquam sunt veniam! Dolore dolorem hic laudantium velit! Assumenda iusto, magnam
                modi neque quam rerum!
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
  </div>
@endsection
