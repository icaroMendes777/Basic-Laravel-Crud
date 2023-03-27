

@include('users.header', ['page' => ''])


<br/>
<h2>Cadastro de novo usuário</h2>
<br/>

<br/>
<br/>
<form action="{{ route('user.store') }}" method="POST">



    @csrf


        <label>
            Nome:
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value={{old('name')}} >


            @error('name')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <br/>
        <br/>

        <label>
            Email:
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  value={{old('email')}}>
            @error('email')
                <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </label>

        <br/>
        <br/>

        <label>
            Sobre:
            <textarea  name="sobre" class="form-control @error('sobre') is-invalid @enderror" value={{old('sobre')}}></textarea>
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
