@extends('base')
@section('content')

<div class="card border border-2 mb-3">
  <div class="card-body">
  <h5 id="section11" class="main-subtitle text-dark mb-3 "><i class="fa-solid fa-list"></i> LISTE DES DECLARATIONS</h5>
    <table id="example" class="display responsive nowrap table table-striped " width="100%">
      <thead style="background-color: #ea580c;">
      <tr class="">
        <th>Numéro</th>
        <th>Assurance</th>
        <th>Nom</th>
        <th>Numero Police</th>
        <th>Email</th>
        <th>contact1</th>
        <th>contact2</th>
        <th>Lieu</th>
        <th>Date</th>
        <th>Détails</th>
      </tr>
      </thead>
      <tbody class="">
      @foreach($declarations as $ele)
      <tr>
        <th scope="row">{{ $loop->index+1}}</th>
        <td>{{ $ele->assurance }}</td>
        <td>{{ $ele->nom_complet }}</td>
        <td>{{ $ele->numero_police }}</td>
        <td>{{ $ele->email }}</td>
        <td>{{ $ele->contact1 }}</td>
        <td>{{ $ele->contact2 }}</td>
        <td>{{ $ele->lieu }}</td>
        <td>{{ $ele->date }}</td>
        <td>{{ $ele->details }}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>

<div class="card ">
  <div class="card-body">
  <h5 id="section11" class="main-subtitle text-dark mb-3 "><i class="fa-solid fa-list"></i> LISTE DES CONTACTS</h5>
    <table id="example1" class="display responsive nowrap table table-striped " width="100%">
      <thead style="background-color: #ea580c;">
      <tr class="">
        <th>Numéro</th>
        <th>Téléphone</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
      </thead>
      <tbody class="">
      @foreach($contacts as $ele)
      <tr>
        <th scope="row">{{ $loop->index+1}}</th>
        <td>{{ $ele->telephone }}</td>
        <td>{{ $ele->email }}</td>
        <td>{{ $ele->message }}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>
</div>
</div>

@endsection