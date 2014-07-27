#!/bin/sh
Today="" ;
Today=`date +"%y/%m/%d %H:%I:%S"`;
Today="Update for"$Today;
`git commit -a -m $Today`;
git push github master;
