@if (Auth::check())
<?php
$image_arr = ["images/images_rakuma/rakuma-side2.jpg","images/images_rakuma/rakuma-side1.png","images/images_rakuma/rakuma-side3.png","images/images_rakuma/rakuma-side4.png","images/images_rakuma/rakuma-side5.jpg","images/images_rakuma/rakuma-side6.png","images/images_rakuma/rakuma-side7.jpg","images/images_rakuma/rakuma-side8.png","images/images_rakuma/rakuma-side9.jpg",];
 
$img_path = $image_arr[mt_rand(0, count($image_arr)-1)];

$image_arr = ["images/images_rakuma/rakuma-side2.jpg","images/images_rakuma/rakuma-side1.png","images/images_rakuma/rakuma-side3.png","images/images_rakuma/rakuma-side4.png","images/images_rakuma/rakuma-side5.jpg","images/images_rakuma/rakuma-side6.png","images/images_rakuma/rakuma-side7.jpg","images/images_rakuma/rakuma-side8.png","images/images_rakuma/rakuma-side9.jpg",];
    
$img_path2 = $image_arr[mt_rand(0, count($image_arr)-1)];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ラクマ紹介ページ</title>
    <link rel="stylesheet" href="css/website.css">
</head>

<body>
    <header>
        <h1><a href="https://rakuma.rakuten.co.jp/home/"><img src="images/images_rakuma/rakuma-logo.jpg" alt="ラクマ"></a></h1>
        <nav id="rakuma_navi">
            <ul>
                <li class="current"><a href="">HOME</a></li>
                <li><a href="https://corp.rakuten.co.jp/about/">楽天とは</a></li>
                <li><a href="https://fril.jp/new_rakuma">ラクマとは</a></li>
                <li><a href="https://www.mercari.com/jp/">メルカリとの違い</a></li>
                <li><a href="https://rakuma.rakuten.co.jp/home/">利用方法</a></li>
                <li><a href="https://rakuma.faq.rakuten.ne.jp/">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <div id="main_visual">
        <img src="images/images_rakuma/rakuma-main.png" alt="ラクマの紹介">
    </div>
    <div id="wrapper" class="clearfix">
        <div id="main">
            <section id="point">
                <h2>ラクマのすごいとこ！！</h2>
                <section class="clearfix">
                    <h3>出店手数料無料！！</h3>
                    <figure>
                        <img src="{{$img_path}}">
                        <figcaption>すごいぞラクマ</figcaption>
                    </figure>
                    <p>
                        メルカリの手数料は10%にもかかわらず、ラクマはなんと手数料無料！！<br> 価格の安い商品ほど、手間のわりに利益が小さくなり、労力の割に合わないことが多いです。
                        <br> その点、出店手数料が無料なので助かります。
                    </p>
                </section>
                <section class="clearfix">
                    <h3>楽天銀行振り込みが早いし、無料！！</h3>
                    <figure>
                        <img src="{{$img_path2}}">
                        <figcaption>パンダフル！！</figcaption>
                    </figure>
                    <p>
              楽天銀行の口座を使用すれば、当日振り込みの可能。<br>昼間に申請すれば、次の日のには振り込まれています。<br>振込手数料も楽天銀行の場合、１万円以上で無料。
                    </p>
                </section>
            </section>

            <section id="news">
                <h2>お知らせ</h2>
                <ul>
                    <li>
                        <span>2018/05/14</span>
                        <a href="https://fril.jp/users/sign_up">新規登録</a>
                    </li>
                    <li>
                        <span>2018/05/01</span>
                        <a href="https://fril.jp/users/sign_up">今ならポイント１０倍！！</a>
                    </li>
                    <li>
                        <span>2018/04/20</span>
                        <a href="https://fril.jp/users/sign_up">重要なお知らせ</a>
                    </li>
                </ul>
            </section>
        </div>
        <aside id="sidebar">
            <section id="side_banner">
                <h2>about Rakuten</h2>
                <ul>
                    <li>
                        <a href="https://corp.rakuten.co.jp/about/philosophy/principle/#success" ><img src="images/images_rakuma/og_image_logo.gif" alt="楽天コンセプト"></a>
                        <p>5つの成功の成功のコンセプトを公開中。</p>
                    </li>
                </ul>
            </section>
        </aside>
    </div>
    <footer>
        <div id="footer_navi">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="https://corp.rakuten.co.jp/about/">楽天とは</a></li>
                <li><a href="https://fril.jp/new_rakuma">ラクマとは</a></li>
                <li><a href="https://www.mercari.com/jp/">メルカリとの違い</a></li>
                <li><a href="https://rakuma.rakuten.co.jp/home/">利用方法</a></li>
                <li><a href="https://rakuma.faq.rakuten.ne.jp/">お問い合わせ</a></li>
            </ul>
        </div>
        <small>&copy; 2018 Team Sekaikan.</small>
    </footer>
</body>

</html>


       

@else
{{ print('<h2 class="alert alert-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span>You are not authorized for that action!</h2>')}}
    @endif 



