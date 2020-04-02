#!/bin/bash
$(rm users.txt)
$(wbinfo -u > temp.txt)
for LINEA in $(cat temp.txt); do
	#echo $LINEA
	NOM_USER=$(echo $LINEA | cut -d'\' -f2)
	#echo "**USER**"
	#echo $NOM_USER
	IDS=$(wbinfo -r $NOM_USER | head -3 | tail -1)
	#echo "**IDS**"
	#echo $IDS
	ID_GROUP=$(echo $IDS | cut -d' ' -f1)
	#echo "**IDGROUP**"
	#echo $ID_GROUP
	NOM_GRUPO=$(wbinfo --gid-info $ID_GROUP | cut -d: -f1)
	#echo $NOM_GRUPO
	FOLDER=$(wbinfo -i $NOM_USER | cut -d: -f6)
	#echo $FOLDER
	echo $NOM_USER@$NOM_GRUPO@$FOLDER>>users.txt
done
 
