<html>
    <head>

    </head>
    <body>
            <table border="1">
                <tr>
                    <td><b>Tiêu đề</b></td>
                    <td><b>Tác giả</b></td>
                </tr>
                
                    <?php 
                        foreach($sach as $row){?>
                          <tr>
                            <td><?php echo $row -> tieu_de;?></td>
                            <td><?php echo $row -> tac_gia;?></td>
                          </tr>
                        <?php }
                    ?>
                
            </table>
    </body>
</html>