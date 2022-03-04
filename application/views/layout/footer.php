<footer class="mt-5">
  <p style="font-size: 14px; text-align: center;">copyright @2022 build by-SMKBISA</p>
  <center>
    <img src="<?= base_url() ?>assets/images/smkbisa.jpg" alt="" width="70">
  </center>

</footer>

</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 0, "asc" ]],
        responsive: true
    } );
} );
</script>
<script type="text/javascript">
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
    }, 3000);
</script>
</body>

</html>