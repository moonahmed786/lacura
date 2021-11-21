@extends('layouts.user_layout')
@section('header')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/datatables.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/custom_dt_html5.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("plugins/table/datatable/dt-global_style.css")}}">

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection
@section('content')


    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6 mb-3 ">

                        <h2>Create Voucher Code BTC</h2>

                    </div>
                    <div class="widget-content widget-content-area br-6 mb-3 ">

                        <a href="{{route('users.gift.form')}}">Click Buy Voucher Code with Commissions </a>

                    </div>

                    <div class="widget-content widget-content-area br-6">
                        <div class="col-md-2 float-right ">
                            <a href="{{route('users.gift.list')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('Vouchers List')</b></a>
                        </div>
                        @if (count($errors) > 0)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <strong class="col-md-12"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Alert!</strong>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row ">
                            <!-- left column -->
                            <div class="col-md-6 justify-content-center m-auto">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h7 class="card-title">Change the Numbers of Slot for this Voucher and Copy
                                            Voucher Code
                                        </h7>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form method="POST" action="{{ route('users.gift.BTC.preview') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">

                                            <div class=" form-group">
                                                <label for="basic-url" class="pl-2">Enter CPS Number You Want to
                                                    Buy!</label>
                                                <div class="qty text-center ">
                                                    <span class="btn btn-warning minus">-</span>
                                                    <input type="number" class="count" name="cps_qty" id="cps_qty"
                                                           value="1" readonly>
                                                    <span class="btn btn-success plus">+</span>
                                                </div>


                                            </div>
                                            <div class="form-group ">
                                                <label for="basic-url">Total Amount :</label>


                                                <input id="total" type="text" value="150" name="total"
                                                       class="form-control">
                                                <span class="input-group-btn input-group-append"></span>

                                            </div>



                                            <p >Voucher Code:</p>

                                            <div class=" form-group input-group mb-4">
                                                <input id="gift_code" type="text" value="{{$code}}" name="gift_code"
                                                       class="form-control" readonly>

                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button" data-clipboard-action="copy" data-clipboard-target="#gift_code">Copy</button>
                                                </div>
                                            </div>








                                        </div>
                                        <!-- /.card-body -->


                                        <div class="card-footer"><br>

                                            <button type="submit" class="btn btn-success float-right"
                                            >Preview
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="http://codiumtech.com/">Codium Tech</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>




