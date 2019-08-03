
<div class=" select input-field col s12">
    <select name="id_aluno" value="{{isset($registro->id_aluno) ? $registro->id_aluno : ''}}">
        <option value="" disabled selected>Escolha um Aluno</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
    <label>Aluno</label>
</div>

<div class="input-field col s12">
    <select name="id_curso" value="{{isset($registro->id_curso) ? $registro->id_curso : ''}}">
        <option value="" disabled selected>Escolha um Curso</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
    </select>
    <label>Curso</label>
</div>

<div class="input-field">
    <input type="date" name="data_matricula" value="{{isset($registro->data_matricula) ? $registro->data_matricula : ''}}">
    <label>Data da Matrícula</label>
</div>

