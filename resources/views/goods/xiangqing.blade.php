<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery.min.js"></script>
    <scritpt src="/layui/layui.js"></scritpt>
    <title>商品详情</title>
    <style>
        .sku {
            color: red;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td>名  称:</td>
        <td class="ii" cc={{$goods['goods_id']}}>{{$goods['goods_name']}}</td>
    </tr>
    <tr>
        <td>描  述:</td>
        <td>{{$goods['goods_desc']}}</td>
    </tr>
    <tr>
        <td>地 址:</td>
        <td>{{$goods['goods_address']}}</td>
    </tr>
</table>
<table>
    @foreach($attr_value as $k=>$v)
    <tr>
        <td>{{$v['attr_name']}}</td>
        @foreach($v['attr_v'] as $kk=>$vv)
            <td class="p" ssc={{$vv['attr_v_id']}} cc={{$goods['goods_id']}}>{{$vv['attr_v_id']}}{{$vv['attr_title']}}</td>
         @endforeach
    </tr>
    @endforeach
</table>
<input type="submit" value="－" class="jian"><input type="text" style="width:50px;" value="1" class="val"><input type="submit" value="＋" class="jia">
总价：<span class="ll"></span>
<h1><input type="submit" value="提交购物车" class='cartAdd'><input type="submit" value="立即购买" class="immediately"></h1>


</body>
</html>
<script>
    $(function(){
        var attr_path= '';
        var attr_id= '';
        var kucun;
        $(".p").click(function(){
           var i=$(this).attr('ssc');
           var goods_id=$(this).attr('cc');
            attr_path += $(this).attr("ssc") + ',';
            attr_id = attr_path;
            ////////////////////
            $.ajax({
                url: '/goods/getPrice?id='+ goods_id + '&attr_path=' + attr_path,
                type: 'get',
                dataType: 'json',
                success:function(d)
                {
                    // alert(d.price);
                    alert(d.kucun);
                    if(d){
                        $('.ll').text(d.price);
                        kucun = d.kucun;

                    }
                }
            });
        })

        $(".jian").click(function () {
            var  iics = parseInt(kucun);
           var cl= $(".val").val();
           var clval=parseInt(cl);
           if(cl == 1){
               alert("不能进行减少");
               return false;
           }else{
               $(".val").val(clval-1);
           }
        })
        $(".jia").click(function () {

            if(iics ==''){
                alert("请先选择商品");
                return false;
            }else{
                var cl= $(".val").val();
                var ics= parseInt(kucun);
                if(cl <ics){
                    var clval=parseInt(cl);
                    $(".val").val(clval+1);
                }else{
                    alert("超过储存");
                    return false;
             }
            }
        })
        $(".val").blur(function () {
           var  iics = parseInt(kucun);
           var blurc= parseInt($(".val").val());
           if(blurc >iics){
               $(".val").val(iics);
           }
        })
        //添加购物车
        $(".cartAdd").click(function () {
            //商品id
            var goods_id = $(".ii").attr('cc');

            var num = $(".val").val();
            $.ajax({
                url: "/addcart?+goods_id={{$goods['goods_id']}}+'&num='"+num+"&attr_v_id="+attr_id,
                type: 'get',

                success:function(d)
                {
                    alert(d);
                    // // alert(d.price);
                    // alert(d.kucun);
                    // if(d){
                    //     $('.ll').text(d.price);
                    //     kucun = d.kucun;
                    //
                    // }
                }
            });
        });
        //立即购买
        $(".immediately").click(function () {
            //商品id
            var goods_id = $(".ii").attr('cc');

            var num = $(".val").val();
            //价格
            location.href="http://12shop.com/immediately?goods_id={{$goods['goods_id']}}"+'&num='+num+'&attr_v_id='+attr_id;
        })
    })
</script>
