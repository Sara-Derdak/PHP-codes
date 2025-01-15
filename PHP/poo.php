<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    // include("class.php");
    // $c1=new CompteBancaire("Ahmed",2000);
    // $c1->afficher_info()






    // class Personne
    // {
    //     private static $pays;
    //     private $nom;
    //     private $prenom;
    //     private $age;


    //     public function __construct($n='Inconnue',$p='Inconnue',$a='Inconnue')
    //     {
    //         $this->nom=$n;
    //         $this->prenom=$p;
    //         $this->age=$a;
    //         Personne::$pays="Maroc";
    //     }
    //     public static function get_pays()
    //     {
    //         return self::$pays;
    //     }

    //     public static function set_pays($value)
    //     {
    //         self::$pays=$value;
    //     }

    //     public function get_nom()
    //     {
    //         return $this->nom;
    //     }

    //     public function get_prenom()
    //     {
    //         return $this->prenom;
    //     }

    //     public function get_age()
    //     {
    //         return $this->age;
    //     }

    //     public function set_nom($value)
    //     {
    //         $this->nom=$value;
    //     }

    //     public function set_prenom($value)
    //     {
    //         $this->prenom=$value;
    //     }

    //     public function set_age($value)
    //     {
    //         if ($value>0)
    //         {
    //         $this->age=$value;
    //         }
    //         else
    //         {
    //             echo "Age invalide";
    //         }
    //     }

    //     public function Sepresenter()
    //     {
    //         echo "je suis {$this->nom} {$this->prenom} et j'ai {$this->age} ans";
    //     }

    //     public function __toString()
    //     {
    //         return "{$this->nom} - {$this->prenom} -  {$this->age}";
    //     }
    // }


    // // $p=new Personne();  // constructeur par defaut
    // // $p->Sepresenter();
   
    // // $p=new Personne("Mohamed","Ali",20);
    // // $p->Sepresenter();
    // //  echo $p; // tostring 
    // // echo $p->get_age();
    // // echo Personne::get_pays();

    // class Employe extends Personne
    // {
    //     private $salair;

    //     public function __construct($n='Inconnue',$p='Inconnue',$a='Inconnue',$s="Inaconnue")
    //     {
    //         parent::__construct($n,$p,$a);
    //         $this->salair=$s;
    //     }
    //     public function get_salair()
    //     {
    //         return $this->salair;
    //     }

    //     public function set_salair($value)
    //     {
    //         if ($value>0)
    //         {
    //         $this->salair=$value;
    //         }
    //         else
    //         {
    //             echo "Salair invalide";
    //         }
    //     }

    //     public function Sepresenter()
    //     {
    //         parent::Sepresenter();
    //         echo " et mon salair {$this->salair}";
    //     }

    //     public function __toString()
    //     {
    //         return parent::__toString()." - {$this->salair}";
    //     }
    // }


    // // $e=new Employe("Sara","DERDAK",18,20000);
    // // $e->Sepresenter();
    // // echo"<br>";
    // // echo $e;
    // // echo $e->get_age();


    ?>
</body>
</html>