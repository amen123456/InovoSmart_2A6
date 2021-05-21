<?php
include "header.php";


?>
    <div class="content-wrapper">
        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Gestion des articles</a>
                </li>
                <li class="breadcrumb-item active">Ajouter Article</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Ajouter Article</div>
                <div class="card-body">
                    <form action="" method="POST">
                        <table align="center">

                            <tr>
                                <td>
                                    <label for="ide">ide:
                                    </label>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="ide" id="ide" maxlength="20"required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="datedeb">datedeb:
                                    </label>
                                </td>
                                <td><input type="date" class="form-control" name="datedeb" id="datedeb" maxlength="20"required ></td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="datefin">datefin:
                                    </label>
                                </td>
                                <td>
                                    <input type="date" class="form-control" name="datefin" id="datefin" required >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pourcentage">pourcentage:
                                    </label>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="pourcentage" id="pourcentage"required >
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <input type="submit" class="form-control" value="Ajouter" name = "ajouter">
                                </td>
                                <td>
                                    <input type="reset" class="form-control" value="Annuler" >
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>


            </div>
        </div>

    </div>




<?php


// create user
//$offre = null;

// create an instance of the controller
//$userC = new offreC();
if (
    isset($_POST["ref"]) &&
    isset($_POST["ide"]) &&
    isset($_POST["datedeb"]) &&
    isset($_POST["datefin"])   &&
    isset($_POST["pourcentage"])
){
    if (
        !empty($_POST["ref"]) &&
        !empty($_POST["ide"]) &&
        !empty($_POST["datedeb"]) &&
        !empty($_POST["datefin"]) &&
        !empty($_POST["pourcentage"])

    ) {
        $user = new Offre(

            $_POST['ide'],
            $_POST['datedeb'],
            $_POST['datefin'],
            $_POST['pourcentage']

			);
        $userC->ajouterPromo($user);
         header('Location:AfficherOffre.php');
    }
    else
        $error = "Missing information";
}

include "footer.php";

?>
