<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">




<div class="container p-3">

<a class="btn btn-success m-2" href="{{ URL::route('list')}}">Voltar</a>


<div class="card m-2" style="width: 30rem;">
    <div class="card-body">
      <h5 class="card-title">{{$user->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$user->email}}</h6>
      <p class="card-text">{{$user->sobre}}</p>
    </div>
  </div>
</div>
