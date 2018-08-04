#!/bin/bash
#scan for alive hosts
network=$1
nmap -O -sVT -p 1-1023 $network -oX ./devices.xml
