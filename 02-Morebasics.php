<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;

    }
.container{
    max-width: 80%;
    background-color: rgb(233, 183, 183);
    margin: auto;
    padding: 23px;
}

</style>
<body>
    
    <div class="container">
        <h1>Let's Learn About PHP</h1>
        <p>Your party status is here :</p>
       
        <?php
        $age=34;
        if($age>18){
            echo"You can go to the Party";
        }
        else{
            echo"You cannot go to the party";
        }
        
        $languages=array("python","PHP","C++","NodJS",);
       // echo count($languages); 
       // echo $languages[0];

       //loops in php
       $a= 0;
       while($a<=10)
       {
        echo"<br>The value of a is :";
        echo $a;
        $a++;
       }

        //Iterating arrays in php using while loop
        $a= 0;
        while($a< count ($languages))
        {
         echo"<br>The value of language is :";
         echo $languages[$a] ;
         $a++;
        }
       ?>
       </div>
</body>
</html>