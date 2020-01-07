@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card bg-dark">
          <div class="card-header"><h1>Contact Us</h1></div>

          <div class="card-body">
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            <form method="POST" action="{{ route('contactUs') }}">
              @csrf
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Name:</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control bg-info @error('name') is-invalid @enderror"
                         name="name"
                         value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email:</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control bg-info @error('email') is-invalid @enderror"
                         name="email"
                         value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone:</label>

                <div class="col-md-6">
                  <input id="phone" type="tel" class="form-control bg-info @error('phone') is-invalid @enderror"
                         name="phone"
                         value="{{ old('phone') }}" required autocomplete="tel">

                  @error('phone')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="message" class="col-md-4 col-form-label text-md-right">Message:</label>

                <div class="col-md-6">
                  <textarea id="message" type="text"
                            class="form-control bg-info @error('message') is-invalid @enderror"
                            name="message"
                            rows="10"
                            required>{{ old('message') }}</textarea>
                  @error('message')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Send Message
                  </button>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
