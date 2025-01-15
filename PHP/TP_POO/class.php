
<!-- Ex1 : -->

<?php
class CompteBancaire
{
    private $titulaire;
    private $solde;

    public function __construct($t,$s)
    {
        $this->titulaire=$t; 
        $this->solde=$s;       
    }


    public function get_titulaire()
        {
            return $this->titulaire;
        }

    public function set_titulaire($value)
        {
            $this->titulaire=$value;
        }

    public function get_solde()
        {
            return $this->solde;
        }

    public function afficher_info()
    {
        echo "{$this->titulaire} - {$this->solde} Dh";
    }

    public function deposer($value)
    {
        if($value>0)
        {
            $this->solde+=$value;
        }
        else
        {
            echo"Montant invalide";
        }
    }

    public function retirer($value)
    {
        if($value>0 && $this->solde>$value)
        {
            $this->solde-=$value;
        }
        else
        {
            echo"Montant invalide";
        }
    }
}
?>
 

<!-- Ex2 : -->

<?php
class Client
{
    private $CIN;
    private $nom;
    private $prenom;
    private $tel;

    public function __construct($c='',$n='',$p='',$t='')
    {
        $this->CIN=$c;
        $this->nom=$n;
        $this->prenom=$p;
        $this->tel=$t;
    }

    public function __get($name)
        {
            if ($name == "CIN") {
                return $this->CIN;
            } elseif ($name == "Nom") {
                return $this->nom;
            } elseif ($name == "Prenom") {
                return $this->prenom;
            } elseif ($name == "Tel") {
                return $this->tel;
            } else {
                throw new Exception("Attribut invalide");
            }
        }
        public function __set($name, $value)
        {
            if ($name == "CIN")
                $this->CIN = $value;
            elseif ($name == "Nom")
                $this->nom = $value;
            elseif ($name == "Prenom")
                $this->prenom = $value;
            elseif ($name == "Tel")
                $this->tel = $value;
            else
                throw new Exception("attribut invalide");
        }

    // public function get_CIN()
    // {
    //     return $this->CIN;
    // }

    // public function set_CIN($value)
    // {
    //     $this->CIN=$value;
    // } 

    // public function get_nom()
    // {
    //     return $this->nom;
    // }

    // public function set_nom($value)
    // {
    //     $this->nom=$value;
    // }

    // public function get_prenom()
    // {
    //     return $this->prenom;
    // }

    // public function set_prenom($value)
    // {
    //     $this->prenom=$value;
    // }

    // public function get_tel()
    // {
    //     return $this->tel;
    // }

    // public function set_tel($value)
    // {
    //     $this->tel=$value;
    // }

    public function Afficher()
    {
        echo "{$this->nom} - {$this->prenom} - {$this->CIN} - {$this->tel}";
    }

    public function __toString()
    {
        return "{$this->nom} - {$this->prenom} - {$this->CIN} - {$this->tel}";
    }
}
class Compte
{
    private static $numcompte=0;
    private $proprietaire;
    private $codecompte;
    private $solde;
    
    public function __construct($p="Inconnue",$s="Inconnue")
    {
        self::$numcompte+=1;
        $this->codecompte=self::$numcompte;
        if($s>0){ $this->solde=$s;}
        else{throw new Exception("Nombre invalide");}
        $this->proprietaire=$p;
    }

    // public function __get($name)
    // {
    //     if($name=="Codecompte")
    //     {
    //         return $this->codecompte;
    //     }
    //     elseif($name=="Solde")
    //     {
    //         return $this->solde;
    //     }
    // }

    public function __toString()
    {
        return "{$this->proprietaire} - {$this->codecompte} - {$this->solde}";
    } 

    public static function get_numcompte()
    {
        return self::$numcompte;
    }
    public function Crediter($somme)
    {
        if($this->solde > $somme)
        {
            $this->solde-=$somme;
        }
        else
        { echo "Solde insufisant !!" ;}
    }

    public function Debiter($somme)
    {
        if($this->solde > $somme)
        {
            $this->solde+=$somme;
        }
        else
        { echo "Montant invalide !!" ;}
    }

}

?>

<!-- Ex3 : -->

<?php
class Produit
{
    private $nom;
    private $prix;

    public function __construct($n,$p)
    {
        $this->nom=$n;
        $this->prix=$p;
    }

    public function __get($name)
        {
            if ($name == 'Nom')
                return $this->nom;
            elseif ($name == 'Prix')
                return $this->prix;
        }
        public function __set($name, $value)
        {
            if ($name == 'Nom')
                $this->nom = $value;
            elseif ($name == 'Prix' && $value>0)
                $this->prix = $value;
            else
            throw new Exception("Donnee invalide");
        }

