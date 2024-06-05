<?php

class AudioPlayer implements MediaPlayer {
    private $mediaAdapter;

    public function play(string $audioType, string $fileName) {
        if (strcasecmp($audioType, "mp3") == 0) {
            echo "Playing mp3 file. Name: " . $fileName . PHP_EOL;
        } elseif (strcasecmp($audioType, "vlc") == 0 || strcasecmp($audioType, "mp4") == 0) {
            $this->mediaAdapter = new MediaAdapter($audioType);
            $this->mediaAdapter->play($audioType, $fileName);
        } else {
            echo "Invalid media. " . $audioType . " format not supported" . PHP_EOL;
        }
    }
}
