<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="<?= base_url();?>assets/lightcase/src/js/lightcase.js"></script>
 <script src="<?= base_url();?>assets/js/smooth-scroll.min.js"></script> 
 
</body>
</html>

<!---------------------------------------->
<!-------- Script de la pagina web ------->
<!---------------------------------------->
<?php if($this->uri->segment(1)=="" or $this->uri->segment(2)=="inicio"){?>
    <script src="<?= base_url();?>assets/js/home.js"></script>
    <script src="<?php echo base_url();?>assets/js/volverArriba.js"></script>
    <script src="<?php echo base_url();?>assets/js/swiper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/swiper.js"></script>
<?php }?>

<?php if($this->uri->segment(2)=="escuelaDominical"){?>
    <script src="<?= base_url();?>assets/js/home.js"></script>
    <script src="<?php echo base_url();?>assets/js/volverArriba.js"></script>
<?php }?>

<?php if($this->uri->segment(2)=="jovenes"){?>
    <script src="<?= base_url();?>assets/js/home.js"></script>
    <script src="<?php echo base_url();?>assets/js/volverArriba.js"></script>
<?php }?>

<?php if($this->uri->segment(2)=="adolecentes"){?>
    <script src="<?= base_url();?>assets/js/home.js"></script>
    <script src="<?php echo base_url();?>assets/js/volverArriba.js"></script>
<?php }?>