    // public function get_nom()
    //     {
    //         return $this->nom;
    //     }

    // public function set_nom($value)
    //     {
    //         $this->nom=$value;
    //     }

    // public function get_prix()
    //     {
    //         return $this->prix;
    //     }
    // public function set_prix($value)
    // {
    //     if ($value>0){$this->prix=$value;}
    //     else{echo "Prix invalide !!!";}
    // }

    public function __toString()
    {
        return "Nom : {$this->nom} - Prix : {$this->prix}";
    }

    public function Calcule_prix_final()
    {
        return $this->prix;
    }
}
class ProduitElectronique extends Produit
{
    private $marque;
    private $garantie;

    public function __construct($n,$p,$m,$g)
    {
        parent::__construct($n,$p);
        $this->marque=$m;
        $this->garantie=$g;
    }

    public function get_marque()
    {
        return $this->marque;
    }
    public function set_marque($value)
    { 
        $this->marque=$value;
    }

    public function get_garantie()
    {
        return $this->garantie;
    }

    public function set_garantie($value)
    {
        if ($value>0){$this->garantie=$value;}
        else{echo "Duree invalide !!!";}
    }

    public function prolonger_garantie($duree)
    {
        if ($duree>0){$this->garantie=$duree;}
        else{echo "Duree invalide !!!";}
    }

    public function __toString()
    {
        return parent::__toString()." - Marque : {$this->garantie} - Duree de garantie : {$this->garantie}";
    }
}
Class ProduitEnPromotion extends Produit
{
    private $pourcentage_reduction;

    public function __construct($n,$p,$pr='')
    {
        parent::__construct($n,$p);
        $this->pourcentage_reduction=$pr;
    }

    public function Calculer_reduction()
    {
        return $this->prix * ($this->pourcentage_reduction / 100);
    }

    public function get_pourcentage_reduction()
    {
        return $this->pourcentage_reduction;
    }
    
    public function set_pourcentage_reduction($value)
    {
        if ($value>0 && $value<100){$this->pourcentage_reduction=$value;}
        else{echo "Valeur invalide !!!";}
    }

    public function Calcule_prix_final()
    {
        return parent::Calcule_prix_final() - $this->Calculer_reduction() ;
    }

    public function __toString()
    {
        return parent::__toString()." - Promotion : {$this->pourcentage_reduction} % ";
    }
}
?>

<!-- Ex4 : -->

<?php

abstract class Employe 
{
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;

    public function __construct($m,$n,$p,$dn)
    {
        $this->matricule = $m;
        $this->nom = $n;
        $this->prenom = $p;
        $this->dateNaissance = $dn;
    }

    public function get_matricule()
    {
        return $this->matricule;
    }
    public function set_matricule($value)
    {
        $this->matricule=$value;
    }

    public function get_nom()
    {
        return $this->nom;
    }
    public function set_nom($value)
    {
        $this->nom=$value;
    }

    public function get_prenom()
    {
        return $this->prenom;
    }
    public function set_prenom($value)
    {
        $this->prenom=$value;
    }

    public function get_dateNaissance()
    {
        return $this->dateNaissance;
    }
    public function set_dateNaissance($value)
    {
        $this->dateNaissance=$value;
    }

    public function __toString()
    {
        return "Matricule : {$this->matricule} - Nom : {$this->nom} - Prenom : {$this->prenom} - Date de Naissance : {$this->dateNaissance->format('Y-m-d')}"; 
    }

    public abstract function GetSalaire();
}

class Ouvrier extends Employe
{
   private static $SMIG=3000;
   private $dateEntree;

   public function __construct($m,$n,$p,$dn,$de)
   {
    parent::__construct($m,$n,$p,$dn);
    $this->dateEntree=$de;
   }

    public function get_dateEntree()
    {
        return $this->dateEntree;
    }
    public function set_dateEntree($value)
    {
        $this->dateEntree=$value;
    }

    public static function get_SMIG()
    {
        return self::$SMIG;
    }
    public static function set_SMIG($value)
    {
        if($value>0){self::$SMIG=$value;}
        else{echo "Valeur Invalide !!!";}
    }

    public function GetSalaire()
    {
        $Anciennete_annee=($this->dateEntree ->diff(new DateTime()))->y;

        $salaire= self::$SMIG + $Anciennete_annee*100;

        if ($salaire > self::$SMIG*2){return self::$SMIG*2 ;}
        else{return $salaire;}
    }

    public function __toString()
    {
        return parent::__toString()." - Salaire : {$this->GetSalaire()}";
    }
}

