<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

    <table border="1">
        <tr>
            <td>id</td>
            <td>名称</td>
            <td>描述</td>
            <td>操作</td>
        </tr>
        @foreach ($cc as $k=>$v)
            <tr>
                <td>{{$v->goods_id}}</td>
                <td>{{$v->goods_name}}</td>
                <td>{{$v->goods_desc}}</td>
                <td><a href="http://12shop.com/showxlist?goods_id={{$v->goods_id}}">查看详情</a></td>
            </tr>
            @endforeach
    </table>

</body>
</html>