<form method="post" action="/home">
    <input type="text" name="id" placeholder="id">
    <input type="text" name="name" placeholder="name">
    <!-- <input type="hidden" name="_method" value="POST"> -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit">
</form>
