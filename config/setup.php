<?php
    $server = 'http://localhost/portal-berita';
    if(empty($_SESSION['username'])){
        echo '
            <script>
                alert("silahkan login terlebih dahulu");
                window.location.href = "'.$server.'/modul/auth";
            </script>
        ';
    }