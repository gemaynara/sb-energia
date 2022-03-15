$(document).ready(function () {

    $('.dropify').dropify();
    $('#datable').DataTable();

    $('.btn-edit').on('click', function (e) {
        e.preventDefault();
        window.location.href = $(this).attr('href');
    });


    $('.btn-delete').on('click', function (e) {
        e.preventDefault();
        var url = $(this).data('route');
        var id = $(this).data('id');
        var type = $(this).data('type');
        swal({
            title: "Apagar Registro",
            text: "Você confirma que deseja apagar o registro?",
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

})
