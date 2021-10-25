<h1>Save Dtata</h1>

<form action="home" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter your name">
    <input type="text" name="email" placeholder="enter your email">
    <input type="text" name="phone" placeholder="enter your phone">
    <button type="submit">Submit</button>
</form>
