<?php
// utiliser une bdd de replay (titre, trubnail, youtube, daily)
// generer le fichier xml: sitemap.xml
    $db=mysqli_connect("213.246.56.153", "userstage1", "Hotel2021test!!", "test_replay_gp");
    
    if(!$db){
        echo "DB not Connected...";
    }else{
        $result=mysqli_query($db, "SELECT * FROM videos ORDER BY id DESC LIMIT 5");
        if($result > "0"){
            $xml = new DOMDocument("1.0");
            // It will format the output in xml format otherwise
            // the output will be in a single row
            $xml->formatOutput=true;
            $fitness=$xml->createElement("videos");
            $xml->appendChild($fitness);
            while($row=mysqli_fetch_array($result)){

                $user=$xml->createElement("site");
                $fitness->appendChild($user);

                $uid=$xml->createElement("id", $row['id']);
                $user->appendChild($uid);
     
                $uname=$xml->createElement("titre", $row['title']);
                $user->appendChild($uname);
     
                $email=$xml->createElement("thumbnail", $row['thumbnail']);
                $user->appendChild($email);
     
                $youtube=$xml->createElement("youtube", $row['youtube']);
                $user->appendChild($youtube);

                $daily=$xml->createElement("daily", $row['daily']);
                $user->appendChild($daily);

                $URL=$xml->createElement("URL", "https://www.replay.gp");
                $user->appendChild($URL);
            }
            echo "<xmp>".$xml->saveXML()."</xmp>";
            $xml->save("sitemap.xml");
        }
        else{
            echo "error";
        }
    }
?>