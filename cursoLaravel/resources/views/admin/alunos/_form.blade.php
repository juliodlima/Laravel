<div class="input-field">
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" name="tel" value="{{isset($registro->tel) ? $registro->tel : ''}}">
    <label>Telefone</label>
</div>

<div class="input-field">
    <input type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}">
    <label>Email</label>
</div>

<div class="input-field">
    <input type="date" name="data_nascimento" value="{{isset($registro->data_nascimento) ? $registro->data_nascimento : ''}}">
    <label>Data de Nascimento</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Foto</span>
        <input type="file" name="foto">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if (isset($registro->foto))
    <div class="input-field">
        <img width="150" src="{{asset($registro->foto)}}" >
    </div>
@endif


<div class="input-field">
    <p>
        <label>
            <input name="sexo" type="radio" {{isset($registro->sexo) && $registro->sexo == 'masculino' ? 'checked' : ''}} value="masculino" />
            <span>Masculino</span>
        </label>
    </p>
    <p>
        <label>
            <input name="sexo" type="radio" {{isset($registro->sexo) && $registro->sexo == 'feminino' ? 'checked' : ''}} value="feminino" />
            <span>Feminino</span>
        </label>
    </p>
    <br><br>
</div>