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
    abstract class Vehicle {
        protected $model;
    
        public function __construct($model) {
            $this->model = $model;
        }
    
        abstract public function drive();
    }
    
    class Car extends Vehicle {
        public function drive() {
            return "Membawa Mobil Model: " . $this->model;
        }
    }
    
    class Motorcycle extends Vehicle {
        public function drive() {
            return "Membawa Motor Model : " . $this->model;
        }
    }
    
    $car = new Car("Doddge RAM150R");
    // echo $car->drive() . "<br>";
    
    $motorcycle = new Motorcycle("Yamaha M3 Ngatta Ngatta");
    // echo $motorcycle->drive() . "<br>";
    ?>
    <div class="code-box">
            <pre><code class="language-python">abstract class Vehicle {
        protected $model;
    
        public function __construct($model) {
            $this->model = $model;
        }
    
        abstract public function drive();
    }
    
    class Car extends Vehicle {
        public function drive() {
            return "Membawa Mobil Model: " . $this->model;
        }
    }
    
    class Motorcycle extends Vehicle {
        public function drive() {
            return "Membawa Motor Model : " . $this->model;
        }
    }
    
    $car = new Car("Doddge RAM150R");
    // echo $car->drive() .;
    
    $motorcycle = new Motorcycle("Yamaha M3 Ngatta Ngatta");
    // echo $motorcycle->drive() .;
    </code></pre>
        </div>
    
        <div class="output-box">
            <pre><code class="output-content"><?= $car->drive();?><br><?= $motorcycle->drive();?>
            </code></pre>
        </div>

    </body>
    </html>    