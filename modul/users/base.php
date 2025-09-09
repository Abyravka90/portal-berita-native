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
                        <h1 class="mt-4">Users</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        Users
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
                                        <th scope="col">Nama Lengkap</th>
                                        <th scope="col">Username</th>
                                        <th></th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                           <?php tampil_users($koneksi) ?>
                                        </tbody>
                                    </table>
                            </div>
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
