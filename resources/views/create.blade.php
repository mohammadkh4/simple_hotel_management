@extends('default')

@section('content')
    <h1>create page</h1>
    <form method="post" action="/hotels">
        {{csrf_field()}}
        <label>Manager id</label>
        <input type="number" name="manager_id">
        <br>
        <label>Stars</label>
        <input type="number" name="stars">
        <br>
        <label>Name</label>
        <input type="text" name="name">
        <br>
        <label>city id</label>
        <input type="number" name="city_id">
        <br>
        <input type="submit" name="submit">

    </form>

    <a href="/hotels">index</a>


@endsection