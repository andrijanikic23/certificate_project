<?php

    require_once "Base.php";  // Uključivanje klase Base
    

    // Kreiranje objekta klase Base za konekciju sa bazom
    $base = new Base();

    // Izvršavanje SQL upita
    $result = $base-> sql-> query("SELECT * FROM accommodations");

    // Provera da li je upit uspešan
    if ($result) 
    {

        // Dohvatanje svih rezultata kao asocijativni niz
        $ads = $result->fetch_all(MYSQLI_ASSOC);  // Koristi fetch_all na objektu $result

    }
    else 
    {
        echo "Error: " . $base->sql->error;  // Ispisivanje greške ako upit nije uspešan
    }

    
        