<?php

namespace lib;

class local {
    
    const MORE_BOOKS        = "Nezvolili jste <strong>20</strong> knih.";
    const UNKNOWN_ACTION    = "Neznámá akce";
    const BOOK_NOT_FOUND    = "Kniha nenalezena";
    const CLEARED           = "Kánon vyčištěn";
    const NO_BOOK_SELECTED  = "Žádná kniha nezvolena";
    const NO_LIST_SELECTED  = "Žádný kánon nezvolen";
    const NO_LIST_FOUND     = "Kánon nenalezen";
    const REGION_FAIL_TITLE = "Nezvolili jste dostatečný počet děl z jednotlivých období";
    const SAVE_FAILED       = "Odeslání se nepodařilo";
    const SAVE_SUCCESS      = "Kánon odeslán";
    const LIST_PRESENT      = "Kánon již přidán";
    const LIST_REMOVED      = "Kánon odebrán";
    const LIST_DOWN_EMPTY   = "Není co stahovat";
    const LIST_DOWN_ERROR   = "Archiv nelze vytvořit";
    const UNKNOWN_BOOKS     = "Kánon obsahuje neznámé knihy";
    const NO_CATEGORY       = "Je nutné vybrat dvě díla poezie nebo prózy a dvě dramata";

    const MISSING_UNAME     = "Vyplňtě jméno";
    const MISSING_CLASS     = "Vyberte třídu";

    static function MORE_AUTHORS ($name) {
        return "Máte více než 2 díla od autora <strong>" . $name . "</strong>";
    }

    const MIN_REGIONS   = [2, 3, 3, 4, 2];
    const MIN_CATEGORIES= [2, 2];
    const MAX_AUTHORS   = 2;
    const BOOKS         = 25;
    const CLASSES       = [
        "a" => "Oktáva A",
        "b" => "Oktáva B",
        "c" => "4. C"
    ];
    
    static function CLASSNAME ($cls) {
        if (local::CLASSES[$cls] !== null) {
            return local::CLASSES[$cls];
        } else {
            return "Neznámá třída";
        }
    }

    const REGIONS = [
        "Světová a česká literatura do konce 18. století",
        "Světová a česká literatura 19. století",
        "Světová literatura 20. století",
        "Česká literatura 20. stolet",
        "Novější a současná česká a světová literatura"
    ];

    const CATEGORIES = [
        "Poezie nebo Próza",
        "Drama"
    ];

    const GRAPHICONS = [
        "ok" => "<span class='glyphicon glyphicon-ok' aria-hidden='true'></span> ",
        "failed" => "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span> "
    ];

}