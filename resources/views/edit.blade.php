@extends('default')

@section('content')
    <h1>edit page</h1>
    <form method="post" action="/hotels/{{$res->id}}">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <label>Manager id</label>
        <input type="number" name="manager_id" value="{{$res->manager_id}}">
        <br>
        <label>Stars</label>
        <input type="number" name="stars" value="{{$res->stars}}">
        <br>
        <label>Name</label>
        <input type="text" name="name" value="{{$res->name}}">
        <br>
        <label>city id</label>
        <input type="number" name="city_id" value="{{$res->city_id}}">
        <br>
        <input type="submit" name="submit">

    </form>
    <br>
    <form method="post" action="/hotels/{{$res->id}}">
        {{csrf_field()}}
        {{ method_field('DELETE') }}
        <input type="submit" name="delete" value="delete">
    </form>
@endsection