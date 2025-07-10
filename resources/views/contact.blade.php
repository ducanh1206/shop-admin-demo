<form method="POST" action="contact">
    @csrf
    <input type="text" name="name" placeholder="Your name">
    <button type="submit">Send</button>
</form>