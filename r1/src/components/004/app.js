/*

React Developer Tools - Chrome extension:
https://chrome.google.com/webstore/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi/related

UZDUOTYS:
https://docs.google.com/document/d/1sMMk_ROxJsXIR3ZFuaPEu0OvrwztyYCjkz13ELKUaPs/edit
https://docs.google.com/document/d/1omOws0Y6jkbuaXKI7-lGvcG6R7FanuZPbmch3wCYr4A/edit

SASS FAILAI: 
https://sass-lang.com/

Kad narsykle suprastu sass faila, ji reikia sukonvertuoti i css.
Modernios narsykles konvertuoja sass i css pacios.
sass ir css rules yra tos pacios, pagrindinis skirtumas:

PVZ., galime naudoti h2, bet h2 gali buti labai daug, dirbant keli projekte visi h2 pjausis,

h2 {
    margin: 0;
}

todel reikia juos ivardinti tiksliau:

.box h2 {
    margin:0
}

.box h2 span {
    color: white;
    font-size: 10px;
    letter-spacing: 7px;
}


.box {
    margin: 10px
    padding: 10px;
    border: 1px solid gray;

    h2 {
        margin: 0;

        span {
            color: white;
            font-size: 10px;
            letter-spacing: 7px;
        }
    }
}

Pervadiname .css i .scss (vadiname 'sass' super css).


Kintamieji pavaizduojami: '$' simboliu + kintamasis + dvitaskis:
$a: orange;

Paleisti sass failus terminale: 

-> 

&          -> kopijuoja pries tai esancia reiksme.
           PVZ: klase:  &.red  
&:after 
&:before


REACT:

<> .. </>       --> tuscias tag'as.
React funcija gali return tik viena teva, jei nori return du brolius iterpiam tarp:
<div></div> arba <></>!!




*/