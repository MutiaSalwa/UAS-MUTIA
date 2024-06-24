<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulation</title>
    <link rel="stylesheet" href="Styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="cantik.php">Class Dan Objek</a></li>
                <li><a href="hjahjh.php">Encapsulation</a></li>
                <li><a href="manis.php">Magic Method</a></li>
                <li><a href="imut.php">Polymorphism</a></li>
                <li><a href="lucu.php">Inheritance</a></li>
                <li><a href="gemoy.php">Abstrak</a></li>
                <li><a href="rajin.php">Overriding</a></li>
                <li><a href="hebat.php">Overloading</a></li>
            </ul>
        </nav>
    </header>
    <?php
    class Calculator {
        // Magic method __call untuk menangani metode yang tidak didefinisikan
        public function __call($name, $arguments) {
            if ($name == 'add') {
                return $this->addNumbers(...$arguments);
            } elseif ($name == 'multiply') {
                return $this->multiplyNumbers(...$arguments);
            } else {
                throw new BadMethodCallException("Method $name does not exist");
            }
        }
    
        private function addNumbers($a, $b) {
            return $a + $b;
        }
    
        private function multiplyNumbers($a, $b) {
            return $a * $b;
        }
    }
    
    $calc = new Calculator();
    // echo $calc->add(3, 4); // Output: 7
    // echo "\n";
    // echo $calc->multiply(3, 4); // Output: 12
    ?>    
    <div class="code-box">
            <pre><code class="language-python">class Calculator {
        // untuk menangani metode yang tidak didefinisikan
        public function __call($name, $arguments) {
            if ($name == 'add') {
                return $this->addNumbers(...$arguments);
            } elseif ($name == 'multiply') {
                return $this->multiplyNumbers(...$arguments);
            } else {
                throw new BadMethodCallException
                ("Method $name does not exist");
            }
        }
    
        private function addNumbers($a, $b) {
            return $a + $b;
        }
    
        private function multiplyNumbers($a, $b) {
            return $a * $b;
        }
    }
    
    $calc = new Calculator();
    // echo $calc->add(3, 4); // Output: 7
    // echo "\n";
    // echo $calc->multiply(3, 4); // Output: 12 ;
    </code></pre>
        </div>
    
        <div class="output-box">
        <pre><code class="output-content"> Output + : <?= $calc->add(5, 2) ?><br>
 Output x : <?= $calc->multiply(5, 5) ?> <br>
    </code></pre>
        </div>

    </body>
    </html>
    
  