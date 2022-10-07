<?php

class Vehicles {
    public $name;
    public $with_engine;

    public function __construct($name, $with_engine)
    {
        $this->name = $name;
        $this->with_engine = $with_engine ? 'with engine' : 'no engine';
    }
    public function identify_myself()
    {
        echo "Hi I'm Parent of All vehicles, My Name is {$this->name}, My Engine Status is '{$this->with_engine}' <br>";
    }
}

class Bikes extends Vehicles {
    public $wheel_count;

    public function __construct($name, $with_engine, $wheel_count)
    {
        $this->name = $name;
        $this->with_engine = $with_engine ? 'with engine' : 'no engine';
        $this->wheel_count = $wheel_count;
    }
    public function identify_myself()
    {
        echo "Hi I'm Bike, My Name is {$this->name}, My Engine Status is '{$this->with_engine}', I have {$this->wheel_count} Wheel(s)<br>";
    }
}

class Cars extends Vehicles {
    public $wheel_count;
    public $engine_type;

    public function __construct($name, $with_engine, $wheel_count, $engine_type)
    {
        $this->name = $name;
        $this->with_engine = $with_engine ? 'with engine' : 'no engine';
        $this->wheel_count = $wheel_count;
        $this->engine_type = $engine_type;
    }
    public function identify_myself()
    {
        echo "Hi I'm Car, My Name is {$this->name}, My Engine Status is '{$this->with_engine}', I have {$this->wheel_count} Wheel(s), My Engine Type = {$this->engine_type}<br>";
    }
}

class Buses extends Vehicles {
    public $wheel_count;
    public $private_bus;

    public function __construct($name, $with_engine, $wheel_count, $private_bus)
    {
        $this->name = $name;
        $this->with_engine = $with_engine ? 'with engine' : 'no engine';
        $this->wheel_count = $wheel_count;
        $this->private_bus = $private_bus ? 'Private Bus' : 'Public Bus';
    }
    public function identify_myself()
    {
        echo "Hi I'm Bus [{$this->private_bus}], My Name is {$this->name}, My Engine Status is '{$this->with_engine}', I have {$this->wheel_count} Wheel(s)<br>";
    }
}

$gerobak = new Vehicles("Gerobak", false);
$pedal_bike = new Bikes("Pedal Bikes", false, 2);
$motor_bike = new Bikes("Motor Bikes", true, 2);
$sport_car = new Cars("Sport Cars", false, 4, "V8");
$pickup_car = new Cars("Pickup Cars", true, 4, "Solar");
$trans_jakarta = new Buses("Trans Jakarta", false, 4, false);
$school_bus = new Buses("School Bus", true, 4, true);

$gerobak->identify_myself();
echo "<br>";
$pedal_bike->identify_myself();
$motor_bike->identify_myself();
echo "<br>";
$sport_car->identify_myself();
$pickup_car->identify_myself();
echo "<br>";
$trans_jakarta->identify_myself();
$school_bus->identify_myself();