<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Développer la présence en ligne de l’organisation></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">Développer la présence en ligne de l’organisation</h1>

    <div class="list-group shadow">
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalRessources">
            ▸ Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques
        </button>
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalReferentiels">
            ▸ Référencer les services en ligne de l’organisation et mesurer leur visibilité.
        </button>
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalHabilitations">
            ▸ Participer à l’évolution d’un site Web exploitant les données de l’organisation.
        </button>
       
    </div>
</div>

<!-- MODAL 1 : Ressources numériques -->
<div class="modal fade" id="modalRessources" tabindex="-1" aria-labelledby="modalRessourcesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalRessourcesLabel"> </h5>Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Exemple de ressources numériques à recenser :</p>
        <ul>
          <li>Serveurs</li>
          <li>Applications</li>
          <li>Bases de données</li>
          <li>Postes clients</li>
          <li>Réseaux et périphériques</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 2 : Référentiels -->
<div class="modal fade" id="modalReferentiels" tabindex="-1" aria-labelledby="modalReferentielsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="modalReferentielsLabel">Traiter des demandes concernant les services réseau et système, applications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Les référentiels et standards adoptés par l’entreprise :</p>
        <ul>
          <li>ITIL – Gestion des services informatiques</li>
          <li>ISO/IEC 27001 – Sécurité de l’information</li>
          <li>RGPD – Protection des données personnelles</li>
          <li>Normes de sauvegarde (3-2-1 Backup)</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 3 : Habilitations -->
<div class="modal fade" id="modalHabilitations" tabindex="-1" aria-labelledby="modalHabilitationsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="modalHabilitationsLabel">Participer à l’évolution d’un site Web exploitant les données de l’organisation.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p>Exemples de bonnes pratiques :</p>
        <ul>
          <li>Attribuer les droits selon le principe du moindre privilège</li>
          <li>Créer des groupes d’utilisateurs (admin, standard, invité)</li>
          <li>Mettre en place une revue périodique des accès</li>
          <li>Consigner les changements dans un registre d’habilitation</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>


  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
