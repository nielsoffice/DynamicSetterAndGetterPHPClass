# DynamicSetterAndGetterPHPClass
Dynamic Setter And Getter PHPClass

```PHP

<?php 

class AddDataOnMethodClass {

  private $container = [];

  public function setData(array $dataSet = [] ) {

    $this->container[] = $dataSet; 

  }

  public function getData() {

    return($this->container);
        
  }

};

```

```PHP
/*
$array =  new AddDataOnMethodClass();
$array->setData([1,2,3]);
$array->setData([4,2,6]);
$array->setData(['a','b','c']);
$array = $array->getData();
*/

```

```PHP

$array =  new AddDataOnMethodClass();
$array->setData([1,2,3])->insert();
$array->setData([4,2,6])->insert();
$array->setData(['a','b','c'])->insert();
$array = $array->getData();

echo "<pre>";
var_dump($array);
echo "</pre>";

```

```HTML

array(3) {
  [0]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
  [1]=>
  array(3) {
    [0]=>
    int(4)
    [1]=>
    int(2)
    [2]=>
    int(6)
  }
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}

```
