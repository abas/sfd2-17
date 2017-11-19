window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-108225647-1');

var xhr = $.ajax();

            $(document).ready(function(){
                $('.links').on('click',function(e){
                    e.preventDefault();
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    preloader = new $.materialPreloader({
                        position: 'top',
                        height: '5px',
                        col_1: '#159756',
                        col_2: '#da4733',
                        col_3: '#3b78e7',
                        col_4: '#fdba2c',
                        fadeIn: 200,
                        fadeOut: 200
                    });

                    $.ajax({
                        url : $(this).attr('href'),
                        type : 'get',
                        success:function(html){
                            $('#utama').html(html);
                        }
                    });
                });

                    });

var xhr = $.ajax();
        $(document).ready(function(){
            $('#profil_user').on('click',function(e){
                e.preventDefault();
                claravel_modal('Profil Pengguna','Loading...','main_modal');
                $.ajax({
                    url : 'http://simpeg.kendalkab.go.id/v17/profil',
                    type : 'get',
                    success:function(html){
                        $('#main_modal .modal-body').html(html);
                    }
                });

            });

            $('#profil_user2').on('click',function(e){
                e.preventDefault();
                claravel_modal('Ganti Password','Loading...','main_modal');
                $.ajax({
                    url : 'http://simpeg.kendalkab.go.id/v17/pass',
                    type : 'get',
                    success:function(html){
                        $('#main_modal .modal-body').html(html);
                    }
                });

            });

            $('.login-efile').on('click',function(e){
                e.preventDefault();
                claravel_modal('Konfirmasi Login E-file','Loading...','main_modal');
                $.ajax({
                    url : 'http://simpeg.kendalkab.go.id/v17/efileconfirm',
                    type : 'get',
                    success:function(html){
                        $('#main_modal .modal-body').html(html);
                    }
                });

            });

                            notifikasi();
                    })

        CKEDITOR.disableAutoInline = true;
        $(document).ready(function(){
            /*Untuk mengatasi select2 yang tidak bekerja di modal*/
            $.fn.modal.Constructor.prototype.enforceFocus = function() {
                /*$('select').select2();*/
            }
        });

        var laravel_base = 'http://simpeg.kendalkab.go.id/v17';
        function only_numeric(e){
          if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                 // ijinkan: backspace dan delete
                (e.keyCode == 8) || (e.keyCode == 46) ||
                 // ijinkan: Enter
                (e.keyCode == 13) ||
                 // ijinkan: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                 // ijinkan: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
              return;
                     // let it happen, don't do anything
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        }

        function cetak_a4_landscape(html,panjang,lebar){
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=' + lebar + ',width=' + panjang + ',scrollbars=1');
            printWindow.document.write('<!DOCTYPE html><html><head><title>Cetak</title>');
            printWindow.document.write('<style>html {overflow: -moz-scrollbars-vertical;font-family:arial;font-size:8pt;}.halaman{border: 2px #888888 solid;background-color: #000000;}h1, h2, h3, h4, h5, h6{line-height: 19px;margin:0px;}@media  print {@page  {size: a4 landscape;margin-left: 0.4in;margin-right: 0.4in;margin-top: 0.4in;margin-bottom: 0.6in;counter-increment: page;@bottom-right {padding-right:20px;content: "Page " counter(page);}}  .page-break{ display:block; page-break-before:always; }}p{font-size:8pt;}table{width:100%;page-break-inside:auto;} th{padding-top:3px;padding-bottom:3px;} tr{ page-break-inside:avoid; page-break-after:auto;}  thead { display:table-header-group } tfoot { display:table-footer-group } table, th, td { font-family:arial;font-size:8pt;border: 1px black solid;border-collapse: collapse; }</style></head><body>');
            printWindow.document.write(html);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function cetak_a4_portrait(html,panjang,lebar){
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=' + lebar + ',width=' + panjang + ',scrollbars=1');
            printWindow.document.write('<!DOCTYPE html><html><head><title>Cetak</title>');
            printWindow.document.write('<style>html {overflow: -moz-scrollbars-vertical;font-family:arial;font-size:8pt;}.halaman{border: 2px #888888 solid;background-color: #000000;}h1, h2, h3, h4, h5, h6{line-height: 19px;margin:0px;}@media  print {@page  {size: a4 portrait;margin-left: 0.4in;margin-right: 0.4in;margin-top: 0.4in;margin-bottom: 0.6in;counter-increment: page;@bottom-right {padding-right:20px;content: "Page " counter(page);}}  .page-break{ display:block; page-break-before:always; }}p{font-size:8pt;}table{width:100%;page-break-inside:auto;} th{padding-top:3px;padding-bottom:3px;} tr{ page-break-inside:avoid; page-break-after:auto;}  thead { display:table-header-group } tfoot { display:table-footer-group } table, th, td { font-family:arial;font-size:8pt;border: 1px black solid;border-collapse: collapse; }</style></head><body>');
            printWindow.document.write(html);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function cetak_legal_landscape(html,panjang,lebar){
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=' + lebar + ',width=' + panjang + ',scrollbars=1');
            printWindow.document.write('<!DOCTYPE html><html><head><title>Cetak</title>');
            printWindow.document.write('<style>html {overflow: -moz-scrollbars-vertical;font-family:arial;font-size:8pt;}.halaman{border: 2px #888888 solid;background-color: #000000;}h1, h2, h3, h4, h5, h6{line-height: 19px;margin:0px;}@media  print {@page  {size: legal landscape;margin-left: 0.4in;margin-right: 0.4in;margin-top: 0.4in;margin-bottom: 0.6in;counter-increment: page;@bottom-right {padding-right:20px;content: "Page " counter(page);}}  .page-break{ display:block; page-break-before:always; }}p{font-size:8pt;}table{width:100%;page-break-inside:auto;} th{padding-top:3px;padding-bottom:3px;} tr{ page-break-inside:avoid; page-break-after:auto;}  thead { display:table-header-group } tfoot { display:table-footer-group } table, th, td { font-family:arial;font-size:8pt;border: 1px black solid;border-collapse: collapse; }</style></head><body>');
            printWindow.document.write(html);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }

        function cetak_legal_portrait(html,panjang,lebar){
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=' + lebar + ',width=' + panjang + ',scrollbars=1');
            printWindow.document.write('<!DOCTYPE html><html><head><title>Cetak</title>');
            printWindow.document.write('<style>html {overflow: -moz-scrollbars-vertical;font-family:arial;font-size:8pt;}.halaman{border: 2px #888888 solid;background-color: #000000;}h1, h2, h3, h4, h5, h6{line-height: 19px;margin:0px;}@media  print {@page  {size: legal portrait;margin-left: 0.4in;margin-right: 0.4in;margin-top: 0.4in;margin-bottom: 0.6in;counter-increment: page;@bottom-right {padding-right:20px;content: "Page " counter(page);}}  .page-break{ display:block; page-break-before:always; }}p{font-size:8pt;}table{width:100%;page-break-inside:auto;} th{padding-top:3px;padding-bottom:3px;} tr{ page-break-inside:avoid; page-break-after:auto;}  thead { display:table-header-group } tfoot { display:table-footer-group } table, th, td { font-family:arial;font-size:8pt;border: 1px black solid;border-collapse: collapse; }</style></head><body>');
            printWindow.document.write(html);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        }


        function autoCompleteimg(element, url, ph, dataPost, id, text){
            $(element).select2({
                /*initSelection: function(element, callback) {
                    callback({id: id, text: text });
                },*/
                placeholder: ph,
                minimumInputLength: 3,
                closeOnSelect: true,
                allowClear: true,
                quietMillis: 250,
                ajax: {
                    url: url,
                    dataType: 'json',
                    delay: 250,
                    type:'post',
                    data: function(params) {
                        return {
                            keyword: params.term, //search term
                            per_page: 10, // page size
                            page: params.page, // page number
                            _token : 'JB565qxMcez2shaNQRkloWPFQ2XFBH4ie9TMAyoj'
                        };
                    },
                    processResults: function(data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used
                        params.page = params.page || 1;

                        return {
                            results: data.rows,
                            pagination: {
                                more: (params.page * 5) < data.result
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function(markup) {
                    return markup;
                }, // let our custom formatter work
                templateResult: formatRepo, // omitted for brevity, see the source of this page
                templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });

            if(id != '' && id != null){
                $(element).data('select2').trigger('select', {
                    data: {"id":id,"text":text}
                });
            }
        }

        function formatRepo(repo) {
            if (repo.loading) return repo.nama;

            var markup = "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__avatar'>" +
                "<img src='http://simpeg.kendalkab.go.id/v17/packages/upload/photo/pegawai/"+repo.photo+"' width='40' height='50' /></div>" +
                "<div class='select2-result-repository__meta'>" +
                "<div class='select2-result-repository__title'>" + repo.namalengkap + "</div>" +
                "<div class='select2-result-repository__description'>" + repo.nip + "<br> " + repo.jabatan + " <br> " + repo.skpd + " </div>" +
                "</div></div>";

            return markup;
        }

        function formatRepoSelection(repo) {
            return repo.id || repo.text;
        }

        function autoComplete(element, url, ph, dataPost, id, text, parent, parent2){
            $(element).select2({
                /*initSelection: function(element, callback) {
                    callback({id: id, text: text });
                },*/
                placeholder: ph,
                /*minimumInputLength: 3,*/
                closeOnSelect: true,
                allowClear: true,
                quietMillis: 250,
                ajax: {
                    url: url,
                    dataType: 'json',
                    delay: 250,
                    type:'post',
                    data: function (params) {
                        return {
                            keyword: params.term, //search term
                            per_page: 10, // page size
                            page: params.page, // page number
                            parent : parent,
                            parent2 : parent2,
                            _token : 'JB565qxMcez2shaNQRkloWPFQ2XFBH4ie9TMAyoj'
                        };
                    },
                    processResults: function (data, params) {
                        // parse the results into the format expected by Select2
                        // since we are using custom formatting functions we do not need to
                        // alter the remote JSON data, except to indicate that infinite
                        // scrolling can be used

                        params.page = params.page || 1;

                        return {
                            results: data.rows,
                            pagination: {
                                more: (params.page * 5) < data.result
                            }
                        };
                    },
                    cache: true
                },
                escapeMarkup: function (markup) { return markup; },
                tags: true
                //  escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                /*formatResult: FormatResult,
                formatSelection: FormatSelection*/
            });

            if(id != '' && id != null){
                $(element).data('select2').trigger('select', {
                    data: {"id":id,"text":text}
                });
            }
        }

        function loading(elemen){
            $('#' + elemen + '').html("<center><img src='http://simpeg.kendalkab.go.id/v17/packages/tugumuda/images/loading.gif'></center>");
        }
        function loading_kecil(elemen){
            elemen.html("<center><img src='http://simpeg.kendalkab.go.id/v17/packages/tugumuda/img/loading_kecil.gif'></center>");
        }

        function only_numeric(e){
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // ijinkan: backspace dan delete
            (e.keyCode == 8) || (e.keyCode == 46) ||
             // ijinkan: Enter
            (e.keyCode == 13) ||
             // ijinkan: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
             // ijinkan: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                return;
                // let it happen, don't do anything
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        }

        function notification(pesan, jenis){
            if(jenis == 'success'){
                var bgcolor = '#00a65a';
                var color = '#fff';
                var jenis = jenis;
            }else
            if(jenis == 'danger'){
                var bgcolor = '#dd4b39';
                var color = '#fff';
                var jenis = jenis;
            }else
            if(jenis == 'warning'){
                var bgcolor = '#f39c12';
                var color = '#fff';
                var jenis = jenis;
            }else
            if(jenis == 'info'){
                var bgcolor = '#3c8dbc';
                var color = '#fff';
                var jenis = jenis;
            }else{
                var bgcolor = '#d2d6de';
                var color = '#000';
                var jenis = 'success';
            }
            $.notify(pesan, {align:"right", verticalAlign:"top", type : jenis});
            console.log(pesan);
        }

        function cetak_excel(elemen){
            uriContent = "data:application/vnd.ms-excel," + encodeURIComponent( format_html($('#' + elemen + '').html()) );
            window.open(uriContent, 'myDocument');
        }

        function cetak_word(elemen){
            uriContent = "data:application/msword," + encodeURIComponent( format_html($('#' + elemen + '').html()) );
            window.open(uriContent, 'myDocument');
        }
        function cetak_word2012(elemen){
            uriContent = "data:application/vnd.openxmlformats-officedocument.wordprocessingml.document," + encodeURIComponent( format_html($('#' + elemen + '').html()) );
            window.open(uriContent, 'myDocument');
        }

        function format_html(html){
            var konten;
            konten = '<!DOCTYPE html><html><head><title>Cetak</title>';
            konten += '<style>.fake>th{padding: 0;border-bottom: none;border-top: none;}html {overflow: -moz-scrollbars-vertical;font-family:arial;font-size:12pt;}.halaman{border: 2px #888888 solid;background-color: #000000;}h1, h2, h3, h4, h5, h6{line-height: 19px;margin:0px;}@media  print {@page  {size: legal landscape;margin-left: 2cm;margin-right: 2cm;margin-top: 2cm;margin-bottom: 2cm;counter-increment: page;@top-center {content: "Halaman " counter(page);}}   .page-break{ display:block; page-break-before:always; }}p{font-size:12pt;}table{width:100%;page-break-inside:auto;} th{padding-top:3px;padding-bottom:3px;} tr{ page-break-inside:avoid; page-break-after:auto;}  thead { display:table-header-group } tfoot { display:table-footer-group } table, th, td { font-family:arial;font-size:12pt;border: 1px black solid;border-collapse: collapse; }</style></head><body>';
            konten += html;
            konten += '</body></html>';
            return konten;
        }

        function claravel_modal_close(elemen){
            $('#' + elemen + '').modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        }

        function claravel_modal_close_2(elemen){
            $('#' + elemen + '').modal('hide');
        }

        function claravel_modal(judul,isi,elemen){
            elemen = (elemen == '')?'modal2':elemen;
            $('#' + elemen + '').modal({ keyboard: true });
            $('#' + elemen + ' .modal-title').html(judul);
            $('#' + elemen + ' .modal-body').html(isi);
        }

        function notifikasi(){
            xhr.abort();
            xhr = $.ajax({
                url: 'http://simpeg.kendalkab.go.id/v17/getnotifikasi',
                cache: false,
                success: function(response){
                    var ret = $.parseJSON(response);
                    $('.xnotifikasi').text('Anda tidak memiliki pemberitahuan terkini');
                    for(attrname in ret){
                        if(ret[attrname] > 0){
                            if(attrname.substr(0, 6) != 'jumlah'){
                                $('.'+attrname).html('<span class="label bg-red">'+ret[attrname]+ '</span>');
                            }else{
                                $('.'+attrname).html(ret[attrname]);
                            }
                            $('.xnotifikasi').text('Anda memiliki '+ret.epersonal+' pemberitahuan terkini');
                        }else{
                            if(attrname.substr(0, 6) != 'jumlah'){
                                $('.'+attrname).html('');
                            }else{
                                $('.'+attrname).html('0');
                            }
                        }
                    }
                }
            });

            var waktu = setTimeout("notifikasi()",30000);
        }

$(document).ready(function(){
    claravel_modal('Pengumuman','Loading...','main_modal');
    $.ajax({
        type:'post',
        url : 'http://simpeg.kendalkab.go.id/v17/administrator/pengumuman/popinfo',
        data: {'_token' : 'JB565qxMcez2shaNQRkloWPFQ2XFBH4ie9TMAyoj'},
        success:function(html){
            $('#main_modal .modal-body').html(html);
        }
    });
})