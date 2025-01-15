<?php
class Personne
    {
        private static $pays="Maroc";
        private $nom;
        private $prenom;
        private $age;

        public function __construct($n='',$p='',$a=0)
        {
            $this->nom=$n;
            $this->prenom=$p;
            $this->age=$a;
        }

        public function get_nom()
        {
            return $this->nom;
        }

        public function get_prenom()
        {
            return $this->prenom;
        }

        public function get_age()
        {
            return $this->age;
        }

        public static function get_pays()
        {
            return self::$pays;
        }

        public function set_nom($value)
        {
            $this->nom=$value;
        }
        public function set_prenom($value)
        {
            $this->prenom=$value;
        }
        public function set_age($value)
        {
            $this->age=$value;
        }
        public static function set_pays($value)
        {
            self::$pays=$value;
        }

        public function sepresenter()
        {
            echo "je suis {$this->nom} {$this->prenom} et j'ai {$this->age} ans";
        }

        public function __toString()
        {
            return "{$this->nom}-{$this->prenom}-{$this->age}";
        }
    }

    class Employe extends Personne
    {
        private $salaire;

        public function __construct($n='',$p='',$a=0,$s=0)
        {
            parent::__construct($n,$p,$a);
            $this->salaire=$s;
        }

        public function get_salaire()
        {
            return $this->salaire;
        }

        public function set_salaire($value)
        {
            $this->salaire=$value;
        }

        public function sepresenter()
        {
            parent::sepresenter();
            echo " et mon salaire est $this->salaire";
        }

        public function __toString()
        {
            return parent::__toString() . "- salaire: $this->salaire";
        }
    }


    $p= new Personne("Mohamed","Ali",20);

    $e= new Employe("Mohamed","Ali",20,6000);
    $e->sepresenter();
    echo "<br>";
    echo $e;
    // echo Personne::get_pays();
    // Personne::set_pays("France");
    // echo Personne::get_pays();
    // $p->sepresenter();
    // echo $p->get_nom();
    // $p->set_nom("Ahmed");
    // echo $p->get_nom();
    // echo $p;

?>