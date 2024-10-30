<?php

//  variabili
// Una variabile è una locazione di memoria
// in cui vengono salvati dei dati.
// Una variabile è formata dal nome e dal
// valore che contiene 

// In PHP una variabile si inizializza con
// il $ seguito dal nome della variabile.

// statement = inizializzazione della variabile + dichiarazione + ;
$name = "valerio";

$user_name = 12;
$_username = "miao";
$username_ = "ciao";
$username1 = "ciaone";
$userName = "miamiaooo";

// che php è case sensitive e le variabili cominciano con la lettera minuscola

// $pippo è diverso da $piPPo

// COSTANTI -> il nome va in capslock

const NAME = "Pikachu";

// ATTENZIONE!!!!!! lo scope in php varia rispetto a javascript!
// - le variabili hanno uno scope locale, quindi possono essere utilizzate solo nel blocco di codice dove sono state utilizzate
// - le costanti hanno uno scope globale

// php è un linguaggio a tipizzazione debole;

$nome = "Pikachu";
$nome = "valerio";

// questa cosa viene definita type juggling

// TIPI DI DATO:
// - primitivi
// - composti -> user-defined
// - speciali

// PRIMITIVI:
$integer = 1;
$float = 2.2;
$string = "ciaone";
$boolean = true;

// parliamo di stringhe

$nomeaccio = "Valerio";
$stringa1 = "Ciao sono $nomeaccio" . "\n";
$stringa2 = 'Ciao sono $nomeaccio';

$stringa3 = "Ciao sono " . $nomeaccio;



// echo


// echo 'Ciao a tutti, mi chiamo ' . $nomeaccio . ' e oggi farò un\'alleanza con Gennaro Bullo!';

// echo $stringa1;
// echo $stringa3;

// TYPE COERCION

$x = 20;
$y = '10Pokeball';

$c = 20;
$d = 'Pokeball10';

// echo $x + $y;
// echo $c + $d;

// var_dump

$nomone = "valerio";
$number = 32;
$bool = true;
// var_dump($name);
// var_dump($number);
// var_dump($bool);

// ARRAY

$arr = ['a', 'b', 'c'];

// omogenei ed eterogeni

// $omogeneo = [1,2,3,4,5];
// $eterogeneo =[1,2, 'ciaone', true, [2, 3, 4]];

// per i dati composti, per stamparli, userò print_r

// print_r($arr);

// var_dump($arr);

// echo $eterogeneo[4];

// ARRAY ASSOCIATIVO -> chiave - valore

// $valerio = [

//     'name' => 'Valerio',
//     'surname' => 'Vacca',
//     'age' => 33

// ];

// print_r($valerio['surname']);

// OPERATORI
// - matematici: + - * /
// - di confronto == > >= <=
// - logici && || !

// == -> controlla solo se due operandi sono uguali nel valore
// === -> valore e controllo del tipo di dato

$numero1 = 2;
$numero2 = '2';

$confronto = $numero1 === $numero2;

// var_dump($confronto);

// ci restuirà 1 se è true, 0 o niente se è false il confronto
// se voglio essere sicuro quando è false, uso il var_dump

// OPERATORI LOGICI
// - AND && -> restituisce TRUE solo se entrambi gli operandi sono verificati, quindi truthy
// - OR || -> restituisce TRUE almeno se uno degli operandi è verificato, quindi truthy
// - NOT ! -> restituisce il booleano inverso

// TEOREMA DI BOHM JACOPINI (3 STRUTTURE)
// - SEQUENZA
// - SELEZIONE
// - ITERAZIONE

// Condizioni

// $age = 20;
// $patente = false;

// if($age >= 18 && $patente == true){
//     echo "Puoi guidare";
// } else if ( $age < 18){
//     echo "Non puoi guidare, sei minorenne";
// }else {
//     echo "Non puoi guidare, non hai la patente";
// }

// SWITCH -> non accetta una condizione, ma una variabile da controllare. controlla se questo dato soddisfa dei casi.

// $superhero = 'LILLO';

// switch($superhero){

//     case "batman":
//         echo "spezza le gionocchia";
//         break;

//     case "barman":
//         echo "ti fa mbriakare";
//         break;

//     default:
//         echo "Non hai selezionato un supereroe disponibile";

// }

// CICLI
// for
// foreach
// while
// do while

// con il ciclo for voglio stampare i numeri da 0 a 5

// for($i = 0; $i <= 5; $i++){

//     echo $i;

// }

// foreach -> come ciclo anche in php, viene utilizzato soprattutto per manipolare gli array

$students = ['Valerio', 'Gabriele', 'Arianna', 'Alessandro'];

// all'interno ci vogliono due elementi fondamentali
// - l'array che voglio ciclare
// as
// - il nome che voglio dare ad una variabile d'appoggio, dove andrò ad inserire gli elementi ogni volta

// foreach($students as $student){
//     echo $student . "\n";
// }

// students.forEach(student =>{
//     console.log(student);
// })

// WHILE -> termina la sua esecuzione quando una condizione diventa falsa

// $i = 0;

// while($i < 10){
//     echo $i . "\n";

//     $i++;
// }

// DO WHILE -> mentre il for e while eseguono il blocco di codice solo se la condizione messa in partenza è vera. Se è falsa, non partono proprio. Il do while almeno un giro della giostra se lo fa.

// $i = 12;

// while($i < 10){
//     echo $i . "\n";

//     $i++;
// }

// $i = 12;

// do{

//     echo $i . "\n";

// } while($i < 10);

// ESERCIZIO 1: usare un ciclo for per stampare sul terminale gli elementi inseriti all'interno di un array

// al posto del .length, possiamo usare una built in function che si chiama count()

$arr = ['Valerio', 'Pikachu', 'Charizard', 'Meloetta', 'Charizard'];

// echo count($arr);

// for($i = 0; $i < count($arr); $i++){

//     echo $arr[$i] . "\n";

// }

// ESERCIZIO 2: dato un array, ciclare con un foreach e stampare la chiave associata ad ogni elemento dell'array

// $teachers = ["Valerio", "Nicola", "Katia", "Angela"];

// foreach($teachers as $key => $teacher){

//     echo "il docente " . $teacher . " ha come chiave " . $key . "\n";
// }

// ESERCIZIO 3: dato un array di insegnanti, inserire al suo interno due array associativi, con il nome della materia, in cui vengono indicati i docenti che la insegnano

// voglio stampare con un foreach, tutti i nomi in questo formato:
    // i docenti che spiegano frontend sono: nome1, nome2, nome3
    // i docenti che spiegano backend sono: nome1, nome2, nome3

$subjects = [

    "frontend" => ['Valerio', 'Mattia', 'Nicola'],

    "backend" => ['Katia']

];


// foreach($subjects as $name => $subject ){

//     echo "i docenti che spiegano $name sono: $subject[0], $subject[1], $subject[2] \n";

// }

// $subjects si riferisce all'array padre
// al primo giro
// $name = frontend
// al secondo giro
// $name = backend 
// al primo giro
// $subject = ['Valerio', 'Mattia', 'Nicola']
// al secondo giro
// $subject = ['Katia', 'Annalisa', 'Roberto']

// e nel caso di più docenti? senza dover scrivere $subject con indice ogni volta?

// foreach($subjects as $name => $subject ){

//     echo "i docenti che spiegano $name sono: \n";

//         foreach($subject as $teacherName){
//             echo $teacherName . "\n";
//         }

// }
