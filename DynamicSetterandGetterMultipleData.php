<?php 

class AddDataOnMethodClass {

    private $container  = [];

    // The setter
    public function setData(array $dataSet = [] ) {

        // NOTE: Volume, Celcious, Delimiter is just a label as anology for this setter and getter design dynamic class algorithm
        $this->container[] = [ 
            
            'Volume'    => $dataSet['v']?? [],  // ['v'] for col1
            'Celcious'  => $dataSet['c']?? [],  // ['c'] for col2
            'Delimiter' => $dataSet['d']?? []   // attr btn form submit
        
        ];

    }

    // Insert function !
    private function getDelimiter() {

        // Loop this guys! 
        // $array->setData([ 'v' => 1, 'c' =>2, 'd' => 3]);

        for ( $i = 0 ; $i < count($this->container); $i++) { 
            
            foreach ($this->container[$i] as $key => $value) {
                
                  $string_name = (string) strval($value);

                  if( $key === 'Delimiter' ) {  // If the $key === Delimiter for button isset in short!
  
                    if(isset($_POST[$string_name])) {  // set the button form 
                        
                        // Do insert 
                        // echo for analogy !
                        echo ($_POST['Volume'.$this->container[$i]["Delimiter"]]?? '');
                        echo ($_POST['Celcious'.$this->container[$i]["Delimiter"]]?? ''); 
                      
                     }
  
                 } 

             } 
            
         } 

    }

    public function getData() { 

        // Get the processing 
        $this->getDelimiter();

        for ( $i = 0 ; $i < count($this->container); $i++) { 
         
          // Loop and create each form for each setData 
          // $array->setData([ 'v' => 1, 'c' =>2, 'd' => 3]);
          echo '<form action="" id="form_'.$i.'" method="POST">';
          
          foreach ($this->container[$i] as $key => $value) {

                if( $key === 'Delimiter' ) {
                
                // for form button it for isset!
                echo '<input type="submit" name="'.$value.'" id="'.$value.'" value="'.$value.'"/>';
                break;

                } else {

                // Get delimiter id for name form submit     
                echo '<input type="text" name="'.$key.$this->container[$i]["Delimiter"].'" value="'.$key.' '.$value.'"/>';
                   
                }       
                
            }
            echo '</form>';
            echo "<br />";
        }


    }

};


# Finally Dynamic PHP Class Multiple SetData!
$array =  new AddDataOnMethodClass();
$array->setData([ 'v' => 1, 'c' =>2, 'd' => 3]);
$array->setData([ 'v' => 4, 'c' =>6, 'd' => 9]);
$array->setData([ 'v' => 'hh', 'c' =>'yy', 'd' => 'dd']);
$array = $array->getData();
