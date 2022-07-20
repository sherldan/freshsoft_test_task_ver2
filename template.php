<? require_once('connect_db.php'); ?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing page</title>

    	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

	
<script src="js/maskedinput.js"></script>




<link rel="stylesheet" href="styles.php" media="screen"> 

<script type="text/javascript" src='js/main.js'></script>

    <script src="https://unpkg.com/imask"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
  <!-- Баннер с заголовком -->
  <div class="container">
    <header class="header">
        
          <div class="description">
             <h1>    Hello, and Welcome
             <p>    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>   
         </h1>  
          </div>



</header>



      <!-- Модальное окно при щелчке на картинки -->

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Постоянный количественный рост оправдал надежды граждан</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"> </button>
            </div>
            <div class="modal-body">
            Сплочённость команды профессионалов показала себя во всей красе. Добрая половина выводов оказалась ошибочной.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            </div>
          </div>
        </div>
      </div>


  <!-- Тексты -->
      <div class="text_bd">
          <h1 class="text-center">Text</h1>
      <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12" >
        <p><?php print_r($products[0]['name']);?> </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
        <p><?php print_r($products[1]['name']);?> </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
        <p><?php print_r($products[2]['name']);?> </p>
        </div>
        </div>
      </div>


      <!-- Картинки -->
      <div class="portfolio">
          <h1 class="text-center">Pictures</h1>
      <div class="container">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="<?php print_r($pictures[2]['image_page']);?>" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="<?php print_r($pictures[1]['image_page']);?>" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        
          </div>
        </div>
      </div>


  <!-- Скрипт маски телефона -->
        <script type="text/javascript" name="phone_mask">
              jQuery(function($){   	
              $("#phone").mask("+7(999) 999-99-99");
              });
        </script>

  <!-- Всплывающее окно с формой телефона  -->
      <button class="open-button" onclick="openForm()">Подпишитесь</button>

      <div class="form-popup" id="myForm">
      <form action="user.php" method="POST" class="form-container">
          <h3>Подписаться</h3>

          <label for="name"><b>Имя</b></label>
          <input type="text" placeholder="Ваше имя" name="name" required>
        
        <label for="email"><b>Номер телефона</b></label>
        <input
                            type="text"
                            name="phone"
                            id="phone"
                            placeholder="+7(000)000-00-00" required>

          <button type="submit" class="btn">Оставить телефон</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
        </form>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>