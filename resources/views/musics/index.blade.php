<div>
    @if (session('success'))
        {{ session('success') }}
    @endif
Minha Lista de Musicas
<a href="{{ route('musics.create') }}">Criar música</a>
@foreach ($musics as $music)
    <p>{{ $music->name }}</p> <a href="{{ route('musics.show', $music) }}">Detalhe</a>
@endforeach

</div>
