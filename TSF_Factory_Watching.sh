#!/bin/sh
while inotifywait -e modify -e create -e delete -r ./ ; do
    Today_Tag=`date +"%y/%m/%d"`;
    git add * ;
    Today='';
    Today=`date +"%y/%m/%d %T"`;
    git commit -m "Update for $Today" ;
    git push github master ;
    Today='';
done