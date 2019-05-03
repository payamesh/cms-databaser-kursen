<?php




class Book{
    private $title;
    private $author;
    public $isBorrowed;
    
    function __construct($title,$author){
        $this->title = $title;
        $this->author = $author;
    }
    
    function setTitle($new_title){
        $this->title = $new_title;
    }

    function printInfo(){
    echo "Titel: $this->title \nFörfattare: $this->author";

    }
      
}
    
    $first = new Book('Främlingen', 'Albert Camus');
    $second = new Book("Harry Potter and the Philosopher's Stone", 'J.K Rowling');
    $second->setTitle('Harry Potter and the Order of the Phoenix');

    $second->printInfo();
    $first->printInfo();

class Car{
        public $model;
        public $color;
        public $price;
        public $sellDate;
        public $carAvail = true ; // true= går att låna

        function __construct($model,$color,$price,$sellDate,$carAvail){
            $this->model = $model;
            $this->color = $color;
            $this->price = $price;
            $this->sellDate = $sellDate;
            $this->carAvail = $carAvail;

        }
        function printInfo(){
            echo "Detta är en $this->color $this->model som kostar $this->price kr. Försäljningsdatum är $this->sellDate. ";
        }
        function halfPrice(){
            $this->price = $this->price / 2;
            echo "Din bil kostar nu hälften. Nytt pris: $this->price ";
        }
        function rentCar(){

            if(!$this->carAvail){
                echo "Tyvärr, denna bil är redan utlånad";
            }else{
                $this->carAvail = false;
                echo "Du har lånat $this->model";
            }
        }
        function returnCar(){
            if(!$carAvail){
                $this->carAvail = true;
                echo "Du har nu lämnat tillbaka bilen";
            }else{
                echo "Bilen är redan tillgänglig";
            }
        }
}

$carOne = new Car('Volkswagen', "Ljusblå", '30000','2019-05-29', true);
/* $carOne->printInfo();
$carOne->halfPrice(); */
/* echo $carOne->rentCar();
echo $carOne->rentCar();
echo $carOne->returnCar();

echo $carOne->rentCar(); */


