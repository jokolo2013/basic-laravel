
        function SaveUser() {
             let _token = $('meta[name="csrf-token"]').attr('content');
             var url_page = $('#url_webpage').val();
             $.ajax({
                url: url_page + "/register/load",
                type: "POST",
                data: {
                    id: id,
                    _token: _token
                },
                success: function(data) {
                    $('#modals-data-admin').html(data);
                },
            });
        }

