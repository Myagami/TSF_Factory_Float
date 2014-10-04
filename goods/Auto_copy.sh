#!/bin/sh
while inotifywait -e modify,create,delete -r ./ ; do
    cp cp `*.pak */*.pak ~/simutrans/addons/pak.dev`
done