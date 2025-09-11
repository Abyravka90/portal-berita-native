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
                <img src="../../assets/img/'.$d['image'].'" alt="" class="img-thumbnail" width="100px">
            </td>
            <td>
                <a href="edit.php?id='.$d['id_berita'].'" class="btn btn-warning btn-sm"><abbr title="Edit data"><i class="fas fa-pen-square"></i></abbr></a>
                <a href="destroy.php?id='.$d['id_berita'].'" class="btn btn-danger btn-sm"><abbr title="hapus data"><i class="fas fa-trash"></i></abbr></a>
            </td>
            <td></td>
        </tr>';
    }

}

function edit_berita($koneksi, $id_berita){
    $query = "SELECT * FROM tbl_berita WHERE id_berita = '$id_berita'";
    $q = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($q);
    echo '
    <form action = "update.php" method = "post" enctype="multipart/form-data">
        <input name="id_berita" type="hidden" value="'.$data['id_berita'].'">
        <div class="form-group">
            <label for="judul">Judul Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" value="'.$data['judul'].'" required>
        </div>
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="id_kategori" name="id_kategori" required>
                <option value="">Pilih Kategori</option>';
                $query = "SELECT * FROM tbl_kategori";
                $result = mysqli_query($koneksi, $query);
                while($row = mysqli_fetch_array($result)){
                    if($row['id_kategori'] == $data['id_kategori']){
                        echo "<option value='".$row['id_kategori']."' selected>".$row['nama_kategori']."</option>";
                    } else {
                        echo "<option value='".$row['id_kategori']."'>".$row['nama_kategori']."</option>";
                    }
                }
            echo '
            </select>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>'.$data['content'].'</textarea>
        </div>
        <input type="hidden" name="id_user" value="'.$_SESSION['id_user'].'">
        <div class="form-group">
            <label for="image">Gambar</label>
                <input type="file" class="form-control" id="image" name="image">
        </div>
        <hr>
        <button type="submit" class="btn btn-success">Update</button>
    </form>    
        ';
}
// fungsi berita end

// public berita
function tampil_public_berita($koneksi){
    $query = 'SELECT b.id_berita, b.judul, b.content, b.tanggal, b.image, 
    k.nama_kategori, u.username FROM tbl_berita b 
    JOIN tbl_kategori k ON b.id_kategori = k.id_kategori 
    JOIN tbl_users u ON b.id_user = u.id_user
    ORDER BY b.tanggal DESC';
    $q = mysqli_query($koneksi, $query); 
    $result = [];
    while ($data = mysqli_fetch_assoc($q)) {
        $result[] = $data;
    }
    return $result;
}

function detail_berita($koneksi, $id){
    $query = "SELECT b.judul, b.content, b.tanggal, b.image, k.nama_kategori, u.username FROM tbl_berita b JOIN tbl_kategori k ON b.id_kategori = k.id_kategori JOIN tbl_users u on b.id_user = u.id_user WHERE b.id_berita = '$id' LIMIT 1";
    //die($query);
    $q = mysqli_query($koneksi, $query);
    $result = [];
    while($data = mysqli_fetch_assoc($q)){
        $result[] = $data;
    }
    return $result;

}
