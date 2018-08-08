<?php
/*
 * Cette fonction permet d'importer un fichier dans une table d'une base de données de type
 * postgresql
 $fichier => est le fichier que l'on veut importer
 */

function import_users_pgsql( $fichier ){
	$host = 'mon-host_pgsql';
	$user = 'user-bdd_pgsql';
	$cmd = <<< END_CMD

REQ=$(cat << 'END_REQ'
	
COPY "public.users FROM STDIN WITH CSV DELIMITER '"' ESCAPE '\'
END_REQ
)

/logiciels/postgresql/bin/pgsql -h $host -U $user < "$fichier"
END_CMD;

shell_exec($cmd);
}

