<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // 1 - creating a class Pipeline
    class Pipeline
    {
        // 2a - static metod make with arg as a $functions
        public static function make(...$functions)
        {
            // 2b - new function with arg as a $arg  
            return function ($arg) use ($functions) {
                $result = $arg;
                // 3 - run first function and 
                foreach ($functions as $function) {
                    $result = $function($result);
                }

                return $result;
            };
        }
    }


    $pipeline = Pipeline::make(
        function ($var) {
            return $var * 3;
        },
        function ($var) {
            return $var + 1;
        },
        function ($var) {
            return $var / 2;
        },
    );

    $result = $pipeline(3);
    echo $result;
    ?>

</body>

</html>