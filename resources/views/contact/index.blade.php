@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <h1 class="text-center">View Contact Messages</h1>

        <table class="table table-dark table-striped">
          <thead>
          <tr>
            <th scope="col">#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($contacts as $contact)
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td>{{ $contact->name }}</td>
              <td>{{ $contact->email }}</td>
              <td>{{ $contact->phone }}</td>
              <td>{{ $contact->message }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
