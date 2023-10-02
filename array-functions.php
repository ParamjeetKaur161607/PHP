<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <?php
      $my_array=array("one"=>1, "two"=>2, "three"=>3, "four"=>4, "five"=>5, "six"=>6);  
      #change case
      echo "<b><h1>change case array_change_key_case()</h1></b>";
      print_r(array_change_key_case($my_array,CASE_UPPER));
      echo "<br>";
      print_r(array_change_key_case($my_array,CASE_LOWER));
      echo "<br>";
      #array chunk
      echo "<b><h1>array_chunk()</h1></b>";
      print_r(array_chunk($my_array,3,true));
      echo "<br>";
      print_r(array_chunk($my_array,3));
      echo "<br>";
      #array column
      echo "<b><h1>array_column()</h1></b>";
      $array2=array
      (
        array
        (
          "roll"=>1,
          "name"=>"Param"
        ),
        array
        (
          "roll"=>2,
          "name"=>"Paramjeet"
        ),
        array
        (
          "roll"=>3,
          "name"=>"Paramjeet Kaur"
        ),
      );
      print_r(array_column($array2,'roll','name'));

      #array combine
      echo "<b><h1>array_combine()</h1></b>";      
      $a=array(1,2,3,4,5);
      $b=array("a","b","c","d","e");
      print_r(array_combine($a,$b));

      #array mergeing
      echo "<b><h1>array_merge()</h1></b>";
      print_r(array_merge($a,$b));

      #array_merge_recursive
      echo "<b><h1>array_merge_recursive()</h1></b>";
      $ar1 = array("color" => array("favorite" => "red"), 5);
      $ar2 = array("color" => array("favorite" => "green",10, "blue"));
      print_r(array_merge_recursive($ar1,$ar2));

      #array values count
      echo "<b><h1>array_count_values()</h1></b>";
      $count=array(6,8,7,6,1,2,1);
      print_r(array_count_values($count));

      #array_diff_assoc()
      echo "<b><h1>array_diff_assoc()</h1></b>";
      $c=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,5);
      $d=array("a"=>1,"b","c","d","e");
      print_r(array_diff_assoc($c,$d));

      #array_intersect_assoc()
      echo "<b><h1>array_intersect_assoc()</h1></b>";
      print_r(array_intersect_assoc($c,$d));

      #array_diff_key
      echo "<b><h1>array_diff_key()</h1></b>";
      $e=array("a"=>1,"b"=>2,"c"=>3,"d"=>4,5);
      $f=array("a"=>1,"b","c","d","e");
      print_r(array_diff_key($e,$f));

      #array_intersect_key
      echo "<b><h1>array_intersect_key()</h1></b>";
      print_r(array_intersect_key($e,$f));

      #array_diff_uassoc
      echo "<b><h1>array_diff_uassoc()</h1></b>";
      function abc($x,$y)
      {
        return $x <=> $y;
      }
      print_r(array_diff_uassoc($e,$f,"abc"));

      #array_intersect_uassoc
      echo "<b><h1>array_intersect_uassoc()</h1></b>";
      print_r(array_intersect_uassoc($e,$f,"abc"));

      #array_diff_ukey()
      echo "<b><h1>array_diff_ukey()</h1></b>";
      print_r(array_diff_ukey($e,$f,"abc"));

      #array_intersect_ukey()
      echo "<b><h1>array_intersect_ukey()</h1></b>";
      print_r(array_intersect_ukey($e,$f,"abc"));

      #array_diff()
      echo "<b><h1>array_diff()</h1></b>";
      print_r(array_diff($e,$f));

      #array_intersect()
      echo "<b><h1>array_intersect()</h1></b>";
      print_r(array_intersect($e,$f));

      #array_fill_keys()
      echo "<b><h1>array_fill_keys()</h1></b>";
      print_r(array_fill_keys($count,"param"));

      #array_fils()
      echo "<b><h1>array_fill()</h1></b>";
      print_r(array_fill(0,2,'param'));

      #array_filter()
      echo "<b><h1>array_filter()</h1></b>";
      function odd($var)
      {
        return $var & 1;
      }
      function even($var)
      {
        return !($var & 1);
      }
      $evenodd=array(0,1,2,3,4,5,6,7,8,9);
      echo "<b><h4>odd</h4></b>";
      print_r(array_filter($evenodd,"odd"));
      echo "<b><h4>even</h4></b>";
      print_r(array_filter($evenodd,"even"));

      #array_flip()
      echo "<b><h1>array_flip()</h1></b>";
      $flip=array(1=>"a",2=>"b", 3=>"c", 4=>"d");
      print_r(array_flip($flip));

      #array_key_exist
      echo "<b><h1>array_key_exist()</h1></b>";
      print_r(array_key_exists(1,$flip));
      print_r(array_key_exists(10,$flip));

      #array_key_first
      echo "<b><h1>array_key_exist()</h1></b>";
      var_dump(array_key_first($flip));

      #array_key_last
      echo "<b><h1>array_key_last()</h1></b>";
      var_dump(array_key_last($flip));

      #array_keys
      echo "<b><h1>array_keys()</h1></b>";
      var_dump(array_keys($flip));
      echo "<br>";
      var_dump(array_keys($flip,4));

      #array_map
      echo "<b><h1>array_map()</h1></b>";
      function square($n)
      {
        return ($n*$n);
      }
      print_r(array_map('square',$evenodd));

      #array_multisort()
      echo "<b><h1>array_multisort()</h1></b>";
      $sort1 = array(1, 3, 5, 8);
      $sort2 = array(100, 10000, 10, 8);
      array_multisort($sort1, $sort2);
      echo "<b><h3>Sorting Multiple Arrays</h3></b>";
      var_dump($sort1);
      echo "<br>";
      print_r($sort2);
      echo "<b><h3>Sorting multi-dimensional array</h3></b>";
      $sort3=array
      (
        array("1",2,3,4,"a"),
        array(8,3,9,"1",7)
      );
      array_multisort($sort3[0],SORT_ASC, SORT_STRING,$sort3[1],SORT_NUMERIC, SORT_DESC);
      print_r($sort3);

      #array_pad()
      echo "<b><h1>array_pad()</h1></b>";
      print_r(array_pad($sort1,5,10));

      #array_pop
      echo "<b><h1>array_pop()</h1></b>";
      $ar=array(9,8,5,6,4,3,2,1);
      $pop=array_pop($ar);
      var_dump($ar);
      echo "<br>";
      print_r($pop);

      #array_push
      echo "<b><h1>array_push()</h1></b>";
      $ar=array(9,8,5,6,4,3,2,1);
      array_push($ar,2);      
      print_r($ar);

      #array_product
      echo "<b><h1>array_product()</h1></b>";
      print(array_product($ar));

      #array_rand
      echo "<b><h1>array_rand()</h1></b>";
      $rand=array_rand($ar,2);
      echo $ar[$rand[0]]."\n";
      echo $ar[$rand[1]]."\n";
      print_r($ar);

      #array_reduce()
      echo "<b><h1>array_reduce()</h1></b>";
      function sum($carry,$items)
      {
        $carry+=$items;
        return $carry;
      }
      print_r(array_reduce($ar,"sum"));

      #array_replace_recursive()
      echo "<b><h1>array_replace_recursive()</h1></b>";
      $base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"));
      $replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));
      $basket=array_replace_recursive($base,$replacements);
      print_r($basket);

      #array_replace()
      echo "<b><h1>array_reduce()</h1></b>";
      $base = array("orange", "banana", "apple", "raspberry");
      $replacements = array(0 => "pineapple", 4 => "cherry");
      $replacements2 = array(0 => "grape");      
      $basket = array_replace($base, $replacements, $replacements2);
      print_r($basket);
      echo "<br>";
      $basket = array_replace($base, $replacements2, $replacements);
      print_r($basket);

      #array_reverse()
      echo "<b><h1>array_reverse()</h1></b>";
      print_r(array_reverse($ar));
      echo "<br>";
      print_r(array_reverse($ar,true));

      #array_search()
      echo "<b><h1>array_search()</h1></b>";
      $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
      print_r(array_search('green', $array));
      print_r(array_search('red', $array));

      #array_shift()
      echo "<b><h1>array_shift()</h1></b>";
      $stack = array("orange", "banana", "apple", "raspberry");
      print(array_shift($stack));
      echo "<br>";
      print_r($stack);

      #array_slice()
      echo "<b><h1>array_slice()</h1></b>";
      $input = array(1 => "a", "b", "c", "d", "e");
      print_r(array_slice($input, 1, 2));

      #array_splice()
      echo "<b><h1>array_splice()</h1></b>";
      $input = array("red", "green", "blue", "yellow");
      array_splice($input, 2);
      var_dump($input);

      #array_sum()
      echo "<b><h1>array_sum()</h1></b>";
      $a = array(2, 4, 6, 8);
      echo "sum(a) = " . array_sum($a) . "\n";

      #array_unique()
      echo "<b><h1>array_unique()</h1></b>";
      $input = array("a" => "green", "red", "b" => "green", "blue", "red");
      $result = array_unique($input);
      print_r($result);

      #array_ushift()
      echo "<b><h1>array_ushift()</h1></b>";
      $quee=["orange","banana"];
      array_unshift($quee,"apple");
      var_dump($quee);

      #array_values()
      echo "<b><h1>array_values()</h1></b>";
      print_r(array_values($input));

      #array_walk_recusrsively()
      echo "<b><h1>array_walk_recusrsively()</h1></b>";
      $walk1=['a'=>'apple','b'=>'ball'];
      $walk2=['c'=> $walk1,'d'=>'dog'];
      function test_print($item, $key)
      {
          echo "$key holds $item\n";
      }
      print_r(array_walk_recursive($walk2,'test_print'));

      #array()
      echo "<b><h1>array()</h1></b>";
      $array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
      print_r($array);

      #arsort()
      echo "<b><h1>arsort()</h1></b>";
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      arsort($fruits);
      foreach($fruits as $key=>$values)
      {
        echo "$key=$values"."<br>";
      }

      #asort()
      echo "<b><h1>asort()</h1></b>";
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      asort($fruits);
      foreach($fruits as $key=>$values)
      {
        echo "$key=$values"."<br>";
      }

      #krsort()
      echo "<b><h1>krsort()</h1></b>";
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      krsort($fruits);
      foreach($fruits as $key=>$values)
      {
        echo "$key=$values"."<br>";
      }

      #ksort()
      echo "<b><h1>ksort()</h1></b>";
      $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
      ksort($fruits);
      foreach($fruits as $key=>$values)
      {
        echo "$key=$values"."<br>";
      }

      #compact()
      echo "<b><h1>compact()</h1></b>";
      $city  = "San Francisco";
      $state = "CA";
      $event = "SIGGRAPH";
      $location_vars = array("city", "state");
      $result = compact("event", $location_vars);
      print_r($result);

      #count()
      echo "<b><h1>count()</h1></b>";
      $a[0] = 1;
      $a[1] = 3;
      $a[2] = 5;
      var_dump(count($a));

      #current(), next(), prev(),end()
      echo "<b><h1>current(), next(), prev(),end()</h1></b>";
      $transport = array('foot', 'bike', 'car', 'plane');
      $mode = current($transport);
      print_r($mode);
      print("<br>");
      $mode = next($transport);
      print_r($mode);
      print("<br>");
      $mode = current($transport);
      print_r($mode);
      print("<br>");
      $mode = prev($transport);    
      print_r($mode);
      print("<br>");
      $mode = end($transport);     
      print_r($mode);
      print("<br>");
      $mode = current($transport);
      print_r($mode);
      print("<br>");    
    ?>  
</body>
</html>