<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account getAll</title>
</head>
<body>
    <h1>Account-getAll</h1>
    <hr/>
    <table border="1px", cellspacing="0", cellpadding="5">
        <thead>
            <tr>
                <th>#</th>
                <th>UserName</th>
                <th>Password</th>
                <th>FullName</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nqd_id}}</td>
                    <td>{{$item->nqd_username}}</td>
                    <td>{{$item->nqd_password}}</td>
                    <td>{{$item->nqd_fullname}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>