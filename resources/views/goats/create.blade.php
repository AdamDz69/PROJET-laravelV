@extends('layout')
@section('main')
    <h1>Add a goat</h1>
    <form action="/goats" method="post">
        @csrf
        <label for="nom">Nom :</label>
        <input type="text" id="name" name="name" required><br><br>
        @error('name')
            <p class="text-red-500-ss">{{$message}}</p>
        @enderror
        <label for="prix">Prix :</label>
        <input type="number" id="price" name="price" step="0.01" required><br><br>
        <label for="birthday">Birthday :</label>
        <input type="date" id="birthday" name="birthday" required><br><br>
        <label for="birthday">Color :</label>
        <input type="text" id="color" name="color" required><br><br>
        <label for="birthday">Sex :</label>
        <input type="checkbox" id="sex" name="sex" required><br><br>
        <input type="submit" value="Soumettre">
    </form>
@endsection
