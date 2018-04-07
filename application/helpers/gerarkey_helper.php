<?php

defined('BASEPATH') OR exit('No direct script access allowed');

function gerarkey() {
    return sha1(date("Ymdhis") . time() . '-' . random_int(10000, 250000));
}
