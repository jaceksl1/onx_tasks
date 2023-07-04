# taks 1

1. W ramach przetwarzania danych należy ukończyć implementację metody “make” klasy Pipeline.
2. Metoda “make” powinna przyjmować zmienną liczbę funkcji i zwracać nową funkcję, która przyjmuje jeden parametr $arg.
3. Zwrócona funkcja powinna wywołać pierwszą funkcję w “make” z parametrem $arg i wywołać drugą funkcję z wynikiem pierwszej funkcji.
4. Zwrócona funkcja powinna kontynuować wywoływanie każdej funkcji w “make” w kolejności, postępując według tego samego wzorca i zwracać wartość z ostatniej funkcji.
   Na przykład wywołanie
   make(
   function($var) {return $var * 3; },
    function($var) { return $var + 1; }, 
    function($var) { return $var / 2; }),
   a następnie wywołanie zwróconej funkcji z argumentem 3powinno zwrócić 5.

# task 2

1. Interfejs użytkownika zawiera dwa rodzaje kontrolek wprowadzania danych: TextInput, który akceptuje wszystkie teksty oraz NumericInput, który akceptuje tylko cyfry.
2. Zaimplementuj klasę TextInput, która zawiera:
   Metodę publiczną add($text) - dodającą podany tekst do bieżącej wartości.
   Metodę publiczną getValue() - zwracającą bieżącą wartość (string).
3. Zaimplementuj klasę NumericInput, która: Dziedziczy po TextInput. Przedefiniowuje metodę add tak,aby każdy tekst nienumeryczny był ignorowany.
