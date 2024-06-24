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
    class Hewan {
    
        protected $nama;
    
        public function __construct($nama) {
            $this->nama = $nama;
        }
    
        public function getNama() {
            return $this->nama;
        }
    
        public function suara() {
            return "Suara hewan";
        }
    }
    
    class Anjing extends Hewan {
    
        public function suara() {
            return "Guk Guk!";
        }
    }
    
    $anjingSaya = new Anjing("Buddy");
    
    // echo "Nama Hewan: " . $anjingSaya->getNama();
    // echo "Suara Hewan: " . $anjingSaya->suara();
    ?>
    <div class="code-box">
            <pre><code class="language-python">class Hewan {
        
        protected $nama;
    
        public function __construct($nama) {
            $this->nama = $nama;
        }
    
        public function getNama() {
            return $this->nama;
        }
    
        public function suara() {
            return "Suara hewan";
        }
    }
    
    class Anjing extends Hewan {
    
        public function suara() {
            return "Guk Guk!";
        }
    }
    
    $anjingSaya = new Anjing("Buddy");
    echo "Nama Hewan: " . $anjingSaya->getNama();
    echo "Suara Hewan: " . $anjingSaya->suara();</code></pre>
        </div>
    
        <div class="output-box">
            <pre><code class="output-content">nama hewan: <?=$anjingSaya->getNama()?><br>suara hewan: <?=$anjingSaya->suara()?></code></pre>
        </div>
        
    </body>
    </html>