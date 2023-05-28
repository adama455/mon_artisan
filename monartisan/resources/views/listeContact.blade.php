@extends('base')
@section('content')
<div class="">
  <h5 id="section11" class="main-subtitle text-dark mb-3 "><i class="fa-solid fa-list"></i> LISTE DES CONTACTS</h5>
  <div class="header d-flex justify-content-between my-2">
    {{ $contacts->links() }}
    <div class=""><a href="{{ route('contact.create') }}" class="btn btn-success sm ">Contacter nous !</a></div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Téléphone</th>
        <th scope="col">Email<th>
        <th scope="col">Message</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody class="table-group-divider">
      @foreach($contacts as $ele)
      <tr>
        <th scope="row">{{ $loop->index+1}}</th>
        <td>{{ $ele->telephone }}</td>
        <td>{{ $ele->email }}</td>
        <td>{{ $ele->message }}</td>
        <td class="d-flex">
          <a href="{{ route('contact.edit', $ele ->id)}}" class="btn" title="modifier"><i class="fa-solid fa-pen-to-square text-info"></i></a>

          <form action="{{  route('contact.suprimer', $ele->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn " type="submit"><i class="fa-solid fa-trash text-danger"></i></button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </table>
</div>
@endsection