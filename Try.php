<?php
    if(isset($_POST['uploadTanggal'])){
        echo $_POST['uploadTanggal'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="mt-5 mb-4" action="" method="post" enctype="multipart/form-data">
                                <label for="tgl">Tanggal Terbit</label>
                                <input type="date" class="form-control" id="uploadTanggal"  name="uploadTanggal">
                        <button type="submit" class="btn btn-primary text-center">Post</button>
                        </form>
</body>
</html>


<?php
// Create connection to Oracle
$conn = oci_connect("TUBESKELOMPOKA2", "123", "//localhost/xe");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   $pass = 'Budi';
   #$query = oci_parse($conn, 'INSERT INTO NASABAH (REKENING, SALDO) VALUES (4, 4000)');
   #oci_execute($query);
    #$stid = oci_parse($conn, "BEGIN registrasiAccount('budi','123','budi@jtk.com','admin','00000','Yayang Set'); END;");
    #oci_execute($stid);
   #$stid0 = oci_parse($conn, "BEGIN registrasiAccount('fardan','123','budiy@jtk.com','admin','00000','Yayang Set'); END;");
   #oci_execute($stid0);
   $stid1 = oci_parse($conn, "SELECT * FROM ACCOUNT WHERE USERNAME ='$pass' ");
    oci_execute($stid1);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid1, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

}
// Close the Oracle connection
oci_close($conn);
?>