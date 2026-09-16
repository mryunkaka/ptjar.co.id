<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?= base_url(''); ?>dashboard">
                <i class="bi bi-bar-chart"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <?php
        $role_id = $this->session->userdata('role');
        $queryMenu = "SELECT`a`.`vc_id_menu`,`b`.`vc_menu_name` 
            FROM tr_role_menu a JOIN mst_menu b
            ON`a`.`vc_id_menu`=`b`.`nu_id` 
            WHERE`a`.`vc_id_role`=$role_id
            ORDER BY `b`.`nu_id` ASC
            ";

        $menu = $this->db->query($queryMenu)->result_array();

        ?>



        <?php foreach ($menu  as $m) : ?>

            <?php
            $menuId = $m['vc_id_menu'];
            $querySubMenu = "SELECT* 
                FROM`mst_sub_menu` JOIN`mst_menu`
                ON`mst_sub_menu`.`vc_id_menu`=`mst_menu`.`nu_id`
                 WHERE`mst_sub_menu`.`vc_id_menu`=$menuId
                 AND `mst_sub_menu`.`is_active`=1
                 ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>
            <li class="nav-heading"><?= $m['vc_menu_name']; ?></li>

            <?php foreach ($subMenu as $sm) : ?>



                <?php if ($m['vc_id_menu'] == $sm['vc_id_menu']) : ?>


                    <li class="nav-item active">
                    <?php else : ?>
                    <li class="nav-item ">
                    <?php endif; ?>

                    <a class="nav-link pb-0" href="<?= base_url($sm['vc_url']); ?>">
                        <i class="<?= $sm['vc_icon']; ?>"></i>
                        <span><?= $sm['vc_sub_menu_name']; ?></span></a>

                    </li>



                <?php endforeach; ?>

            <?php endforeach; ?>



    </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <!-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav> -->
    </div><!-- End Page Title -->