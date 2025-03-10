<html>
    <head>

    </head>
    <body>
            <table border="1">
                <tr>
                    <td><b>Mã thể loại</b></td>
                    <td><b>Tên thể loại</b></td>
                </tr>
                    <?php 
                        foreach($the_loai_sach as $row){?>
                            <tr>
                                <td><?php echo $row -> id;?></td>
                                <td><?php echo $row -> ten_the_loai;?></td>
                            </tr>
                        <?php }
                    ?>
                    
                       
                    
            </table>
    </body>
</html>