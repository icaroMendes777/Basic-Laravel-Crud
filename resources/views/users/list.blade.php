

@include('users.header', ['page' => 'list'])


<h3 class="m-4 text-info">Total: {{$total}}</h3>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Email</th>
        <th scope="col">Detalhes</th>
        <th scope="col">Deletar</th>
      </tr>
    </thead>
    <tbody>

    @foreach($users as $u)
        <tr>
            <th scope="row">{{$u->id}}</th>
            <td>{{$u->name}}</td>
            <td>{{$u->email}}</td>
            <td><a href="{{ URL::route('user', $u->id) }}" class="btn btn-primary">Ver</a></td>
            <td><a href="{{ URL::route('user.delete', $u->id) }}" class="btn btn-danger">Deletar</a></td>
        </tr>
    @endforeach

    </tbody>
  </table>


  @include('users.footer')

</div>
