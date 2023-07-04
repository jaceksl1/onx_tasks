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
