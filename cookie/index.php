<?php
if(isset($_COOKIE['user'])) && isset($_GET['deletecookie']){
   unset($_COOKIE['user']); 
} if(isset($_POST['letr'])){
    setcookie('user', $_POST['letr']);
    header("location: index.php");
}else{
    if(isset($_COOKIE['user'])){
        echo $_COOKIE ['user'];
        echo "<a href='?deletecookie=true'><br><button id='j>Restaurar página</button></a>";
}else{ 
    ?>
    <form method="POST" action="index.php">
    <input type="text" name="caeact" placeholder="Informe seu nome">
    <button type="submit" value="Enviar">ver<button>
    </form>
    <?php } } ?> 