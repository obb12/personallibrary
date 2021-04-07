<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
      <div id="app">
<header>
  <h1>Personal Library</h1>
</header>
<br>
<div id ='sampleposting'>
  <h2 style="text-align: left">Test API responses</h2>
  <form action="/api/books" method="post" class="border">
    <h4>Test post to /api/books</h4>
    <label for="title" >Book Title</label>
    <input type="text" id="title" name="title" value=""><br>
    <input type="submit" value="Submit">
  </form>
  <form-component></form-component>
</div>
<hr style='margin: 50px'>
  <library-component></library-component>
<script src="js/app.js" charset="utf-8"></script>

    </body>
</html>
