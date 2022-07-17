<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Сайт</title>
   <link rel="stylesheet" type="text/css" href="sec.css">
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
</head>
<body>

  <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(89590145, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/89590145" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
   
<div class="page-wrapper">
  <a class="btn trigger" href="#">Открыть форму</a>
</div>

<div class="modal-wrapper">
  <div class="head"></div>
  <div class="modal">
    <div class="content">
        <div class="good-job">
          <p style="padding: 20px 0 0;color: gray;margin: 0;font-size: 14px;">ОСТАВЬТЕ СВОИ ДАННЫЕ МЫ СВЯЖЕМСЯ С ВАМИ</p>
          <div class="text">
            <p>высокое качество</p>
          </div>
          <form class="form_modal_window" action="form.php">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <input type="email" name="email" placeholder="Ваш email" required>
            <input type="phone" name="phone" placeholder="Ваш телефон" required>
             <input type="store" name="store" placeholder="Название товара" required>
            <input class="form_sub" name="submit" type="submit" value="ОТПРАВИТЬ">
          </form>
          <div id="erconts"></div>
        </div>
    </div>
  </div>
</div>


  <script  src="screep.js"></script>
  <script>
      $(document).ready(function() {
          $('.form_sub').click(function(){
              $.ajax({
                  type: "POST", 
                  url:"form.php", 
                  data:$('.form_modal_window').serialize(), 
                  error:function(){$("#erconts").html("Произошла ошибка!");},
                  beforeSend: function() {
                      $("#erconts").html("<p style='color: orangered;'>Отправляем данные...</p>");
                  },
                  success: function(result){
                 $('#erconts').html(result);
                      checkThis();
                  }
              });
              return false;
          });
      });
  </script>
  
   <div class="con">

<section >
   <img src="https://sun9-43.userapi.com/impf/c836526/v836526365/4950d/u01G_Y6OU2A.jpg?size=275x183&quality=96&sign=28c92918f2305759f49c4db3f1b0e7d2&type=album">
</section>

  <section>
   <span>Кроссовки nike</span>
   <p>Довольно-таки интересное описание товара в несколько строк. </p>
   <p>15000 руб</p>
</section> 
   </div>


   <div class="cenitor">

<section>
   <img src="https://avatars.mds.yandex.net/get-marketpic/216074/market_J9RejHoFMNLs71YQeuuLpw/300x400" height="183" width="270">
</section>

  <section>
   <span>Кроссовки Inov</span>
   <p>Довольно-таки интересное описание товара в несколько строк. </p>
   <p>19000 руб</p>
</section>
   </div>


<div class="fock">

<section>
   <img src="https://24.img.avito.st/208x156/2458815124.jpg" height="183" width="270">
</section>

  <section>
   <span>Кроссовки Inol</span>
   <p>Довольно-таки интересное описание товара в несколько строк. </p>
   <p id>24000 руб</p>
</section>
      
   </div>
   
         <div class="mock">

<section>
   <img src="https://sun9-5.userapi.com/impf/9QEfYU6Cu5NBRuUDP1lPSyN7la9uNf8LwIdq8Q/_kFhY76h25g.jpg?size=310x206&quality=96&sign=4c97f0ee75405682b63ede4206d99467&c_uniq_tag=GNroFV4hEissNeBuhb5yjkCRt_N5iBdWrB8-P7adzB8&type=album" height="180" width="275">
</section>

  <section>
   <span>Кроссовки rebook</span>
   <p >Довольно-таки интересное описание товара в несколько строк.</p>
   <p>12000 руб</p>
</section>
      
   </div>

</div>

</body>
</html>

