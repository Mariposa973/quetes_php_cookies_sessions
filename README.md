# Critères de validation
On peut s'identifier de manière simple avec seulement un nom d'utilisateur,
Le nom d'utilisateur, donné lors de l'identification, est affiché dans le header sur toutes les pages à partir des informations de sessions,
Le panier est stocké dans la session de l’utilisateur et est affiché sur la page "Panier".
Il est possible d’accéder uniquement aux pages login.php et index.php tant que l’utilisateur n’est pas connecté.
La page login.php devient inaccessible une fois l’utilisateur connecté. Ce dernier est redirigé vers la page index.php s'il tente d'y accéder.
L'utilisateur peut également se délogger à l'aide d'un bouton "déconnexion" et la session est alors détruite.
[BONUS] Gérer les quantités de cookies dans ton panier. Cette tâche est assez complexe, tu peux tenter de le faire, mais ce n’est pas le but de la quête. Ne perds pas plus de temps que de raison là-dessus.
