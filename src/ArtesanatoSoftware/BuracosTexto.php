<?php

namespace ArtesanatoSoftware;

class BuracosTexto
{
    private $buracos = [
        'a' => 1,
        'b' => 1,
        'd' => 1,
        'e' => 1,
        'g' => 2,
        'o' => 1,
        'p' => 1,
        'q' => 1,
        'A' => 1,
        'B' => 2,
        'D' => 1,
        'O' => 1,
        'P' => 1,
        'Q' => 1,
        'R' => 1,
    ];

    public function getBuracos($texto)
    {
        $count = 0;
        for($i=0; $i < strlen($texto); $i++) {
            $count += $this->countBuraco($texto[$i]);

        }

        return $count;
    }

    private function countBuraco($letra)
    {
        if (isset($this->buracos[$letra])) {
            return $this->buracos[$letra];
        }

        // if (in_array($letra, array_keys($this->buracos))) {
        //     return $this->buracos[$letra];
        // }

        return 0;
    }

}
