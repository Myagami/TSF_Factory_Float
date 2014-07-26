#!/bin/sh
Today=`date +"%y/%m/%d %H:%I:%S"`;
git add *
git commit -a -m "update for  `$Today`" ;
git push github master;
