<?php 
    echo "We talk about exceptions in PHP";

    // chia hai so nhung de mau so bang 0
    function divide($a, $b) {
        if(!$b) {
            // noi bi loi dong so 8 thi dong so 10 se khong bao gio chay
            throw new Exception("Cannot divide by zero");
        }
        return $a / $b;
    }
    //echo divide(5, 0);

    try {
        echo divide(10, 2);
        //dong so 17 sau thi dong so 18 no se khong nhay vao va nguoc lai, ma no se nhay xuong khoi catch
        // echo divide(5, 0);
        echo "no errors";
    }catch(Exception $e) {
        // in ra thong tin loi
        echo "Caught exception: " . $e->getMessage() . "\n";
    } finally {
        // finally co loi hay khong thi van chui vao
        // thuong de giai phong cac bien
        echo "Finally come here...";
    }
    echo "Program runs here..";

?>