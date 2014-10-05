#!/bin/sh
BRANCH=$1

## 全体のモニター
while inotifywait -e modify,create,delete -r ./ ; do
    #追加ファイルを確認
    git add * ;
    #今日の日付
    Today='';
    Today=`date +"%y/%m/%d %T"`;
    #commit
    git commit -m "Update for $Today" -a  ;
    #to github
    #git push github Devel ;
    git push github $BRANCH ;
done

