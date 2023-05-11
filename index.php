<?php
 
class SortImpl {

     

    public $message = "This normal message";
    # static propertices
    public static $message2 = "This static message"; 
    
    
    public function sortArray1() :string
    {
        # class this static this function
        SortImpl::$message2;
        self::$message2;
    }
    # static method
    public static function sortArray2()
    {
        # class this static this function
        echo 'static method';
    }
}

$obj =  new SortImpl; 
echo $obj->message;
echo '<br>';
echo SortImpl::$message2;

echo '<br>';
SortImpl::$message2 = "Update static message";
echo SortImpl::$message2;

echo '<br>';
echo SortImpl::sortArray2();
 



#EXAMPLE 01
function add1() {
    $number = 0;
    $number++;
    return $number;
}
  
echo add1();
echo "<br>";
echo add1();
echo "<br>";
echo add1();

#output 1 1 1

echo "<br>";

#EXAMPLE 02
function add2() {
    static $number = 0;
    $number++;
    return $number;
}

echo add2();
echo "<br>";
echo add2();
echo "<br>";
echo add2();
#output 1 2 3



# note:
# `static` sadin karoro odhine thake na,
# atar jonno alada memeory alocated kora thake
# `static` value update kora jai
# `static` method object create sarai call korte parbo
# `static` method er vitore this keyword use kora jai na, karon calss name deyan (::) call kora thake ei jonno, jodi korte hoy akta object cretae korte hobe
# inheritant kore use kora jai
?>

