<html>
    <head>

    </head>
    <body>
        <table border="1px" width="100%">
            <?php
                // 8x8 chessboard
                for($row=1;$row<=8;$row++){
                    echo "<tr>";
                    for($col=1;$col<=8;$col++){
                        $total = $row+$col; //2
                        if($total%2==0) {
                            echo "<td height=50px width=80px bgcolor=white></td>";
                        } else {
                            echo "<td height=50px width=80px bgcolor=black></td>";
                        }
                    }
                    echo "<tr>";
                }

            ?>
        </table>
    </body>
</html>

