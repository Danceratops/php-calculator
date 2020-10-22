<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>PHP Calculator</title>
</head>
<body>
    <form class="calculator" method="POST" action="calculator.php">
        <input type="text" name="n1" class="input">
        <select name="op" class="input">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="text" name="n2" class="input">
        <button class="equals" type="submit" name="submit" value="calculator">=</button>
    </form>

    <?php 
        $result = "";
        class calculator
        {
            var $a;
            var $b;

            function checkopration($oprator)
            {
                switch($oprator)
            {
                case '+':
                    return $this->a + $this->b;
                    break;

                case '-':
                    return $this->a - $this->b;
                    break;

                case '*':
                    return $this->a * $this->b;
                    break;

                case '/':
                    if($this->b == 0) {
                        return "Division by zero is not allowed.";
                    } else {
                        return $this->a / $this->b;
                    }
                    break;

                case '%':
                    return $this->a % $this->b;
                    break;

                default:
                    return "Sorry No command found";
            }   
        }

        function getresult($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            return $this->checkopration($c);
        }
    }

    $cal = new calculator();

    if(isset($_POST['submit']))
    {   
        $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
        echo "<h3>{$result}</h3>";
    }

    ?>
</body>
</html>
