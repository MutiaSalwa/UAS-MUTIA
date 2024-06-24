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
        public function bersuara() {
            return "Suara hewan";
        }
    }
    
    class Anjing extends Hewan {
        public function bersuara() {
            return "Guk guk!";
        }
    }
    
    class Kucing extends Hewan {
        // Method untuk mengeluarkan suara kucing
        public function bersuara() {
            return "Meong meong!";
        }
    }
    
    function suaraHewan(Hewan $hewan) {
        return $hewan->bersuara();
    }
    
    $anjing = new Anjing();
    $kucing = new Kucing();
    
    // echo suaraHewan($anjing);
    // echo suaraHewan($kucing);
    ?>
    <div class="code-box">
            <pre><code class="language-python">class Hewan {
        public function bersuara() {
            return "Suara hewan";
        }
    }
    
    class Anjing extends Hewan {
        public function bersuara() {
            return "Guk guk!";
        }
    }
    
    class Kucing extends Hewan {
        // Method untuk mengeluarkan suara kucing
        public function bersuara() {
            return "Meong meong!";
        }
    }
    
    function suaraHewan(Hewan $hewan) {
        return $hewan->bersuara();
    }
    
    $anjing = new Anjing();
    $kucing = new Kucing();
    
    echo suaraHewan($anjing);
    echo suaraHewan($kucing);</code></pre>
        </div>
    
        <div class="output-box">
            <pre><code class="output-content">nama hewan: <?=suaraHewan($anjing)?><br>suara hewan: <?=suaraHewan($kucing)?>
    </code></pre>
        </div>
    </body>
    </html>