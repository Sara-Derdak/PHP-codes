<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1
    // $fruit=['orange','banane','pomme','kiwi','avocad'];
    // for($i=0;$i<count($fruit);$i++)
    // {
    //     echo "$fruit[$i]<br>";
    // }

    // 2
    // $Eleves=[13,16,18,12,"20];
    // $m=array_sum($Eleves)/count($Eleves);
    // echo $m;

    // 3

    // $personnes = 
    // [
    // ["nom" => "Ahmed" , "age" => 19] , 
    // ["nom" => "Ali" , "age" => 25] , 
    // ["nom" => "Noura" , "age" => 20]
    // ];

    // foreach($personnes as $x){
    //     echo "Nom :".$x["nom"]." / Age :".$x["age"]."<br><br>";
    // };


    // $p = array(
    //     "Ahmed" => 25,
    //     "Ali" => 30,
    //     "Mohamed" => 22,
    //     "Karim" => 28,
    //     "Rachide" => 35
    // );
    // foreach ($p as $n => $a) {
    //     echo "Nom : $n , Age : $a<br>";
    // }

    // 4
   

    // $personnes = array
    // (
    //     ["nom" => "Mohamed" , "age" => 21 , "adresse" => "Adresse 1"] , 
    //     ["nom" => "Ahmed" , "age" => 20 , "adresse" => "Adresse 2"]
    // );

    // foreach($personnes as $x)
    // {
    //     echo "Nom :".$x["nom"]." / Age :".$x["age"]."  / Adresse : ".$x["adresse"]."<br><br>";
    // }  


    //  $pA= array(
    //     array("nom" => "Ahmed", "age" => 25, "adresse" => "adresse1"),
    //     array("nom" => "ali", "age" => 30, "adresse" => "adresse2"),
    //     array("nom" => "karim", "age" => 22, "adresse" => "adresse3")
    // );
    // foreach ($pA as $p) {
    //     echo "Nom : " . $p["nom"] . ",  Age : " . $p["age"] . ", Adresse : " . $p["adresse"] . "<br>";
    // }


    // 5 
    
    // $pEmails = array(
    //     "Ali" => "ali@email.com",
    //     "ahmed" => "ahmed@email.com",
    //     "achraf" => "achraf@email.com",
    //     "karim" => "karim@email.com",
    //     "khadija" => "khadija@email.com"
    // );
    // foreach ($pEmails as $n => $e) {
    //     if (substr($n, 0, 1) === "A" ||substr($n, 0, 1) === "a") {
    //         echo "Adresse e-mail de $n : $e<br>";
    //     }
    // }


    // $Emails=[
    //     ["nom"=>"Ali","email"=>"ali@email.com"],
    //     ["nom"=>"ahmed","email"=>"ahmed@email.com"],
    //     ["nom"=>"achraf","email"=>"achraf@email.com"],
    //     ["nom"=>"karim","email"=>"karim@email.com"],
    //     ["nom"=>"sara","email"=>"sara@email.com"],
    // ];
    // foreach($Emails as $n){
    //     if (substr($n["email"], 0, 1) === "A" || substr($n["email"], 0, 1) === "a") 
    //     {
    //         echo "Adresse e-mail de ".$n["nom"]." : ". $n["email"]." <br>";
    // }
    // }
    
    // 6
    // $fruit=['orange','banane','pomme','kiwi','avocad'];
    // array_push($fruit,"fruit");
    // var_dump($fruit);

    // 7
    // $ville=['tanger','fes','rabat','casa','safi'];
    // array_unshift($ville,"marrakech");
    // array_splice($ville,1,1);
    // var_dump($ville);


    // 8
    // $notes=[15,20,18,17];
    // $S=array_sum($notes);
    // echo $S;
    

    // 9
    // $pays = array("France", "Allgerie", "Italie", "Maroc", "Japon");
    // $D= array_slice($pays, 0, 2);
    // var_dump($D);


    // 10
    // $personnesEmails = array(
    //     "Ahmed" => "ahmed@example.com",
    //     "Ali" => "ali@example.com",
    //     "Mohamed" => "Mohamed@example.com",
    //     "Karime" => "karime@example.com",
    //     "Rachide" => "rachide@example.com"
    // );
    // $nom = array_keys($personnesEmails);
    // for ($i=0;$i<count($nom);$i++){
    //     echo "$nom[$i]<br>";
    // }
    // var_dump($nom);
    
    
    // 11
    $t1 =['Rabat','Casa'];
    $t2 =['Tanger','Marrakech'];
    $t3=array_merge($t1,$t2);
    // for($i=0;$i<count($t3);$i++)
    // {
    //     echo $t3[$i]."<br>";
    // } 
    // var_dump($t3);

    // 12
    $couleurs=['rouge','noire','blanc','bleu','vert'];
    $couleurs=array_reverse($couleurs);
    // var_dump($couleurs);

    // 13
    // $pays = array("France", "Allgerie", "Italie", "Maroc", "Japon");
    // sort($pays);
    // var_dump($pays);

    // 14
    // $personnes = array("Ahmade" => 19, "Ali" => 30, "Mohamed" => 25, "Karime" => 40, "Rachide" => 38);
    // asort($personnes);
    // var_dump($personnes);

    // 15
    // $pays = array("France", "Allgerie", "Italie", "Maroc", "Japon");
    // shuffle($pays);
    // var_dump($pays);

    // 16
    // $personnesEmails = array(
    //     "Ahmed" => "ahmed@gmail.com",
    //     "Ali" => "ali@gmail.com",
    //     "Mohamed" => "Mohamed@gmail.com",
    //     "Karime" => "karime@gmail.com",
    //     "Rachide" => "rachide@gmail.com"
    // );
    // $Emails = array_values($personnesEmails);
    // var_dump($Emails);

    // 17
    // $villes=['tanger','fes','rabat','casa','safi'];
    // $villes=array_map(function($v){return "Ville de " . $v;}, $villes);
    // var_dump($villes);
    
    // 18
    // $c1 = ["Bleu", "Vert", "Violet"];
    // $c2 = ["Violet", "Jaune", "Blanche"];
    // $couleurs_communes = array_intersect($c1, $c2);
    // var_dump($couleurs_communes);

    // 19
    // $personnes_telephones = [
    //     "Ahmed" => "123456789",
    //     // "Jean" => "987654321",
    //     "Ali" => "1357908642",
    //     "Mohamed" => "321654987",
    //     "Karim" => "789012345"
    // ];
    // $nom= "Jean";
    // $existe = array_key_exists($nom, $personnes_telephones);
    // if($existe == true)
    // echo  "Jean est présent dans le tableau et leur num.tel : ".$personnes_telephones['Jean'];
    // else
    // echo "Jean n'est pas présent dans le tableau";


    // 20
    // $villes=['tanger','casa','rabat','casa','safi'];
    // $villes=array_unique($villes);
    // var_dump($villes);


    // $personnes_ages = [
    //         array("nom" => "Ahmed", "age" => 20),
    //         array("nom" => "Mohamed", "age" =>21),
    //         array("nom" => "Karim", "age" => 32),
    //         array("nom" => "Rachide", "age" => 28)
    //     ];
    // 21
    // $ages = array_column($personnes_ages, "age");
    // var_dump($ages);

    // 22
    // $age_p30 = array_filter($personnes_ages, function($p){return $p["age"] > 30;});
    // var_dump($age_p30);


    // 23
    // $pays = array("France", "Palastine", "Italie", "Maroc", "Egypt");
    // $index= array_search("France", $pays);
    // echo "L'index de France est : " . $index;

    // 24.
    // $employes_salaires = array(
    //     "Ahmed" => 4000,
    //     "ali" => 3600,
    //     "Chaimae" => 2500,
    //     "Doha" => 4800,
    //     "Sara" => 5200
    // );
    // asort($employes_salaires);
    // var_dump($employes_salaires);

    ?>
</body >
</html>