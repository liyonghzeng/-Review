<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>商品展示</title>
</head>
<body>

    <table>
        <tr>
            <td>id</td>
            <td>名称</td>
            <td>详情</td>
        </tr>
        @foreach($c as $k=>$v)
            <tr>
                <td>{{$v->goods_id}}</td>
                <td>{{$v->goods_name}}</td>
                <td><a href="http://12shop.com/goodslist?goods_id={{$v->goods_id}}">进去详情</a></td>
            </tr>
         @endforeach
    </table>
</body>
</html>