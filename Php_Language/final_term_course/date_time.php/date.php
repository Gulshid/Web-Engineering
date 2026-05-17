<?php

    echo "Today date is :".date("d-m-Y\n");
    echo "Today date is :".date("d/m/Y\n");
    echo "Today date is :".date("d.m.Y\n");
    // 17-May-Sunday-2026
    echo "Today date is :".date("j-F-l-Y\n");

    echo "Today date and Time :".date("d-m-Y.  H:i:s a\n");
    echo date_default_timezone_get();

    date_default_timezone_set("Asia/Karachi\n");
    echo date_default_timezone_get();
    // echo "Today date is :".date("d-m-Y");


?>