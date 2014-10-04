#!/bin/sh
while inotifywait -e modify,create,delete -r ./ ; do
    cp `*.pak */*.pak ~/simutrans/addons/pak.dev`
done