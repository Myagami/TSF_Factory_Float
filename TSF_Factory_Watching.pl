#!/usr/bin/perl

use strict ;
use warnings ;
use Linux::Inotify2 ;

#このディレクトリ監視
my $watch_dir =  './';
my $inotify = Linux::Inotify2->new or die $!;

$inotify->watch(
    $watch_dir,
    IN_CLOSE_WRITE | IN_MOVED_TO,
    sub {
        my $e    = shift;
        my $name = $e->fullname;
        print $name, "\n";

    }
);
