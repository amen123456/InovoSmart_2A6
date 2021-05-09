
<?php
include "../../config.php";
    require_once '../../model/user.php';
    require_once '../../controller/userC.php';


  if(isset($_POST['submit'])){
    $user = new user($_POST["id1"],$_POST["name"],$_POST["fname"],$_POST["email"],$_POST["num"],$_POST["date"],$_POST["class"],$_POST["sex"],$_POST["passw"]);
    $userC = new userC();
    
    $b=$userC->ajouterUser($user);
    
}


?>


 <!-- ======= Creer compte Section ======= -->

 <section id="Create" class="Create">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sign up</h2>
          <p>create account</p>
          <br>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="" method="post" >
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Nom: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="maximum 30 caractères" maxlength="30" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td>  Votre Prénom: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="maximum 30 caractères" maxlength="30" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Adresse Email: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Prénom.Nom@esprit.tn" pattern=".+@esprit.tn" required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Identifiant: </td>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" name="id1" class="form-control" id="id1" placeholder="xxxlllxxxx" maxlength="10"required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre numéro de téléphone: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="tel" class="form-control" name="num" id="num"   required>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Date de Naissance: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="date" class="form-control" name="date" id="date"  min="2002-01-01" required>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Classe: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">

                <select class="form-control" name="class" id="class">
                  <option value="1">1 Année</option>
                  <option value="2">2 Année</option>
                  <option value="3">3 Année</option>
                  <option value="4">4 Année </option>
                  <option value="5">5 Année</option>

                </select>

              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Sexe: </td>
              </div>
              <div class="col-md-6 form-group">
                <select class="form-control" name="sex" id="sex">
                  <option value="femme">Femme</option>
                  <option value="homme">Homme</option>
                    </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <td> Votre Mot de Passe: </td>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="password" class="form-control" name="passw" id="passw"  required>
              </div>
            </div>
            <br>


            <div class="text-center"><button class="btn btn-danger" name="submit"  type="submit"> Créer Compte </button></div>
            <br>
          </form>


        </div>
    </section>
    <!--end connexion section-->



<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Gp<span>.</span></h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
