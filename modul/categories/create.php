<?php
session_start();
include ('../layouts/header.php');
?>
        <div id="layoutSidenav">
            <?php 
                include ('../layouts/sidebar.php'); 
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Kategori</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <form action="store.php" method="post">
                                    <div class="form-group">
                                        <label for="nama_kategori">Nama Kategori</label>
                                        <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
                                    </div>
                                    <br>
                                        <input type="submit" value="simpan" class="btn btn-primary">
                                </form>
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
