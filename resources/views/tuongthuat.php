<?php
    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache');
    $kq = DB::select("select phut, noidung from tuongthuat order by id DESC LIMIT 0,1");
    echo "id: ", $kq[0]->phut, "\n";
    echo "retry: 5000\n";
    echo "data: <p>Phút ", $kq[0]->phut, "</p> \n";
    echo "data: <div>",$kq[0]->noidung."</div><hr>\n\n";
    flush();
?>
