<!DOCTYPE html>
<html>
<body>
  <!DOCTYPE html>
  <html>
  <body>

    <form action="{{ route('nomeDaRota') }}" enctype="multipart/form-data" method="POST">
      {{ csrf_field() }}
    First name:<br>
    <input type="text" name="firstname" value="Mickey">
    <br>
    Last name:<br>
    <input type="text" name="lastname" value="Mouse">
    <br>
    Idade:<br>
    <input type="text" name="age" value="15">
    Nacionalidade:<br>
    <input type="text" name="nacionalidade" value="American">
    <br><br>
    <input type="submit" value="Submit">
  </form>

  <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

  </body>
  </html>

</body>
</html>
