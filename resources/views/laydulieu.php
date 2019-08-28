<?php // See http://datatables.net/usage/server-side for details on the server
$table = 'tin'; // DB table to use
$primaryKey = 'idTin'; // Table's primary key 
// columns :  use to sent back to DataTables.
// `db`:  is  column name in db, `dt`:  is  column in  DataTables. 
$columns = array(
    array( 'db' => 'TieuDe', 'dt' => 0 ),
    array( 'db' => 'idTL',  'dt' => 1 ),
    array( 'db' => 'idLT',   'dt' => 2 ),
    array(
        'db' => 'Ngay',
        'dt' => 3,
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
    array(
        'db'  => 'AnHien',
        'dt'  => 4,
        'formatter' => function( $d, $row ) {
            if ($d==0) return "Đang ẩn";  else return "Đang hiện";
        }
    ),
    array(
        'db' => 'TinNoiBat',
        'dt' => 5,
        'formatter' => function( $d, $row ) {
            if ($d==0) return "Bình thường";  else return "Nổi bật";
        }
    ),
);
// Thông số kết nối db, chỉnh lại nếu chưa đúng nhé
$sql_details = array(
    'user'=>'root','pass'=> '', 'db'=> 'la_test','host'=> 'localhost'
); 
require( 'ssp.class.php' );
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
?>