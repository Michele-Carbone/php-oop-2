<?php

function finalPrice($price, $discount)
{
    return round($price - ($price * $discount / 100), 2);
}
