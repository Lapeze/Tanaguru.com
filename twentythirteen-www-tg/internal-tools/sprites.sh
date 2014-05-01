#!/bin/bash

# Achtung: glue is required to build sprites
# https://glue.readthedocs.org/en/latest/installation.html#debian-ubuntu

glue --source ../Images/Front-page/ --less ../ --img ../Images/

echo ""
echo "... and don't forget to optimze the result image with http://kraken.io/ (lostless)"
echo ""