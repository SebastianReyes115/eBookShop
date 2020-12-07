<?php
define('ProPayPal', 0);
if(ProPayPal){
    define("PayPalClientId", "Ae2ntBLYTbmohD2R7om4WkGCUUNnbBZo5qEEC8aulfWc9Pe7FQOAgIquG1mfj-cyXEqVmUlD2DgTwK66");
    define("PayPalSecret", "EOIO0KZPu7yClb2162zcF1rMo9SLpuDL15Z-NklzJzk8zFTWqrswIsdZThvEymUj9yTjf3P6xjrTwWJB");
    define("PayPalENV", "production");
} else {
    define("PayPalClientId", "Ae2ntBLYTbmohD2R7om4WkGCUUNnbBZo5qEEC8aulfWc9Pe7FQOAgIquG1mfj-cyXEqVmUlD2DgTwK66");
    define("PayPalSecret", "EOIO0KZPu7yClb2162zcF1rMo9SLpuDL15Z-NklzJzk8zFTWqrswIsdZThvEymUj9yTjf3P6xjrTwWJB");
    define("PayPalENV", "sandbox");
}
?>