class Cadre extends Employe
{
    private $indice;

    public function __construct($m,$n,$p,$dn,$i)
    {
        parent::__construct($m,$n,$p,$dn);
        $this->Indice=$i;
    }

    public function __get($name)
    {
        if($name=="Indice")
        {return $this->indice;}
    }

    public function __set($name, $value)
    {
        $T=[1,2,3,4];
        $b=false;
        foreach($T as $x)
        {
            if($value == $x){$b=true;break;}
        }
        if($name=="Indice" && $b==true )
        {$this->indice = $value;}
        else{throw new Exception("Indice Invalide !!");}
    }

    // public function set_indice( $value)
    // {
    //     $T=[1,2,3,4];
    //     $b=false;
    //     foreach($T as $x)
    //     {
    //         if($value == $x){$b=true;break;}
    //     }
    //     if( $b==true )
    //     {$this->indice = $value;}
    //     else{throw new Exception("Indice Invalide !!");}
    // }

    public function GetSalaire()
    {
        if ($this->indice ==1)
        {return ceil(130000/12);}
        elseif($this->indice ==2)
        {return ceil(150000/12);}
        elseif($this->indice ==3)
        {return ceil(170000/12);} 
        elseif($this->indice ==4)
        {return ceil(200000/12);}
    }

    public function __toString()
    {
        return parent::__toString()." - Indice : {$this->indice} - Salaire : {$this->GetSalaire()}";
    }
}

class Patron extends Employe
{
    private static $chiff_aff=6;
    private $pourcentage;

    public function __construct($m,$n,$p,$dn,$pr)
    {
       parent::__construct($m,$n,$p,$dn);
       $this->pourcentage=$pr; 
    }

    public function get_pourcentage()
    {
        return $this->pourcentage;
    }

    public function set_pourcentage($value)
    {
         $this->pourcentage=$value;
    }

    public static function get_chiff_aff()
    {
        return self::$chiff_aff;
    }
    public static function set_chiff_aff($value)
    {
        if($value>0){self::$chiff_aff=$value;}
        else{echo "Valeur Invalide !!!";}
    }

    public function GetSalaire()
    {
        return self::$chiff_aff * $this->pourcentage/100;
    }
    public function __toString()
    {
        return parent::__toString()." - Salaire Annuel : {$this->GetSalaire()} - Mon profif est patron ";
    }
}
?>

<!-- Ex5 : -->
<?php
class Etudiant
{
    private $nom;
    private $age;
    private $moyenne;

    public function __construct($n,$a,$m)
    {
        $this->nom=$n;
        $this->set_age($a);
        $this->set_moyenne($m);
    }
    
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_nom($value)
    {
        $this->nom=$value;
    }

    public function get_age()
    {
        return $this->age;
    }
    public function set_age($value)
    {
        if($value >= 18 && $value <= 26){ $this->age=$value;}
       else{throw new Exception("L'age doit etre entre 18 et 26 !!");}
    }

    public function get_moyenne()
    {
        return $this->moyenne;
    }
    public function set_moyenne($value)
    {
        if($value >= 0 && $value <= 20){ $this->moyenne=$value;}
       else{throw new Exception("La note doit etre entre 0 et 20 !!");}
    }

    public function __toString()
    {
        return "Nom : {$this->nom} - Age : {$this->age} - Moyenne : {$this->moyenne}";
    }
}
?>

<!-- Ex6 : -->
<?php 
class Stagiaire
{
    private $CIN;
    private $nom;
    private $prenom;
    private $filiere;
    private $note;

    public function __construct($c,$n,$p,$f,$nt)
    {
        $this->CIN=$c; 
        $this->nom=$n;
        $this->prenom=$p;  
        $this->filiere=$f;
        $this->note=$nt;  
    }

    public function get_CIN()
    {
        return $this->CIN;
    }
    public function set_CIN($value)
    {
        $this->CIN=$value;
    }
    
    public function get_nom()
    {
        return $this->nom;
    }
    public function set_nom($value)
    {
        $this->nom=$value;
    }

    public function get_prenom()
    {
        return $this->prenom;
    }
    public function set_prenom($value)
    {
        $this->prenom=$value;
    }

    public function get_filiere()
    {
        return $this->filiere;
    }
    public function set_filiere($value)
    {
        $this->filiere=$value;
    }

    public function get_note()
    {
        return $this->note;
    }
    public function set_note($value)
    {
        $this->note=$value;
    }

    public function __toString()
    {
        return "CIN :{$this->CIN} - Nom complet : {$this->nom} {$this->prenom} - Filiere : {$this->filiere} - Note : {$this->note}";
    }
}
?>