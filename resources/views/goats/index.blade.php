@extends('layout')
@section('main')
<h1 class="text-3xl font-bold underline"> All the goats</h1>
    <table>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nom
            </th>
            <th>
                Prix
            </th>
        </tr>
        @foreach( $goats as $goat)
        <tr>
            <td class='border-2 border-black'>{{ $goat->id}}</td>
            <td class='border-2 border-black'>{{ $goat->name}} </td>
            <td class='border-2 border-black'>{{ $goat->price}}</td>
            <td class='border-2 border-black'>{{ $goat->sex}}</td>
            <td class='border-2 border-black'>{{ $goat->birthday}}</td>
            <td class='border-2 border-black'>{{ $goat->color}}</td>
            <td class='border-2 border-black'><a href="/goats/{{$goat['id']}}">Voir plus d'infos</td>
        </tr>
        @endforeach
    </table>
    @endsection


