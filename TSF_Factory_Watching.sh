#!/bin/sh
while inotifywait -e modify -e create -e delete -r ./ ; do
    #追加ファイルを確認
    git add * ;
    #今日の日付
    Today='';
    Today=`date +"%y/%m/%d %T"`;
    #commit
    git commit -m "Update for $Today" ;
    #to github
    git push github master ;
done