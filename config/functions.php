<?php 
// fungsi kategori start
function tampil_categories($koneksi){
    $query = 'SELECT * FROM tbl_kategori';
    $q = mysqli_query($koneksi, $query);
    $no = 1;
    while($d = mysqli_fetch_array($q)){
        echo '
        <tr>
            <th scope="row">'.$no++.'</th>
            <td>'.$d['nama_kategori'].'</td>
            <td>
                <a href="edit.php?id='.$d['id_kategori'].'" class="btn btn-warning btn-sm"><abbr title="Edit data"><i class="fas fa-pen-square"></i></abbr></a>
                <a href="destroy.php?id='.$d['id_kategori'].'" class="btn btn-danger btn-sm"><abbr title="hapus data"><i class="fas fa-trash"></i></abbr></a>
            </td>
            <td></td>
        </tr>';
    }
}

function edit_kategori($koneksi, $id_kategori){
    $query = "SELECT * FROM tbl_kategori WHERE id_kategori = '$id_kategori'";
    $q = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($q);
    echo '
                <form action="update.php" method="post">
                    <input name="id_kategori" type="hidden" value="'.$data['id_kategori'].'">
                    <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" name="nama_kategori" value="'.$data['nama_kategori'].'" class="form-control" placeholder="Nama Kategori">
                    </div>
                    <input type="submit" value="update" class="btn btn-success">
                </form>
    ';    
}
// fungsi kategori end

// fungsi users start
function tampil_users($koneksi){
    $query = 'SELECT * FROM tbl_users';
    $q = mysqli_query($koneksi, $query);
    $no = 1;
    while($d = mysqli_fetch_array($q)){
        echo '
        <tr>
            <th scope="row">'.$no++.'</th>
            <td>'.$d['nama_lengkap'].'</td>
            <td>'.$d['username'].'</td>
            <td>
                <a href="edit.php?id='.$d['id_user'].'" class="btn btn-warning btn-sm"><abbr title="Edit data"><i class="fas fa-pen-square"></i></abbr></a>
                <a href="destroy.php?id='.$d['id_user'].'" class="btn btn-danger btn-sm"><abbr title="hapus data"><i class="fas fa-trash"></i></abbr></a>
            </td>
            <td></td>
        </tr>';
    }
}

function edit_users($koneksi, $id_user){
    $query = "SELECT * FROM tbl_users WHERE id_user = '$id_user'";
    $q = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($q);
    echo '
                <form action="update.php" method="post">
                    <input name="id_user" type="hidden" value="'.$data['id_user'].'">
                                     <div class="form-group">
                                        <label for="nama_lengkap">Nama lengkap</label>
                                        <input value='.$data['nama_lengkap'].' type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input  value='.$data['username'].' type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password1" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password2">Confirm Password</label>
                                        <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
                                    </div>
                                    <br>
                    <input type="submit" value="update" class="btn btn-success">
                </form>
    ';    
}
// fungsi users end

// fungsi berita start
function tampil_berita($koneksi){
    $query = 'SELECT b.id_berita, b.judul, b.content, b.tanggal, b.image,
    k.nama_kategori, u.username 
    FROM tbl_berita b JOIN tbl_kategori k ON b.id_kategori = k.id_kategori 
    JOIN tbl_users u ON b.id_user = u.id_user   
    ORDER BY b.tanggal DESC';
    $q = mysqli_query($koneksi, $query);
    $no = 1;
    while($d = mysqli_fetch_array($q)){
        echo '
        <tr>
            <th scope="row">'.$no++.'</th>
            <td>'.$d['judul'].'</td>
            <td>'.$d['nama_kategori'].'</td>
            <td>'.$d['content'].'</td>
            <td>'.$d['tanggal'].'</td>
            <td>'.$d['username'].'</td>
            <td>
                <img src="'.$d['image'].'" alt="" class="img-thumbnail" width="100px">
            </td>
            <td>
                <a href="edit.php?id='.$d['id_berita'].'" class="btn btn-warning btn-sm"><abbr title="Edit data"><i class="fas fa-pen-square"></i></abbr></a>
                <a href="destroy.php?id='.$d['id_berita'].'" class="btn btn-danger btn-sm"><abbr title="hapus data"><i class="fas fa-trash"></i></abbr></a>
            </td>
            <td></td>
        </tr>';
    }

}
// fungsi berita end
