<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
    <link rel="stylesheet" href="{{ @asset('css/style2.css') }}">
</head>
<body>
    <form action="{{ route('addUser') }}" method="post">
        @csrf
        <table>
                <tr>
                <th colspan="4">User Registration</th>
            </tr>
            <tr>
                <td>Name: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="useremail"></td>
            </tr>
            <tr>
                <td>Age: </td>
                <td><input type="text" name="age"></td>
            </tr>
            <tr>
                <td>City: </td>
                <td><input type="text" name="city"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="submit"></td>
            </tr>
        </table>
        
    </form>
</body>
</html>