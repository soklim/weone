<script src="/js/demo/chart-bar-demo.js"></script>
<script src="/vendor/chart.js/Chart.min.js"></script>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Innisfree", "Laneige", "Iope", "Etude House","Other"],
            datasets: [{
                data: [{{$pro_innis->count()}}, {{$pro_laneige->count()}}, {{$pro_iope->count()}}, {{$pro_etude->count()}},{{$pro_other->count()}}],
                backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745','#ff6600'],
            }],
        },
    });

</script>

<script>
    var uploadField = document.getElementById("photo_id");

    uploadField.onchange = function() {
       //Allow upload file less than 3MB
        if(this.files[0].size > 30000000){
            document.getElementById("SizeFile").style.display = "block";
            // alert("File is too big! You can not upload file more than 3MB");
            this.value = "";
        };
    };
</script>

<script>
    // Allow upload only file that have extension: .jpg, ,jpeg, .bmp, .gif & .png
    var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];
    function Validate(oForm) {
        var arrInputs = oForm.getElementsByTagName("input");
        for (var i = 0; i < arrInputs.length; i++) {
            var oInput = arrInputs[i];
            if (oInput.type == "file") {
                var sFileName = oInput.value;
                if (sFileName.length > 0) {
                    var blnValid = false;
                    for (var j = 0; j < _validFileExtensions.length; j++) {
                        var sCurExtension = _validFileExtensions[j];
                        if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                            blnValid = true;
                            break;
                        }
                    }

                    if (!blnValid) {
                        document.getElementById("validfile").style.display = "block";

                        return false;
                        location.reload();

                    }
                }
            }
        }
        alert("Successfully!!!");
        return true;
    }
</script>




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>



<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin.min.js"></script>


<!-- Page level plugin JavaScript-->
<script src="/vendor/datatables/jquery.dataTables.js"></script>
<script src="/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Demo scripts for this page-->
<script src="/js/demo/datatables-demo.js"></script>





