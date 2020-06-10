<?php

class About extends Controller {
    public function index($nama = 'Sandhika', $pekerjaan = 'Dosen', $umur = 32)
    {
        echo "nama saya $nama, dan saya seoran $pekerjaan";
    }

    public function page()
    {
        echo 'aboute/page';
    }
}
