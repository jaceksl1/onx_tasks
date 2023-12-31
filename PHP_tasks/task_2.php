<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task 2</title>
</head>

<body>
    <?php
    //1 - creating 2 classes as controls - TextInput & NumericInput
    class TextInput
    {
        protected $value = '';
        // function which will add text as a value
        public function add($text)
        {
            //object value as text
            $this->value .= $text;
        }

        public function getValue()
        {
            // return object value
            return $this->value;
        }
    }


    //1,3 - NumericInput extends from TextInput
    class NumericInput extends TextInput
    {
        public function add($text)
        {
            if (is_numeric($text)) {
                parent::add($text);
            }
        }
    }



    $textInput = new TextInput();
    $textInput->add('Hello');
    $textInput->add(' World');
    $textInput->add('123');
    $textInput->add(123);

    $numericInput = new NumericInput();
    $numericInput->add('123');
    $numericInput->add('abc');
    $numericInput->add('456');
    $numericInput->add(456);
    ?>

    <div><?php echo $textInput->getValue(); ?></div>
    <br>
    <div><?php echo $numericInput->getValue() ?></div>
</body>

</html>