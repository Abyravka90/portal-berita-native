<?php
session_start();
include ('../../config/setup.php');
include ('../../config/database.php');
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
                                Tambah Berita
                                <hr>
                                <form action="store.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="judul">Judul Berita</label>
                                        <input type="text" class="form-control" id="judul" name="judul" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control" id="id_kategori" name="id_kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <?php
                                                $query = "SELECT * FROM tbl_kategori";
                                                $result = mysqli_query($koneksi, $query);
                                                while($row = mysqli_fetch_assoc($result)){
                                                    echo "<option value='".$row['id_kategori']."'>".$row['nama_kategori']."</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                                    </div>
                                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                                    <div class="form-group">
                                        <label for="image">Gambar</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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
