<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaire</title>
    <link rel="stylesheet" href="../../bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">
    <style>
        .hidden {
            display: none;
        }

        .afficher {
            display: block;
        }
    </style>
</head>
<?php
session_start();
?>

<body>
    <?php
    if (!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin'] != true) {
        header('location:index.php');
        exit;
    } else {
        echo "<div class='container d-flex justify-content-center align-items-center  p-1'>
        <div class='alert alert-primary'>Bonjour " . $_SESSION['nom'] . " " . $_SESSION['prenom'] . " dans votre espace privee</div>
        <a href='deconn.php' class='btn btn-primary mx-1'>Se déconnecter</a></div>";

        try {
            include("../conn.php");
            $sql = "select * from examens ";
            $stmt = $con->prepare($sql);
            $r = $stmt->execute();
            if ($r) {
                $examens = $stmt->fetchAll(PDO::FETCH_ASSOC);
                // var_dump($examens);
            }

            $sql2 = "select * from notes where stagiaire=:numero ";
            $stmt2 = $con->prepare($sql2);
            $stmt2->bindParam("numero",$_SESSION['numero']);
            $r2 = $stmt2->execute();
            if ($r2) {
                $examensspecifies = $stmt2->fetchAll(PDO::FETCH_ASSOC);
                // var_dump($examensspecifies);
            }
            } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>
    <div class='container d-flex justify-content-center align-items-center  p-1'>
        <a href=""><i class="bi bi-plus-circle-dotted " style="color:blue;" id="plus"></i></a>Information personnelles <br>
    </div>
    <form action="edit.php" method="post" id="informations" class="hidden">
        <table class="d-flex justify-content-center">
            <tr>
                <td><label for="nom" class=" form-label">Nom :</label></td>
                <td><input type="text" name="nom" id="nom" value="<?php echo $_SESSION['nom'] ?>" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="prenom" class=" form-label">Prenom :</label></td>
                <td><input type="text" name="prenom" id="prenom" value="<?php echo $_SESSION['prenom'] ?>" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="tel" class=" form-label">Telephone :</label></td>
                <td><input type="tel" name="tel" id="tel" value="<?php echo $_SESSION['tel'] ?>" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="login" class=" form-label">Login :</label></td>
                <td><input type="text" name="login" id="login" value="<?php echo $_SESSION['login'] ?>" class="form-control" required></td>
            </tr>
            <tr>
                <td><label for="password" class=" form-label">Mot de passe :</label></td>
                <td><input type="text" name="password" id="password" value="<?php echo $_SESSION['password'] ?>" class="form-control" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Modifier" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <script>
        let informationsVisible = false;

        document.getElementById("plus").addEventListener("click", function(event) {
            event.preventDefault();
            const informations = document.getElementById("informations");
            const plusIcon = document.getElementById("plus");

            if (!informationsVisible) {
                // Afficher les informations
                informations.classList.remove("hidden");
                plusIcon.classList.remove("bi-plus-circle-dotted");
                plusIcon.classList.add("bi-dash-circle-dotted");
            } else {
                // Cacher les informations
                informations.classList.add("hidden");
                plusIcon.classList.remove("bi-dash-circle-dotted");
                plusIcon.classList.add("bi-plus-circle-dotted");
            }

            // Mettre à jour l'état de visibilité
            informationsVisible = !informationsVisible;
        });
    </script>


    <div class='container d-flex justify-content-center align-items-center  p-1'>
        <a href=""><i class="bi bi-plus-circle-dotted " style="color:blue;" id="plus1"></i></a>Examens
    </div>
    <div class='d-flex justify-content-center align-items-center  p-1 '>
        <form action="" method="post" id="InfoExm" class="hidden">
            <label for="Identifiant" class="form-label">Identifiant</label>
            <select name="Identifiant" id="Identifiant" class="form-control w-75 m-1 ">
                <option value="" disabled selected class="w-25"></option>
                <?php
                if (count($examensspecifies) != 0) {
                    foreach ($examensspecifies as $e) {
                        echo "<option value='". $e['exame'] ."'>".$e['exame']."</option>";
                    }
                }
                else{echo "<option value='Aucun exame'>Aucun exame</option>";}
                ?>
            </select>
        </form>
    </div>
    <script>
        let examensVisible = false;

        document.getElementById("plus1").addEventListener("click", function(event) {
            event.preventDefault();
            const infoExm = document.getElementById("InfoExm");
            const plusIcon = document.getElementById("plus1");

            if (!examensVisible) {
                // Afficher les informations
                infoExm.classList.remove("hidden");
                plusIcon.classList.remove("bi-plus-circle-dotted");
                plusIcon.classList.add("bi-dash-circle-dotted");
            } else {
                // Cacher les informations
                infoExm.classList.add("hidden");
                plusIcon.classList.remove("bi-dash-circle-dotted");
                plusIcon.classList.add("bi-plus-circle-dotted");
            }

            // Mettre à jour l'état de visibilité
            examensVisible = !examensVisible;
        });
        document.getElementById('Identifiant').addEventListener('change', function() {
          document.getElementById('InfoExm').submit();
        });
    </script>
    <?php
    if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['Identifiant']))
    foreach($examens as $e)
    {
        if($e['id']==$_POST['Identifiant'])
        {
            echo"<table class='container d-flex justify-content-center align-items-center'>
            <tr>
                <td>Salle :</td>
                <td>".$e['salle']."</td>
            </tr>
            <tr>
                <td>Date :</td>
                <td>".$e['date']."</td>
            </tr>
            <tr>
                <td>Type :</td>
                <td>".$e['type']."</td>
            </tr>
            </table>";
        }
    }
    ?>
    <?php
    if(isset($_SESSION['updated']) )
    {
        if($_SESSION['updated'])
        {
            echo '<div class="container d-flex justify-content-center align-items-center  p-1">
            <div class="alert alert-success">Donnees bien modifier </div></div>';
        }
        else
        {
            echo '<div class="container d-flex justify-content-center align-items-center  p-1">
            <div class="alert alert-danger">Aucun modification </div></div>';
        }
    }
    ?>

</body>

</html>