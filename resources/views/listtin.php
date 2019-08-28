<html><body>
<h1>List tin</h1>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src= "https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src= "https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"  rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>


<!-- Code khởi tạo -->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "http://localhost/la_test/public/laydulieu",
        pageLength:8,
        order: [[ 2, 'desc' ]],
        language: {
            "lengthMenu": "Hiện _MENU_ tin trong mỗi trang",
            "zeroRecords": "Không tìm thấy",
            "info": "Đang hiện trang _PAGE_ trong _PAGES_ trang",
            "infoEmpty": "Không có dòng nào",
            "infoFiltered": "(Lọc trong _MAX_ tin)",
            "search": "Tìm kiếm:",
            "paginate":{"first":"<<","last":">>","next":">","previous":"<"},
        }       
    } );
} );
</script>




</body>
<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
   <thead> <tr>
         <th>Tiêu đề</th>
         <th>Thể loại</th>
         <th>Loại tin</th>
         <th>Ngày</th>
         <th>ẨnHiện</th>
         <th>NổiBật</th>
    </tr> </thead>
    <tbody>
    </tbody>
</table>



</html>
