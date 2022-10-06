<!-- 
Name：bppws
Author：kaygb
Version：20200708
-->
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarfieldTom's Nest</title>
    <meta name="keywords" content="GarfieldTom,GarfieldTom个人主页,little-gt,无聊の日记">
    <meta name="theme-color" content="#000">
    <link rel="shortcut icon" href="/gt-favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <style>
            h1::before{
                content: 'GarfieldTom\'S NEST';
                position: absolute;
                color: #b2bec348;
                z-index: -1;
                left: 10px;
                top: 10px;
            }
    </style>
</head>
<body>
    <div class="zz">
        <img class="lazy-img" data-original="https://pic1.imgdb.cn/item/633c3dea16f2c2beb15b05e6.jpg" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAICRAEAOw==" alt="" srcset="">
    </div>

    <div class="main">
        
        <div class="title">
            <h1>GarfieldTom</h1>
        </div>
        <div class="content">
            <p>Life is a journey.</p>
            <p>So, enjoy life!</p>
            <p>No matter what you're doing, stay confident on the go!</p>
            <p>Visit my blog:<a href="https://blog.garfieldtom.cool/" target="_blank">GarfieldTom's Diary</a></p>
        </div>
        <div class="footer">
            <span>&copy; <?php echo date('Y'); ?> GTcat™</span>&nbsp;
            <span><a href="https://myssl.com/garfieldtom.cool?status=q" target="_blank" rel="nofollow">SSL Check</a></span>&nbsp;
            <!--<span><a href="http://beian.miit.gov.cn" target="_blank" rel="nofollow">备案号</a></span>&nbsp; -->
            <br>
            <span><a class="GT-Cloud" href="https://cloud.garfieldtom.cool" target="_blank" rel="nofollow"><img src="https://garfieldtom.cool/img/gt-cloud.jpg" style="width:50px;"></a></span>
            
        </div>

    </div>

    <script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/jquery_lazyload/1.9.7/jquery.lazyload.min.js"></script>
    <script>
        // lazyload
    window.onload = function() {
        $('.zz img').addClass('lazyload');
        $(function() {
            $("img.lazyload").lazyload({
                effect: 'fadeIn',
                // inverval: 3000
                effectspeed: 1000
            });
        });

        $(".zz img").lazyload({
            effect: 'fadeIn',
            // inverval: 3000
            effectspeed: 1000 
        });
    }
//背景图片的lazyload
    </script>

</body>
</html>
