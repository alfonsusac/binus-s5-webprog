<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\AlbumStatistic;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Session8Controller extends Controller
{
    public function album_insert(Request $r){

        $validator = Validator::make($r->all(), [
            'title' => 'filled',
            'genre' => 'filled',
            'year' => 'filled|integer']);
        if($validator->fails()){return back()->withErrors($validator)->withInput();}

        $album = new Album();
        $album->title = $r->title;
        $album->genre = $r->genre;
        $album->year = $r->year;
        $album->save();

        $stats = new AlbumStatistic();
        $stats->album_id = $album->id;
        $stats->have = $r->have;
        $stats->want = $r->want;
        $stats->rating = $r->rating;
        $stats->ratings = $r->ratings;
        $stats->save();
        return redirect()->back();

    }
    public function album_update(Request $r){

        $validator = Validator::make($r->all(), [
            'title' => 'filled',
            'genre' => 'filled',
            'year' => 'filled|integer']);
        if($validator->fails()){return back()->withErrors($validator)->withInput();}

        $album = Album::find($r->id);
        $album->title = $r->title;
        $album->genre = $r->genre;
        $album->year = $r->year;
        $album->save();
        return redirect()->back();

    }
    public function song_delete(Request $r){

        $song = Song::find($r->id);
        $song->delete();
        return redirect()->back();

    }
    public function song_insert(Request $r){

        $validator = Validator::make($r->all(), [
            'name' => 'filled',
            'author' => 'filled']);
        if($validator->fails()){return back()->withErrors($validator)->withInput();}

        $song = new Song();
        $song->title = $r->name;
        $song->author = $r->author;
        $song->album_id = $r->id;
        $song->save();
        return redirect()->back();

    }
    public function stats_update(Request $r){

        $validator = Validator::make($r->all(), [
            'have' => 'filled|integer|min:0',
            'want' => 'filled|integer|min:0',
            'rating' => 'filled|numeric|max:5',
            'ratings' => 'filled|integer|min:0']);
        if($validator->fails()){return back()->withErrors($validator)->withInput();}

        $stats = AlbumStatistic::find($r->id);
        $stats->have = $r->have;
        $stats->want = $r->want;
        $stats->rating = $r->rating;
        $stats->ratings = $r->ratings;
        $stats->save();
        return redirect()->back();

    }
    public function album_delete(Request $r){

        $album = Album::find($r->id);
        foreach ($album->song as $song) {
            $song->delete();
        }
        $album->stat->delete();
        $album->delete();

        return redirect()->back();

    }

}
