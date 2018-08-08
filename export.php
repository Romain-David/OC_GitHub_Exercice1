<?php
/* Cette fonction permet d'exporter la table users d'une base de données
de type postgresql
$fichier => est le nom du fichier que le souhaite

 */
function export_users_psql( $fichier ){

	$host = 'mon-serveur-pgsql';
	$user = 'user-bdd-pgsql';
	$cmd = '<<< END_CMD

REQ=$(cat << 'END_REQ'
COPY "public".users TO STDOUT WITH CSV DELIMITER ';' QUOTE'"' ESCAPE '\'
END_REQ
)

/logiciels/postgresql/bin -h $host -U $users -c "\$REQ" > "$fichier"

END_CMD;

shell_exec($cmd);
}

?>

