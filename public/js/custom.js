$(document).ready(function () {

    $(".value").mask("#####.##", {reverse: true})
    $(".number").mask("#######")
    $(".zip").mask("#####-###")
    $(".phone").mask("(99) 99999-9999")

    $(".cnpj").mask("99.999.999/9999-99");

    $(".cpf_cnpj").keydown(function(){
        try {
            $(".cpf_cnpj").unmask();
        } catch (e) {}

        var tamanho = $(".cpf_cnpj").val().length;

        if(tamanho < 11){
            $(".cpf_cnpj").mask("999.999.999-99");
        } else {
            $(".cpf_cnpj").mask("99.999.999/9999-99");
        }

        // ajustando foco
        var elem = this;
        setTimeout(function(){
            // mudo a posição do seletor
            elem.selectionStart = elem.selectionEnd = 10000;
        }, 0);
        // reaplico o valor para mudar o foco
        var currentValue = $(this).val();
        $(this).val('');
        $(this).val(currentValue);
    });
    $('.dropify').dropify();
    $('#datable').DataTable();

    $('.btn-edit').on('click', function (e) {
        window.location.href = $(this).attr('href');
    });


    $('.btn-delete').on('click', function (e) {
        e.preventDefault();
        var url = $(this).data('route');
        var id = $(this).data('id');
        var type = $(this).data('type');
        swal({
            title: "Apagar Registro",
            text: "Você confirma que deseja desativar  o registro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#f83f37",
            confirmButtonText: "Sim!",
            cancelButtonText: "Não!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: type,
                    url: url,
                    data: {'id': id},
                    success: function (data) {
                        swal("Apagado!", "O registro foi apagado com sucesso.", "success");
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    },
                    error: function (data) {
                        swal("Erro!", "Ocorreu um erro ao apagar o registro.", "error");
                        console.log(data)
                    }
                })
            } else {
                swal("Cancelado!", "O registro não foi apagado.", "error");
            }
        });
        return false;
    });

    $('.btn-disable').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var id = $(this).data('id');
        swal({
            title: "Desativar Registro",
            text: "Você confirma que deseja desativar  o registro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#f83f37",
            confirmButtonText: "Sim!",
            cancelButtonText: "Não!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'PUT',
                    url: url,
                    data: {'id': id},
                    success: function (data) {
                        swal("Apagado!", "O registro foi desativado com sucesso.", "success");
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    },
                    error: function (data) {
                        swal("Erro!", "Ocorreu um erro ao desativar o registro.", "error");
                        console.log(data)
                    }
                })
            } else {
                swal("Cancelado!", "O registro não foi apagado.", "error");
            }
        });
        return false;
    });

    $('.btn-enable').on('click', function (e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var id = $(this).data('id');
        swal({
            title: "Ativar Registro",
            text: "Você confirma que deseja ativar  o registro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#f83f37",
            confirmButtonText: "Sim!",
            cancelButtonText: "Não!",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'PUT',
                    url: url,
                    data: {'id': id},
                    success: function (data) {
                        swal("Ativado!", "O registro foi ativado com sucesso.", "success");
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    },
                    error: function (data) {
                        swal("Erro!", "Ocorreu um erro ao ativar registro.", "error");
                        console.log(data)
                    }
                })
            } else {
                swal("Cancelado!", "O registro não foi apagado.", "error");
            }
        });
        return false;
    });

})
