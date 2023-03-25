<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class='container-sm'>
<h1>Usuários</h1>

<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link @if($page=='list') active @endif" href="{{ URL::route('list') }}">Usuários</a>
    </li>
    <li class="nav-item">
      <a class="nav-link @if($page=='sobre') active @endif" href="{{ URL::route('sobre') }}">Sobre</a>
    </li>

  </ul>
