<div>
    <p>{{ $music->name }}</p>    
<p>{{ $music->album }}</p>
<p>{{ $music->duration }}</p>
<p>{{ $music->artist }}</p>
</div>

<a href="{{ route('musics.index') }}">Voltar</a>