#!/bin/bash

for po in `ls merge`;
do
    msgmerge -v -o new/${po} merge/${po} ${po}
done
