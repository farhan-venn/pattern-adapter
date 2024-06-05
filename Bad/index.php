<?php

require_once 'AudioPlayer.php';
require_once 'VlcPlayer.php';
require_once 'Mp4Player.php';

$audioPlayer = new AudioPlayer();
$audioPlayer->play("mp3", "beyond the horizon.mp3");
$audioPlayer->play("mp4", "alone.mp4");
$audioPlayer->play("vlc", "far far away.vlc");
$audioPlayer->play("avi", "mind me.avi");
