<!doctype html>

<html>

<head>
    <title>Form</title>


</head>

<body>

<form action="{{ url('register') }}" method="post">

    {{ csrf_field() }}

    <div>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" />
    </div>

    <div>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" />
    </div>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" />
    </div>

    <div>
        <input type="submit" value="submit" />
    </div>

</form>

</body>

</html>