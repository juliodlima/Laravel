<h3>Essa é a view Index</h3>

@foreach ($contatos as $contato)
    <p>Nome: {{ $contato->nome }}</p>
    <p>Telefone: {{ $contato->tel }}</p>
    
@endforeach
