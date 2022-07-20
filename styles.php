<?php require_once('connect_db.php'); ?>


<?php header("Content-type: text/css; charset: UTF-8"); ?>


<style>

.container { 
    width: 960px;
    padding: 100px;
    }

    .box{
        height:200px;
        width:200px;
        text-align:center;
        font-size:14px;
        color:#090;
        background-color:#ddd;
       
       }

    /*Стиль хедера*/
.header{
    background-image: url('<?php print_r($pictures[0]['image_page']);?>');
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
   }

   .overlay{
    position: absolute;
    min-height: 100%;
    min-width: 100%;
    left: 0;
    top: 0;
    background: rgba(244, 244, 244, 0.79);
   }


   .description{
    position: absolute;
    top: 30%;
    margin: auto;
    padding: 2em;
    border-radius: 10px;
}
.description h1{
 color: #c59c65 ;
}
.description p{
 color: #c1b49c;
 font-size: 20px;
 width: 50%;
 line-height: 1.5;
}

/*Portfolio*/
.text_bd{
 margin: 4em 0;
    position: relative; 
}

.text_bd h1{
 color:#c59c65;
 margin: 2em; 
}


/*Portfolio*/
.portfolio{
 margin: 4em 0;
    position: relative; 
}
.portfolio h1{
 color:#c59c65;
 margin: 2em; 
}
.portfolio img{
  height: 15rem;
  width: 100%;
  margin: 1em;
}

.open-button {
  background-color: #CC6633;
  color: white;
  font-size: 15px;
  font-weight: bold;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
  
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: #CC6633;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
  font-size: 15px;
  font-weight: bold;
}

.form-container .cancel {
  background-color: #CC6633;
}

.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}



</style>