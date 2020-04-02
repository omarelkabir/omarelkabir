#!/bin/bash
gid=$(wbinfo --group-info=$3)
#echo $gid
gid_number=$(echo $gid |cut -d: -f3)
#echo $gid_number
#echo $1
#echo $2
#echo $3
#echo $4
#echo $5
sudo samba-tool user create $1 $2 --gid-number=$gid_number --home-directory=$4 --department=$5
