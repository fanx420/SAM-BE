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

   class Contents{
     public $islandOfPersonalityID;
     public $image;
     public $content;
     public $color;

     public function __construct($islandOfPersonalityID, $image, $content, $color){
        $this->islandOfPersonalityID = $islandOfPersonalityID;
        $this->image = $image;
        $this->content = $content;
        $this->color = $color;
     }

     function generateContent(){
        return '
            <div class="col-12 col-md-12 my-2">
                <div class="card text-center p-2" style="height: 100px;">
                    <div class="card-body" style="background-color: ' . $this->color . ';" >
                        <div class="card-title">
                            <h5>' . $this->content . '</h5>
                        </div>
                    </div>
                </div>
            </div>';
    }
   }



?>