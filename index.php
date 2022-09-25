<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>東京を中心に活動しているYasuのポートフォリオ</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <img src="./img/logo.png" alt="">
        <nav>
            <ul class="header-right">
                <li><a href="#about">About me</a></li>
                <li><a href="#skills">Skills</a></li>
                <li>Portfolio</li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="title">
        <h1 class="typewriter"></h1>
        <p class="register1">ポートフォリオサイトへお越しいただきありがとうございます！<br>
            Welcome to my Portfolio site!</p>
    </section>

    <section id="about">
        <h1 class="top">About Me<br>
            ～私について～
        </h1>
        <div class="about-item">
            <img src="./img/about.jpg" alt="">
            <p class="text">都内でITエンジニアをやっています。<br>
                また過去には、海外プロジェクトの管理運営、調整業務をしていました。
                具体的には、プロジェクトの売上・原価分析の実施、課題把握などに関して、
                案件PMと社内部門及び外部（顧客など）とを繋ぐ架け橋として、プロジェクト業務が
                スムーズに進むよう仕事をしていました。</p>
        </div>
    </section>

    <section id="skills">
        <h1 class="top">Skills<br>
            ～私のできること～
        </h1>
        <div class="skill-list">
            <div class="skill-item">
                <p>ホームページ作成／修正</p>
                <img src="./img/service-1.jpg" alt="">
            </div>
            <div class="skill-item">
                <p>ホームページ相談</p>
                <img src="./img/service-2.jpg" alt="">
            </div>
            <div class="skill-item">
                <p>資料・文書作成支援（英文OK）</p>
                <img src="./img/service-3.jpg" alt="">
            </div>
            <div class="skill-item">
                <p>スケジュール管理・その他雑務</p>
                <img src="./img/service-4.jpg" alt="">
            </div>
        </div>
    </section>

    <section id="por">
        <h1 class="top">Portfolio<br>
            ～開発例～
        </h1>
        <div class="por-list">
            <div class="por-item">
                <p>AmazonぽいEC風サイト</p>
                <img src="./img/service-1.jpg" alt="">
            </div>
        </div>


    </section>

    <section id="contact">
        <h1 class="top">Contact<br>
            ～お問い合わせ～
        </h1>
        <form action="sent.php" method="post">
            <div class="Form">
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お名前</p>
                    <input type="text" name="name" class="Form-Item-Input" placeholder="例）山田　太郎">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
                    <input type="email" name="email" class="Form-Item-Input" placeholder="例）example@gmail.com">
                </div>
                <div class="Form-Item">
                    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
                    <textarea class="Form-Item-Textarea"></textarea>
                </div>
                <input type="submit" class="Form-Btn" value="送信する">
            </div>
        </form>
    </section>

    <div id="js-pagetop">
        <span>Top of Page</span>
    </div>

    <footer>
        <div class="container">
            <p class="copyright clear">Copyright(C) 2022 yasuuublog ALL Rights Reserved.</p>
        </div>
    </footer>
    <!-- 先にjQueryを読み込む -->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- 必ずjQuery本体を読み込んだ後にjQueryで書いたファイルを読み込む-->
    <script src="./js/script.js"></script>
</body>

</html>