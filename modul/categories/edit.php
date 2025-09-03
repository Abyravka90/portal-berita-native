<?php
include ('../../config/database.php');
include ('../../config/functions.php');
include ('../layouts/header.php');
$id_kategori = $_GET['id'];
?>
        <div id="layoutSidenav">
            <?php 
                include ('../layouts/sidebar.php'); 
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kategori</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php edit_kategori($koneksi, $id_kategori); ?>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <?php
                include ('../layouts/footer.php');
                ?>
            </div>
        </div>
            <?php
                include ('../layouts/script.php');
            ?>
    </body>
</html>
