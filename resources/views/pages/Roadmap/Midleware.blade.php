@extends('layout.master')
@section('content')
<nav class="container mt-3">
        <h1>Midleware ?</h1>
        <h3>Basic Midleware</h3>
        <p>The most basic Laravel routes accept a URI and a closure, providing a very simple and expressive method of defining routes and behavior without complicated routing configuration files:</p>

        <h3>The Default Route Files</h3>
        <p>All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by Laravel using the configuration specified in your application's bootstrap/app.php file. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection.

For most applications, you will begin by defining routes in your routes/web.php file. The routes defined in routes/web.php may be accessed by entering the defined route's URL in your browser. For example, you may access the following route by navigating to http://example.com/user in your browser:</p>
    
@endsection
    