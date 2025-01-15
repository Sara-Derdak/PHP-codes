<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // Q1
    // $f=file_get_contents("hello.txt");
    // echo $f;

    // Q2
    // $a=fopen("paragraphes.txt","r");
    // $b=fread($a,100);
    // echo $b;
    // $c=fread($a,100);
    // echo $c;
    // // fclose($a);

    // Q3
    // $villes=fopen("ville.txt","r");
    // while(feof($villes)==false)
    // {
    //     echo fgets($villes)."<br>" ;
    // }
    // fclose($villes);


    //Q4
    // $f=fopen('hello.txt',"r");
    // while(feof($f)==false)
    // // while(!feof($f))
    // {  
    //   echo fgetc($f) ."<br>";
    // }
    // fclose($f);


    // Q5
    // $n=file('ville.txt',0);
    // var_dump($n);
    // fclose($n);


    // Q6
    // $f=fopen('ville.txt',"w"); 
    // fwrite($f," \nAgadir");
    // fclose($f);

    // Q7
    // file_put_contents("email.txt","\nOthman@gmail.com");

// pour conserver les donnees deja existe
    // $a="\nOthman@gmail.com";
    // file_put_contents("email.txt",$a,FILE_APPEND);

    // Q8
    // $f=file("ville.txt");
    //  


    // // Q9
    // $n=file('nombres.txt',FILE_IGNORE_NEW_LINES);
    // echo array_sum($n);
    // file_put_contents("nombres.txt","\n---\nSomme=".array_sum($n),FILE_APPEND);
    // fclose($n);

    // Q10 
    // $f=file('ville.txt');
    // $PM=array_map('strtoupper',$f);
    // file_put_contents("ville.txt",implode());


    // Q11
    // un fichier contient les noms et les emails
    // $nemails=file('nom.txt',FILE_IGNORE_NEW_LINES);
    // $ta=[];
    // $k=[];
    // $v=[];
    // foreach($nemails as $p)
    // {
    //     $T=explode(",",$p);
    //     array_push($k,$T[0]);        
    //     array_push($v,$T[1]);        
    // }
    // $ta=array_combine($k,$v);
    // var_dump($ta);

    ?>
</body>
</html>