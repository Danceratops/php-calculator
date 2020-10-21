<?php 
    $result = "";
    class calculator {
        var $integerOne;
        var $intgerTwo;

        function checkOperation($operator) {
            if(is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
                switch($operator) {
                case '+':
                    return $this.integerOne + $this.integerTwo;
                break;
                case '-':
                    return $this.integerOne - $this.integerTwo;
                break;
                case '*':
                    return $this.integerOne * $this.integerTwo;
                break;
                case '/':
                    return $this.integerOne / $this.integerTwo;
                break;
                case '%':
                    return $this.integerOne % $this.intergerTwo;
                break;
                default:
                return "No such command found."; 
                }
            }
            
        }

        function getResults($a, $b, $c) {
            $this->integerOne = $a;
            $this->integerTwo = $b;
            return $this->checkOperation($c);
        }
    }

    $calc = new calculator();
    if(isset($_POST['submit'])) {
        $result = $calc->getResults($_POST['integerOne'], $_POST['integerTwo'], $_POST['operand']);
    }
?>