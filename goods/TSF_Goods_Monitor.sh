#!/bin/sh
## 全体のモニター
while inotifywait -e modify,create,delete -r ./ ; do
    cp *.pak /home/hayate/simutrans/addons/pak.dev
done

