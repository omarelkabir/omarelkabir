#!/bin/bash
echo "Deleting s4 posix user "$1 > del_user.txt
samba-tool user delete $1
echo $?
wbinfo -u
sleep 2
echo $1" deteled"
 
