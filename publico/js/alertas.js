//ALERTA
$.getJSON("../publico/js/lang.json", function(json) {
    if (!sessionStorage.getItem("lang")) {
        sessionStorage.setItem("lang", $('.translate').attr('id'));
    }

    var lang = sessionStorage.getItem("lang");
    console.log(lang)
    let strings = json;

    //CAMBIO DE IDIOMA A LAS ALERTAS CON BOTON
    function translate(str) {
        if (!strings.hasOwnProperty(lang) || !strings[lang].hasOwnProperty(str)) {
            // El idioma o la cadena a traducir (propiedad) no existe
            return str;
        }

        //Evalua el estado del checkbox y cambia el idioma de la alerta
        var check = document.querySelector(".check");

        if (check.checked == true) {
            return strings["es"][str];
        } else if (check.checked == false) {
            return strings["en"][str];
        }
    }

    //FORMULARIO DINAMICO EN SOLICITUD DE PEDIDOS
    jQuery(function() {
        //Agregar mas producto
        $('#btnAdd').on('click', function() {
            // var i = $('.filas').length //nos manda la cantidad de filas
            var fila = `<tr class="filas">
            <td>
                <select class="form-control" name="sNombreProducto[]">
                    <option value="<?php echo $lang['formSolicitudPedidos']['Sacos']?>">Sacos</option>
                </select>
            </td>
            <td>
                <input class="form-control" type="number" id="txtCantidadSP" name="txtCantidadSP[]" min="0">
            </td>
            <td>
                <button type="button" class="btn" id="btnEliminar"><img src="../publico/img/eliminar.png" width="20rem" height="20rem" alt=""></button>
            </td>
        </tr>`
            $('#tblFilas').append(fila)
        })
    })

    $(document).ready(function() {
        $('#frmDinamico #txtNombreSP').addClass('validate[required,custom[onlyLetterSp]]');
        $('#frmDinamico #txtCorreoSP').addClass('validate[required,custom[email]]');
        $('#frmDinamico #txtIdentificacionSP').addClass('validate[required,custom[DUI]]');
        $('#frmDinamico #txtTelefonoSP').addClass('validate[required,custom[phone]]');
        $('#frmDinamico #txtDireccionSP').addClass('validate[required,custom[DIRECCION]]');
        $('#frmDinamico #txtCantidadSP').addClass('validate[required,custom[integer]]');

        //Formulario de solicitud de productos
        jQuery("#frmDinamico").validationEngine('attach', {
            onValidationComplete: function(form, status) {
                if (status == false) {
                    Swal.fire({
                        text: translate('TextErrorAlEnviar'),
                        icon: 'error'
                    })
                } else if (status == true) {
                    Swal.fire({
                        title: translate('TitleDinamico'),
                        text: translate('TextDinamico'),
                        icon: 'question',
                        confirmButtonText: translate('ConfirmDinamico'),
                        confirmButtonColor: 'orange',
                        showDenyButton: true, //No 
                        denyButtonText: translate('DenyDinamico'),
                        denyButtonColor: ' blue '
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: $('#frmDinamico').attr('method'),
                                url: $('#frmDinamico').attr('action'),
                                data: $('#frmDinamico').serialize(),
                                success: function(response) {
                                    $('#datos').html(response)
                                        // $('#tblFilas > tr').remove()
                                },
                                error: function() {
                                    Swal.fire({
                                        title: translate('TitleDinamicoError'),
                                        icon: 'error'
                                    })

                                }
                            })
                        } else if (result.isDenied) {
                            Swal.fire({
                                title: translate('TitleDinamicoCancelado')
                            })

                        }
                    })
                }
            }

        });
    })


    //Boton eliminar
    $('body').on('click', '#btnEliminar', function() {
        $(this).closest('tr').remove() //closest busca un elemento mas cercano
    })

    $(document).ready(function() {
        $('#formFacturar #txtNomTarjetaSP').addClass('validate[required,custom[onlyLetterSp]]');
        $('#formFacturar #txtNumTarjetaSP').addClass('validate[required,custom[creditCard]]');

        jQuery("#formFacturar").validationEngine('attach', {
            onValidationComplete: function(form, status) {
                if (status == false) {
                    Swal.fire({
                        text: translate('TextErrorAlEnviar'),
                        icon: 'error'
                    })
                } else if (status == true)
                    Swal.fire({
                        title: translate('TitleFacturarDinamico'),
                        text: translate('TextFacturarDinamico'),
                        icon: 'question',
                        confirmButtonText: translate('ConfirmDinamico'),
                        showDenyButton: true,
                        denyButtonText: translate('DenyDinamico'),
                        denyButtonColor: ' blue ',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: $('#formFacturar').attr('method'),
                                url: $('#formFacturar').attr('action'),
                                data: $('#formFacturar').serialize(),
                                success: function(response) {
                                    Swal.fire({
                                        title: translate('TitleFacturarDinamicoSuccess'),
                                        icon: 'success',
                                        html: response + ' <button type="button" id="btnpdf" class="btn btn-warning" value="Export To PDF">Descarga de PDF</button>'

                                    })

                                    $('#ventanaModular').modal('hide');
                                    $('#btnpdf').click(function() {


                                        window.jsPDF = window.jspdf.jsPDF;

                                        var pdf = new jsPDF();


                                        pdf.text(70, 20, translate('pdfTitle'));

                                        pdf.text(10, 30, translate('pdfTitleFactura'));
                                        pdf.autoTable({
                                            theme: 'striped',
                                            html: '#factura',
                                            startY: 40
                                        });

                                        pdf.text(10, 70, translate('pdfTitleCliente'));
                                        pdf.autoTable({
                                            theme: 'striped',
                                            html: '#tblCliente',
                                            startY: 80
                                        })

                                        pdf.text(10, 110, translate('pdfTitleProducto'));
                                        pdf.autoTable({
                                            theme: 'grid',
                                            html: '#tblPedido',
                                            startY: 120
                                        })

                                        pdf.save('mipdf.pdf');
                                    });

                                },
                                error: function() {
                                    Swal.fire({
                                        title: translate('TitleDinamicoError'),
                                        icon: 'error',
                                    })
                                    $('#modal1').modal('hide')
                                },
                                error: function() {
                                    console.log(translate('TitleDinamicoError'))
                                }
                            })
                        } else if (result.isDenied) {
                            Swal.fire({
                                title: translate('TitleDinamicoCancelado')
                            })
                            $('#modal1').modal('hide')
                        }
                    })
            }
        })
    });
    // })


    //Formulario de gestion de usuario 
    $(document).ready(function() {
            $('#formGestionUsuario #txtid').addClass('validate[required,custom[number]]');
            $('#formGestionUsuario #txtNombreU').addClass('validate[required,custom[onlyLetterSp]],');
            $('#formGestionUsuario #txtApellidoU').addClass('validate[required,custom[onlyLetterSp]]');
            $('#formGestionUsuario #txtNumeroIdentificacionU').addClass('validate[required,custom[DUI]]');
            $('#formGestionUsuario #txtCorreoU').addClass('validate[required,custom[email]],');
            $('#formGestionUsuario #txtNacionalidadU').addClass('validate[required,custom[onlyLetterSp]]');
            $('#formGestionUsuario #txtDireccionU').addClass('validate[required,custom[DIRECCION]]');
            $('#formGestionUsuario #txtTelefonoU').addClass('validate[required,custom[phone]');


            jQuery("#formGestionUsuario").validationEngine('attach', {
                onValidationComplete: function(form, status) {
                    if (status == false) {
                        Swal.fire({
                            text: translate('TextErrorAlEnviar'),
                            icon: 'error'
                        })
                    } else if (status == true) {
                        Swal.fire({
                            title: translate('Title'),
                            text: translate('Text'),
                            icon: 'question',
                            confirmButtonText: translate('confirmButtonText'),
                            confirmButtonColor: 'orange',
                            showDenyButton: true, //No 
                            denyButtonText: translate('denyButtonText'),
                            denyButtonColor: ' blue ',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    type: $('#formGestionUsuario').attr('method'),
                                    url: $('#formGestionUsuario').attr('action'),
                                    data: $('#formGestionUsuario').serialize(),
                                    success: function(response) {
                                        $('#prueba2').html(response)
                                            //     // Swal.fire({
                                            ////         title: translate('successTitle'),
                                            // //        icon: 'success',
                                            //    //     })
                                            //Cierra la modal
                                        $('#modal2').modal('hide');
                                    },
                                    error: function() {
                                        console.log(translate('TitleDinamicoError'))
                                    }
                                })
                            } else if (result.isDenied) {
                                Swal.fire({
                                    title: translate('TitleDinamicoCancelado')
                                })
                                $('#modal2').modal('hide');
                            }
                        })
                    }
                }
            });
        })
        // })

    //Formulario de gestion de Consulta de existencia

    $(document).ready(function() {
        $('#formConsultaExistencia #txtNombreCE').addClass('validate[required,custom[onlyLetterSp]]');
        $('#formConsultaExistencia #txtCorreoCE').addClass('validate[required,custom[email]]');
        $('#formConsultaExistencia #txtNacionalidadCE').addClass('validate[required,custom[onlyLetterSp]]');
        $('#formConsultaExistencia #txtNIdentidadCE').addClass('validate[required,custom[DUI]]');
        $('#formConsultaExistencia #txtTelefonoCE').addClass('validate[required,custom[phone]]');
        $('#formConsultaExistencia #txtDireccionCE').addClass('validate[required,custom[DIRECCION]]');
        $('#formConsultaExistencia #txtProductoCE').addClass('validate[required,custom[onlyLetterSp]]');
        $('#formConsultaExistencia #txtCantidadCE').addClass('validate[required,custom[integer]]');
        $('#formConsultaExistencia #txtPrecioUnitarioCE').addClass('validate[required,custom[number]]');
        $('#formConsultaExistencia #txtTotalIvaCE').addClass('validate[required,custom[number]]');

        jQuery("#formConsultaExistencia").validationEngine('attach', {
            onValidationComplete: function(form, status) {
                if (status == false) {
                    Swal.fire({
                        text: translate('TextErrorAlEnviar'),
                        icon: 'error'
                    })
                } else if (status == true) {
                    Swal.fire({
                        title: translate('TitleDinamico'),
                        text: translate('TextDinamico'),
                        icon: 'question',
                        confirmButtonText: translate('ConfirmDinamico'),
                        confirmButtonColor: 'orange',
                        showDenyButton: true, //No 
                        denyButtonText: translate('DenyDinamico'),
                        denyButtonColor: ' blue ',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: $('#formConsultaExistencia').attr('method'),
                                url: $('#formConsultaExistencia').attr('action'),
                                data: $('#formConsultaExistencia').serialize(),
                                success: function(response) {
                                    //Imprime la respuesta de php
                                    $('#prueba').html(response)
                                        //     // Swal.fire({
                                        //      //   title: translate('TitleSuccessDinamico'),
                                        //       //  icon: 'success',
                                        // //     })
                                        //Cierra la modal
                                    $('#modal1').modal('hide')
                                },
                                error: function() {
                                    console.log(translate('TitleDinamicoError'))
                                }
                            })
                        } else if (result.isDenied) {
                            Swal.fire({
                                title: translate('TitleDinamicoCancelado')
                            })
                            $('#modal1').modal('hide')
                        }
                    })
                }
            }
        });
    })
})