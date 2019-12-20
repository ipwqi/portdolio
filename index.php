<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="index.js"></script>
    <title>Document</title>
</head>

<body id="style" class="style-bw">
    <div class="grid_container">
        <header class="grid_header">
            <div class="header_left">
                <h1>ロゴ</h1>
            </div>
            <nav class="header_nav">      
<?php      
$nav="
                <div class='buttons-coll'>
                    <button class='nav-btn btn-1'><h2><a href=''>アイウエオ</a></h2></button>
                    <button class='nav-btn btn-1'>1</button>
                    <button class='nav-btn btn-1'>1</button>
                    <button class='nav-btn btn-1'>1</button>
                    <button class='nav-btn btn-1'>1</button>
                </div>
";
echo $nav;
?>
            </nav>
            <div class="header_right">
                <form action="./setcss.cgi" method="get" name="mainForm">
                    <input type="button" id="style-wb" value="白">
                    <input type="button" id="style-yb" value="黄">
                    <input type="button" id="style-bw" value="黒">
                </form>
            </div>
        </header>
        <main class="grid_main">
            <h1 id="toc1">自己紹介</h1>
            <p>プログラマ専攻1年　高橋 輝</p>
            <p></p>
            <h1 id="product">制作物</h1>
            <div class="product">
            <ul>
                    <li>
                        <figure id="Referral-frame">
                                <div>
                                        <div>
                                            <iframe src="https://github.com/ipwqi/portdolio" frameborder="0" scrolling="no" width="1090" height="700"></iframe>
                                        </div>
                                    </div>
                            <figcaption>
                                <p><h2><a href="https://github.com/ipwqi/portdolio">製作物紹介部分</a></h2></p>
                            </figcaption>    
                        </figure>
                    </li>
                </ul>
            </div>
            <p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p><p>a</p>
        </main>
        <aside class="grid_aside">            
<?php
$aside="
          
                <h2>Portfolio</h2>
                <p>このサイトは1年の間に作成したものです</p>
                <div id='toc'>
                    <label class='toc-taitle'>目次</label>
                    <ul>
                        <li><a href='#toc1'>自己紹介</a></li>
                        <li><a href='#product'>制作物</a>
                            <ol><a href='#Referral-frame'>製作物紹介部分</a></ol>
                            <ol>2</ol>
                        </li>
                    </ul>
                </div>
                <h2>SNS</h2>
            
";
echo $aside;
?>
        </aside>
        <footer class="grid_footer">
            フッダー
        </footer>
        <mobile class="grid_mobile">
<?php
echo"<div class='mobile-nav'>
            <input id='nav-input' type='checkbox' >
            <label id='drawer-open' for='nav-input'><span></span></label>
            <label id='nav-close' for='nav-input'></label>
            <div id='nav-content'>
            .$nav.
            </div>
</div>";

echo"<div class='mobile-aside'>      
        <input id='aside-input' type='checkbox' >
        <label id='drawer-open' for='aside-input'><span></span></label>
        <label id='aside-close' for='aside-input'></label>
        <div id='aside-content'>  
        .$aside.
        </div>                
</div>";
?>
        </mobile>
    </div>
    <!-- /.grid_container -->
</body>
</html>
