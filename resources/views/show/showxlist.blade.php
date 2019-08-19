<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/layui/css/layui.css">
</head>
<body>
        <table>
            <tr>
                <td> 商品id  </td>
                <td  style="color:red">{{$cc->goods_id}}</td>
            </tr>
            <tr>
                <td> 图片  </td>
                <td  style="color:red"><img src="/{{$cc->goods_img}}" alt=""></td>
            </tr>
            <tr>
                <td> 商品名称  </td>
                <td  style="color:red">{{$cc->goods_name}}</td>
            </tr>
            <tr>
                <td> 商品描述  </td>
                <td  style="color:red">{{$cc->goods_desc}}</td>

            </tr>
            <tr>
                <td> 生产  </td>
                <td  style="color:red">{{$cc->goods_address}}</td>

            </tr>
            <tr>
                <td> 商家</td>
                <td style="color:red">{{$cc->goods_business}}</td>
            </tr>
            <tr>
               <td> <button class ='cls'>添加购物车</button> </td>
               <td> <button>立刻 购买</button> </td>
            </tr>
        </table>
        <h1>请选择</h1>
        <table calss="cc">
            <tr>
                <td><h3>颜色</h3></td>
                @foreach($sku as $k=>$v)

                    <td  style="background: #5a6268" class = 'fuxuan'>
                            {{$v->sku_name}}
                            <img src="/{{$v->sku_goods_img}}" alt="" width="50px" height="50px">

                    </td>
                @endforeach
            </tr>
        </table>
</body>
</html>
<script src="js/jquery.min.js"></script>
<scritpt src="/layui/layui.js"></scritpt>
<script>
    $(function(){
        $(".cls").click(function () {
                alert(11);
        })

        $(".fuxuan").click(function () {

        })
    })
</script>
