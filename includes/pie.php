</div>
        </div>
<footer >
		<div class="footer-copy-redes sticky-bottom"> 
            <div class="main-copy-redes">
				<div class="footer-copy">
                <span> &copy;</span><span><?php echo $lang['global']['Derechos']?></span>
				</div>
				<div class="footer-redes">
					<a target="_blank" href="https://www.facebook.com/sacoselsalvador/" rel="noopener noreferrer" class="fa fa-facebook"></a>
					<a target="_blank" href="https://twitter.com/sasicasa?lang=es" rel="noopener noreferrer" class="fa fa-twitter"></a>
					<a target="_blank" href="https://sv.linkedin.com/company/sasicasa" rel="noopener noreferrer" class="fa fa-linkedin"></a>
				</div> 

                <!-- Link para cambio de idioma -->
                <div class="mx-auto">
                <a href="<?php echo $section ?>?lang=es"><span class="es"><?php echo $lang['global']['Español']?> |</span></a>
                    <div class="d-none">
                        <input type="checkbox" class="check d-none">
                    </div>
                <a href="<?php echo $section ?>?lang=en"><span class="en"><?php echo $lang['global']['Inglés']?></span></a>
                </div>

			</div> 
            
		</div>
</footer> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>

<script>
    $(document).ready(function (e) {
    var jsvar='<?=$_SESSION['lang']?>';

    if ( jsvar=='es') {
        window.onload= check();
        $(document).ready(function () {
        //Idioma del datatable
        $('#example').DataTable({
            "language": {
            "url":"//cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"},
            stateSave: true,
            "bDestroy": true})
        }); 

        //Idioma del select monthPicker
        $('#yearpicker').monthpicker({
            'lang': 'es',
            'minYear': 2022,
            'maxYear': 2050
        }); 

        // fileinput
        $('#file').fileinput({
        language: 'es',
        allowedFileExtensions: ['CSV']
        });  

        // DatePicker
        $('.datepicker').datepicker({
        language: 'es'
        }); 

    }else if (jsvar=='en') {
        window.onload= uncheck();
        $(document).ready(function () {
        //Idioma del datatable
        $('#example').DataTable({
            stateSave: true,
            "bDestroy": true
        }) 

        //Idioma del select monthPicker
        $('#yearpicker').monthpicker({
            'minYear': 2022,
            'maxYear': 2050
        });

        // fileinput
        $('#file').fileinput({
        language: 'en'
        });

            // DatePicker
        $('.datepicker').datepicker({
        language: 'en-CA'
        });

        });  

    }

    function uncheck() {
        document.querySelector(".check").checked = false;
    }

    function check() {
        document.querySelector(".check").checked = true;
    } 

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> 
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script src="../publico/js/fcAlerta.js"></script> 
</body>
</html>