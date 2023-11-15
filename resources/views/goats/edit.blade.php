@extends('layout')
@section('main')
    <h1>Edit a goat</h1>
    <form action="/goats/{{ $goat->id }}" method="post">
        @csrf
        @method('PATCH')
        <label for="nom">Nom :</label>
        <input type="text" id="name" name="name" value='{{$goat->name}}' required><br><br>
        <label for="prix">Prix :</label>
        <input type="number" id="price" name="price" step="0.01" value='{{$goat->price}}'required><br><br>
        <label for="birthday">Birthday :</label>
        <input type="date" id="birthday" name="birthday" value='{{$goat->birthday}}'required><br><br>
        <label for="birthday">Color :</label>
        <input type="text" id="color" name="color" value='{{$goat->color}}'required><br><br>
        <label for="birthday">Sex :</label>
        <input type="checkbox" id="sex" name="sex" value='{{$goat->sex}}'required><br><br>



        <input type="submit" value="Soumettre">
    </form>
    @endsection
