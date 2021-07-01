$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
    $('.edit').click(function(){
        let id = $(this).data('id');
        $('.idLinhVuc').val(id);

        //alert(id);
        //edit lĩnh vực
        $.ajax({
            url : 'admin/LinhVuc/'+id+'/edit',
            dataType : 'json',
            type : 'get',
            success :function(data){
                console.log(data.id);

                // $("input[name='malinhvuc[]']").val("");
                $('.malinhvuc').val(data.malinhvuc);
                $('.tenlinhvuc').val(data.tenlinhvuc);
                $('.mota').val(data.mota);
                // $('.trangthaiLinhVuc').val(data.trangthaiLinhVuc);
            }
        })
    })
});
            //update lĩnh vực
$('.update').click(function(){
    let malinhvuc = $('.malinhvuc').val();
    let tenlinhvuc = $('.tenlinhvuc').val();
    let mota = $('.mota').val();
    // let trangthaiLinhVuc = $('.trangthaiLinhVuc').val();
    let id = $('.idLinhVuc').val();


    // console.log(malinhvuc)
    // console.log(tenlinhvuc)
    // console.log(mota)
    // console.log(trangthaiLinhVuc)
    // console.log(id);
    $.ajax({
        url : 'admin/LinhVuc/'+id,
        dataType : 'text',
        type : 'put',
        data : {
            malinhvuc : malinhvuc,
            tenlinhvuc : tenlinhvuc,
            mota : mota,
            // trangthaiLinhVuc : trangthaiLinhVuc
        },
        success : function(response){
            console.log(response);
            if(response.error == 'true'){
                $('.error').show();
                $('.error').text(response.message.name[0]);
            }else{
                // toastr.success(response.result, 'Thông báo', {timeOut: 5000});
                $('#edit').modal('hide');
                location.reload();
            }
        },
        error: () => {
            console.log('fail');
        }
    })
});

//delete lĩnh vực
$('.delete').click(function () {
    let id = $(this).data('id');
    $('.del').click(function () {
        $.ajax({
            url : 'admin/LinhVuc/'+id,
            dataType : 'json',
            type : 'delete',
            success : function (response) {
                console.log(response)
                $('#delete').modal('hide');
                location.reload();
            }
        });
    });
});

//edit thủ tục
$('.editTT').click(function(){
    $('.error').hide();
    let id = $(this).data('id');
    // const id = $('idThuTuc').val();
    console.log(id)
    $('.idThuTuc').val(id);
    $.ajax({
        url : 'admin/ThuTuc/'+id+'/edit',
        dataType : 'json',
        type : 'get',
        success : function(response){
            console.log(response);
            $('.mathutuc').val(response.thutuc.mathutuc);
            $('.tenthutuc').val(response.thutuc.tenthutuc);
            $('.mota').val(response.thutuc.mota);
            $('idThuTuc').val(response.thutuc.id);
            var html = '';

            $.each(response.linhvuc,function($key,$value){
                if($value.id == response.thutuc.id_linhvuc){
                    html += '<option value='+$value.id+' selected>';
                    html += $value.tenlinhvuc;
                    html += '</option>';
                }else{
                    html += '<option value='+$value.id+'>';
                    html += $value.tenlinhvuc;
                    html += '</option>';
                }
            });

            $('.id_linhvuc').html(html);
            if(response.thutuc.trangthaiThuTuc == 1){
                $('.ht').attr('selected','selected');
            }else{
                $('.kht').attr('selected','selected');
            }
        },
        error: function(response){
            console.log(response);
        }
    });
});

//update thu tuc
$('.updateTT').click(function(){
    let id_linhvuc = $('.id_linhvuc').val();
    let mathutuc = $('.mathutuc').val();
    let tenthutuc = $('.tenthutuc').val();
    let mota = $('.mota').val();
    let trangthaiThuTuc = $('.trangthaiThuTuc').val();
    let id = $('.idThuTuc').val();
    $.ajax({
        url : 'admin/ThuTuc/'+id,
        dataType : 'text',
        data : {
            id_linhvuc: id_linhvuc,
            mathutuc: mathutuc,
            tenthutuc: tenthutuc,
            mota: mota,
            trangthaiThuTuc: trangthaiThuTuc
        },
        type : 'put',
        success : function(response){

            if(response.error == 'true'){
                $('.error').show();
                $('.error').text(response.message.name[0]);
            }else{
                //toastr.success($data.result, 'Thông báo', {timeOut: 5000});
                $('#edit').modal('hide');
                location.reload();
            }
            alert('Cap nhat thanh cong');
        },
        error: (er) => {
            console.log(er);
        }
    })
});


