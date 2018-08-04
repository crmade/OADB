#!/bin/bash
#scan for SMB
hosts=$1
nmap -sT -p 445 --script smb-vuln-ms17-010.nse $hosts -oX smb.xml
