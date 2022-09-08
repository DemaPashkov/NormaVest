<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <title>Главная</title>
</head>
<body>
    <!-- Меню и главный блок -->
    <?php require 'block/main.php';?>
    <!-- 3 блока с инфой  -->
    <?php require 'block/about.php';?>
    <!-- Контактная информация -->
    <?php require 'block/contact.php';?>
    <!-- Видео -->
    <?php require 'block/video.php';?>
    <!-- Наши услуги -->
    <?php require 'block/our-services.php';?>
    <!-- синий блок -->
    <?php require 'block/blue-block.php';?>
    <!-- работаем с банками -->
    <?php require 'block/bank.php';?>
    <!-- карта -->
    <?php require 'block/carta.php';?>
    <!-- футер -->
    <?php require 'block/footer.php';?>

    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(87443198, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/87443198" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>