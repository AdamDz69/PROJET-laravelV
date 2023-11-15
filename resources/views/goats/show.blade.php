@extends('layout')
@section('main')
    <h1>Just one goat</h1>
    <ul>
        <li>
            {{ $goat->id}}
        </li>
        <li>
            {{ $goat->name}}
        </li>
        <li>
            {{ $goat->price}}
        </li>
        <li>
            {{ $goat->sex}}
        </li>
        <li>
            {{ $goat->birthday}}
        </li>
        <li>
            {{ $goat->color}}
        </li>
    </ul>
    @endsection
