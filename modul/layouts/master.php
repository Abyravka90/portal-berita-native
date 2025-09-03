<?php
include ('header.php');
?>
        <div id="layoutSidenav">
            <?php 
                include ('sidebar.php'); 
            ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Nama Modul</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                                !!CONTEN TARO DISINI !!
                            </div>
                        </div>
                        <div style="height: 100vh"></div>
                        <div class="card mb-4"><div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div></div>
                    </div>
                </main>
                <?php
                include ('footer.php');
                ?>
            </div>
        </div>
            <?php
                include ('script.php');
            ?>
    </body>
</html>
