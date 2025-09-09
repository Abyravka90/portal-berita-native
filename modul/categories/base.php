<?php
session_start();
include ('../../config/setup.php');
include ('../layouts/header.php');
include ('../../config/database.php');
include ('../../config/functions.php');
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
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Kategori
                                    </div>
                                    <div>
                                        <a href="create.php" class="btn btn-primary"><abbr title="tambah data baru"><i class="fas fa-plus"></i></abbr></a>
                                    </div>
                                </div>    
                                <hr>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Aksi</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                            <?php tampil_categories($koneksi) ?>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
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
