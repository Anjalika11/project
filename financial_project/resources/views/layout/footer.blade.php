<footer class="footer mt-auto">
    <div class="copyright bg-white">
        <p>
            &copy; <span id="copy-year"></span> Copyright 2023 -

            <a class="text-primary" href="http://www.nimbuscode.net/" target="_blank"> NIMBUSCODE PVT (LTD)</a>.
        </p>
    </div>
    <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
    </script>
</footer>
</div>
</div>


<script>
    jQuery(document).ready(function() {
        jQuery('input[name="dateRange"]').daterangepicker({
            autoUpdateInput: false,
            singleDatePicker: true,
            locale: {
                cancelLabel: "Clear",
            },
        });
        jQuery('input[name="dateRange"]').on(
            "apply.daterangepicker",
            function(ev, picker) {
                jQuery(this).val(picker.startDate.format("MM/DD/YYYY"));
            }
        );
        jQuery('input[name="dateRange"]').on(
            "cancel.daterangepicker",
            function(ev, picker) {
                jQuery(this).val("");
            }
        );
    });
</script>


<script src="js/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<script src="plugins/daterangepicker/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>



</body>

</html>