//delete thủ tục
$('.delete').click(function () {
    let id = $(this).data('id');
    $('.del').click(function () {
        $.ajax({
            url : 'admin/ThuTuc/'+id,
            dataType : 'json',
            type : 'delete',
            success : function (response) {
                console.log(response)
                $('#delete').modal('hide');
                location.reload();
            }
        });
    });

});
// edit quytrinh
$('.editQT').click(function(){
    $('.error').hide();
    let id = $(this).data('id');
    // const id = $('idThuTuc').val();
    console.log(id)
    $('.idQuyTrinh').val(id);
    $.ajax({
        url : 'admin/QuyTrinh/'+id+'/edit',
        dataType : 'json',
        type : 'get',
        success : function(response){
            console.log(response);
            $('.maquytrinh').val(response.quytrinh.maquytrinh);
            $('.tenquytrinh').val(response.quytrinh.tenquytrinh);
            $('.mota').val(response.quytrinh.mota);
            $('idQuyTrinh').val(response.quytrinh.id);
            var html = '';

            $.each(response.thutuc,function($key,$value){
                if($value.id == response.quytrinh.id_thutuc){
                    html += '<option value='+$value.id+' selected>';
                    html += $value.tenthutuc;
                    html += '</option>';
                }else{
                    html += '<option value='+$value.id+'>';
                    html += $value.tenthutuc;
                    html += '</option>';
                }
            });

            $('.id_thutuc').html(html);
            if(response.quytrinh.trangthaiQuyTrinh == 1){
                $('.ht').attr('selected','selected');
            }else{
                $('.kht').attr('selected','selected');
            }
        },
        error: function(response){
            console.log(response);
        }
    });
});

//update qt
$('.updateQT').click(function(){
    let id_thutuc = $('.id_thutuc').val();
    let maquytrinh = $('.maquytrinh').val();
    let tenquytrinh = $('.tenquytrinh').val();
    let mota = $('.mota').val();
    let trangthaiQuyTrinh = $('.trangthaiQuyTrinh').val();
    let id = $('.idQuyTrinh').val();
    console.log(id_thutuc, maquytrinh,tenquytrinh,mota, trangthaiQuyTrinh, id);
    $.ajax({
        url : 'admin/QuyTrinh/'+id,
        dataType : 'text',
        data : {
            id_thutuc: id_thutuc,
            maquytrinh: maquytrinh,
            tenquytrinh: tenquytrinh,
            mota: mota,
            trangthaiQuyTrinh: trangthaiQuyTrinh
        },
        type : 'put',
        success : function(response){

            if(response.error == 'true'){
                $('.error').show();
                $('.error').text(response.message.name[0]);
            }else{
                //toastr.success($data.result, 'Thông báo', {timeOut: 5000});
                $('#edit').modal('hide');
                location.reload();
            }
            alert('Cap nhat thanh cong');
        },
        error: (er) => {
            console.log(er);
        }
    })
});

//delete qt
$('.deleteQT').click(function () {
    let id = $(this).data('id');
    $('.delQT').click(function () {
        $.ajax({
            url : 'admin/QuyTrinh/'+id,
            dataType : 'json',
            type : 'delete',
            success : function (response) {
                console.log(response)
                $('#delete').modal('hide');
                location.reload();
            }
        });
    });

});

//edit buoc
$('.editB').click(function(){
    $('.error').hide();
    let id = $(this).data('id');
    // const id = $('idThuTuc').val();
    console.log(id)
    $('.idBuoc').val(id);
    $.ajax({
        url : 'admin/Buoc/'+id+'/edit',
        dataType : 'json',
        type : 'get',
        success : function(response){
            console.log(response);
            $('.mabuoc').val(response.buoc.mabuoc);
            $('.tenbuoc').val(response.buoc.tenbuoc);
            $('.mota').val(response.buoc.mota);
            $('idBuoc').val(response.buoc.id);
            var html = '';

            $.each(response.quytrinh,function($key,$value){
                if($value.id == response.buoc.id_quytrinh){
                    html += '<option value='+$value.id+' selected>';
                    html += $value.tenquytrinh;
                    html += '</option>';
                }else{
                    html += '<option value='+$value.id+'>';
                    html += $value.tenquytrinh;
                    html += '</option>';
                }
            });

            $('.id_quytrinh').html(html);
            if(response.buoc.trangthaiBuoc == 1){
                $('.ht').attr('selected','selected');
            }else{
                $('.kht').attr('selected','selected');
            }
        },
        error: function(response){
            console.log(response);
        }
    });
});
//update buoc
$('.updateB').click(function(){
    let id_quytrinh = $('.id_quytrinh').val();
    let mabuoc = $('.mabuoc').val();
    let tenbuoc = $('.tenbuoc').val();
    let mota = $('.mota').val();
    let trangthaiBuoc = $('.trangthaiBuoc').val();
    let id = $('.idBuoc').val();
    console.log(id_quytrinh, mabuoc,tenbuoc,mota, trangthaiBuoc, id);
    $.ajax({
        url : 'admin/Buoc/'+id,
        dataType : 'text',
        data : {
            id_quytrinh: id_quytrinh,
            mabuoc: mabuoc,
            tenbuoc: tenbuoc,
            mota: mota,
            trangthaiBuoc: trangthaiBuoc
        },
        type : 'put',
        success : function(response){

            if(response.error == 'true'){
                $('.error').show();
                $('.error').text(response.message.name[0]);
            }else{
                //toastr.success($data.result, 'Thông báo', {timeOut: 5000});
                $('#edit').modal('hide');
                location.reload();
            }
            alert('Cap nhat thanh cong');
        },
        error: (er) => {
            console.log(er);
        }
    })
});

//delete buoc
$('.deleteB').click(function () {
    let id = $(this).data('id');
    $('.delB').click(function () {
        $.ajax({
            url : 'admin/Buoc/'+id,
            dataType : 'json',
            type : 'delete',
            success : function (response) {
                console.log(response)
                $('#delete').modal('hide');
                location.reload();
            }
        });
    });

});




