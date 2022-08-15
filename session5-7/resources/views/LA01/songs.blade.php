<body style="font-family:sans-serif;background-color: rgb(239, 241, 252);">
<div style="margin-top:100px;"><h1 style="color:rgb(134, 108, 206); text-align: center; font-size: 5em">Song List</h1></div>

@forelse ($errors->all() as $err)
    <div style="width=100%; background-color: rgb(233, 77, 77) ;text-align:center;color:white;padding:8px;margin:4px;border-radius:10px;">
        {{$err}}
    </div>
@empty
    <div style="width=100%; background-color: rgb(134, 108, 206) ;text-align:center;color:white;padding:8px;margin:4px;border-radius:10px;">
        There are no errors.
    </div>
@endforelse

<div style="display:flex;justify-content:center;">
    <div style="border-radius:20px; color:rgb(134, 108, 206); background-color: rgb(239, 241, 252);padding:30px;margin:20px;width:250px;height:100%">
        <form action="/albums/insert" method="post" style="display:flex; flex-direction:column">
            @csrf
            @method('POST')
            <input type="text" name="title" id="" placeholder="Name" style="border:none;padding:10px;border-radius:10px;font-size:1.2em; margin-bottom:10px;" >
            <input type="text" name="year" id="" placeholder="Year" style="border:none;padding:10px;border-radius:10px;" >
            <input type="text" name="genre" id="" placeholder="Genre" style="border:none;padding:10px;border-radius:10px;" >
            <h3>Statistics</h3>
            <div style="display:flex; flex-direction: row; justify-content:space-between">
                <div style="display:flex; flex-direction: column; width:50%;margin-right:5px;">
                    <div> Have: <input type="text" name="have" id="" value="0" style="margin-bottom:5px;border:none;padding:6px;border-radius:10px;width:100%;font-size:0.8em;" ></div>
                    <div> Want: <input type="text" name="want" id="" value="0" style="margin-bottom:5px;border:none;padding:6px;border-radius:10px;width:100%;font-size:0.8em;" ></div>
                </div>
                <div style="display:flex; flex-direction: column; width:50%;margin-left:5px;">
                    <div> Rating: <input type="text" name="rating" id="" value="0" style="margin-bottom:5px;border:none;padding:6px;border-radius:10px;width:100%;font-size:0.8em;" ></div>
                    <div> Ratings: <input type="text" name="ratings" id="" value="0" style="margin-bottom:5px;border:none;padding:6px;border-radius:10px;width:100%;font-size:0.8em;" ></div>
                </div>
            </div>
            <button type="submit" style="background-color:inherit;border-radius:10px; padding:8px; margin-top: 20px;font-weight:bold;outline: inherit;	border:rgb(134, 108, 206) solid 4px;color:rgb(134, 108, 206);font-size:1em">➕ Insert</button>
        </form>
    </div>
    @foreach ($albums as $album)
        <div style="border-radius:20px; color:rgb(53, 53, 53); background-color: rgb(255, 255, 255);padding:30px;margin:20px;width:250px;height:100%">
            <form action="/albums/update/{{$album->id}}" method="post" style="margin:0">
                @csrf
                @method('PUT')
                <h2><input type="text" name="title" id="" value="{{$album->title}}" style="font-size:1.1em;font-weight:bold;color:inherit;width:100%;padding:0;border:none;margin:0;"></h2>
                <div><input type="text" name="year" id="" value="{{$album->year}}" style="font-size:1em;font-weight:bold;color:inherit;width:100%;padding:0;border:none;margin:0;"></div>
                <div><input type="text" name="genre" id="" value="{{$album->genre}}" style="font-size:1em;font-weight:inherit;color:inherit;width:100%;padding:0;border:none;margin:0;"></div>
                <button type="submit" style="text-align: right; width: 100%;background-color:inherit;border-radius:10px; font-weight:bolder;outline: inherit; border:none;color:rgb(134, 108, 206);font-size:0.9em;margin-top:5px;"></button>
            </form>
            <hr>
            <div style="margin:20px 0;">
                @foreach ($album->song as $song)
                    <div style="color:white; border-radius:15px; background-color: rgb(134, 108, 206);padding:20px;margin-bottom:10px;">
                        <b>{{$song->title}}</b> by {{$song->author}}
                        <form action="/songs/delete/{{$song->id}}" method="post" style="margin:0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="text-align: left; width: 100%;background-color:inherit;border-radius:10px; font-weight:bolder;outline: inherit; border:none;color:white;font-size:0.9em;margin-top:5px;">✖ Delete</button>
                        </form>
                    </div>
                @endforeach
                <div style="color:white; border-radius:15px; background-color: rgb(134, 108, 206); padding:16px;border:rgb(134, 108, 206) solid 4px;">
                    <form action="/songs/insert/{{$album->id}}" method="post" style="margin:0;">
                        @csrf
                        <input type="text" name="name" id="" placeholder="Song Name" style="margin-bottom:5px;border:none;padding:6px;border-radius:10px;width:100%;font-size:0.8em;" >
                        <input type="text" name="author" id="" placeholder="Author" style="margin-bottom:5px;border:none;padding:6px;border-radius:10px;width:100%;font-size:0.8em;background-color:" >
                        <button type="submit" style="text-align: left; width: 100%;background-color:inherit;border-radius:10px; font-weight:bolder;outline: inherit; border:none;color:white;font-size:0.9em;"></button>
                    </form>
                </div>
            </div>
            <hr>
            <h3>Statistics</h3>
            <form action="/statistics/update/{{$album->stat->id}}" method="post" style="margin:0;">
                <div style="display:flex; flex-direction: row; justify-content:space-between">
                    @csrf
                    @method('PUT')
                    <div style="display:flex; flex-direction: column; width:50%;">
                        <div style="display:flex;"><div> Have: </div><b><input type="text" name="have" id="" value="{{ $album->stat->have }}" style="font-size:1em;font-weight:inherit;color:inherit;width:100%;padding:0;border:none;margin:0;"></b></div>
                        <div style="display:flex;"><div> Want: </div><b><input type="text" name="want" id="" value="{{ $album->stat->want }}" style="font-size:1em;font-weight:inherit;color:inherit;width:100%;padding:0;border:none;margin:0;"></b></div>
                    </div>
                    <div style="display:flex; flex-direction: column; width:50%;">
                        <div style="display:flex;"><div> Rating: </div><b><input type="text" name="rating" id="" value="{{ $album->stat->rating }}" style="font-size:1em;font-weight:inherit;color:inherit;width:100%;padding:0;border:none;margin:0;"></b></div>
                        <div style="display:flex;"><div> Ratings:</div><b><input type="text" name="ratings" id="" value="{{ $album->stat->ratings }}" style="font-size:1em;font-weight:inherit;color:inherit;width:100%;padding:0;border:none;margin:0;"></b></div>
                    </div>
                </div>
                <button type="submit" style="text-align: left; width: 100%;background-color:inherit;border-radius:10px; font-weight:bolder;outline: inherit; border:none;color:rgb(134, 108, 206);font-size:0.9em;margin-top:5px;"></button>
            </form>
            <form action="/albums/delete/{{ $album->id }}" method="post" style="margin:0;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background-color:inherit;border-radius:10px; padding:8px; margin-top: 20px;font-weight:bold;outline: inherit;	border:rgb(134, 108, 206) solid 4px;color:rgb(134, 108, 206);font-size:1em">✖ Delete</button>
            </form>
        </div>
    @endforeach
</div>
</body>
