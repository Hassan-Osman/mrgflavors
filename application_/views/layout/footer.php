<!-- footer begin -->
    <footer style="padding: 0px;">
      <div class="subfooter">
        <div class="container">
          <div class="row">
            <div class="col-md-6"> © Copyright. mrgflavors.com. All Rights Reserved 2018. Mostafa Mousa </div>
            <div class="col-md-6 text-right">
              <div class="social-icons"> <a href="https://www.facebook.com/mrgflavorsofficial/" target="_new"><i class="fa fa-facebook fa-lg"></i></a>
               <a href="" target="_new"><i class="fa fa-twitter fa-lg"></i></a>
                <a href="" target="_new"><i class="fa fa-google-plus fa-lg"></i></a> 
                <a href="" target="_new"><i class="fa fa-youtube fa-lg"></i></a> 
                <a href="" target="_new"><i class="fa fa-instagram fa-lg"></i></a> 
                <a href="" target="_new"><i class="fa fa-pinterest fa-lg"></i></a> 
                <a href="" target="_new"><i class="fa fa-foursquare fa-lg"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer close --> 
  </div>
</div>

<!-- Javascript Files
    ================================================== --> 
    <script src="<?= base_url('resources/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('resources/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('resources/js/easing.js') ?>"></script>
    <script src="<?= base_url('resources/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('resources/js/designesia.js') ?>"></script>
    <script src="<?= base_url('resources/js/validation.js') ?>"></script>
    <script src="<?= base_url('resources/js/jquery.layerslider.js') ?>"></script>
    <script src="<?= base_url('resources/js/flex-slider.min.js') ?>"></script>
    <script>
        $('#size').change(function() {
            calculateTotal();
        });

        $('#quantity').bind('keyup mouseup', function() {
            calculateTotal();
        });

        function calculateTotal() {
            var size = $('#size').val();
            var price = parseInt($("#"+size).val());
            var quantity = 1;
            if($('#quantity').val()) {
                quantity = parseInt($('#quantity').val());
            } 
            var price = parseInt($("#"+size).val());
            var total = quantity*price;
            $("#total").text(total+" EGP");
            $("#totalH").val(total);
        }

        $("#orderNow").click(function() {
            $('#orderForm').submit();
        });
    </script>
</body>
</html>