@endsection
@section('script')
    <script src="{{asset("assets/js/clipboard/clipboard.min.js")}}"></script>
    <script src="{{asset("assets/js/forms/custom-clipboard.js")}}"></script>
    <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="{{asset("plugins/table/datatable/datatables.js")}}"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="{{asset("plugins/table/datatable/button-ext/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("plugins/table/datatable/button-ext/jszip.min.js")}}"></script>
    <script src="{{asset("plugins/table/datatable/button-ext/buttons.html5.min.js")}}"></script>
    <script src="{{asset("plugins/table/datatable/button-ext/buttons.print.min.js")}}"></script>
    <script>

        <?php if(Session::has('message')): ?>


            $(document).ready(function () {
                swal("<?php echo e(__(Session::get('message'))); ?>","", "<?php echo e(__(Session::get('type'))); ?>");
            });

    <?php endif; ?>


        $(document).on('click', '.plus', function () {
            var commission = {{auth()->user()->commission}};
            if (commission>=150)
            {
                $('.count').val(parseInt($('.count').val()) + 1);
                $('#total').val(parseInt($('#total').val()) + 150);
            }
        });
        $(document).on('click', '.minus', function () {
            $('.count').val(parseInt($('.count').val()) - 1);
            $('#total').val(parseInt($('#total').val()) - 150);

            if ($('.count').val() == 0) {
                $('.count').val(1);
                $('#total').val(150);
            }
        });

        function myFunction2(data) {
            if (data == null) {
                data = '';
            }
            var id = "myInput" + data;
            var copyText = document.getElementById(id);
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            alert("Link is copied ");
        }

        $(document).ready(function () {
            // (async function backAndForth() {
            //     const steps = ['1', '2', '3'];
            //     const values = [];
            //     let currentStep;
            //
            //     swal.setDefaults({
            //         confirmButtonText: 'Forward',
            //         cancelButtonText: 'Back',
            //         progressSteps: steps,
            //         input: 'text'
            //     })
            //
            //     for (currentStep = 0; currentStep < 3;) {
            //         const result = await swal({
            //             title: 'Question ' + steps[currentStep],
            //             inputValue: values[currentStep] ? values[currentStep] : '',
            //             showCancelButton: currentStep > 0,
            //             currentProgressStep: currentStep
            //         });
            //
            //         if (result.value) {
            //             console.log(result.value, values[currentStep]);
            //             values[currentStep] = result.value
            //             currentStep++;
            //             if (currentStep === 3) {
            //                 swal.resetDefaults();
            //                 swal(JSON.stringify(values))
            //                 break
            //             }
            //         } else if (result.dismiss === 'cancel') {
            //             currentStep--;
            //         }
            //     }
            // })()
            // swal({
            //     title: 'Adicionar novo documento',
            //     html: $('<form id="documentos_paciente" enctype="multipart/form-data"></form>').html('\
            //     <div class="form-group">' +
            //         '<label for="refente_familiar">REFERENTE:</label >' +
            //         '<select name="refente_familiar" class="required form-control" required>' +
            //         '</select>' +
            //         '<span class="help-errors">' +
            //         '<strong></strong>' +
            //         '</span>' +
            //         '</div>'
            //     ),
            //     showCancelButton: true,
            //     cancelButtonText: 'Cancelar',
            //     confirmButtonText: 'Enviar',
            //     showCloseButton: true,
            //     allowOutsideClick: false,
            //     preConfirm: () => {
            //
            //
            //         //validate the front here if you wish (valid is the variable to say on the front is ok)
            //         var valid = false;
            //
            //         //ENVIO DE DADOS PARA O SEERVIDOR
            //         if(valid)
            //         {
            //             var documentos_paciente_form = new FormData($('#documentos_paciente')[0]);
            //             valid = false;
            //
            //             $.ajax({
            //                 url: '/admin/pacientes/adicionarDocumento/' + top.id_paciente,
            //                 type: 'post',
            //                 data: documentos_paciente_form,
            //                 processData: false,
            //                 contentType: false,
            //                 success: function (data)
            //                 {
            //                     if(data.status == 'success')
            //                     {
            //                         swal.close();
            //
            //                         swal({
            //                             title: 'Tudo ocorreu corretamente!',
            //                             text: 'Documento adicionado com sucesso!',
            //                             type: 'success'
            //                         });
            //                     }
            //                     else
            //                     {
            //                         valid = false;
            //
            //                     }
            //                 },
            //                 error: function(data)
            //                 {
            //                     //dealing with the error that came from the back end
            //                     if(data.status == '422')
            //                     {
            //                         var errors = data.responseJSON.errors;
            //
            //                         for(var error in errors)
            //                         {
            //                             ///do as you please
            //                         }
            //                     }
            //                 }
            //             })
            //         }
            //
            //         // This way the sweety does not date
            //         return false;
            //     }
            // });
            // swal.setDefaults({
            //     input: 'text',
            //     confirmButtonText: 'Next &rarr;',
            //     showCancelButton: true,
            //     animation: true,
            //     progressSteps: ['1', '2', '3']
            // });
            //
            // var steps = [
            //     {
            //         title: 'Customer Name',
            //         inputId: "customer_name",
            //         inputPlaceholder: "Write something",
            //         preConfirm: function(value)
            //         {
            //             return new Promise(function(resolve, reject)
            //             {
            //                 if (value) {
            //                     resolve();
            //                 } else {
            //                     reject('Please type something in the step 1!');
            //                 }
            //             });
            //         }
            //     },
            //     {
            //         title: 'Sales Person',
            //         text: 'Product sold by?',
            //         preConfirm: function(value)
            //         {
            //             return new Promise(function(resolve, reject)
            //             {
            //                 if (value) {
            //                     resolve();
            //                 } else {
            //                     reject('Please type something in the step 2!');
            //                 }
            //             });
            //         }
            //
            //     },
            //     {
            //         title: 'Additional Details',
            //         text: 'Coments or additional notes',
            //         preConfirm: function(value)
            //         {
            //             return new Promise(function(resolve, reject)
            //             {
            //                 if (value) {
            //                     resolve();
            //                 } else {
            //                     reject('Please type something in the step 3!');
            //                 }
            //             });
            //         }
            //     },
            //
            // ];
            //
            // swal.queue(steps).then(function (result) {
            //     swal.resetDefaults();
            //     swal({
            //         title: 'All done!',
            //         html:
            //             'Your answers: <pre>' +
            //             (result) +
            //             '</pre>',
            //         confirmButtonText: 'Lovely!',
            //         showCancelButton: false
            //     })
            // }, function () {
            //     swal.resetDefaults()
            // });


            //  Swal.fire({
            //      title: "title",
            //      text: "text",
            //      icon: "info",
            //      showCancelButton: true,
            //      cancelButtonText: "Cancel",
            //      confirmButtonText: "Done!",
            //      html: `<input id="input1 class="swal2-input" />
            // <input id="input2 class="swal2-input" />`,
            //      preConfirm: () => {
            //          let value1 = Swal.getPopup().querySelector('#input1').value;
            //          let value2 = Swal.getPopup().querySelector('#input2').value;
            //
            //          if (value1 == somethingWrong1) {
            //              // Notify error and keep alert open.
            //              Swal.showValidationMessage('Invalid input #1.');
            //
            //          } else if (value2 == somethingWrong2) {
            //              // Notify error and keep alert open.
            //              Swal.showValidationMessage('Invalid input #2.');
            //
            //          } else {
            //              // Promise return value that will be available inside the 'then()'.
            //              // Alert will now close.
            //              return {
            //                  input1: input1,
            //                  input2: input2
            //              };
            //          }
            //      }
            //  }).then((inputs) => {
            //      if (inputs !== "cancel") {
            //          // Access the inputs using: inputs.value.input1 and inputs.value.input2
            //          // And do whatever you want.
            //      }
            //  });
            $('.chaining-modals').on('click', function () {
                var url = '<?= route('user.get.gift.code')?>';

                data = {"_token": "{{ csrf_token() }}"};
                $.ajax({
                    type: "get",
                    url: url,
                    data: data,
                    success: function (response) {
                        swal.mixin({
                            confirmButtonText: 'Next →',
                            showCancelButton: true,
                            progressSteps: ['1', '2', '3'],
                            padding: '2em',
                        }).queue([
                            {
                                title: 'Copy Code',
                                text: 'Please Copy This Code ',
                                input: 'text',
                                inputValue: response.code,
                            },
                            {
                                title: 'Enter Amount',
                                text: 'Should Be Multiples of 150$',
                                input: 'text',
                                inputPlaceholder: 'Enter a Valid Amount ',

                                preConfirm: () => {
                                    return fetch(`"{{route('user.check.amount')}}"`)
                                        .then(response => {
                                            if (!response.error) {
                                                throw new Error(response.message)
                                            }
                                            return response.json()
                                        })
                                        .catch(error => {
                                            extraParams: {
                                                validationMessage: 'Adresse e-mail invalide'
                                            }
                                        })
                                },
                            },
                            {
                                input: 'email',
                                extraParams: {
                                    validationMessage: 'Adresse e-mail invalide'
                                },
                                title: "Note!",
                                text: 'Are you Sure to create this Gift Code',
                                // input: 'text',
                            },
                        ]).then(function (result) {
                            if (result.value) {
                                console.table(result.value);
                                swal({
                                    title: 'Congratulations!',
                                    text: 'Gift Created Successfully',
                                    padding: '2em',
                                    html:
                                        'All is Done: <pre>' +
                                        JSON.stringify(result.value) +
                                        '</pre>',
                                    confirmButtonText: 'Lovely!'
                                })
                            }
                        });
                    }
                    ,
                    error: function () {

                    }

                });
            });

        });
        var code = 0;

        {{--$('#create_gift').on('click', function () {--}}


        {{--    var url = '<?= route('user.get.gift.code')?>';--}}

        {{--    data = {"_token": "{{ csrf_token() }}"};--}}
        {{--    $.ajax({--}}
        {{--        type: "get",--}}
        {{--        url: url,--}}
        {{--        data: data,--}}
        {{--        success: function (response) {--}}


        {{--            html = '<div class="FixedHeightContainer" style="background-color:#222d32; color:white;">';--}}
        {{--            html += '<div class="Content" style="height:400px;overflow:auto;">';--}}


        {{--            html += '<p class="pt-3" style="text-align:left;font-weight: bold;">Gift Code:</p>';--}}
        {{--            html += '<input type="text" tabindex="3" placeholder="code" name="gift_code" id="gift_code_input" value="' + response.code + '">';--}}

        {{--            html += '<p style="text-align:left;font-weight: bold;">Amount:</p>';--}}
        {{--            html += '<input type="text" tabindex="3" placeholder="Please Add amount" class="amount_input" name="amount" class="cpass"  value="">';--}}
        {{--            html += '</div>';--}}


        {{--            html += ' </div>';--}}

        {{--            /*  var url = '<?= route('user.setting.store')?>';--}}
        {{--        data = {"_token": "{{ csrf_token() }}", ecode: 'send'};--}}
        {{--        $.ajax({--}}
        {{--            type: "POST",--}}
        {{--            url: url,--}}
        {{--            data: data,--}}
        {{--            success: function (response) {--}}

        {{--            },--}}
        {{--            error: function () {--}}

        {{--            }--}}
        {{--        });*/--}}

        {{--            swal({--}}
        {{--                title: "Gift Add",--}}
        {{--                text: "Set Gift Detail",--}}
        {{--                type: "input",--}}
        {{--                showCancelButton: true,--}}
        {{--                closeOnConfirm: false,--}}
        {{--                confirmButtonText: "Submit",--}}
        {{--                animation: "slide-from-top",--}}
        {{--                inputPlaceholder: "Write something",--}}
        {{--                closeOnCancel: false--}}
        {{--            });--}}
        {{--            $(".amount_input").on('change keyup', function () {--}}

        {{--                console.log('changed');--}}
        {{--                $('.confirm').attr("disabled", false);--}}

        {{--            });--}}
        {{--            $('.showSweetAlert').css("margin-top", "-350px");--}}
        {{--            $('.showSweetAlert fieldset').html(html);--}}


        {{--            $('.confirm').attr("disabled", false);--}}


        {{--            $('.confirm').click(function () {--}}


        {{--                var url = '<?= route('user.gift.store')?>';--}}

        {{--                data = {--}}
        {{--                    "_token": "{{ csrf_token() }}",--}}
        {{--                    amount: $('.amount_input').val(),--}}
        {{--                    gift_code: $('#gift_code_input').val()--}}
        {{--                };--}}
        {{--                $.ajax({--}}
        {{--                    type: "POST",--}}
        {{--                    url: url,--}}
        {{--                    data: data,--}}
        {{--                    success: function (response) {--}}
        {{--                        if (response.message) {--}}

        {{--                            $('body').find('.sweet-overlay').remove();--}}
        {{--                            $('body').find('.hideSweetAlert').remove();--}}
        {{--                            swal("Gift Created Successfully", "Successfully !!", "success");--}}
        {{--                            $('.confirm').on('click', function () {--}}
        {{--                                window.location.reload();--}}
        {{--                            });--}}


        {{--                        }--}}


        {{--                    },--}}
        {{--                    error: function () {--}}

        {{--                    }--}}
        {{--                });--}}


        {{--            });--}}

        {{--            $('.cancel').click(function () {--}}
        {{--                $('body').find('.sweet-overlay').remove();--}}
        {{--                // $(this).parent().parent().closest(".sweet-overlay").remove();--}}
        {{--                $(this).parent().parent().remove();--}}

        {{--            });--}}


        {{--        },--}}
        {{--        error: function () {--}}

        {{--        }--}}

        {{--    });--}}
        {{--});--}}
        // console.log('changed');

        // })
        // ;


        $('#html5-extension').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    {extend: 'copy', className: 'btn'},
                    {extend: 'csv', className: 'btn'},
                    {extend: 'excel', className: 'btn'},
                    {extend: 'print', className: 'btn'}
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
@endsection
