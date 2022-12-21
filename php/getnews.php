<?php

    include "./php/connection.php";
    $sql = $conn->query('SELECT * FROM newsstories ORDER BY PostedOn DESC LIMIT 3');
    $count = 0;
    foreach($sql as $row) {
        $count += 1;
        displayArticle($row["Service"], $row["Tag"], $row["Img"], $row["Text"], $row["Header"], $row["PostedImg"], $row["PostedOn"], $row["PostedBy"], $count);
    }
    $count = 0;
    function displayArticle($service, $tag, $img, $text, $header, $postedimg, $postedon, $postedby,$count){
        $header = (strlen($header) >= 45) ? substr($header,0,45).'...' : $header;
        $text = (strlen($text) >= 100) ? substr($text,0,102).'...' : $text;
        $postedon = date("j \\a\\t F  Y",strtotime($postedon));
        $postedon = str_replace(' at', 'th of ', $postedon);
        echo "<a href='' class='move-up'>";
            echo "<div class='news-content news-content-$service news-content-$count'>";
                echo "<div class='news-image'>";						
                    echo "<p class='news-image-tag news-image-tag-$service'>$tag</p>";
                    echo "<img src='$img' alt=''>";
                echo "</div>";
                echo "<div class='news-content-text'>";
                    echo "<p class='news-item-$service'><b>$header</b></p>";
                    echo "<p class='news-info'>$text</p>";
                    echo "<p class='news-item-$service-btn'>READ MORE</p>";
                echo "</div>";
                echo "<div class='posted'>";
                    echo "<img src='$postedimg' alt=''>";
                    echo "<p><b>Posted by $postedby</b><br>$postedon</p>";
                echo "</div>";
            echo "</div>";
        echo "</a>";
    }
    
?>
