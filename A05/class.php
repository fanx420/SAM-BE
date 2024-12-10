<?php
    class IslandofPersonalities{
        public $name;
        public $shortDescription;
        public $color;
        public $image;
        
        public function __construct($name, $shortDescription, $color, $image) {
            $this->name = $name;
            $this->shortDescription = $shortDescription;
            $this->color = $color;
            $this->image = $image;
        }


        function generateIsland() {
            return ' 
                <div class="col-12 col-md-6 my-2">
                    <div class="card text-center p-2 ">
                        <div class="card-body" style="background-color: ' . $this->color . ';" >
                            <img class= "img-fluid" src="' . $this->image . '" alt="" >
                            <div class="card-title ">
                                <h5>' . $this->name . '</h5>
                            </div>
                            <div class="card-text ">
                                <p>' . $this->shortDescription . '</p>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }

   

?>