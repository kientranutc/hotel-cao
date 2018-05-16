<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>
</head>
<body>

<div class="container">
    <h2 style="color: green">Cao hospitality</h2>
    <p>Thông tin khách hàng liên hệ:</p>
    <table class="table table-bordered">
        <thead style="background:#cccccc; color: #FFFFFF">
        <tr>
            <th width="200px" height="35px">Họ tên</th>
            <th width="200px">Email</th>
            <th width="300px">Nội dung liên hệ</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td style="text-align: center">{{$data['name']}}</td>
            <td style="text-align: center">{{$data['email']}}</td>
            <td style="text-align: center">{{$data['content']}}</td>
        </tr>

        </tbody>
    </table>
</div>

</body>
</html>
