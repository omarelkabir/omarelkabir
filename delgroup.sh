#!/bin/bash
echo "Deleting s4 posix user "$1 > del_user.txt
sudo samba-tool group delete $1
echo $?
sudo samba-tool group list
sleep 2
echo $1" deteled"
 
