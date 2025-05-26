<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link rel="stylesheet" href="{{ @asset('css/style1.css') }}">
    <style>
        nav .w-5 {
            display: none;
        }
    </style>
</head>

<body>
    <div>
        <div>
            <table border="1" cellspacing='0' width='70%' style="text-align: center">
                <tr>
                    <th colspan="8">Users List</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Action</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
                @foreach ($data as $id=>$user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td><a href="{{ route('view.user',$user->id) }}">
                            <button class="action">View</button></a></td>
                    <td><a href="{{ route('view.del',$user->id) }}">
                            <button class="delete" onclick="return confirm('Are you sure??')">Delete</button></a></td>
                    <td><a href="{{ route('update.page',$user->id) }}">
                            <button class="update">Update</button></a></td>
                </tr>
                @endforeach
                <tr>
                    <th colspan="8"><a href="{{ route('view.addUser')}}">
                            <button class="action">Add User</button></a></th>
                </tr>
            </table>
        </div>

        <div class="pagination-container">
            {{ $data->links() }}
        </div>
    </div>
</body>

</html>