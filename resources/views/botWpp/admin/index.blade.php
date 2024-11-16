@extends('components.layout')
@section('content')

    <navbar-component></navbar-component>
                          <!-- FIM HEADER -->
<h1>Tela do admin</h1>
@endsection

<script>
    function deslogar() {
    fetch('/logout')
        .then(response => response.json())
        .then(data => alert(data.message))
        .catch(error => console.error('Erro:', error));
}
</script>
