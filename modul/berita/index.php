<?php
session_start();
include ('../../config/setup.php');
include ('../layouts/header.php');
?>
        <div id="layoutSidenav">
            <?php 
                include ('../layouts/sidebar.php'); 
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Berita</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                Berita
                                <hr>
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Judul Berita</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aksi</th>
                                        <th scope="col">Pembuat</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
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
