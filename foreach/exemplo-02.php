<form>

    <input type="text" name="nome"/>
    <input type="date" name="nascimento"/>
    <input type="submit" value="ok"/>

</form>
<?php 

if(isset($_GET)){

    foreach($_GET as $key => $value){
        echo "O campo {$key} possui o valor: {$value} <br/>";
    }
}
?>