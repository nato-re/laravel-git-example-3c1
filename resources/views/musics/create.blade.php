<div>

    <form action="{{ route('musics.store') }}" method="post">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <label for="album">album</label>
        <input type="text" name="album" id="album">
        <label for="duration">duration</label>
        <input type="text" name="duration" id="duration">
        <label for="artist">artist</label>
        <input type="text" name="artist" id="artist">
        <button type="submit">Enviar</button>
    </form>
</div>