<?php

class MediaAdapter implements MediaPlayer {
    private $advancedMusicPlayer;

    public function __construct(string $audioType) {
        if (strcasecmp($audioType, "vlc") == 0) {
            $this->advancedMusicPlayer = new VlcPlayer();
        } elseif (strcasecmp($audioType, "mp4") == 0) {
            $this->advancedMusicPlayer = new Mp4Player();
        }
    }

    public function play(string $audioType, string $fileName) {
        if (strcasecmp($audioType, "vlc") == 0) {
            $this->advancedMusicPlayer->playVlc($fileName);
        } elseif (strcasecmp($audioType, "mp4") == 0) {
            $this->advancedMusicPlayer->playMp4($fileName);
        }
    }
}
