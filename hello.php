<?php
// echo "Hello World there";

// //variable checking function
// // echo gettype($a)."<br>";
// // echo is_integer($c)."<br>";

// //type custing
// // $a="10";
// // echo gettype($a)."<br>";
// // $array = ["lu", 2,4,3];
// // $array2= ['lu', 22,5,6];

// // echo count($array);
// // echo "<pre>";
// // var_dump($array);

// $arr=[10,2,20,"LU",null];
// $arr1=['du',22,"cU",null];

// $merged=array_merge(
//     $arr, $arr1
// );
// // echo "<pre>";
// // var_dump($merged);

// // array_pop($merged);
// // echo "<pre>";
// // var_dump($merged);

// array_shift($merged);
// echo "<pre>";
// var_dump($merged);

// // array_push($merged, 'university');
// // echo "<pre>";
// // var_dump($merged);


// // array_unshift($merged);
// // echo "<pre>";
// // var_dump($merged);

// isset($merged[1]);


// $str="Tody is Monday";
// echo gettype($str);
// $newstr=explode(" ", $str);
// echo gettype($newstr);
// echo "<pre>";
// var_dump($newstr);


// echo array_search('cU', $arr);
// echo in_array('LU', $arr);


// echo "<pre>";
// $newarr=array(1=>'acl1', 2=>'acl2', 3=> 'acl3');
// foreach($newarr as $key=>$value){
//     echo $key. '=>' . $value;
// }



//variable
// there are 3 type of variable. Those are global, local and static
//$GLOBALS(Super Global Varibale) session, post, get, files
echo "<pre>";
$a=10;
function test(){
    $a=200;
    echo $a."<br>";
}

function test2(){
    $a=200;
    $a++;
    echo $GLOBALS['a']."<br>";
}
test();
test2();

?>