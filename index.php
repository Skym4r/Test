<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style/main.css">
</head>
<body style='background: #C0C0C0;'>
<section class='wrap'>
    <table width="80%" align="center">
        <tr>
            <td>
                <img src='/images/logo.png'>
            </td>
        </tr>
    </table>
    <div >
        <?php include "news_one.php"?></div>
    <div>
    <table width="80%" align="center">
        <tr>
        <td width="100%">
        <div>
            <h1 class="news__title">Новости</h1>
        </div>
        <div class="cards">
            <?php include "view.php"?>
        </div>
        <div class='page-link'>
            <?php include "page-link.php"?>
        </div>
        <footer>
            <div class="footer"></div>
            <div class="footer_foot"> @2023-2412 "Галактический вестник"</div>
        </footer>
        <td>
        </tr>
    </table>
</section>

</body>
</html>