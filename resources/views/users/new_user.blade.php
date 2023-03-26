

@include('users.header', ['page' => ''])


<br/>
<h2>Cadastro de novo usuário</h2>
<br/>

<br/>
<br/>
<form action="{{ route('user.store') }}" method="POST">

    @dd(request()->all())

    @csrf


        <label>
            Nome:
            <input type="text" name="name">
            @error('name')
                <div style="color:red">Insira um nome</div>
            @enderror
        </label>

        <br/>
        <br/>

        <label>
            Email:
            <input type="email" name="email">
            @error('email')
                <div style="color:red">Insira um email</div>
            @enderror
        </label>

        <br/>
        <br/>

        <label>
            Sobre:
            <textarea  name="sobre"></textarea>
        </label>


        <br/>
        <br/>


        <label>
            Senha:
            <input type="password" name="password">
            @error('password')
                <div style="color:red">Insira uma senha</div>
            @enderror
        </label>

        <br/>
        <br/>

        <button type="submit">Cadastrar</button>
</form>
