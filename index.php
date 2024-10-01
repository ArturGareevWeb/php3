
<?php
// Основной класс Animal
class Animal {
    protected $weight; // Вес
    protected $age;    // Возраст
    protected $color;  // Окрас

    public function __construct($weight, $age, $color) {
        $this->weight = $weight;
        $this->age = $age;
        $this->color = $color;
    }

    public function getInfo() {
        return "Weight: {$this->weight} kg, Age: {$this->age} years, Color: {$this->color}";
    }
}

// Класс Lion, наследующий Animal
class Lion extends Animal {
    private $maneLength; // Длина грива

    public function __construct($weight, $age, $color, $maneLength) {
        parent::__construct($weight, $age, $color);
        $this->maneLength = $maneLength;
    }

    public function getLionInfo() {
        return $this->getInfo() . ", Mane Length: {$this->maneLength} cm";
    }
}

// Класс Rabbit, наследующий Animal
class Rabbit extends Animal {
    private $earLength; // Длина ушей

    public function __construct($weight, $age, $color, $earLength) {
        parent::__construct($weight, $age, $color);
        $this->earLength = $earLength;
    }

    public function getRabbitInfo() {
        return $this->getInfo() . ", Ear Length: {$this->earLength} cm";
    }
}

// Класс Wolf, наследующий Animal
class Wolf extends Animal {
    private $packSize; // Размер стаи

    public function __construct($weight, $age, $color, $packSize) {
        parent::__construct($weight, $age, $color);
        $this->packSize = $packSize;
    }

    public function getWolfInfo() {
        return $this->getInfo() . ", Pack Size: {$this->packSize}";
    }
}

// Создание объектов на основе классов
$lion = new Lion(190, 5, 'Golden', 30);
$rabbit = new Rabbit(2, 3, 'White', 10);
$wolf = new Wolf(50, 4, 'Gray', 6);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animals</title>
</head>
<body>

    <h1>Информация о животных</h1>
    
    <div class="animal-container">
        <h2>Лев</h2>
        <p><?php echo $lion->getLionInfo(); ?></p>
    </div>
    
    <div class="animal-container">
        <h2>Кролик</h2>
        <p><?php echo $rabbit->getRabbitInfo(); ?></p>
    </div>
    
    <div class="animal-container">
        <h2>Волк</h2>
        <p><?php echo $wolf->getWolfInfo(); ?></p>
    </div>

</body>
</html>