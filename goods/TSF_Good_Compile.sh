#!/bin/sh

inotifywait -m -e modify,create,delete --format %w%f "TSF_Goods_Index.csv"|
while read files;do
    ./TSF_Good_Compile.php
done
