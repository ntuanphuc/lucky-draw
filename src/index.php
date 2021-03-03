<?php

namespace ntuanphuc\LuckyDraw;

class Index
{
    public function random($from = 0, $to = 100){
        return rand($from, $to);
    }
}