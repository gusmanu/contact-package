<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
   <h1>Contact Us Hello</h1>
   <form action="{{route('contact')}}" method="post">
       @csrf
       <label>Name</label>
       <input type="text" name="name">
       <label>Email</label>
       <input type="email" name="email">
       <label>Message</label>
       <input type="text" name="message">
       <button type="submit">Submit</button>
   </form>
</body>
</html>