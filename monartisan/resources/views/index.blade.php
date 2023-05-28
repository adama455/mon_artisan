@extends('base')
@section('content')
<header class="div-carousel px-5">
  <div class="w-100">
    <h3 class="fw-bold py-5">Choisissez la solution dépannage qui vous convient !</h3>
    <p class="my-4"> Anticiper le moindre problème avec notre garantie AID :
      <br> Assistance Incidents Domestiques et bénéficier d'une intervention rapide
      <br> et efficace en cas de panne dans votre logement.
    </p>
    <a href="#declaration" class="btn btt rounded border-0 px-5 py-4 text-white ">Déclarer un sinistre</a>
  </div>
</header>
<div class="my-4">
  <p class="mb-3 fs-4 text-center">Vous avez une question ?</p>
  <div class="w-100 d-flex flex-row align-items-center justify-content-center">
    <a href="{{ route('faq') }}" class=" bt btn rounded border-0 px-5 me-2 py-4 text-lg text-white btn-primary "> Consulter notre FAQ</a>
    <a href="#contact" class=" bt btn rounded border-0 px-5 py-4 text-lg text-white btn-success "> Formulaire de contact</a>
  </div>
</div>
<div class="w-100 d-block bg-body-secondary" id="declaration" style="padding: 2rem;">
  <div class="my-3 p-3 w-50 mx-auto ">
    <div class="table-responsive">
      @if(session()->has("success"))
      <div class="alert alert-success">
        <h4>{{ session()->get('success') }}</h4>
      </div>
      @endif
      @if(session()->has("successDelete"))
      <div class="alert alert-success">
        <h4>{{ session()->get('successDelete') }}</h4>
      </div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action=" {{ route('sinistre.ajouter') }} " method="post">
        @csrf
        <table class="table  mb-0 ">
          <thead>
            <h3 class="border-bottom pb-2 mb-4">Déclarer un sinistre</h3>
          </thead>
          <tbody>
            <tr>
              <td style='border: none;'>
                <libel for="assurance">Assurance</libel>
                <select name="assurance" id="assurance" class="form-control" placeholder="Assurance" required>
                  <option value="Assurance1">Assurance1</option>
                  <option value="Assurance2">Assurance2</option>
                  <option value="Assurance3">Assurance3</option>
                  <option value="Assurance4">Assurance4</option>
                  <option value="Assurance5">Assurance5</option>
                </select>
              </td>
              <td style='border: none;'>
                <libel for="numero_police">Numéro police</libel>
                <input type="text" name="numero_police" id="police" class="form-control" placeholder="33 *******" required>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='border: none;'>
                <libel for="nom_complet">Nom et prénom</libel>
                <input type="text" name="nom_complet" class="form-control" placeholder="John Doe" required>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='border: none;'>
                <libel for="email">Email</libel>
                <input type="text" name="email" class="form-control" placeholder="exemple@gmail.com" required>
              </td>
            </tr>
            <tr>
              <td style='border: none;'>
                <libel for="contact1">Contact 1</libel>
                <input type="text" name="contact1" id="contact1" class="form-control" placeholder="76 *******" required>
              </td>
              <td style='border: none;'>
                <libel for="contact2">Contact 2</libel>
                <input type="text" name="contact2" id="contact2" class="form-control" placeholder="77 *******" required>
              </td>
            </tr>
            <tr>
              <td style='border: none;'>
                <libel for="lieu">Lieu</libel>
                <input type="text" name="lieu" id="lieu" class="form-control" placeholder="Lieu" required>
              </td>
              <td style='border: none;'>
                <libel for="nature">Nature de l' intervation</libel>
                <select name="nature" id="nature" class="form-control" placeholder="Nature" required>
                  <option value="Nature1">Nature1</option>
                  <option value="Nature2">Nature2</option>
                  <option value="Nature3">Nature3</option>
                  <option value="Nature4">Nature4</option>
                  <option value="Nature5">Nature5</option>
                </select>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='border: none;'>
                <libel for="date">Date</libel>
                <input type="date" name="date" id="date" class="form-control" required>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='border: none;'>
                <libel for="detail">Détails</libel>
                <textarea name="details" rows="4" id="detail" class="form-control" placeholder="détails"></textarea>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="">
          <button type="submit" class=" btn btn-primary sm mx-2">Déclarer</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="w-50 mx-auto ">
  <div class="d-flex flex-column text-center w-full mb-2 my-5">
    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-secondary">Contactez-nous</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Nous traiterons votre demande et nous vous reviendrons soit par mail ou directement par appel.</p>
  </div>
  <div class="my-3 p-3 mx-auto" id="contact">
    <div class="table-responsive">
    @if(session()->has("successContact"))
      <div class="alert alert-success">
        <h4>{{ session()->get('successContact') }}</h4>
      </div>
      @endif
      @if(session()->has("successDelete"))
      <div class="alert alert-success">
        <h4>{{ session()->get('successDelete') }}</h4>
      </div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action=" {{ route('contact.ajouter') }} " method="post">
        @csrf
        <table class="table  mb-0 ">
          <tbody>
            <tr>
              <td style='border: none;'>
                <libel for="telephone">Téléphone</libel>
                <input type="telephone" name="telephone" id="lieu" class="form-control" placeholder="telephone" required>
              </td>
              <td style='border: none;'>
                <libel for="email">Email</libel>
                <input type="text" name="email" id="email" class="form-control" placeholder="exemple@gmail.com" required>
              </td>
            </tr>
            <tr>
              <td colspan="2" style='border: none;'>
                <libel for="message">Message</libel>
                <textarea name="message" rows="4" id="message" class="form-control" placeholder="Message" required></textarea>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="text-center">
          <button type="submit" class="btn btn-primary sm mx-auto">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection