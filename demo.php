if ($result->num_rows > 0){
             while($row=$result-> fetch_assoc()){
            echo "<tr><td>".$row["name"]."</td><td>".$row["street"]."</td><td>".$row["foodname"]."</td><td>".$row["foodcategory"]."</td><td>".$row["foodquantity"]."</td><td>".$row["donationdate"]."</td><td>".$row["expirydate"]."</td><td>".$row["status"]."</td><td>".$row["rid"]."</td></tr>" "<a href='adminnotify.php?id=". $row['rid'] ."' title='View Record' data-toggle='tooltip'>message</a>";
         }