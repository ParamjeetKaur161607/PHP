    <?php
    $first=array();
    echo "Array for checking missing number:<br>";
    print_r($first);
    echo "<br>"; 
    $length=count($first);
    sort($first);     
    function checking($number)
    {
        foreach ($number as $num) {
            if ($num >= 0) {
                return false;
            }
        }
        return true;
    }
    $result = checking($first);
    if ($result) {
        echo "<br>";   
        echo "First Least missing Number = 1";
    }     
    elseif(!$result)     
    {
        $second=array(); 
        $four =array_merge($second,range(1,end($first)+1,1)); 
        echo "<br>";    
        $diffrence=array_diff($four,$first);
        $differenceArray = array_values($diffrence);
        echo "<br>"; 
        print_r("First Least missing Number= ".current($differenceArray));    
        
    }   
