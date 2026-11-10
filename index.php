<?php

// Parent Class
class Clothes
{
    public $brand = "Uniqlo";  // public: bisa diakses dari mana saja
    protected $color = "Black"; // protected: bisa diakses dari class itu sendiri dan child class
    private $price = 150000; // private: hanya bisa diakses dari class itu sendiri

    public function showBrand() // public method
    {
        echo "Brand: " . $this->brand . "<br>"; 
    }

    protected function showColor() // protected method
    {
        echo "Color: " . $this->color . "<br>";
    }

    private function showPrice() // private method
    {
        echo "Price: Rp" . $this->price . "<br>";
    }

    public function showAll() //public method untuk mengakses protected dan private method
    {
        $this->showColor();// Mengakses protected method
        $this->showPrice();// Mengakses private method
    }
}

// Child Class 1
class Jacket extends Clothes // Inheritance
{
    public function showJacket() 
    {
        echo "<br>Jacket</br>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
        $this->showColor();
    }
}

// Child Class 2
class Tshirt extends Clothes
{
    public function showTshirt()
    {
        echo "<br>T-Shirt</br>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

// Child Class 3
class Pants extends Clothes
{
    public function showPants()
    {
        echo "<br>Pants</br>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}

// Membuat objek
$jacket = new Jacket(); // Membuat objek dari class Jacket
$tshirt = new Tshirt();
$pants = new Pants();

// Menampilkan hasil
$jacket->showJacket();
$tshirt->showTshirt();
$pants->showPants();

echo "<br>Contoh Public Method</br>"; // Menampilkan hasil dari public method
$jacket->showBrand();

echo "<br>Contoh Protected dan Private melalui Parent</br>"; // Menampilkan hasil dari protected dan private method melalui public method di parent class
$jacket->showAll(); 

?>