<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("class.php");

    // Ex1
    // $c1=new CompteBancaire("Ahmed",2000);
    // $c1->afficher_info();
    // $c1->deposer(3000);
    // echo $c1->get_solde()."<br>";
    // $c1->retirer(6000);
    // echo $c1->get_solde()."<br>";



    // Ex2
    $client1=new Client("12345","Ahmed","Ali","0700000000");
    // $client1->CIN;
    // $client1->Nom;
    // $client1->Prenom="Karim";
    // $client1->Afficher();

    $compte=new Compte($client1,3000);
    //  echo $compte->Codecompte;
    //  echo $compte->Solde;
    echo $compte;
    // echo "<br> Crediter : <br>";
    // $compte->Crediter(200);
    // echo $compte;
    // echo "<br> Debiter : <br>";
    // $compte->Debiter(2000);
    // echo $compte;



    // Ex3
    // Classe Produit :

    // $produit=new Produit("Produit1",300);
    // echo $produit;
    // echo "<br>";
    // echo $produit->get_nom();
    // echo "<br>";
    // $produit->set_prix(200);
    // echo $produit->get_prix();
    // echo "<br>";
    // echo $produit->Calcule_prix_final();

    // Classe Produit Electronique :

    // $produitElect=new ProduitElectronique("ProduitElectronique1",3000,"marque1",2);
    // echo $produitElect;
    // echo "<br>";
    // echo $produitElect->get_nom();
    // echo "<br>";
    // $produitElect->set_garantie(-3);
    // echo $produitElect;
    // echo "<br>";
    // echo $produitElect->prolonger_garantie(4);
    // echo "<br>";
    // echo $produitElect;

    // Classe Produit En Promotion :

    // $pep=new ProduitEnPromotion("ProduitEnPromotion1",200,20);
    // echo $pep->Calculer_reduction();
    // echo "<br>";
    // echo "Le prix Final du produit : ".$pep->Calcule_prix_final()." Dh";
    // echo "<br>";
    // echo $pep;




    // Ex4 :
    // $ouvrier=new Ouvrier(111,"nom1","prenom1",new DateTime('2000-02-23'),new DateTime('2022-03-09'));
    // echo $ouvrier;
    // echo "<br>";
    // echo $ouvrier->GetSalaire();

    // $cadre=new Cadre(222,"nom2","prenom2",new DateTime('2000-02-23'),4);
    // echo $cadre;
    // echo "<br>";
    // echo $cadre->Indice;
    // echo "<br>";
    // echo "Le salaire mensuel du ".$cadre->get_nom()." ".$cadre->get_prenom()." est : ".$cadre->GetSalaire();

    // $patron=new Patron(121,"Patronx","PrenomX",new DateTime('2000-02-23'),60);
    // echo $patron;
    // echo "<br>";
    // echo $patron->get_pourcentage();
    // echo "<br>";
    // echo "Le salaire annuel du ".$patron->get_nom()." ".$patron->get_prenom()." est : ".$patron->GetSalaire();


    // Ex5:
    // $e=new Etudiant("nomx",19,19);
    // echo $e;


    // Ex6:
    $a=1;
    $listestagiaire=[
        new Stagiaire("EE1234","nom1","prenom1","Dev",19),
        new Stagiaire("EE2345","nom2","prenom2","Dev",18),
        new Stagiaire("EE3456","nom3","prenom3","AI",17)
    ];
//     // do{
//     echo "    Menu:   <br>
//     1-Afficher tous les stagiaires <br>
//     2-Affichers les notes de tous les stagiaires <br>
//     3- Afficher les stagiaires ayant une note superieur ou egale a une note donne <br>
//     4-Ajouter un stagiaire dont les informations sont entrees par l'utilisateur <br>
//     5-Rechercher un stagiaire par CIN <br>
//     6-Rechercher les stagiaires d'une filiere donnee<br>
//     7-Supprimer un stagiaire dont le CIN est entre par l'utilisateur <br>
//     8-Quitter ";
//     echo "
//     <form action='' method='post'>
//     <label for='choix' name='choix' id='choix'>Choix</label><br>
//     <input type='number' name='choix' max=8 min=1>
//     <input type='submit' value='Envoyer'>
//     </form>";
// // }while($_SERVER["REQUEST_METHOD"]!="POST" && isset($_POST["choix"])==false);
   if($a==1)
   {
        if(count($listestagiaire)!=0)
        {
            foreach($listestagiaire as $s)
            {echo $s."<br>";}
        }
        else{echo"Liste Vide !!";}
   } 
   elseif($a==2)
   {
        if(count($listestagiaire)!=0)
        {
            echo "Les notes de tous les stagiaires sont: <br> ";
            foreach($listestagiaire as $s)
            {echo $s->get_note()."<br>";}
        }
        else{echo"Liste Vide !!";}
    }
    elseif($a==3)
    {
        if(count($listestagiaire)!=0)
        {
            $note=18;
            foreach($listestagiaire as $s)
            {
             if ($s->get_note()>=$note)
             {echo $s->get_note()."<br>"; }
            }
        }
        else{echo"Liste Vide !!";}
    }
    elseif($a==4)
    {}
?>
</body>
</html>