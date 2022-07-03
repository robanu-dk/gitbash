<?php

namespace App\Models;

class Description
{
    private static $description = [
        'title' => 'About Me',
        'stakeholder' => 'BUMJ JIMM FST Universitas Airlangga',
        'description' => 'BUMJ memiliki kepanjangan Biro Usaha Milik JIMM merupakan biro yang terdapat di organisasi mahasiswa
        yang berada di Fakultas Sains dan Teknologi (FST) yang bernama JIMM. BUMJ bergerak di bidang yang
        berkaitan dengan usaha dan kewirausahaan. BUMJ sendiri memiliki event yang berupa kajian-kajian
        terkait kewirausahaan. Selain itu, BUMJ juga menjual beberapa produk secara online.',
        'creator1' => 'Jasmine Yulis Saputri',
        'nim1' => '(082011633001)',
        'creator2' => 'Robanu Dakhayin',
        'nim2' => '(082011633027)'
    ];

    public static function all()
    {
        return self::$description;
    }
}
