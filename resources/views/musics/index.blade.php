<div>
    @if (session('success'))
        {{ session('success') }}
    @endif
Minha Lista de Musicas
<a href="{{ route('musics.create') }}">Criar música</a>
@foreach ($musics as $music)
    <p>{{ $music->name }}</p> <a href="{{ route('musics.show', $music) }}">Detalhe</a>
    <a href="{{ route('musics.edit', $music) }}">Editar</a>
    <form action="{{ route('musics.destroy', $music) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">X</button>
    </form>
@endforeach

</div>
