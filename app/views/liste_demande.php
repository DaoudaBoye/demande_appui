<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>CodePen - nice-forms.css</title>
  <!-- Vos liens de feuilles de style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./table.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="demo-page">
  <div class="demo-page-navigation">
      <nav>
        <ul>
          <li>
            <a href="index.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
              <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
            </svg>
              Insérer une demande</a>
          </li>
          <li>
            <a href="liste_demande.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                <polygon points="12 2 2 7 12 12 22 7 12 2" />
                <polyline points="2 17 12 22 22 17" />
                <polyline points="2 12 12 17 22 12" />
              </svg>
              Voir la liste des demandes</a>
          </li>
          <li>
            <a href="#input-types">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify">
                <line x1="21" y1="10" x2="3" y2="10" />
                <line x1="21" y1="6" x2="3" y2="6" />
                <line x1="21" y1="14" x2="3" y2="14" />
                <line x1="21" y1="18" x2="3" y2="18" />
              </svg>
              Modifier une demande</a>
          </li>
        
          <li>
            <a href="#customization">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sliders">
                <line x1="4" y1="21" x2="4" y2="14" />
                <line x1="4" y1="10" x2="4" y2="3" />
                <line x1="12" y1="21" x2="12" y2="12" />
                <line x1="12" y1="8" x2="12" y2="3" />
                <line x1="20" y1="21" x2="20" y2="16" />
                <line x1="20" y1="12" x2="20" y2="3" />
                <line x1="1" y1="14" x2="7" y2="14" />
                <line x1="9" y1="8" x2="15" y2="8" />
                <line x1="17" y1="16" x2="23" y2="16" />
              </svg>
              Enregistrer un SFD</a>
          </li>
          <li>
            <a href="#contribute">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6" />
                <line x1="8" y1="12" x2="21" y2="12" />
                <line x1="8" y1="18" x2="21" y2="18" />
                <line x1="3" y1="6" x2="3.01" y2="6" />
                <line x1="3" y1="12" x2="3.01" y2="12" />
                <line x1="3" y1="18" x2="3.01" y2="18" />
              </svg>
              Voir la liste des SFD</a>
          </li>
          <li>
            <a href="#reset">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power">
                <path d="M18.36 6.64a9 9 0 1 1-12.73 0" />
                <line x1="12" y1="2" x2="12" y2="12" />
              </svg>
              Déconnexion</a>
          </li>
        </ul>
      </nav>
    </div>
    <main class="demo-page-content col-12">
      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des demandes</h4>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">id_demande</th>
                          <th scope="col">Beneficiaire</th>
                          <th scope="col">nomBeneficiaire</th>
                          <th scope="col">Type_appui</th>
                          <th scope="col">Type_appui</th>
                          <th scope="col">Type_activite</th>
                          <th scope="col">intitule</th>
                          <th scope="col">date_demande</th>
                          <th scope="col">Region_beneficiaire</th>
                          <th scope="col">Departement_beneficiaire</th>
                          <th scope="col">Quantite_equipement_octroyes</th>
                          <th scope="col">Cout_appuis</th>
                          <th scope="col">Observation</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          require_once("./db.php") ;
                      
                          $sql = "SELECT * FROM liste_demande_appui";
                          $result = $connexion->query($sql);

                          if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                              echo "<tr>";
                              echo "<th scope='row'>" . $row["id_demande"] . "</th>";
                              echo "<td>" . $row["Beneficiaire"] . "</td>";
                              echo "<td>" . $row["nomBeneficiaire"] . "</td>";
                              echo "<td>" . $row["Type_appui"] . "</td>";
                              echo "<td>" . $row["Type_appui"] . "</td>";
                              echo "<td>" . $row["Type_activite"] . "</td>";
                              echo "<td>" . $row["intitule"] . "</td>";
                              echo "<td>" . $row["date_demande"] . "</td>";
                              echo "<td>" . $row["Region_beneficiaire"] . "</td>";
                              echo "<td>" . $row["Departement_beneficiaire"] . "</td>";
                              echo "<td>" . $row["Quantite_equipement_octroyes"] . "</td>";
                              echo "<td>" . $row["Cout_appuis"] . "</td>";
                              echo "<td>" . $row["Observation"] . "</td>";
                              echo "</tr>";
                            }
                          } else {
                            echo "<tr><td colspan='13'>Aucun résultat</td></tr>";
                          }

                          $connexion->close();
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer>Made By ♥ FIMF</footer>
    </main>
  </div>

  <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
 <!-- Inclure les fichiers JavaScript de Bootstrap (jQuery inclus) -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Vos scripts JS -->
</body>
</html>

