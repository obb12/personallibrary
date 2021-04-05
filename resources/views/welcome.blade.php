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
  <form action="" method="post" id="commentTest" class="border">
    <h4>Test post to /api/books/{bookid}</h4>
    <label for="idinputtest">BookId to comment on</label>
    <input type="text" name="id" value="" id="idinputtest"><br>
    <label for="comment">Comment</label>
    <input type="text" id="comment" name="comment" value=""><br>
    <input type="submit" value="Submit">
  </form>
</div>
<hr style='margin: 50px'>
<div id='sampleui'>
  <h2 style="text-align: left">Sample Front-End</h2>
  <form id="newBookForm" class="border">
    <label for="bookTitleToAdd">New Book Title</label>
    <input type="text" id="bookTitleToAdd" name="title" placeholder="Moby Dick" style="width: 295px">
    <button type="submit" value="Submit" id="newBook">Submit New Book!</button>
  </form>
  <div id='display'></div>
  <div id='bookDetail' class='border'>
    <p id='detailTitle'>Select a book to see it's details and comments</p>
    <ol id='detailComments'></ol>
  </div>
  <button id='deleteAllBooks'>Delete all books...</button>
</div>
    </body>
</html>
