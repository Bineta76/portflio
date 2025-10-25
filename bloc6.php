<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Organiser son développement professionnel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">Organiser son développement professionnel</h1>

    <div class="list-group shadow">
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalRessources">
            ▸ Mettre en place son environnement d’apprentissage personnel
        </button>
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalReferentiels">
            ▸ Mettre en œuvre des outils et stratégies de veille informationnelle
        </button>
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalHabilitations">
            ▸ Gérer son identité professionnelle
        </button>
        <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#modalContinuite">
            ▸ ▸Développer son projet professionnel
        </button>
        
        </button>
    </div>
</div>

<!-- MODAL 1 : Ressources numériques -->
<div class="modal fade" id="modalRessources" tabindex="-1" aria-labelledby="modalRessourcesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="modalRessourcesLabel">Mettre en place son environnement d’apprentissage personnel</h5>
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
        <h5 class="modal-title" id="modalReferentielsLabel">Gérer son identité professionnelle</h5>
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
        <h5 class="modal-title" id="modalHabilitationsLabel">Mettre en œuvre des outils et stratégies de veille informationnelle</h5>
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

<!-- MODAL 4 : Continuité du service -->
<div class="modal fade" id="modalContinuite" tabindex="-1" aria-labelledby="modalContinuiteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="modalContinuiteLabel">Vérifier la continuité d’un service informatique</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Élaborer un plan de reprise d’activité (PRA)</li>
          <li>Prévoir un plan de continuité (PCA)</li>
          <li>Tester régulièrement les procédures de restauration</li>
          <li>Mettre en place des systèmes redondants</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 5 : Sauvegardes -->
<div class="modal fade" id="modalSauvegardes" tabindex="-1" aria-labelledby="modalSauvegardesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title" id="modalSauvegardesLabel">Gérer des sauvegardes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Appliquer la règle 3-2-1 : 3 copies, 2 supports, 1 hors site</li>
          <li>Automatiser les sauvegardes quotidiennes</li>
          <li>Vérifier la validité des sauvegardes</li>
          <li>Conserver une copie chiffrée en ligne (cloud sécurisé)</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- MODAL 6 : Règles d’utilisation -->
<div class="modal fade" id="modalRegles" tabindex="-1" aria-labelledby="modalReglesLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title" id="modalReglesLabel">▸Développer son projet professionnel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <ul>
          <li>Respecter la charte informatique</li>
          <li>Éviter l’installation de logiciels non autorisés</li>
          <li>Protéger les mots de passe et les sessions</li>
          <li>Signaler toute tentative d’accès suspecte</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

