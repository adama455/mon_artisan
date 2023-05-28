@extends('base')
@section('content')

<div class="my-3 p-3 w-50 mx-auto bg-body rounded shadow-sm">
  <div class="table-responsive">
    <form action=" {{ route('sinistre.modifier', $declaration->id) }} " method="post">
      @csrf
      @method('PATCH')
      <table class="table  mb-0 ">
        <thead>
          <h3 class="border-bottom pb-2 mb-4">Modifier un sinistre</h3>
        </thead>
        <tbody>
          <tr>
            <td style='border: none;'>
              <libel for="assurance">Assurance</libel>
              <input type="text" name="assurance" id="assurance" value="{{ $declaration->assurance }}" class="form-control">
            </td>
            <td style='border: none;'>
              <libel for="numero_police">Numéro police</libel>
              <input type="text" name="numero_police" id="police" value="{{ $declaration->numero_police }}" class="form-control" >
            </td>
          </tr>
          <tr>
            <td colspan="2" style='border: none;'>
              <libel for="nom_complet">Nom et prénom</libel>
              <input type="text" name="nom_complet" value="{{ $declaration->nom_complet }}" class="form-control">
            </td>
          </tr>
          <tr>
            <td colspan="2" style='border: none;'>
              <libel for="email">Email</libel>
              <input type="text" name="email" value="{{ $declaration->email }}" class="form-control">
            </td>
          </tr>
          <tr>
            <td style='border: none;'>
              <libel for="contact1">Contact 1</libel>
              <input type="text" name="contact1" value="{{ $declaration->contact1 }}" id="contact1" class="form-control">
            </td>
            <td style='border: none;'>
              <libel for="contact2">Contact 2</libel>
              <input type="text" name="contact2" value="{{ $declaration->contact2 }}" id="contact2" class="form-control" >
            </td>
          </tr>
          <tr>
            <td style='border: none;'>
              <libel for="lieu">Lieu</libel>
              <input type="text" name="lieu" value="{{ $declaration->lieu }}" id="lieu" class="form-control">
            </td>
            <td style='border: none;'>
              <libel for="nature">Nature</libel>
              <input type="text" name="nature" value="{{ $declaration->nature }}" id="nature" class="form-control" >
            </td>
          </tr>
          <tr>
            <td colspan="2" style='border: none;'>
              <libel for="date">Date</libel>
              <input type="text" name="date" value="{{ $declaration->date }}" id="date" class="form-control">
            </td>
          </tr>
          <tr>
            <td colspan="2" style='border: none;'>
              <libel for="detail">Détails</libel>
              <textarea name="details" id="detail" value="{{ $declaration->details }}" class="form-control" placeholder="pourquoi 1_2"></textarea>
            </td>
          </tr>
        </tbody>
      </table>
      <button type="submit" class="btn btn-info sm my-3">Déclarer</button>
      <a href=" {{ route('liste') }} " type="submit" class="btn btn-danger sm my-3">Anuller</a>
    </form>
  </div>
</div>

@endsection