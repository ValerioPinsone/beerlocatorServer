<?php //Valerio Pinsone - 08/01/2022 17.40

    require "db_connect.php";

    //echo json_encode(array('beer_name' => "funziona"));
    $beer_name_search = $_REQUEST["q"];
    $beer_name_search = strtolower($beer_name_search);
    $sql = "SELECT * FROM beers WHERE beer_name like '%".$beer_name_search."%' limit 3";
    
    $result = $conn->query($sql);
    

    if(!$result) {
        exit("Nessuna corripondenza");
    }else{
        $i = 0;
        if(mysqli_num_rows($result) > 0 ){
            while(mysqli_fetch_assoc($result)){
                $i++;
                $row = mysqli_fetch_assoc($result);
                
                if(isset($row['beer_id'])&&isset($row['beer_name'])){
                $beer_id = $row["beer_id"];
                $beer_name = $row["beer_name"];
                }else{
                    require "db_connect_close.php";
                    exit();
                    
                }
                   

                echo "<a href='BEER/?id=".$beer_id."'>".$beer_name."</a></br>";
            }
        }else{
           
            exit("Nessuna corripondenza");
        }
        
        
    }
    
    require "db_connect_close.php";

?>