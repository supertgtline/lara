<form method="POST" action="/users">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  User name:<br>
  <input type="text" name="name">
  <br>
  Your Email:<br>
  <input type="Email" name="email">
  <br>
  Password:<br>
  <input type="password" name="password">
  <br>
  <br><br>
  <input type="submit" value="Create">
</form> 