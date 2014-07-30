#!/usr/bin/perl

use strict ;
use warnings ;
use Linux::Inotify2 ;

#このディレクトリ監視
my $watch_dir =  './';
my $inotify = Linux::Inotify2->new or die $!;

$inotify->watch(
    $watch_dir,
    IN_MODIFY | IN_CREATE | IN_DELETE,
    sub {
        my $e    = shift;
        my $name = $e->name;
        my $Mask = $e->mask;
	print $Mask.":".$name, "\n";
	
    }
);
1 while $inotify->poll ;
