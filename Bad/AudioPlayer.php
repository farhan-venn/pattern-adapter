<?php

class AudioPlayer {
    private $vlcPlayer;
    private $mp4Player;

    public function __construct() {
        $this->vlcPlayer = new VlcPlayer();
        $this->mp4Player = new Mp4Player();
    }

    public function play(string $audioType, string $fileName) {
        if (strcasecmp($audioType, "mp3") == 0) {
            echo "Playing mp3 file. Name: " . $fileName . PHP_EOL;
        } elseif (strcasecmp($audioType, "vlc") == 0) {
            $this->vlcPlayer->playVlc($fileName);
        } elseif (strcasecmp($audioType, "mp4") == 0) {
            $this->mp4Player->playMp4($fileName);
        } else {
            echo "Invalid media. " . $audioType . " format not supported" . PHP_EOL;
        }
    }
}
