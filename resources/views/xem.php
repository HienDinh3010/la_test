<html><body>
<h1>Xem trực tiếp</h1>
<div id="kq"></div>
<script>
if(typeof(EventSource) !== "undefined") {
  var url= "http://localhost/la_test/public/tuongthuat";
  var id=0; //biến này để lưu id của event
  var source = new EventSource(url);
  source.onmessage = function(event) {
    if (event.lastEventId!=id){  //nếu id lần này và lần trước khác nhau thì mới hiện
      id = event.lastEventId; //mỗi lần dữ liệu về là lưu vào biến id
      document.getElementById("kq").innerHTML +=  event.data + "<br>";      
    } //if
  };
} else document.getElementById("kq").innerHTML = "Browser không hỗ trợ";
</script>
</body></html>
