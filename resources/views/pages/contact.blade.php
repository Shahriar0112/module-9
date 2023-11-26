@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <h1>Contact Me</h1>
    

    <form action="/contact" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
@endsection
