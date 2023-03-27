

@include('users.header', ['page' => ''])

<div class="d-flex justify-content-between">
<br/>
<h2>Editar Usuário: {{$user->name}}</h2>

    <div>
    <a class="btn btn-success m-2" href="{{ URL::route('list')}}">Voltar</a>
    </div>
</div>
<br/>
<br/>
<form action="{{ route('user.update', ['id'=>$user->id]) }}" method="POST">



    @csrf


        <label>
            Nome:
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$user->name}}" >

            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <br/>
        <br/>

        <label>
            Email:
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  value={{$user->email}}>
            @error('email')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <br/>
        <br/>

        <label>
            Sobre:
            <textarea  name="sobre" class="form-control @error('sobre') is-invalid @enderror" >{{$user->sobre}}</textarea>
            @error('sobre')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>


        <br/>
        <br/>


        <label>
            Senha:
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value={{old('password')}}>
            @error('password')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <br/>
        <br/>

        <button type="submit">Cadastrar</button>
</form>
