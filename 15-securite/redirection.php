<!-- explications théoriques concernant les redirections -->

<!-- selon le statut du visiteur, non connecté, connecté, administrateur ou utilisateur simple, on lui donnera l'accès à certaines pages mais pas à d'autres -->

<!-- pour celui qui est connecté on va l'empêcher d'accéder à la page inscription ou connexion. Il est déjà connecyé, il n'a pas besoin -->

<!-- en haut de la page inscription et connexion, j'écrirai ceci -->
<!-- if(internauteConnecte){
    header('location:profil.php')
} -->
<!-- avec header('location:profil.php') on le redirige vers sa page profil -->

<!-- deuxième exemple -->
<!-- le back-office ne doit être accessible que pour les administrateurs du site -->
<!-- pour toutes les pages du back-office j'écrirai ceci en haut des fichiers -->

<!-- if(!internauteConnecteAdmin){
    header('location:profil.php');
} -->

<!-- S'il n'a pas le statut admin, il est redirigé vers son profil -->