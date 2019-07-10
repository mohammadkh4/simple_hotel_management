@extends('default')

@section('content')

    @foreach($res as $hotel)
        <dl>
            <a href="{{route('hotels.edit',$hotel->id)}}">id : {{$hotel->id}}</a>
            <dd>name : {{$hotel->name}}</dd>
            <dd>stars : {{$hotel->stars}}</dd>
            <dd>Manager ID : {{$hotel->manager_id}}</dd>
            <dd>City ID : {{$hotel->city_id}}</dd>
            @if(isset($hotel->city) && isset($hotel->city->name))
            <dd>City Name : {{$hotel->city->name}}</dd>
            @endif
        </dl>
    @endforeach

    <a href="/hotels/create">Create</a>

@endsection