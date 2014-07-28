#!/bin/sh

while inotifywait -e modify -e create -e delete -r ./ ; do
    git add * ;
    Today='';
    Today=`date +"%y/%m/%d %H:%I:%S"`;
    git commit -m "Update for $Today" ;
    git push github master  ;
done