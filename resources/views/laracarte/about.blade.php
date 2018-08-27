@extends('layout')

@section('content')
    <div class="container">
        <h2>What is laracarte?</h2>
        <p>Laracarte is clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>


        <div class="row">
            <div class="col-sm-6">
                <p class="alert alert-warning">
                    <strong><i class="fas fa-exclamation-triangle"></i>This app has been build by <a href="https://twitter.com/etsmo">@etsmo</a> for learning purposes.</strong>
                </p>
            </div>
        </div>

        <p>Feel free to help to improve the <a href="#">source code</a>.</p>

        <hr>

        <h2>What is laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a href="https://laramap.com/p/about">here</a>.</p>
        <hr>
        <h2>Which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>

@endsection