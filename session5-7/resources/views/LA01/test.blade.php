<body >
    <div ><h1 >Song List</h1></div>
    @if($errors->any())
        @foreach ($errors->all() as $err)
        <div >
            {{$err}}
        </div>
        @endforeach
    @endif
    <div >
        <div >
            <form action="/albums/insert" method="post" >
                @csrf
                @method('POST')
                <input type="text" name="title" id="" placeholder="Name"  >
                <input type="text" name="year" id="" placeholder="Year"  >
                <input type="text" name="genre" id="" placeholder="Genre"  >
                <h3>Statistics</h3>
                <div >
                    <div >
                        <div> Have: <input type="text" name="have" id="" value="0"  ></div>
                        <div> Want: <input type="text" name="want" id="" value="0"  ></div>
                    </div>
                    <div >
                        <div> Rating: <input type="text" name="rating" id="" value="0"  ></div>
                        <div> Ratings: <input type="text" name="ratings" id="" value="0"  ></div>
                    </div>
                </div>
                <button type="submit" >➕ Insert</button>
            </form>
        </div>
        @foreach ($albums as $album)
            <div >
                <form action="/albums/update/{{$album->id}}" method="post" >
                    @csrf
                    @method('PUT')
                    <h2><input type="text" name="title" id="" value="{{$album->title}}" ></h2>
                    <div><input type="text" name="year" id="" value="{{$album->year}}" ></div>
                    <div><input type="text" name="genre" id="" value="{{$album->genre}}" ></div>
                    <button type="submit" ></button>
                </form>
                <hr>
                <div >
                    @foreach ($album->song as $song)
                        <div >
                            <b>{{$song->title}}</b> by {{$song->author}}
                            <form action="/songs/delete/{{$song->id}}" method="post" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" >✖ Delete</button>
                            </form>
                        </div>
                    @endforeach
                    <div >
                        <form action="/songs/insert/{{$album->id}}" method="post" >
                            @csrf
                            <input type="text" name="name" id="" placeholder="Song Name"  >
                            <input type="text" name="author" id="" placeholder="Author"  >
                            <button type="submit" ></button>
                        </form>
                    </div>
                </div>
                <hr>
                <h3>Statistics</h3>
                <form action="/statistics/update/{{$album->stat->id}}" method="post" >
                    <div >
                        @csrf
                        @method('PUT')
                        <div >
                            <div ><div> Have: </div><b><input type="text" name="have" id="" value="{{ $album->stat->have }}" ></b></div>
                            <div ><div> Want: </div><b><input type="text" name="want" id="" value="{{ $album->stat->want }}" ></b></div>
                        </div>
                        <div >
                            <div ><div> Rating: </div><b><input type="text" name="rating" id="" value="{{ $album->stat->rating }}" ></b></div>
                            <div ><div> Ratings:</div><b><input type="text" name="ratings" id="" value="{{ $album->stat->ratings }}" ></b></div>
                        </div>
                    </div>
                    <button type="submit" ></button>
                </form>
                <form action="/albums/delete/{{ $album->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" >✖ Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    </body>
