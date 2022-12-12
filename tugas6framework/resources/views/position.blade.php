@extends('layout')
@section('content')
<h3> Many to One With BelongsTo</h3>
    <table class="uk-table uk-table-divider ">
      <thead>
      <tr>
        <th>Username</th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
      </tr>
    </thead>
    <tbody>
        @foreach($position as $positions)
        <tr>
            <td>{{ $positions->pegawai->username }}</td>
            <td>{{ $positions->pegawai->profil->name }}</td>
            <td>{{ $positions->pegawai->email }}</td>
            <td>{{ $positions->name }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <hr class="uk-divider-icon">
  <h3> One to Many With HasMany</h3>
      <table class="uk-table uk-table-divider ">
        <thead>
        <tr>
          <th>Username</th>
          <th>Name</th>
          <th>Email</th>
          <th>Positon</th>

        </tr>
      </thead>
      <tbody>
          @foreach($pegawai as $pegawais)
          <tr>
              <td>{{ $pegawais->username }}</td>
                <td>{{ $pegawais->email }}</td>
              <td>
                
                @foreach ($pegawais->position as $positions)
                  <li>{{ $positions->name }}</li>
                @endforeach
              </tr>
          @endforeach
      </tbody>
    </table>
@endsection