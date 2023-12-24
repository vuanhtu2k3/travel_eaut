<?php
$server = "localhost";
$username = "root";
$password = "1234";
$db = "tourism1";
$conn = mysqli_connect($server, $username, $password, $db);
if ($conn) {
    mysqli_query($conn, "SET NAMES 'utf8'");
} else {
    echo 'Ket noi that bai';
}

if (isset($_POST["action"])) {
    $search_name = $_POST["search_name"];
    $sql = "SELECT * FROM `tbltourpackages` WHERE PackageName LIKE '%$search_name%' order by PackageId DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    $output = "";
    foreach ($result as $value) {
        $output .= '
        <li class="list-group">
            <div class="row">
                <div class="col-2">
                    <div class="image">
                    <img href=""><img src="admin/pacakgeimages/' . $value['PackageImage'] . '" style="width: 100%; border: 1px solid #ddd;"></img>
                  

                    </div>
                </div>
                <div class="col-10">
                    <div class="nametour">
                        <h4 href="">' . $value['PackageName'] . '</h4>
                    </div>
                    <div class="price">
                        <h5 href="">' . number_format($value['PackagePrice']) . '&nbsp;VND</h5>
                        <a href="package_details.php?pkgid=' . $value['PackageId'] . '"
                            class="view">Chi tiết</a>
                    </div>
                </div>
            </div>
        </li>
        ';
    }
    echo $output;
}
