</div>
<!-- End of Content Wrapper -->
<!-- Footer -->
<style type="text/css">
     .footer-dashboardku {
        height:60px;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
        padding: 10px;
        background-color: #0148A8;
    }
      .icon-containerku {
        width:40%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex: 1;
        }

        .icon {
            color: white;
            font-size: 30px;
            cursor: pointer;
        }
       
</style>

<div class="footer-dashboardku">
    <div class="icon-containerku">
        <a href="<?= base_url('dashboard'); ?>">
            <i class="fas fa-home icon"></i>
        </a>
    </div>
    <div class="icon-containerku">
        <a href="https://wa.me/6281319456595">
           
            <i class="fab fa-whatsapp icon"></i>
            <!-- <img src="assets/img/icon/cs.png" 
            alt="Customer Service"> -->
        </a>
    </div>
    <div class="icon-containerku">
        <a href="<?= base_url('profile'); ?>">
            <i class="fas fa-user-circle icon"></i>
        </a>
    </div>
</div>

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kamu yakin ingin keluar dari situs?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
            <div class="modal-footer">
                <button class="btn btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a href="<?= base_url('login/logout'); ?>"><button class="btn btn-outline-primary">Logout</button></a>
            </div>
        </div>
    </div>
</div>


<?php


print_r($this->session->flashdata('error'));

?>

<script src="https://zavalabs.com/simple.money.format.js"></script>
<script type="text/javascript">

 $('.uang').simpleMoneyFormat();
    function hapusData(x){
        Swal.fire({
            title: "Apakah Anda yakin?",
            text: "Data yang dihapus tidak bisa dikembalikan!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika dikonfirmasi, lakukan aksi delete (contoh AJAX)
                
                window.location.href="<?php echo site_url('outputdata/delete/') ?>"+x
            }
        });
    }


    <?php if($this->session->flashdata('import')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('import'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('update')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('update'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('pdf')){ ?>
Swal.fire(
     'Successfully',
      '<?php echo $this->session->flashdata('pdf'); ?>',
      'success'
    )
<?php } ?>

<?php if($this->session->flashdata('error')){ ?>
Swal.fire(
     'Gagal Proses',
      '<?php echo $this->session->flashdata('error'); ?>',
      'error'
    )
<?php } ?>
</script>
</body>

</html>