<div>

    <form action="{{ route('musics.update', $music) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">name
            @error('name')
                <span style='color:red'>{{ $message }} </span>
            @enderror

            <input type="text" name="name" id="name" value="{{ old('name') ?? $music->name }}" />
        </label>
        <label for="album">album
            @error('album')
                <span style='color:red'>{{ $message }} </span>
            @enderror 

            <input type="text" name="album" value="{{ old('album') ?? $music->album }}" id="album" />
        </label>
        <label for="duration">duration
            @error('duration')
                <span style='color:red'>{{ $message }} </span>
            @enderror

            <input type="text" name="duration" value="{{ old('duration') ?? $music->duration }}" id="duration">
        </label>
        <label for="artist">artist
            @error('artist')
                <span style='color:red'>{{ $message }} </span>
            @enderror
            <input type="text" name="artist" value="{{ old('artist') ?? $music->artist }}" id="artist" />
        </label>
        <button type="submit">Atualizar</button>
    </form>
</div>
