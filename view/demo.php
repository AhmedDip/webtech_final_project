<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <style>
      .comment {
        width: 40%;
        height: 100px;
        padding: 10px;
        background-color: bisque;
      }
    </style>
  </head>
  <body>
    <form action="demo.json" method="POST">
      <textarea class="comment">Type your comment here.</textarea>
      <br>
      <input type="submit" name="submit" value="Send">
    </form>
  </body>
</html>